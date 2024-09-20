<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 relative">
                    <div class="header-section">
                        <h3 class="text-lg font-semibold mb-4">
                            <i class="fa-solid fa-folder-open"></i>
                            {{ __('Information of') }} {{ $products->productName }}
                        </h3>

                        <!-- X Close Button -->
                        <a href="javascript:void(0);" onclick="window.history.back();" class="close-btn">&times;</a>
                    </div>

                    <!-- Horizontal line separator -->
                    <hr class="separator-line">

                    <!-- Insert the product card HTML here -->
                    <div class="product-card">
                        <!-- Conditional Product Image -->
                        @if($products->productLine == 'Ships')
                            <img src="/assets/img/products/ship.jpg" alt="Ship Image">
                        @elseif($products->productLine == 'Classic Cars')
                            <img src="/assets/img/products/car.jpg" alt="Car Image">
                        @elseif($products->productLine == 'Planes')
                            <img src="/assets/img/products/plane.jpg" alt="Plane Image">
                        @elseif($products->productLine == 'Motorcycles')
                            <img src="/assets/img/products/motor.jpg" alt="Plane Image">
                        @elseif($products->productLine == 'Trains')
                            <img src="/assets/img/products/train.jpg" alt="Plane Image">
                        @elseif($products->productLine == 'Trucks and Buses')
                            <img src="/assets/img/products/truck.jpg" alt="Plane Image">
                        @elseif($products->productLine == 'Vintage Cars')
                            <img src="/assets/img/products/vintage.jpg" alt="Plane Image">
                        @else
                            <img src="/assets/img/products/default.jpg" alt="Default Product Image">
                        @endif

                        <!-- Product Information -->
                        <div class="product-info">
                            <h4>{{ $products->productName }}</h4>
                            <p>{{ __('Product Line:') }} {{ $products->productLine }}</p>
                            <p>{{ __('Price: $') }} {{ $products->MSRP }}</p>
                            <p><strong>{{ __('In Stock:') }}</strong> {{ $products->quantityInStock }}</p>
                        </div>
                    </div>
                    <!-- End of product card HTML -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
