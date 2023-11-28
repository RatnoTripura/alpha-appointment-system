<x-frontend.layouts.master title="Book Now">
    <!--Booking Navbar -->
    <x-frontend.layouts.partial.booking_navbar />

    <br>
    <br>
    <!-- Page Content -->
    <div class="content">
        <div class="container">

            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-body">
                            <div class="booking-doc-info">
                                <img style="width: 105px;" src="{{ asset('ui/frontend') }}/Assets/Images/doctor-02.jpg"
                                    alt="User Image">

                                <div style="width: 130px;" class="booking-info">
                                    <h6><a href="{{ route('frontend.show') }}">Dr. Darren Elder</a></h6>
                                    <div class="rating">
                                        <i class="fas fa-star filled text-warning"></i>
                                        <i class="fas fa-star filled text-warning"></i>
                                        <i class="fas fa-star filled text-warning"></i>
                                        <i class="fas fa-star filled text-warning"></i>
                                        <i class="fas fa-star filled text-warning"></i>
                                        <span class="text-dark">35</span>
                                    </div>
                                    <p class="text-muted mb-0"><i class="fas fa-map-marker-alt"></i> Newyork, USA</p>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
            <br>
            <br>
            <!--Time slot-->
            <div class="container">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>SAT<br>11 NOV 2019</th>
                                <th>SUN <br>12 NOV 2019</th>
                                <th>Mon <br>13 NOV 2019</th>
                                <th>TUE <br>14 NOV 2019</th>
                                <th>WED <br>15 NOV 2019</th>
                                <th>THU <br>16 NOV 2019</th>
                                <th>FRI <br>17 Nov 2019</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>9:00 AM</td>
                                <td>10:00 AM</td>
                                <td>11:00 AM</td>
                                <td>12:00 AM</td>
                                <td>2:00 AM</td>
                                <td>3:00 AM</td>
                                <td>5:00 AM</td>
                            </tr>
                            <tr>
                                <td>10:00 AM</td>
                                <td>11:00 AM</td>
                                <td>12:00 AM</td>
                                <td>2:00 AM</td>
                                <td>3:00 AM</td>
                                <td>4:00 AM</td>
                                <td>5:00 AM</td>
                            </tr>
                            <tr>
                                <td>11:00 AM</td>
                                <td>12:00 AM</td>
                                <td>3:00 AM</td>
                                <td>4:00 AM</td>
                                <td>5:00 AM</td>
                                <td>6:00 AM</td>
                                <td>7:00 AM</td>
                            </tr>
                            <tr>
                                <td>12:00 AM</td>
                                <td>3:00 AM</td>
                                <td>4:00 AM</td>
                                <td>5:00 AM</td>
                                <td>6:00 AM</td>
                                <td>7:00 AM</td>
                                <td>8:00 AM</td>
                            </tr>
                        </tbody>


                    </table>
                </div>
            </div>
            <a href="#" class="btn btn-info text-white">Proceed to pay</a>
        </div>

    </div>
    <br>

    <!--Bootsrap Script-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</x-frontend.layouts.master>
