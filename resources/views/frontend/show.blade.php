<x-frontend.layouts.master title="Doctor">
    <div class="container-fluid bg-light mt-4">
        <div class="container">
            <div class="row justify-content-md-center bg-white border rounded-1 mx-5 p-4">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-6">
                            <div class="card mb-3 border-0" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-md-4 mt-2">
                                        <img src="{{ asset('ui/frontend') }}/Assets/Images/doctor-01.jpg"
                                            class="img-fluid rounded-start" alt="Doctor">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title mb-0 mt-0">DR. Sahida Akter Smrity</h5>
                                            <h6 class="text-secondary mt-0">Cardiologist</h6>
                                            <p class="card-text">MD: Dhaka Medical College <br> MO: Dhaka Medical
                                                College</p>
                                            <p class="card-text">
                                                <small class="text-body-secondary">Last updated 3 mins ago</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-3">
                            <i class="far fa-thumbs-up"></i>
                            6327 likes<br>
                            <i class="far fa-comment"></i>
                            69 comments<br>
                            <i class="fa fa-mobile-screen"></i>
                            +880 1624 032 899<br>
                            <i class="fas fa-location-dot"></i>
                            Uttara, Dhaka, Bangladesh<br>
                            <i class="far fa-clock"></i>
                            10:00 AM - 6:00 PM<br>
                            <i class="far "></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-md-center bg-white border rounded-1 m-5 p-3">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col text-center">
                            <a href="#about" class="btn btn-light fw-semibold w-75 active">About</a>
                        </div>
                        <div class="col text-center">
                            <a href="#address" class="btn btn-light fw-semibold w-75">Address</a>
                        </div>
                        <div class="col text-center">
                            <a href="#reviews" class="btn btn-light fw-semibold w-75">Reviews</a>
                        </div>
                        <div class="col text-center">
                            <a href="{{ route('frontend.book-now') }}"
                                class="btn btn-light fw-semibold w-75">Appointment</a>
                        </div>
                        <div class="container p-4">
                            <h2 id="about">DR. Sahida Akter Smrity</h2>
                            <p>
                                Details about Doctor<br>
                                ................<br>
                                .............................<br>
                                .....................<br>
                                ..........................................<br>
                                ...................................

                            </p>

                            <h2 id="address">Address</h2>
                            <p>Road: 9, Sector: 4<br>Uttara Dhaka 1230</p>

                            <h2 id="reviews">Reviews and Ratings</h2>
                            <p>Rating goes here</p>
                            <p>--------------------<br>----------------<br>------------<br>--------<br>----</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-frontend.layouts.master>
