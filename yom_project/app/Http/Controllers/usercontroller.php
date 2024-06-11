<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usercontroller extends Controller
{
    public function Index()
    {
        return view('welcome');
    }
    public function Services()
    {
        return view('services');
    }
    public function Clients()
    {
        return view('clients');
    }
    public function Blog()
    {
        return view('blog');
    }
    public function About()
    {
        return view('about');
    }
    public function Work3_columns()
    {
        return view('work3_columns');
    }
    public function Work4_columns()
    {
        return view('work4_columns');
    }
    public function Contact()
    {
        return view('contact');
    }
}
