<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::get();
        return view('pages.countries.index', compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.countries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $name = $request->name;
        $capital = $request->capital;
        $population = $request->population;
        $is_nato = $request->is_nato;

        $country = new Country();
        $country->name = $name;
        $country->capital = $capital;
        $country->population = $population;
        $country->is_nato = $is_nato;

        $country->save();

        return redirect('/countries');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $country = Country::find($id);
         // dd($country->name);

         return view('pages.countries.edit', compact('country'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $country = Country::find($id);

        $name = $request->name;
        $capital = $request->capital;
        $population = $request->population;
        $is_nato = $request->is_nato;

        $country->name = $name;
        $country->capital = $capital;
        $country->population = $population;
        $country->is_nato = $is_nato;

        $country->save();

        return redirect('/countries');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Country::destroy($id);

        return redirect('/countries');
    }
}
