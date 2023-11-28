<x-backend.layouts.master title="Create Role">

    <div class="container container-fluid align-content-between center">
        <div class="row justify-content-md-center">
            {{-- <div class="col"></div> --}}
            <div class="col col-sm-3 m-5 ">
                <form action="{{ route('roles.store') }}" class="form" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="role_name" class="form-label">New role name: </label>
                        <input type="text" class="form-control" name="role_name">
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
            {{-- <div class="col"></div> --}}
        </div>
    </div>

</x-backend.layouts.master>
