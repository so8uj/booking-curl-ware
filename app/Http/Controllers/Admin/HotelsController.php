<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hotels;
use Illuminate\Http\Request;

class HotelsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pages.hotels',[
            'hotels'=>Hotels::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.add_hotels',[
            'form'=>'add'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'location'=>'required',
            'total_rooms'=>'required',
        ]);
        Hotels::insert($request->except('_token')+[
            'created_at'=>date('Y-m-d-H:i:s')
        ]);
        return back()->with('data_added','Hotel Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.pages.update_hotels',[
            'form'=>'update',
            'hotel' => Hotels::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'=>'required',
            'location'=>'required',
            'total_rooms'=>'required',
        ]);
        Hotels::find($id)->update($request->except('_token'));
        return redirect()->route('hotels.index')->with('data_updated','Hoted Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Hotels::find($id)->delete();
        return redirect()->route('hotels.index')->with('data_deleted','Hoted Data Deleted');
    }
}
