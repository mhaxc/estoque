<?php

namespace App\Http\Controllers;

use App\Http\Requests\BulkStoreRequest;
use App\Models\bulk;
use Illuminate\Http\Request;

class BulkController extends Controller
{

    public function index()
    {
        $bulks = Bulk::latest()->paginate(10);

        return view('bulks.index', compact('bulks'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function create()
    {
        return view('bulks.create');
    }


    public function store(BulkStoreRequest $request)
    {
         Bulk::create($request->all());
         return redirect()->route('bulks.index')
        ->with('success', 'Categoria created successfully.');
    }


    public function show($id)
    {
        $bulks = Bulk::find($id);
        return view('bulks.show', compact('id'));
    }


    public function edit($id)
    {
        $bulks = Bulk::find($id);
        return view('bulk.show', compact('id'));
    }


    public function update(BulkStoreRequest $request, bulk $bulk)
    {
        $bulks = Bulk::find($bulk);
        $bulks->update($request->all());
        return redirect()->route('bulks.index')
        ->with('success', 'Post updated successfully.');

    }

    public function destroy(bulk $bulk)
    {
        $bulk->delete();

        return redirect()->route('bulks.index')
        ->with('success', 'Product deleted successfully');
    }
}
