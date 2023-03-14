<?php

namespace App\Http\Controllers;

use App\Models\CompanyAsset;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CompanyAssetControler extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('CompanyAsset/Index', [
            'company_assets' => CompanyAsset::paginate(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('CompanyAsset/Create');
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CompanyAsset $company_asset)
    {
        return Inertia::render('CompanyAsset/Edit', [
            'company_asset' => $company_asset
        ]);
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
