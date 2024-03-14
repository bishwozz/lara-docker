<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\MstSchool;
use App\Models\MstEmployee;
use Illuminate\Http\Request;
use App\Models\EmployeeStatus;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class DashboardController extends Controller
{
    public function index(Request $request){
        $data = User::all();
        return view('home',['data'=>$data]);
    }
}
