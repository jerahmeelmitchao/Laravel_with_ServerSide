<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\Request;
use Carbon\Carbon;

class OrderController extends Controller
{
    public function getOrders()
    {
        $data = DB::table('orderdetails as od')
            ->join('orders AS o', 'o.orderNumber', '=', 'od.orderNumber')
            ->join('products as p','p.productCode', '=', 'od.productCode')
            ->join('customers as c', 'c.customerNumber', '=', 'o.customerNumber')
            ->select(
                'od.orderNumber',
                'od.quantityOrdered',
               'o.orderDate',
                'p.productName',
                'od.priceEach',
                'c.customerName',
                'c.contactLastName',
                'c.contactFirstName')
            ->get();



            if (request()->ajax()) {
                return DataTables::of($data)
                ->editColumn('orderDate', function ($row) {
                        return Carbon::parse($row->orderDate)->format('F j, Y');
                    })
                ->make(true);
            } 
           
    return view('orders.orderList');
    }
}
