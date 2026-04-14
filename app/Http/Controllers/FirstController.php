<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    //
    public function sum(){
        $a = 10;
        $b = 5;
        $total = $a+$b;
        return "Jumlah: ".$total;
    }
}
