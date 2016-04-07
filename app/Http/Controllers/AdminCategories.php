<?php namespace  CodeCommerce\Http\Controllers;
use CodeCommerce\Category;

/**
 * Created by PhpStorm.
 * User: MarcioAndrei
 * Date: 2016-03-20
 * Time: 09:56
 */
class AdminCategories extends Controller {

    private $categories;
    public function __construct(Category $category)
    {
        $this->categories = $category;
    }

    public function index(){
        $categories = $this->categories->all();

        return view('categories',compact('categories'));
    }
}