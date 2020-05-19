<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    @yield('links')
</head>

<body>
    <!--        LOADING START         -->
    <div class="loading justify-content-center"
        style="position: absolute; z-index: 1020;width: 100vw; height: 100vh; background-color: #fff;">
        <div class="spinner-border" role="status" style="position: relative; top: 45%; left: 50%;">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!--        LOADING END         -->
    @yield('content')

    <script src="https://kit.fontawesome.com/b94e20be92.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    @yield('scripts')
    <script>
        $(document).ready(function() {
            $('.loading').fadeOut(600);
            $('#tabla').DataTable();
        } );
    </script>

</body>

</html>