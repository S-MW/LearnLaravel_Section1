<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use illuminate\support\facades\Validator;
use App\Http\Requests\ContactRequest;

class moveToPage extends Controller
{

    public function home()
    {
        return view('home');
    }

    public function about()
    {  // echo 'The user is : ' . $id;
       // $tester [] = ['name' => 'saad', 'age' =>'22' , 'sex'=>'male' ];
       // return response()->json(['name' => 'saad', 'age' =>'22' , 'sex'=>'male' ]);
    return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function submit(ContactRequest $request)
    {
        dd(request()->all());
    }






// --------------------------------------------------

    // public function result(Request $request)
    // {
    //     dd(request()->query());
    //     $teste123 = Post::all();

    //     $salesAndTradeCategoryList = array('All','CPU','CPU Cooler','Motherboard','RAM','Video Card','Storage','Power Supply','Monitor','Case','Laptop');

    //     $validation =  $request->validate([
    //         'name'=>'in:' . implode(',', $salesAndTradeCategoryList)
    //     ]);


    //    // $teste123 = $teste123->where('category' , '=' , 'RAM');
    //    // $SearchBar = 'SAAD';
    //     $teste123 = $teste123->where('category', 'LIKE' ,'%RAM%');
    //     dd($teste123);

    //     dd(request()->query());
    // }
}
