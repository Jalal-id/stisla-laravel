<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
        <title>{{ $title }}&mdash; Stisla</title>

        <!-- General CSS Files -->
        <link rel="stylesheet" href="/vendors/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="/vendors/fontawesome/css/all.min.css">

        <!-- CSS Libraries -->

        <!-- Template CSS -->
        <link rel="stylesheet" href="/assets/css/style.css">
        <link rel="stylesheet" href="/assets/css/components.css">
    </head>
    <body>
        <div id="app">
            <section class="section">
                @yield('container')
            </section>
        </div>

    <!-- General JS Scripts -->
    <script src="/vendors/jquery/jquery.min.js"></script>
    <script src="/vendors/popper.js/dist/umd/popper.js"></script>
    <script src="/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/vendors/jquery.nicescroll/dist/jquery.nicescroll.min.js"></script>
    <script src="/vendors/moment/min/moment.min.js"></script>
    <script src="/assets/js/stisla.js"></script>

    <!-- JS Libraies -->

    <!-- Template JS File -->
    <script src="/assets/js/scripts.js"></script>
    <script src="/assets/js/custom.js"></script>

    <!-- Page Specific JS File -->
    @yield('scripts')
</body>
</html>
