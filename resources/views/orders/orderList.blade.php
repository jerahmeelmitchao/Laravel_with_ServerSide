<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Order Page') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h3 class="text-lg font-semibold mb-4">
               
                <i class="fa-solid fa-folder" style="margin-left: 10px;"></i>
                {{ __('List of Orders') }}</h3>

                <table class="table table-success table-striped" id="orderdatatable">
                    <!-- table table-striped table-hover  -->
                    <thead>
                        <tr>
                            <th>Order Number</th>
                            <th>Customer</th>
                            <th>Product</th>
                            <th>Quantity</th> 
                            <th>Price</th>
                            <th>Date Ordered</th> 
                        </tr>
                    </thead>
                    <tbody>
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
