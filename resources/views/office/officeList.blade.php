<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Office Page') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h3 class="text-lg font-semibold mb-4">
               
                <i class="fa-solid fa-folder" style="margin-left: 10px;"></i>
                {{ __('List of Offices') }}</h3>

                <table class="table table-success table-striped" id="officedatatable">
                    <!-- table table-striped table-hover  -->
                    <thead>
                        <tr>
                            <th>Office Code</th>
                            <th>City</th>
                            <th>Address</th>
                            <th>Country</th> 
                            <th>Managed by</th>
                            <th>Contact</th> 
                        </tr>
                    </thead>
                    <tbody>
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
