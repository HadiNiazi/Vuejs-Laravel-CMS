<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Project;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home()
    {
        return view('admin.index');
    }
}
