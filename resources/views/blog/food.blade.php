<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('css/js2/food.css') }}">
    <title>Food beverage</title>
</head>
<body>
    <div class="container">
        <h1>Food & Beverages</h1>
        <hr>
        <section class="special-offers">
            <h2>Special Offers</h2>
            <div class="offer-banner">
                <div class="offer-details">
                    <h3>Buy 1 Get 1 Free</h3>
                    <p>On selected snacks and beverages. Limited time offer!</p>
                    <button>Shop Now</button>
                </div>
            </div>
        </section>

        <section class="categories">
            <h2>Product Categories</h2>
            <div class="category-grid">
                <div class="category-card">
                    <img src="{{ asset('images/js2/snacks.png') }}" alt="Snacks" >
                    <h3><a href="">Snacks</a></h3>
                </div>
                <div class="category-card">
                    <img src="{{ asset('images/js2/dairy.png')}}" alt="">
                    <h3><a href="">Dairy Products</a></h3>
                </div>
                <div class="category-card">
                    <img src="{{ asset('images/js2/bakery.png')}}" alt="">
                    <h3><a href="">Bakery</a></h3>
                </div>
                <div class="category-card">
                    <img src="{{ asset('images/js2/drinks.png')}}" alt="">
                    <h3><a href="">Drinks</a></h3>
                </div>
            </div>
        </section>
    </div>
</body>
</html>