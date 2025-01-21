<?php

class Home extends Controller
{
    public function index($id = '')
    {
        $this->view('home/index', ['name' => User::find($id)->username]);
    }

    public function create($username= '', $email='')
    {
        User::create([
            'username' => $username,
            'email' => $email
        ]);
    }
}