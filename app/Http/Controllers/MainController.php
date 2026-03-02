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
    //рубика эээээксперименты ----------------------------------
    public $cars = [
            ['id' => 1, 'carnumber' => 'А 152 КВ 777', 'description' => 'Москва','creationdate' => '15.03.1998'],
            ['id' => 2, 'carnumber' => 'М 890 ОР 199', 'description' => 'Москва','creationdate' => '22.07.2001'],
            ['id' => 3, 'carnumber' => 'Х 005 ТМ 99', 'description' => 'Москва','creationdate' => '05.11.2005'],
            ['id' => 4, 'carnumber' => 'У 412 РВ 178', 'description' => 'С-Петербург','creationdate' => '10.02.2008'],
            ['id' => 5, 'carnumber' => 'В 733 ЕН 125', 'description' => 'Приморский край','creationdate' => '30.09.2014'],
            ['id' => 6, 'carnumber' => 'К 911 АА 74', 'description' => 'Челябинская обл.','creationdate' => '12.06.2011'],
            ['id' => 7, 'carnumber' => 'О 228 СМ 161', 'description' => 'Ростовская обл.','creationdate' => '20.08.2017'],
            ['id' => 8, 'carnumber' => 'Н 654 УУ 102', 'description' => 'Башкортостан','creationdate' => ' 14.04.2003'],
            ['id' => 9, 'carnumber' => 'Т 099 ХЕ 197', 'description' => 'Москва','creationdate' => '19.11.2006']
        ];

    public function showCars(){
        $reports = $this->cars;
        return view('reports', compact('reports'));
    }
    //-----------------------------------------------------------

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
