<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function redirect()
    {
        $user = auth()->user();

        return match ($user->role->name) {
            'admin' => redirect()->route('admin.dashboard'),
            'sales_manager' => redirect()->route('sm.dashboard'),
            'project_manager' => redirect()->route('pm.dashboard'),
            default => abort(403, 'Role assign nahi hai.'),
        };
    }

    public function admin()
    {
        return view('dashboards.admin');
    }

    public function salesManager()
    {
        return view('dashboards.sales-manager');
    }

    public function projectManager()
    {
        return view('dashboards.project-manager');
    }
}