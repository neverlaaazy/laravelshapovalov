<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public int $a = 1;
    public int $b = 5;

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
}
