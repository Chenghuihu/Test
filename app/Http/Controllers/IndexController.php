<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function show(){
        return view('index');
    }


    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|max:20|regex:/\p{Han}/u',
            'school_number' => 'required|between:10,10',
            'class'=>'required',
        ]);

        $user = User::create([
            'name' => $request->name,
            'school_number' => $request->school_number,
            'class' => $request->class,
            'professional' => $request->professional
        ]);
        return redirect('/success');
    }
}
