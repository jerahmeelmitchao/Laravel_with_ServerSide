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
        $data = DB::table('customers as c')
            ->leftJoin('employees as e', 'e.employeeNumber', '=', 'c.salesRepEmployeeNumber')
            ->select(
                'c.customerNumber',  
                'c.customerName',
                'c.phone',
                'c.country',
                DB::raw('CONCAT(e.firstName, " ", e.lastName) AS agent')
            )
            ->get();


        if (request()->ajax()) {
            return DataTables::of($data)
                ->make(true);
        }

        return view('customers.customerList');
    }


    public function view($customerNumber)
    {
        // Fetch customer details and orders
        $customer = DB::table('customers AS c')
            ->join('employees AS e', 'e.employeeNumber', '=', 'c.salesRepEmployeeNumber')
            ->join('orders AS o', 'o.customerNumber', '=', 'c.customerNumber')
            ->join('orderdetails AS od', 'od.orderNumber', '=', 'o.orderNumber')
            ->join('products AS p', 'p.productCode', '=', 'od.productCode')
            ->select(
                'c.customerName',
                'c.customerNumber',
                'c.addressLine1',
                'c.postalCode',
                'c.country',
                'e.firstName',
                'e.lastName',
                'o.orderNumber',
                'o.orderDate',
                'o.shippedDate',
                'p.productName'
            )
            ->where('c.customerNumber', $customerNumber)
            ->get();  // Fetch all records related to the customer

        return view('customers.customerDetails', ['customer' => $customer]);
    }



    public function getOffice()
    {
        $data = DB::table('offices AS o')
            ->join('employees AS e', 'e.officeCode', '=', 'o.officeCode')
            ->select(
                'o.officeCode',
                'o.city',
                'o.country',
                'o.addressLine1',
                'o.phone',
                DB::raw('CONCAT(e.firstName, " ", e.lastName) AS agent')
            )
            ->get();

        if (request()->ajax()) {
            return DataTables::of($data)
                ->make(true);
        }

        return view('office.officeList', ['office' => $data]);
    }



    // public function customerList()
    // {
    //     return view('customers.customerDetails');
    // }
}
