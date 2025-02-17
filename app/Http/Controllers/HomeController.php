<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Home Page - Online Store";
        $viewData["products"] = Product::all();
        return view('home.index')->with("viewData", $viewData);
    }
    public function about()
    {

        // $data1 = "About us - Online Store";
        // $data2 = "About us";
        // $description = "This is an about page ...";
        // $author = "Developed by: Girmachew Gulint";
        // return view('home.about')->with("title", $data1)
        //     ->with("subtitle", $data2)
        //     ->with("description", $description)
        //     ->with("author", $author);

        $viewData = [];
        $viewData['title'] = "About us -Online Store";
        $viewData['subtitle'] ='About us';
        $viewData['description'] = 'This is about page...';
        $viewData['author'] ='Girmachew Gulint';
        return view('home.about')->with('viewData', $viewData);
    }
}
