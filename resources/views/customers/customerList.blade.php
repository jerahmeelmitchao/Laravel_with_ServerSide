<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Customers Page') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h3 class="text-lg font-semibold mb-4">
                    <i class="fas fa-users" style="margin-left: 10px;"></i>
                    {{ __('List of Customers') }}
                </h3>

                <table class="table table-success table-striped" id="customerdatatable">
                <!--  -->
                    <thead>
                        <tr>
                            <th>Company Name</th>
                            <th>Agent</th>
                            <th>Contact No.</th>
                            <th>Country</th>
                            <!-- <th>Action</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>