<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('css/js2/homecare.css') }}">
    <title>Home care</title>
</head>
<body>
    <div class="pos-container">
        <h1>Home Care</h1>
        <hr>
        <section class="special-offers">
            <h2>Special Offers</h2>
            <div class="offer-banner">
                <div class="offer-details">
                    <h3>Buy 1 Get 1 Free</h3>
                    <p>On selected home care products. Limited time offer!</p>
                    <button>Shop Now</button>
                </div>
            </div>
        </section>

        <section class="categories">
            <h2>Product Categories</h2>
            <div class="category-grid">
                <div class="category-card">
                    <img src="{{ asset('images/js2/cleaning-supplies.png') }}" alt="Cleaning Supplies">
                    <h3><a href="">Cleaning Supplies</a></h3>
                </div>
                <div class="category-card">
                    <img src="{{ asset('images/js2/shelf.png') }}" alt="Home Decor">
                    <h3><a href="">Home Decor</a></h3>
                </div>
            </div>
        </section>
    </div>
</body>
</html>