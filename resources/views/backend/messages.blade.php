<x-backend.layouts.master title="Messages">

    <div class="container container-fluid px-5 py-1 table-bordered">
        <table class="table">
            <thead>
                <tr>
                    {{-- <th>{{ $sl }}</th> --}}
                    <th scope="col">Name</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Message</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($messages as $msg)
                    <tr>
                        <td>{{ $msg->name }}</td>
                        <td>{{ $msg->email }}</td>
                        <td>{{ $msg->message }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</x-backend.layouts.master>
