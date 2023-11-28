<x-backend.layouts.master title="Roles">



    <div class="container container-fluid px-5 py-1 table-bordered">
        <a class="btn" href="{{ route('roles.create') }}">Add new role</a>
        @php
            $sl = 0;
        @endphp
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Role Name</th>
                    <th scope="col">Number of users</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $role)
                    <tr>
                        <th scope="row">{{ ++$sl }}</th>
                        <td>{{ $role->role_name }}</td>
                        <td>0</td>
                        <td><a href="{{ route('roles.show', $role->id) }}">details</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-backend.layouts.master>
