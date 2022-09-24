<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class UserController extends BaseController
{
    public function index()
    {
        return view('user/index');
    }

    public function show()
    {
        return view('user/detail');
    }

    public function create()
    {
        return view('user/create');
    }

    public function store()
    {

    }

    public function edit()
    {
        return view('user/edit');
    }

    public function update()
    {

    }

    public function destroy()
    {

    }
}
