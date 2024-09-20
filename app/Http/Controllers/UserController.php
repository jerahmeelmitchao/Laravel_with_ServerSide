<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{



    public function list()
    {
        $users = DB::table('employees')
            ->get();

        return view('users.userList', ['users' => $users]);
    }

    public function listByid(Request $request)
    {
        $id = $request->route('code'); // Fetching id from the route
        $users = DB::table('employees')
            ->where('employeeNumber', $id)
            ->get();

        return view('users.userList', ['users' => $users]);
    }

    public function viewID($employeeNumber)
    {   
        $user = DB::table('employees AS e')
            ->join('offices AS a', 'a.officeCode', '=', 'e.officeCode')
            ->where('e.employeeNumber', $employeeNumber)
            ->first();

        return view('users.view', ['user' => $user]);
    }

  
}
