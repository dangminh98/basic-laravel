<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = [
            [
                'id' => 1,
                'name' => 'Products 1',
                'image' => 'images/1562231919_28055704_332489940604701_6696959151753518056_n.jpg',
                'price' => 200000
            ],
            [
                'id' => 2,
                'name' => 'Products 2',
                'image' => 'images/1562231790_42538007_1799448170163293_8237124954441646080_n.jpg',
                'price' => 500000
            ],
            [
                'id' => 3,
                'name' => 'Products 3',
                'image' => 'images/1562143880_27067866_354627794946714_3857469627932345083_n.jpg',
                'price' => 20000
            ],
            [
                'id' => 4,
                'name' => 'Products 4',
                'image' => 'images/1562143862_28167874_581697355496463_1420830182210171774_n.jpg',
                'price' => 240000
            ],
            [
                'id' => 5,
                'name' => 'Products 5',
                'image' => 'images/1562143839_27073131_1781074555291455_2906419087075633202_n.png',
                'price' => 420000
            ],
        ];
        
        
        return view('Lab2.index', compact('products'));
    }
}
