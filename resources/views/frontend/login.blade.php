<x-frontend.layouts.master title="Login">
    <div class="mx-5 row justify-content-center align-items-center">
        <div class="p-5 d-inline-flex">

            <!---Left------>
            <div class="col left-box">
                <div class="featured-Images mb-3">
                    <img src="{{ asset('ui/frontend') }}/Assets/Images/doc2.jpg" alt="" class="img-fluid"
                        style="max-width: 500px;">
                </div>
            </div>

            <!-- Right -->
            <div class="col right-box">
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="row align-items-center">
                        <h2>Doctor/Patient Login</h2>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="email" class="form-control form-control-lg bg-light fs-6"
                            placeholder="Email Address" autofocus>
                    </div>
                    <div class="input-group mb-1">
                        <input type="password" name="password" class="form-control form-control-lg bg-light fs-6"
                            placeholder="Password">
                    </div>
                    <div class="input-group mb-5 d-flex justify-content-between">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="formCheck">
                            <label for="formCheck" class="form-check-label text-secondary">Remember me</label>
                        </div>
                        <div class="forget">
                            <small><a href="#" class="text-decoration-none">Forget Password?</a></small>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <button class="btn btn-lg btn-primary w-100 fs-6">Login</button>
                    </div>
                    <div class="input-group mb-3">
                        <button class="btn btn-lg btn-light w-100 fs-6"><img
                                src="{{ asset('ui/frontend') }}/Assets/Images/google-logo.png" style="width:20px"
                                class="me-2" alt=""><small>Sign In with
                                Google</small></button>
                    </div>
                    <div class="row" style="text-align: center;">
                        <small>Don't have account? <a href="{{ route('register') }}" class="text-decoration-none">Sign
                                Up</a></small>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</x-frontend.layouts.master>
