<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Seo;

class SeosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seos = Seo::all();
        return view('admin.seo.index')->with('seos', $seos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.seo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
          'title' => 'required',
          'description' => 'required',
          'keywords' => 'required'
        ]);

        $seo = new Seo();
        $seo -> title = $request -> title;
        $seo -> description = $request -> description;
        $seo -> keywords = $request -> keywords;

        $seo -> save();

        return redirect() -> route('admin.seo.index');
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
        $seo = Seo::find($id);

        return view('admin.seo.edit')->with('seo', $seo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
          'title' => 'required',
          'description' => 'required',
          'keywords' => 'required'
        ]);

        $seo = Seo::find($id);
        $seo -> title = $request -> title;
        $seo -> description = $request -> description;
        $seo -> keywords = $request -> keywords;

        $seo -> save();

        return redirect() -> route('admin.seo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $seo = Seo::find($id);

        $seo -> delete();

        return redirect() -> route('admin.seo.index');
    }
}
