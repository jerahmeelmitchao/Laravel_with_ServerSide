@php
    // Array of image filenames
    $images = ['c1.jpeg', 'c2.jpg', 'c3.jpg', 'c4.jpg'];
    // Randomly select an image
    $randomImage = $images[array_rand($images)];
@endphp

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Customer Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 relative">
                    <div class="header-section">
                        <h3 class="text-lg font-semibold mb-4">
                            <i class="fa-solid fa-folder-open"></i>
                            {{ __('Information of') }} {{ $customer->first() ? $customer->first()->customerName : __('Unknown Customer') }}
                        </h3>

                        <!-- X Close Button -->
                        <a href="javascript:void(0);" onclick="window.history.back();" class="close-btn">&times;</a>
                    </div>

                    <!-- Horizontal line separator -->
                    <hr class="separator-line">

                    @if($customer->isNotEmpty())
                    <!-- Insert the product card HTML here -->
                    <div class="product-card">
                        <!-- Product Image -->
                        <img src="/assets/img/company/{{ $randomImage }}" alt="Employee Image">

                        <!-- Product Information -->
                        <div class="product-info">
                            <h4>{{ $customer->first()->customerName }}</h4>
                            <p><strong>{{ __('Address:') }} </strong> {{ $customer->first()->addressLine1 }}</p>
                            <p><strong>{{ __('Postal Code:') }}</strong> {{ $customer->first()->postalCode }}</p>
                            <p><strong>{{ __('Country:') }}</strong> {{ $customer->first()->country }}</p>
                            <p><strong>{{ __('Sales Representative:') }}</strong> {{ $customer->first()->firstName }} {{ $customer->first()->lastName }}</p>
                        </div>
                    </div>
                    <!-- End of product card HTML -->
                    @else
                    <p>{{ __('Customer information is unavailable.') }}</p>
                    @endif

                    <!-- Orders Table -->
                    <table class="table table-striped" id="datatable">
                        <thead>
                            <tr>
                                <th>Order Number</th>
                                <th>Product</th>
                                <th>Date Ordered</th>
                                <th>Shipping Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($customer as $order)
                            <tr>
                                <td>{{ $order->orderNumber }}</td>
                                <td>{{ $order->productName }}</td>
                                <td>{{ $order->orderDate }}</td>
                                <td>{{ $order->shippedDate }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
