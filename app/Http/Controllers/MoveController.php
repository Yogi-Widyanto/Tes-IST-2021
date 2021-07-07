<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoveController extends Controller
{
    public function beforeSubtes1(Request $request){
        $request->session()->forget('petunjuk-pengerjaan');
        session(['soal_1' => 'Ini Soal 1']);

        if ($request->session()->has('soal_1')) {
            return redirect('/hint-subtes-1');
        }
        
    }

    public function beforeSubtes2(Request $request){
        $request->session()->forget('soal_1');
        session(['soal_2' => 'Ini Soal 2']);

        if ($request->session()->has('soal_2')) {
            return redirect('/hint-subtes-2');
        }
        
    }

    public function beforeSubtes3(Request $request){
        $request->session()->forget('soal_2');
        session(['soal_3' => 'Ini Soal 3']);

        if ($request->session()->has('soal_3')) {
            return redirect('/hint-subtes-3');
        }
        
    }

    public function beforeSubtes4(Request $request){
        $request->session()->forget('soal_3');
        session(['soal_4' => 'Ini Soal 4']);

        if ($request->session()->has('soal_4')) {
            return redirect('/hint-subtes-4');
        }
        
    }

    public function beforeSubtes5(Request $request){
        $request->session()->forget('soal_4');
        session(['soal_5' => 'Ini Soal 5']);

        if ($request->session()->has('soal_5')) {
            return redirect('/hint-subtes-5');
        }
        
    }

    public function beforeSubtes6(Request $request){
        $request->session()->forget('soal_5');
        session(['soal_6' => 'Ini Soal 6']);

        if ($request->session()->has('soal_6')) {
            return redirect('/hint-subtes-6');
        }
        
    }

    public function beforeSubtes7(Request $request){
        $request->session()->forget('soal_6');
        session(['soal_7' => 'Ini Soal 7']);

        if ($request->session()->has('soal_7')) {
            return redirect('/hint-subtes-7');
        }
        
    }

    public function beforeSubtes8(Request $request){
        $request->session()->forget('soal_7');
        session(['soal_8' => 'Ini Soal 8']);

        if ($request->session()->has('soal_8')) {
            return redirect('/hint-subtes-8');
        }
        
    }

    public function beforeSubtes9(Request $request){
        $request->session()->forget('soal_8');
        session(['soal_9' => 'Ini Soal 9']);
        session(['hafalan' => 'Waktunya Hafalan']);

        if ($request->session()->has('soal_9')) {
            return redirect('/hint-subtes-9');
        }
        
    }



}
