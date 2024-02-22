<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function fnb()
    {
        return view('category', [
            'title' => 'Food and Beverages',
            'body' => 'This is Food Beverages page'
        ]);
    }
    
    public function bnh() 
    {
        return view('category', [
            'title' => 'Beauty and Health',
            'body' => 'This is Beauty Health page'
        ]);
    }

    public function hnc()
    {
        return view('category', [
            'title' => 'Home Care',
            'body' => 'This is Home Care page'
        ]);
    }

    public function bnk()
    {
        return view('category', [
            'title' => 'Baby Kid',
            'body' => 'This is Baby Kid page'
        ]);
    }
}
