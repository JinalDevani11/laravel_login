<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class admincontroller extends Controller
{
    public function Index(Request $req)
    {   
        if($req->login)
        {
            $email=$req->email;
            $password=$req->password;
            $user_check=DB::table('login')->where('email',$email)->where('password',$password);

            if($user_check->count()==1)
            {
                $data=$user_check->first();
                session(['user_id'=>$data->id]);
                return redirect('admin/dashboard');
            }else{
                return redirect('admin/');
            }
        }
        return view('admin/index');
    }
  

    public function Addadmin(Request $req)
    {
        if($req->submit)
        {
            $name=$req->name;
            $email=$req->email;
            $password=$req->password;
            $image=$req->file('image')->getClientOriginalName();
            $req->file('image')->move('image',$image);
            $data=array('name'=>$name,'email'=>$email,'password'=>$password,'image'=>$image);
            DB::table('login')->insert($data);
            return redirect('admin/addadmin');
        }
        $arr['data']=DB::table('login')->get();
        return view('admin/add_admin')-> with ($arr);
    }
    public function Admindelete($id)
    {
        DB::table('login')->where('id',$id)->delete();
        return redirect('admin/addadmin');

    }
    public function Dashboard()
    {
        return view('admin/dashboard');
    }
  
    public function Updateadmin(Request $req, $id)
    {
        if ($req->submit) {
            $name = $req->name;
            $email = $req->email;
            $password = $req->password;

            $data = [
                'name' => $name,
                'email' => $email,
                'password' => $password,
            ];

            if ($req->hasFile('image')) {
                $image = $req->file('image')->getClientOriginalName();
                $req->file('image')->move('image', $image);
                $data['image'] = $image;
            }

            DB::table('login')->where('id', $id)->update($data);
            return redirect('admin/addadmin');
        }

        $arr['data'] = DB::table('login')->where('id', $id)->first();
        return view('admin.update_admin')->with($arr);
    }

    public function Addslider(Request $req)
    {
        if($req->submit)
        {
            $title = $req->title; 
            $description = $req->description; 
            $image = $req->file('image')->getClientOriginalName();
            $req->file('image')->move('slider', $image);
            $data = array(
                'title' => $title,
                'description' => $description,
                'image' => $image
            );
            DB::table('slider')->insert($data);
            return redirect('admin/addslider');


        }
        $arr['data'] = DB::table('slider')->get();
        return view('admin/add_slider')->with($arr);
    }

    public function Sliderdelete($id)
    {
        DB::table('slider')->where('id',$id)->delete();
        return redirect('admin/addslider');
    }


    public function Updateslider(Request $req, $id)
    {
        if ($req->submit) {
            $title = $req->title;
            $description = $req->description;

            $data = [
                'title' => $title,
                'description' => $description,
            ];

            if ($req->hasFile('image')) {
                $image = $req->file('image')->getClientOriginalName();
                $req->file('image')->move('slider', $image);
                $data['image'] = $image;
            }

            DB::table('slider')->where('id', $id)->update($data);
            return redirect('admin/addslider');
        }

        $arr['data'] = DB::table('slider')->where('id', $id)->first();
        return view('admin/update_slider')->with($arr);
    }
    public function Logout(Request $req)
    {
        $req->session()->flush();
        return redirect('/admin/');
    }
}
