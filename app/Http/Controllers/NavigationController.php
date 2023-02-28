<?php

namespace App\Http\Controllers;

use App\Models\Navigation;
use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public function index()
    {
        $navigation = Navigation::where('parent_id', null)->with('children')->get();
        $data = [
            'success' => true,
            'message' => 'Navigation Fetched Successfully',
            'payload' => $navigation
        ];
        return response()->json($data, 200);
    }
}
