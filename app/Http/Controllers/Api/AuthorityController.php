<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AuthorityResource;
use App\Models\Authority;
use Illuminate\Http\Request;
use App\Models\Report;
use Illuminate\Http\Response;
use App\Http\Resources\ReportResource;

class AuthorityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return AuthorityResource::collection(Authority::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Report $report)
    {
       return new ReportResource($report);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Report $report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Report $report)
    {
        //
    }


}
