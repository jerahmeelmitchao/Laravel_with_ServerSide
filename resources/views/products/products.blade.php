<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products Page') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h3 class="text-lg font-semibold mb-4">
               
                <i class="fa-solid fa-folder" style="margin-left: 10px;"></i>
                {{ __('List of Products') }}</h3>

                <table class="table table-success table-striped" id="datatable">
                    <!-- table table-striped table-hover  -->
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Product Line</th>
                            <th>Vendor</th>
                            <th>Price</th> 
                            <th>Action</th> 
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <td>
                            <i class="fa-solid fa-tag"></i>
                            {{ $product->productName }}</td>
                            <td>{{ $product->productLine }}</td>
                            <td>{{ $product->productVendor }}</td>
                            <td>{{ $product->MSRP }}</td>
                            <td> <a href="{{ route('products.viewID', ['productCode' => $product->productCode]) }}" class="view-button"> <i class="fa-regular fa-eye"></i> View </a>  </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
