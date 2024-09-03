<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="{{ asset('css/js2/home.css') }}">
        <title>Home</title>
    </head>
    <body>
        <div>
            <h1>Point of Sale</h1>
            <hr>
            <h2><i>Welcome..</i></h2>
            <p>This is home page of our website <br><br>
            Product category:
            <div class=".container">
                <div class="box">
                    <a href="{{url('/category/food-beverage')}}">Food beverage</a>
                </div>
                <div class="box" col-lg-3>
                    <a href="{{url('/category/beauty-health')}}">Beauty health</a>
                </div>
                <div class="box">
                    <a href="{{url('/category/home-care')}}">Home care</a>
                </div>
                <div class="box">
                    <a href="{{url('/category/baby-kid')}}">Baby kid</a>
                </div>
            </div>
            </p>
        </div>
    </body>
</html>