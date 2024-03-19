<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Curl Ware - Booking Website Sample</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('front_asset') }}/css/style.css">
    

</head>

<body>
    
    @include('frontend.components.assets.header')

    @yield('front_content')



    <footer class="text-center bg-body-tertiary py-4">
        <div class="container">
            <span class="fs-5">Design and Developed by <a href="" class="text-success">Sobuj</a> for <span class="text-primary">Cural Ware</span> Task Sample</span>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    @if(session('booking_done'))
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            Swal.fire({
                title: 'Booking Request Complete',
                text: 'Booking request successfully sent to Hotel Authority. You will get Booking Conformation Soon.',
                icon: 'success',
                confirmButtonText: 'Close'
            });
        </script>
    @endif

</body>

</html>
