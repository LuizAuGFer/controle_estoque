<?php

namespace App\Http\Controllers;
use App\Http\Requests\CompanyRequest;
use App\Models\Company;
use Inertia\Inertia;
use Inertia\Response;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function dashboard()
    {
        $company = Company::where('user_id', \Auth::user()->id)->first();
        return Inertia::render('Dashboard', compact('company'));
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CompanyRequest $request)
    {
        $company = new Company;

        $company->name = request()->name;
        $company->user_id = \Auth::user()->id;
        $company->save();

        return redirect()->route('dashboard')->with('message', trans('messages.updated_successfully'))->with('type', 'success');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
