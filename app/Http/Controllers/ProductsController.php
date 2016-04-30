<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Category;
use CodeCommerce\Product;
use CodeCommerce\ProductImage;
use Illuminate\Http\Request;

use CodeCommerce\Http\Requests;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    private $productModel;

    public function __construct(Product $productModel)
    {
        $this->productModel = $productModel;
    }

    public function index(){
        $products = $this->productModel->paginate(10);

        return view('products.index', compact('products'));
    }

    public function create(Category $category) {
        $categories = $category->lists('name', 'id');
        return view('products.create', compact('categories'));
    }
    
    public function store(Requests\ProductsRequest $request){
        $input = $request->all();
        $products = $this->productModel->fill($input);
        $products->save();
        return redirect()->route('products');
    }

    public function edit($id, Category $category)
    {
        $categories = $category->lists('name', 'id');
        $products = $this->productModel->find($id);
        return view('products.edit',compact('products', 'categories'));
    }

    public function update(Requests\CategoryRequest $request, $id)
    {
        $this->productModel->find($id)->update($request->all());
        return redirect()->route('products');
    }

    public function destroy($id)
    {
        $this->productModel->find($id)->delete($id);
        return redirect()->route('products');
    }

    public function images($id) {
        $products = $this->productModel->find($id);
        return view('products.images',compact('products'));
    }

    public function createImage($id) {
        $products = $this->productModel->find($id);
        return view('products.create_image', compact('products'));
    }

    public function storeImage(Requests\ProductImageRequest $request, $id, ProductImage $productImage ){
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();

        $image = $productImage::create(['product_id'=>$id, 'extension'=>$extension]);
        
        Storage::disk('public_local')->put($image->id.'.'.$extension, File::get($file));

        return redirect()->route('products.images',['id'=>$id]);
    }

    public function destroyImage(ProductImage $productImage, $id) {
        $image = $productImage->find($id);

        if (file_exists(public_path().'/uploads/'.$image->extension)){
            Storage::disk('public_local')->delete($image->id.'.'.$image->extension);
        }

        $product = $image->product;
        $image->delete();

        return redirect()->route('products.images',['id'=>$product->id]);

    }
}
