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
                            {{ __('Information of') }} {{ $customer ? $customer->customerName : __('Unknown Customer') }}
                        </h3>

                        <!-- X Close Button -->
                        <a href="javascript:void(0);" onclick="window.history.back();" class="close-btn">&times;</a>
                    </div>

                    <!-- Horizontal line separator -->
                    <hr class="separator-line">

                    @if($customer)
                        <!-- Insert the product card HTML here -->
                        <div class="product-card">
                            <!-- Product Image -->
                            <img src="/assets/img/company/{{ $randomImage }}" alt="Employee Image">

                            <!-- Product Information -->
                            <div class="product-info">
                                <h4>{{ $customer->customerName }}</h4>
                                <p><strong>{{ __('Address:') }} </strong> {{ $customer->addressLine1 }}</p>
                                <p><strong>{{ __('Postal Code:') }}</strong> {{ $customer->postalCode }}</p>
                                <p><strong>{{ __('Country:') }}</strong> {{ $customer->country }}</p>
                                <p><strong>{{ __('Sales Representative:') }}</strong> {{ $customer->firstName }} {{ $customer->lastName }}</p>
                                <p><strong>{{ __('Order:') }}</strong> {{ $customer->productName }}</p>
                            </div>
                        </div>
                        <!-- End of product card HTML -->
                    @else
                        <p>{{ __('Customer information is unavailable.') }}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
