<x-frontend.layouts.master title="Sign Up">
    <!----   Signup page starts   ------>
    <div class="mx-5 row justify-content-center align-items-center">

        <!---Left------>
        <div class="p-5 d-inline-flex">

            <div class="col left-box">
                <div class="featured-Images mb-3">

                    <img id="form-img" src="{{ asset('ui/frontend') }}/Assets/Images/patient.avif" alt=""
                        class="img-fluid" style="max-width: 500px;">
                </div>
            </div>

            <!-- Right -->
            <div class="col right-box">
                <button class="btn" onclick="selectPat()">Patient</button>
                <button class="btn" onclick="selectDoc()">Doctor</button>

                {{-- <select name="role_id" id="role)id"></select> --}}


                @foreach ($roles as $role)
                    @if ($role->role_name != 'admin')
                        {{-- <input type="radio" name="role_id" value="{{ $role->id }}" id="{{ $role->id }}">
                    <label for="{{ $role->id }}" id="{{ $role->id }}">{{ $role->role_name }}</label> --}}

                        <button class="btn" style="border: 2px solid #aaaaaa;" id="btn{{ $role->id }}"
                            onclick="selectRole({{ $role->id }})" active>{{ $role->role_name }}</button>

                        {{-- <button class="btn">{{ $role->role_name }}</button> --}}
                    @endif
                @endforeach
                <form id="patient-form" style="" action="{{ route('register') }}" method="post">
                    @csrf
                    <div class="row align-items-center">
                        <h2>Patient Register</h2>
                    </div>
                    
                    <input type="number" name="role_id" id="role_id_selected" value="" hidden>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Name"
                            name="name" autofocus>
                    </div>
                    {{-- <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-lg bg-light fs-6"
                        placeholder="Last Name">
                    </div> --}}
                    <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-lg bg-light fs-6"
                            placeholder="Email Address" name="email">
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password"
                            name="password">
                    </div>

                    <div class="input-group mb-3">
                        <input class="btn btn-lg btn-primary w-100 fs-6" type="submit" value="Sign Up">
                        {{-- <button class="btn btn-lg btn-primary w-100 fs-6">Sign Up</button> --}}
                    </div>
                    <div class="input-group mb-3">
                        <button class="btn btn-lg btn-light w-100 fs-6"><img
                                src="{{ asset('ui/frontend') }}/Assets/Images/google-logo.png" style="width:20px"
                                class="me-2" alt=""><small>Sign In with Google</small>
                        </button>
                    </div>
                </form>
                <form id="doctor-form" style="display:none" action="{{ route('register') }}" method="post">
                    @csrf
                    <div class="row align-items-center">
                        <h2>Doctor Register</h2>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-lg bg-light fs-6"
                            placeholder="First Name">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-lg bg-light fs-6"
                            placeholder="Last Name">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-lg bg-light fs-6"
                            placeholder="Sceciality">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-lg bg-light fs-6"
                            placeholder="Visit Rate">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-lg bg-light fs-6"
                            placeholder="Passing Medical">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-lg bg-light fs-6"
                            placeholder="Email Address">
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control form-control-lg bg-light fs-6"
                            placeholder="Password">
                    </div>

                    <div class="input-group mb-3">
                        <input class="btn btn-lg btn-primary w-100 fs-6" type="submit" value="Sign Up">
                        {{-- <button class="btn btn-lg btn-primary w-100 fs-6">Sign Up</button> --}}
                    </div>
                    <div class="input-group mb-3">
                        <button class="btn btn-lg btn-light w-100 fs-6"><img
                                src="{{ asset('ui/frontend') }}/Assets/Images/google-logo.png" style="width:20px"
                                class="me-2" alt=""><small>Sign In with Google</small>
                        </button>
                    </div>
                </form>


                <div class="row" style="text-align: center;">
                    <small>Already Have an Account? <a class="text-decoration-none"
                            href="{{ route('login') }}">Login</a></small>
                </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script>
        function selectPat() {
            document.getElementById("form-img").src =
                "{{ asset('ui/frontend') }}/Assets/Images/patient.avif";
            document.getElementById("patient-form").style.display = "";
            document.getElementById("doctor-form").style.display = "none";
        }

        function selectDoc() {
            document.getElementById("form-img").src = "{{ asset('ui/frontend') }}/Assets/Images/doc2.jpg"
            document.getElementById("patient-form").style.display = "none";
            document.getElementById("doctor-form").style.display = "";
        }

        function selectRole(x) {
            console.log(x);
            document.getElementById('role_id_selected').value = x;
            document.getElementById('btn' + x).style = "background-color:#eeeeee";
        }
    </script>

</x-frontend.layouts.master>
