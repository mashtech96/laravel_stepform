<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Styles -->
    <style>
        .display-none {
            display: none;
        }

        .multi-wizard-step p {
            margin-top: 12px;
        }

        .stepwizard-row {
            display: table-row;
        }

        .stepwizard {
            display: table;
            position: relative;
            width: 100%;
        }

        .multi-wizard-step button[disabled] {
            filter: alpha(opacity=100) !important;
            opacity: 1 !important;
        }

        .stepwizard-row:before {
            top: 14px;
            bottom: 0;
            content: " ";
            width: 100%;
            height: 1px;
            z-order: 0;
            position: absolute;
            background-color: #fefefe;
        }

        .multi-wizard-step {
            text-align: center;
            position: relative;
            display: table-cell;
        }
    </style>

</head>

<body class="antialiased">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <livewire:topic />

            </div>
        </div>
    </div>

    @livewireScripts
</body>

</html>