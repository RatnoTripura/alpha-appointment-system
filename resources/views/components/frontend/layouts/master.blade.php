<!DOCTYPE html>
<html lang="en">

<head>
    <x-frontend.layouts.partial.head_links />
    <title>{{ $title }}</title>
</head>

<body class="bg-light">
    <!-- Topbar start -->
    <x-frontend.layouts.partial.topbar />
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <x-frontend.layouts.partial.navbar title="{{ $title }}" />
    <!-- Navbar End -->


    <!-- Doctor info Start -->
    {{ $slot }}
    <!-- Doctor info End -->


    <!--Footer Section-->
    <x-frontend.layouts.partial.footer />
    <!--Footer section end here-->
</body>

</html>
