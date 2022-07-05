<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;
use App\Http\Requests\CreateUpdateSchoolRequest;
use Illuminate\Support\Facades\Log;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schools = School::get();
        return view('layouts.schools.index',['schools'=>$schools]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.schools.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUpdateSchoolRequest $request)
    {
        $data = [

            'name'=>$request->name,
            'description'=>$request->description,
        ];
        try {
            $school = School::create($data);
            return  redirect()->route('schools.index')->with('success','Create class successfully');
        } catch(\Exception $e){
            Log::error($e->getMessage());
            return  back()->with('error','Create class failed');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function show(School $school)
    {
        return  view('layouts.schools.show',['school'=>$school]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function edit(School $school)
    {
        return  view('layouts.schools.edit',['school'=>$school]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function update(CreateUpdateSchoolRequest $request, School $school)
    {
        $data = [

            'name'=>$request->name,
            'description'=>$request->description,
        ];
        try {
            $school -> update($data);
            return  redirect()->route('schools.index')->with('success','Update class successfully');
        } catch(\Exception $e){
            Log::error($e->getMessage());
            return  back()->with('error','Update class failed');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function destroy(School $school)
    {
        try {
            $school -> delete();
            return  redirect()->route('schools.index')->with('success','Delete class successfully');
        } catch(\Exception $e){
            Log::error($e->getMessage());
            return  back()->with('error','Delete class failed');
        }
    }
}
