<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('css/js2/food.css') }}">
    <title>Beauty Health</title>
</head>
<body>
    <div class="pos-container">
        <h1>Beauty & Health</h1>
        <hr>
        <section class="special-offers">
            <h2>Special Offers</h2>
            <div class="offer-banner">
                <div class="offer-details">
                    <h3>Buy 2 Get 1 Free</h3>
                    <p>On selected beauty and health products. Limited time offer!</p>
                    <button>Shop Now</button>
                </div>
            </div>
        </section>

        <section class="categories">
            <h2>Product Categories</h2>
            <div class="category-grid">
                <div class="category-card">
                    <img src="{{ asset('images/js2/skincare.png') }}" alt="Skincare">
                    <h3><a href="">Skincare</a></h3>
                </div>
                <div class="category-card">
                    <img src="{{ asset('images/js2/hair.png') }}" alt="Haircare">
                    <h3><a href="">Haircare</a></h3>
                </div>
                <div class="category-card">
                    <img src="{{ asset('images/js2/makeup.png') }}" alt="Makeup">
                    <h3><a href="">Makeup</a></h3>
                </div>
            </div>
        </section>
    </div>
</body>
</html>