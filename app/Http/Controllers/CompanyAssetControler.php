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
        $request->validate([
            'asset_number' => 'required|numeric',
        ]);
        CompanyAsset::create($request->toArray());
        return Inertia::render('CompanyAsset/Index', [
            'company_assets' => CompanyAsset::paginate()
        ])->with('message', 'Successfully register Asset!');
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
    public function update(Request $request, CompanyAsset $company_asset)
    {
        $company_asset->update($request->toArray());

        return Inertia::render('CompanyAsset/Index', [
            'company_assets' => CompanyAsset::paginate()
        ])->with('message', 'Successfully update Asset!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CompanyAsset $company_asset)
    {
        $company_asset->delete();

        return Inertia::render('CompanyAsset/Index', [
            'company_assets' => CompanyAsset::paginate()
        ])->with('message', 'Successfully delete Asset!');
    }
}
