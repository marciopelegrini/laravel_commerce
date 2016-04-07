<?php namespace  CodeCommerce\Http\Controllers;
use CodeCommerce\Category;

/**
 * Created by PhpStorm.
 * User: MarcioAndrei
 * Date: 2016-03-13
 * Time: 14:39
 */

class My_Controller extends Controller {

    private $categories;
    public function __construct(Category $category)
    {
        $this->categories = $category;
    }

    public function exemplo(){
        $categories = $this->categories->all();

        return view('exemplo',compact('categories'));
    }
}