<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use DB;
class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::paginate(5);
        return view('item.index')->with(compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('item.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'bail|required',
            'manufacturer' => 'required',
            'image_name' => 'required',
            'manufactured_date' => 'required',
        ]);
        $item = $request->except(['_token']);
//        Item::Create([
//            'name'      => $item['name'],
//            'manufacturer'      => $item['manufacturer'],
//            'image_name'      => $item['image_name'],
//            'manufactured_date'      => $item['manufactured_date'],
//        ]);
//        DB::table('items')->insert([
//            'name'      => $item['name'],
//            'manufacturer'      => $item['manufacturer'],
//            'image_name'      => $item['image_name'],
//            'manufactured_date'      => $item['manufactured_date'],
//        ]);
        Item::create($item);
        return redirect()->route('items.index');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $id = $request->route('id');
        $item = Item::findOrFail($id);
        return view('item.edit')->with(compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
//        dd($request->post());
        $item = Item::find($request->id);
        $data = $request->except(['_token']);
        $item->update($data);
        return redirect()->route('items.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->route('id');
        $item = Item::findOrFail($id);
        $item->delete();
        return redirect()->route('items.index');

    }
}
