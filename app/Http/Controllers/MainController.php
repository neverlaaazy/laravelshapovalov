<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public int $a = 1;
    public int $b = 5;

    public $products = [
            ['id' => 1, 'title' => 'krita', 'price' => 900,'path' => 'krita.png'],
            ['id' => 2, 'title' => 'sfm', 'price' => 700,'path' => 'sfm.jpg'],
            ['id' => 3, 'title' => 'gimp', 'price' => 10000,'path' => 'gimp.png'],
            ['id' => 4, 'title' => 'krita', 'price' => 900,'path' => 'krita.png'],
            ['id' => 5, 'title' => 'sfm', 'price' => 700,'path' => 'sfm.jpg'],
            ['id' => 6, 'title' => 'gimp', 'price' => 10000,'path' => 'gimp.png'],
            ['id' => 7, 'title' => 'krita', 'price' => 900,'path' => 'krita.png'],
            ['id' => 8, 'title' => 'sfm', 'price' => 700,'path' => 'sfm.jpg'],
            ['id' => 9, 'title' => 'gimp', 'price' => 10000,'path' => 'gimp.png']
        ];

    public function show1(){
        $a = $this->a;
        $b = $this->b;
        $counter = 0;
        $products =['milk','sofa','cake','spoon','fork'];
        while($counter!=5){
            $counter++;
            $a = $a*5+$b*2;
        };
        return view('second', compact('a','b','products'));
    }

    public function showIndex(){
        return view('home');
    }

    public function showArray(){
        $array = $this->products;
        return view('array', compact('array'));
    }

    public function shuffleArray(){
        $array = $this->products;
        shuffle($array);
        return view('array', compact('array'));
    }

    public function sortArray(){
        $array = $this->products;
        usort($array, function($a,$b) {
            return $a['price'] <=> $b['price'];
        });
        return view('array', compact('array'));
    }

    public function filterArray(){
        $array = array_filter($this->products, function($item){
            return $item['price'] > 1000;
        });
        return view('array', compact('array'));
    }
}
