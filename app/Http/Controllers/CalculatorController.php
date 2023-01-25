<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(Request $request)
    {
        return view('calculator');

    }

    public function predictor(Request $request)
    {
        $operator = $request->input('operator');
        $first_num = $request->input('first');
        $second_num = $request->input('second');

        if ($operator == "plus")
        {
            $result =$first_num + $second_num;
        }
        elseif ($operator == "minus")
        {
            $result = $first_num - $second_num;
        }
        elseif ($operator == "multiply")
        {
            $result = $first_num * $second_num;
        }
        elseif ($operator == "divide")
        {
            $result = $first_num / $second_num;
        }
        else{
            $result = 0;
        }
        return redirect('/calculate')->with('info' , 'You need '.$result.' pieces');
    }

}
