<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;

class registercontroller extends Controller
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
           $data=array('name'=>$req->name,'email'=>$req->email,'password'=>$req->password);
           DB::table('login')->insert($data);
           return redirect('/');

        }
        return view('register');
    }
    public function Dashboard(Request $req)
    {
        if(!$req->session()->has('user_id'))
        {
            return redirect('/');
        }
        return view('dashboard');    
    }
    public function Logout(Request $req)
    {
        $req->session()->flush();
        return redirect('/');
    }
}
