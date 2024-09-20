<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CustomerController extends Controller
{
    public function list_of_customer()
    {
        $data = DB::table('customers as c')->get();

        if (request()->ajax()) {
            return DataTables::of($data)

                ->make(true);
        }

        return view('customers.customerList');
    }

    public function view($customerNumber)
    {
        $customer = DB::table('customers AS c')
            ->join('employees AS e', 'e.employeeNumber', '=', 'c.salesRepEmployeeNumber')
            ->join('orders AS o', 'o.customerNumber', '=', 'c.customerNumber')
            ->join('orderdetails AS od', 'od.orderNumber', '=', 'o.orderNumber')
            ->join('products AS p', 'p.productCode', '=', 'od.productCode')
            ->where('c.customerNumber', $customerNumber)
            ->first();

        return view('customers.customerDetails', ['customer' => $customer]);
    }

    // public function customerList()
    // {
    //     return view('customers.customerDetails');
    // }
}
