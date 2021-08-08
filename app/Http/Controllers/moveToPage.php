<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class moveToPage extends Controller
{

    
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

    public function result(Request $request)
    {
        $teste123 = Post::all();

        $salesAndTradeCategoryList = array('All','CPU','CPU Cooler','Motherboard','RAM','Video Card','Storage','Power Supply','Monitor','Case','Laptop');

        $validation =  $request->validate([
            'name'=>'in:' . implode(',', $salesAndTradeCategoryList)
        ]);

       // $teste123 = $teste123->where('category' , '=' , 'RAM');
       // $SearchBar = 'SAAD';
        $teste123 = $teste123->where('category', 'LIKE' ,'%RAM%');
        dd($teste123);

        dd(request()->query());
    }
}
