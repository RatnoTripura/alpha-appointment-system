{{-- @dd(Auth::user()) --}}
<x-frontend.layouts.master title="Index">

    <!-- Hero Start -->
    <div class="container-fluid py-5 mb-5 hero-header">

        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center text-lg-start">

                    <h1>Search Doctor, Make an Appointment</h1>
                    <p style="font-size: 20px; font-weight: 600;">Discover the best
                        doctors, clinic & hospital the city nearest to you.</p>
                    <!-- Search -->
                    <div class="search-box">
                        <form action="templateshub.net">
                            <div class="form-group search-location">
                                <input type="text" class="form-control"
                                    placeholder="Search 
                                     Location">
                                <p style="font-size: 16px; font-weight: 600;"
                                    class="form- 
                                     text">Based on your Location</p>
                            </div>
                            <div class="form-group search-info">
                                <input type="text" class="form-control"
                                    placeholder="Search 
                                     Doctors, Clinics, Hospitals, Diseases Etc">
                                <p style="font-size: 16px; font-weight: 600;"
                                    class="form- 
                                     text">Ex : Dental or Sugar Check
                                    up
                                    etc</p>
                            </div>
                            <button type="submit" class="btn btn-info search-btn"><i
                                    class="fas fa-search text-white"></i>
                                <span>Search</span>
                            </button>
                        </form>
                    </div>
                    <!-- /Search -->
                </div>
            </div>


        </div>
    </div>

    <!-- Hero End -->

    <!--Clinic and Specialities-->
    <div class="container pt-30">
        <div class="row">

            <h1 class="text-center">Clinic and Specialities</h1>
            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed maxime sunt, delectus
                explicabo, natus non fugiat itaque pariatur repudiandae animi veritatis. Nam dolorum minus magnam, at
                architecto qui dignissimos expedita facere magni, velit libero quas sapiente repellat! Eveniet beatae
                necessitatibus fugit sit optio, rem sequi, ea voluptatem quibusdam provident ex eaque suscipit
                praesentium laudantium ipsam numquam nostrum reiciendis pariatur vitae sint, ullam commodi autem.</p>
            <br>
            <br>
            <br>
        </div>
    </div>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="card1" style="width: 18rem;">
                    <img src="{{ asset('ui/frontend') }}/Assets/Images/specialities-01.svg" class="card-img-top"
                        alt="specialities-01" style="width: 2rem;">
                    <div class="card1-body">
                        <h5 class="card1-title">Cardiology</h5>

                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card1" style="width: 18rem;">
                    <img src="{{ asset('ui/frontend') }}/Assets/Images/specialities-02.svg" class="card-img-top"
                        alt="specialities-02" style="width: 3rem;">
                    <div class="card1-body">
                        <h5 class="card1-title">Neurology</h5>

                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card1" style="width: 18rem;">
                    <img src="{{ asset('ui/frontend') }}/Assets/Images/specialities-03.svg" class="card-img-top"
                        alt="specialities-03" style="width: 3rem;">
                    <div class="card1-body">
                        <h5 class="card1-title">Urology</h5>

                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card1" style="width: 18rem;">
                    <img src="{{ asset('ui/frontend') }}/Assets/Images/specialities-04.svg" class="card-img-top"
                        alt="specialities-04" style="width: 2rem;">
                    <div class="card1-body">
                        <h5 class="card1-title">Orthopedic</h5>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>

    <!--Book our Doctor-->
    <div class="container">
        <div class="row">

            <h1 class="text-center">Book Our Doctor</h1>
            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed maxime sunt, delectus
                explicabo, natus non fugiat itaque pariatur repudiandae animi veritatis. Nam dolorum minus magnam, at
                architecto qui dignissimos expedita facere magni, velit libero quas sapiente repellat! Eveniet beatae
                necessitatibus fugit sit optio, rem sequi, ea voluptatem quibusdam provident ex eaque suscipit
                praesentium laudantium ipsam numquam nostrum reiciendis pariatur vitae sint, ullam commodi autem.</p>
            <br>
            <br>
            <br>
            <div type="button mb-5">
                <button class="btn btn-info text-white">Learn More</button>
            </div>
        </div>
        <br>
        <br>

        <div class="container">
            <div class="row">
                @foreach ($users as $user)
                    {{-- @dd($user->id) --}}
                    {{-- {{ $user->id }} --}}
                    @if ($user->role_id == 2)
                        <div class="col-lg-3">
                            <div class="card" style="width: 18rem;">
                                <img src="{{ asset('ui/frontend') }}/Assets/Images/doctor-01.jpg" class="card-img-top"
                                    alt="doctor 01">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $user->name }}</h5>
                                    {{ $user->role->role_name }}
                                    <p class="card-text">Cardiology</p>
                                    <p style="color: rgb(106, 104, 104)">Florida USA</p>
                                    <p style="color: rgb(106, 104, 104)">Available on friday, 22 March</p>
                                    <p style="color: rgb(106, 104, 104)">$100-$500</p>

                                    <div>
                                        <a href="{{ url('/show') }}"
                                            style="border: 2px solid #5ec2f4; background-color: white; color: rgb(42, 119, 170); padding: 7px; text-align: center; border-radius:8px; text-decoration: none;">View
                                            Profile</a>
                                        <a href="book now.html" class="btn btn-info text-white">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach



            </div>

        </div>

    </div>


    <!--Bootsrap Script-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</x-frontend.layouts.master>
