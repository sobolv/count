<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models;
use PhpParser\JsonDecoder;
use Psy\Util\Json;

class CountController extends Controller
{

    public function subtract($num1, $num2){
        $res = Models\Count::subtract($num1, $num2);
        $arr = Models\Count::makeArray($num1, $num2);
        return view('subtract')->with(['num1'=>$num1, 'num2'=>$num2, 'res'=>$res, 'arr'=>$arr]);
    }

    public function add($num1, $num2){
        $res = Models\Count::add($num1, $num2);
        $arr = Models\Count::makeArray($num1, $num2);
        return view('add')->with(['num1'=>$num1, 'num2'=>$num2, 'res'=>$res, 'arr'=>$arr]);
    }

    public function multiply($num1, $num2){
        $res = Models\Count::multiply($num1, $num2);
        $arr = Models\Count::makeArray($num1, $num2);
        return view('multiply')->with(['num1'=>$num1, 'num2'=>$num2, 'res'=>$res, 'arr'=>$arr]);
    }

    public function divide($num1, $num2){
        $res = Models\Count::divide($num1, $num2);
        $arr = Models\Count::makeArray($num1, $num2);
        return view('divide')->with(['num1'=>$num1, 'num2'=>$num2, 'res'=>$res, 'arr'=>$arr]);
    }
    public function post(Request $request){
        return $request->getContent();
    }
}
