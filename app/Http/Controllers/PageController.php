<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Variant; 
use App\Models\Topping; 
use App\Models\Beverage; 

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function news()
    {
        return view('news');
    }

    public function store()
    {
        return view('store');
    }

    public function cart()
    {
        return view('cart');
    }

    // public function menu()
    // {
    //     return view('menu');
    // }

    public function showMenu()
{
    $variants = Variant::all();
    $toppings = Topping::all();
    $beverages = Beverage::all();

    return view('menu', compact('variants', 'toppings', 'beverages'));
}


}
