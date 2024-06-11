<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;

class registercontroller extends Controller
{
    public function Index(Request $req)
    {
        if($req->submit)
        {
            $data=array('name'=>$req->name,'email'=>$req->email,'password'=>$req->password);
            admin::insert($data);
    
            return redirect('/');
        }
         
        $arr['data']=admin::get();
        return view('welcome')->with($arr);
       
    }
    public function Delete($id)
    {
        admin::where('id',$id)->delete();
        return redirect('/');
    }

    public function Update(Request $req,$id)
    {
        if($req->update)
        {
            $name=$req->name;
            $email=$req->email;
            $password=$req->password;
            $data=array('name'=>$name,'email'=>$email,'password'=>$password);

            admin::where('id',$id)->update($data);
            return redirect('/');
        }
         
        $arr['data']=admin::get();
        return view('user')->with($arr);
       
    }
   
}
