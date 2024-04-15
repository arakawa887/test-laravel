<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Requests\UsersRequest;
use App\Http\Requests\ContactsRequest;
use App\Models\Contact;

class TestController extends Controller
{
    public function index(){
        return view('input');
    }
    public function confirm(ContactsRequest $request){
        $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'tell', 'address', 'building', 'detail']);
        $category = $request->only(['content']);
        return view('confirmation', compact('contact','category'));
    }
    public function store(Request $request){
        $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'tell', 'address', 'building', 'detail']);
        $category = $request->only(['content']);
        Contact::create($contact);
        Category::create($category);
        return view('thanks');
    }
    public function register(){
        return view('register');
    }
    public function registration(UsersRequest $request){
        $users = $request->only(['name', 'email', 'password']);
        Users::create($users);
        return view('input');
    }
    public function login(){
        return view('login');
    }
    public function enter(UsersRequest $request){
        $users = $request->only(['name', 'email', 'password']);
        return view('input', ['usres' => $users]);
    }
    public function admin(){
        return view('management');
    }
}
