<x-backend.layouts.master title="Users">

    <div class="container container-fluid px-5 py-1 table-bordered">
        {{-- <a class="btn" href="{{ route('users.create') }}">Add new user</a> --}}
        @php
            $sl = 0;
        @endphp
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Role</th>
                    {{-- <th scope="col">Action</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th scope="row">{{ ++$sl }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->role->role_name }}</td>
                        {{-- <td><a href="{{ route('users.show', $user->id) }}">details</a></td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-backend.layouts.master>
