<?php

namespace App\Http\Controllers;

use App\Models\EmployeeAsset;
use App\Models\EmployeeFamily;
use App\Models\EmployeeProfile;
use Illuminate\Http\Request;
use Inertia\Inertia;

class EmployeeProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('EmployeeProfile/Index', [
            'employee_profiles' => EmployeeProfile::paginate()
        ]);
    }

    /**
     * Display Detail, including tables with relation to Employee Profile
     */
    public function details(EmployeeProfile $employee_profile)
    {
        $profile = $employee_profile;
        $family = EmployeeFamily::where('nik', $employee_profile->nik)->first();
        $assets = EmployeeAsset::where('nik', $employee_profile->nik)->get();
        return Inertia::render('EmployeeProfile/Detail', [
            'profile' => $profile,
            'family' => $family,
            'assets' => $assets
        ]);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(EmployeeProfile $employeeProfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EmployeeProfile $employeeProfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EmployeeProfile $employeeProfile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EmployeeProfile $employeeProfile)
    {
        //
    }
}
