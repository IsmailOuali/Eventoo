<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    //
    public function users()
    {
        return view('dashboardAdmin.users');
    }
}
