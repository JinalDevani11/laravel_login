<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class login extends Controller
{
    public function Index(Request $req)
    {
       if($req->session()->has('user_id'))
       {
          return redirect('dashboard');
       }

       if($req->login)
       {
            $email=$req->email;
            $password=$req->password;
           $user_check=DB::table('login')->where('email',$email)->where('password',$password);

            if($user_check->count()==1)
            {
                $data=$user_check->first(); 

                session(['user_id' => $data->id]);
                return redirect('/dashboard');
            }else
            {
                return redirect('/');
            }
       } 
        return view('welcome');
    }

    public function  Register(Request $req)
    {
        if($req->register)
        {
           $name=$req->name;
           $email=$req->email;
           $password=$req->password;
           $image=$req->file('image')->getClientOriginalName();
           $req->file('image')->move('image',$image);
           $data=array('name'=>$name,'email'=>$email,'password'=>$password,'image'=>$image);
           DB::table('login')->insert($data);
           return redirect('/');

        }
        return view('register');
    }
    public function Dashboard(Request $req)
    {
        if (!$req->session()->has('user_id')) 
        {
            return redirect('/');
        }
        $user_id = $req->session()->get('user_id');
        $user = DB::table('login')->where('id', $user_id)->first();
        return view('dashboard', ['user' => $user]);
    }
    public function  Adddata(Request $req)
    {
        return view('adddata');
    }
    public function Logout(Request $req)
    {
        $req->session()->flush();
        return redirect('/');
    }

}

