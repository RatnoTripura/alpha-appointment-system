<x-frontend.layouts.master title="Contact Us">

    <!-- contact start -->

    <div class="container mt-5 text-center">
        <h2>Contact Us</h2>
        <p class="mt-3 text-center">Great doctor if you need your family member to get effective immediate
            assistance,<br>
            emergency treatment, or simple consultation.</p>
    </div>

    <div class="container justify-content-center m-5 row">
        <div class="col p-5 mx-3 card" style="height: 250px; width:380px;background-color: #15558D;text-align: center">
            <p><i class="fa-solid fa-phone fa-2xl fa-inverse mt-4"></i></p>
            <h4 class="text-white">Phone</h4>
            <h6 class="text-white">+2 315 369 5943</h6>
        </div>

        <div class="col p-5  mx-3 card" style="width: 380px;background-color: #15558D;text-align: center">
            <p><i class="fa fa-envelope fa-2xl fa-inverse mt-4" aria-hidden="true"></i></p>
            <h4 class="text-white">Email</h4>
            <h6 class="text-white">asdfg@gmail.com</h6>
        </div>
        <div class="col p-5 mx-3 card" style="width:380px;background-color: #15558D;text-align: center">
            <p><i class="fa-solid fa-location-dot fa-2xl fa-inverse mt-4" aria-hidden="true"></i></p>
            <h4 class="text-white">Location</h4>
            <h6 class="text-white">Dhaka,Bangladesh</h6>
        </div>
    </div>

    <div class="container">
        <div class="row m-auto justify-content-center">

            <div class="col m-5">
                {{-- <img style="height: 430px; width: 430px;" src="{{ asset('ui/frontend') }}/Assets/Images/map.png" alt="map"> --}}
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d228.0364592261642!2d90.40004380904718!3d23.86892467067635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c424c5b61833%3A0xd69adfa23a3916b3!2sRajuk%20Rajib%20Cosmo%20Shopping%20Complex!5e0!3m2!1sen!2sbd!4v1694849917058!5m2!1sen!2sbd"
                    width="500" height="375" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col">
                <section class="py-5">
                    <div class="container">
                        <h2 class="mb-4">Contact Us</h2>

                        <form action="{{ route('backend.messages.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" name="message" rows="4" required></textarea>
                            </div>
                            <input type="submit" class="btn btn-primary" value="Send">
                        </form>

                    </div>
                </section>
            </div>

        </div>
    </div>


    <!-- contact End -->



    <!--Bootsrap Script-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</x-frontend.layouts.master>
