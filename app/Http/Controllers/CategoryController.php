<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryStoreRequest;
use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::latest()->paginate(10);

        return view('category.index', compact('categories'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryStoreRequest $request)
    {
         Category::create($request->all());
         return redirect()->route('category.index')
         ->with('success', 'Categoria created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $categories = Category::find($id);
        return view('category.show', compact('id'));

    }

    public function edit(category $category)
    {
        $categories = Category::find($category);
        return view('category.edit', compact('category'));
    }


    public function update(Request $request,$id)
    {
            $categories = Category::find($id);
            $categories->update($request->all());
            return redirect()->route('category.index')
            ->with('success', 'Post updated successfully.');

    }

    public function destroy(category $category)
    {
        $category->delete();

        return redirect()->route('category.index')
        ->with('success', 'Product deleted successfully');
    }
}
