@php
    // Array of image filenames
    $images = ['male.jpg', 'male3.jpg', 'male2.avif', 'male4.jpg', 'male5.avif', 'female.jpg', 'female.avif', 'female2.jpg', 'female3.jpg', 'female4.jpg', 'female5.jpg' , 'female6.jpg'];
    // Randomly select an image
    $randomImage = $images[array_rand($images)];
@endphp

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Employee Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 relative">
                    <div class="header-section">
                        <h3 class="text-lg font-semibold mb-4">
                            <i class="fa-solid fa-folder-open"></i>
                            {{ __('Information of') }} {{ $user->firstName }} {{ $user->lastName }}
                        </h3>

                        <!-- X Close Button -->
                        <a href="javascript:void(0);" onclick="window.history.back();" class="close-btn">&times;</a>
                    </div>

                    <!-- Horizontal line separator -->
                    <hr class="separator-line">

                    <!-- Insert the product card HTML here -->
                    <div class="product-card">
                        <!-- Product Image -->
                        <img src="/assets/img/employees/{{ $randomImage }}" alt="Employee Image">

                        <!-- Product Information -->
                        <div class="product-info">
                            <h4>{{ $user->firstName }} {{ $user->lastName }}</h4>
                            <p>{{ __('Email:') }} {{ $user->email }}</p>
                            <p>{{ __('Position:') }}  {{ $user->jobTitle }}</p>
                            <p><strong>{{ __('Employee Number:') }}</strong> {{ $user->employeeNumber }}</p>
                            <p><strong>{{ __('Office:') }}</strong> {{ $user->city }}</p>

                        </div>
                    </div>
                    <!-- End of product card HTML -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
