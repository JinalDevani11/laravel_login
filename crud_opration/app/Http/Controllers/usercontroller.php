<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

    class usercontroller extends Controller
    {
        public function index(Request $req)
        {
            if($req->submit)
            {
                $name=$req->name;
                $email=$req->email;
                $password=$req->password;
                $contact=$req->contact;
                $gender=$req->gender;
                $city=$req->city;
                $hobby=$req->hobby;
                $hobby_str=implode(',',$hobby);

                $data = array('name' =>$name,'email'=>$email,'password'=>$password,'contact'=>$contact,'gender'=>$gender,'city'=>$city,'hobby'=>$hobby_str);

                DB::table('user')->insert($data);

            }


            // only use for insert
            // return view('welcome');


            // use for when insert and select both in one page
            $arr['data']=DB::table('user')->get();
            return view('welcome')-> with ($arr);
        }

        

        public function delete(Request $req,$id)  {

            DB::table('user')->where('id',$id)->delete();
    
            return redirect('/');
        }

        public function update(Request $req,$id)
        {
            {
                if($req->submit)
                {
                    $name=$req->name;
                    $email=$req->email;
                    $password=$req->password;
                    $contact=$req->contact;
                    $gender=$req->gender;
                    $city=$req->city;
                    $hobby=$req->hobby;
                    $hobby_str=implode(',',$hobby);
    
                    $data = array('name' =>$name,'email'=>$email,'password'=>$password,'contact'=>$contact,'gender'=>$gender,'city'=>$city,'hobby'=>$hobby_str);
    
                    DB::table('user')->where('id',$id)->update($data);
                    return redirect('/');
    
                }
    
    
                // use for when insert and select both in one page
                $arr['data']=DB::table('user')->where('id',$id)->get();
                return view('user')-> with ($arr);
            }
        }
        
    }
    
?>