<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title') Page</title>
    <style>
    .header {
        color:blue;
        background-color:grey;
    }
    .footer{
        background-color:blueviolet;
    }
</style>
</head>


<body>
    <div class="header">
        @section('header')
        <h1>Header for all Page</h1>
        @show
    </div>
    <div class="sidebar">
       @section('sidebar')
        <small>sidebar for all Page</small>
        @show
    </div>
    <div class="container">
      @yield('content')
    
    </div>
    <div class="footer">
       @section('footer')
        <p>footer for all Page</p>
        @show
    </div>
</body>

</html>