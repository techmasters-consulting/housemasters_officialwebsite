<?php

namespace App\Http\Controllers;

use App\property;
use Illuminate\Http\Request;
use App\Services;
use Illuminate\Support\Facades\DB;
use Spatie\Tags\Tag;
use Juanparati\Sendinblue\Client as Blue;
use Juanparati\Sendinblue\Facades\Template as MailTemplate;
use Illuminate\Support\Facades\Mail;


class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('property');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\property  $property
     * @return \Illuminate\Http\Response
     */
    public function show(property $property)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(property $property)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, property $property)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(property $property)
    {
        //
    }
}
