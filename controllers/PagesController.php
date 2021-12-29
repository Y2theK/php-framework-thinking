<?php
namespace controller;
use core\App;
class PagesController{
    public function home(){
        $users = App::get("database")->selectAll("users");
         view('index',[
            "users" => $users
        ]);
    }
    public function about(){
        view('about');
    }
    public function order()
    {
        view('order');
    }
    public function contact()
    {
        view('contact');
    }
    public function customer()
    {
        view('customer');
    }
    public function createUser()
    {
        App::get("database")->insert([
            'name'=> request('name')
        
        ],"users");
        
        redirect('/');
        //header("Location:/");  
    }








}