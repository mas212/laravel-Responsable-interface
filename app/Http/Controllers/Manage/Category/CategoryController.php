<?php

namespace App\Http\Controllers\Manage\Category;

use Redirect;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Responses\Manage\Category\IndexResponse;
use App\Http\Responses\Manage\Category\CreateOrUpdateResponse;

class CategoryController extends Controller
{
    public function index()
    {
        return new IndexResponse;
    }

    public function create()
    {
        return view('manage.category.create');
    }

    public function store(Request $request)
    {
        $category = new Category;
        return new CreateOrUpdateResponse($request, $category);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('manage.category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        return new CreateOrUpdateResponse($request, $category);
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        if($category->delete()){
            return redirect()->route('category.index')->withSuccess('Data deleted');
        }
    }
}
