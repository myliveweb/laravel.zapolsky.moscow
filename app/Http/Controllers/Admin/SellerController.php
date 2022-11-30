<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSeller;
use App\Http\Requests\UpdateSeller;
use App\Models\Seller;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sellers = Seller::where('total', '>', 0)->orderBy('total', 'desc')->offset(0)->limit(20)->get();
        return view('admin.sellers.index', compact('sellers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sellers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSeller $request)
    {
        Seller::create($request->all());
        $request->session()->flash('success', 'Продавец добавлен');
        return redirect()->route('sellers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $seller = Seller::find($id);
        return view('admin.sellers.edit', compact('seller'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSeller $request, $id)
    {
        $seller = Seller::find($id);
        $seller->update($request->all());
        $request->session()->flash('success', 'Изменения сохранены');
        return redirect()->route('sellers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Seller::destroy($id);
        return redirect()->route('sellers.index')->with('success', 'Продавец удалён');
    }
}
