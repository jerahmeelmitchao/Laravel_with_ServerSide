<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Employees Page') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h3 class="text-lg font-semibold mb-4">
                    <i class="fas fa-users" style="margin-left: 10px;"></i>
                    {{ __('List of Employees') }}
                </h3>

                <table class="table table-success table-striped" id="datatable">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Position</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>
                                <i class="fa-solid fa-user"></i>
                                {{ $user->firstName }} {{ $user->lastName }}
                            </td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->jobTitle }}</td>
                            <td>
                                <a href="{{ route('users.view', ['employeeNumber' => $user->employeeNumber]) }}" class="view-button">
                                <i class="fa-regular fa-eye"></i>  View 
                                </a>


                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>