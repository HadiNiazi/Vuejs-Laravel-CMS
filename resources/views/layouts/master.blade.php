
<!DOCTYPE html>

<html lang="en" class="default-style">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Admin Dashboard</title>

  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="IE=edge,chrome=1">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <script src="{{ asset('js/app.js') }}" defer></script>
  <script src="{{ asset('js/dashboards_dashboard-1.js') }}" defer></script>
  <script src="{{ asset('js/chartjs.js') }}"></script>

  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900" rel="stylesheet">

  <!-- Icon fonts -->
<link rel="stylesheet" href="{{ asset('fonts/fontawesome.css') }}">
  <link rel="stylesheet" href="{{ asset('fonts/ionicons.css') }}" >
  <link rel="stylesheet" href="{{ asset('fonts/linearicons.css') }}">
  <link rel="stylesheet" href="{{ asset('fonts/open-iconic.css') }}">
  <link rel="stylesheet" href="{{ asset('fonts/pe-icon-7-stroke.css') }}">

  <!-- Core stylesheets -->
  <link rel="stylesheet" href="{{ asset('css/admin.css') }}" class="theme-settings-bootstrap-css">
  <script src="{{ asset('js/layout-helpers.js') }}"></script>
  <script src="{{ asset('js/pace.js') }}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>

<body>

    <div id="app">
    <app :user="{{ auth()->user() }}" />
    </div>

</body>

<script src="{{ asset('js/admin.js') }}"></script>
</html>
