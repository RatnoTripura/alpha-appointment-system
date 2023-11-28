<!DOCTYPE html>
<html lang="en">


<!-- Main navbar -->
<x-backend.layouts.partial.head_links title="{{ $title }}" />
<!-- /Main navbar -->


<body>

    <!-- Main navbar -->
    <x-backend.layouts.partial.navbar />

    <!-- /main navbar -->


    <!-- Page content -->
    <div class="page-content">

        <!-- Main sidebar -->
        <x-backend.layouts.partial.sidebar title="{{ $title }}" />

        <!-- /main sidebar -->


        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Page header -->
            <x-backend.layouts.partial.header />

            <!-- /page header -->


            <!-- Content area -->
            {{ $slot }}
            <!-- /content area -->


            <!-- Footer -->
            <x-backend.layouts.partial.footer />
            <!-- /footer -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</body>

</html>
