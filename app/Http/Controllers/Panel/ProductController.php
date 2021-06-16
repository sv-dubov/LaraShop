<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        return 'List of products';
    }

    public function create()
    {
        return 'Form for create product';
    }

    public function store()
    {
        //
    }

    public function show($product)
    {
        return "Showing the product {$product}";
    }

    public function edit($product)
    {
        return "Form for editing the product {$product}";
    }

    public function update($product)
    {
        //
    }

    public function destroy($product)
    {
        //
    }
}
