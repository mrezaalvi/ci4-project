<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ProductController extends BaseController
{
    public function index()
    {
        return view('product/index');
    }

    public function show()
    {
        return view('product/detail');
    }

    public function create()
    {
        return view('product/create');
    }

    public function store()
    {

    }

    public function edit()
    {
        return view('product/edit');
    }

    public function update()
    {

    }

    public function destroy()
    {

    }
}
