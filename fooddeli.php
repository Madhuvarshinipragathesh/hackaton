<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Order Food - MultiServe</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
    }
    .food-card {
      transition: transform 0.3s ease;
    }
    .food-card:hover {
      transform: scale(1.02);
      box-shadow: 0 8px 16px rgba(0,0,0,0.15);
    }
    .cart-btn {
      position: fixed;
      top: 20px;
      right: 20px;
      z-index: 999;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="index.html"><strong>MultiServe</strong> Food</a>
  </div>
</nav>

<!-- Cart Button -->
<a href="checkout.html" class="btn btn-success cart-btn">View Cart 🛒</a>

<!-- Food Items -->
<div class="container my-5">
  <h2 class="text-center mb-4">🍔 Order Your Favorite Food</h2>
  <div class="row g-4">

    <!-- Food Item 1 -->
    <div class="col-md-4">
      <div class="card food-card h-100">
        <img src="burger.jpg" class="card-img-top" alt="Burger">
        <div class="card-body">
          <h5 class="card-title">Cheesy Burger</h5>
          <p class="card-text">Delicious double patty burger with cheese and lettuce.</p>
          <p class="fw-bold">₹120</p>
          <button class="btn btn-primary w-100" onclick="addToCart('Cheesy Burger', 120)">Add to Cart</button>
        </div>
      </div>
    </div>

    <!-- Food Item 2 -->
    <div class="col-md-4">
      <div class="card food-card h-100">
        <img src="pizza.jpg" class="card-img-top" alt="Pizza">
        <div class="card-body">
          <h5 class="card-title">Veggie Pizza</h5>
          <p class="card-text">Loaded with fresh veggies and mozzarella cheese.</p>
          <p class="fw-bold">₹250</p>
          <button class="btn btn-primary w-100" onclick="addToCart('Veggie Pizza', 250)">Add to Cart</button>
        </div>
      </div>
    </div>

    <!-- Food Item 3 -->
    <div class="col-md-4">
      <div class="card food-card h-100">
        <img src="bir.jpg" class="card-img-top" alt="Noodles">
        <div class="card-body">
          <h5 class="card-title">Biryani</h5>
          <p class="card-text">"Biryani – the only love triangle I want in life: rice, meat, and spice!"</p>
          <p class="fw-bold">₹150</p>
          <button class="btn btn-primary w-100" onclick="addToCart('Biryani', 150)">Add to Cart</button>
        </div>
      </div>
    </div>

    <!-- Explore More Card -->
    <div class="col-md-4">
      <div class="card food-card h-100 text-center">
        <img src="index f.png" class="card-img-top" alt="More Options">
        <div class="card-body">
          <h5 class="card-title">Looking for More?</h5>
          <p class="card-text">Explore more restaurants & dishes on us....</p>
            <a href="https://www.zomato.com" target="_blank" class="btn btn-danger w-100">Go to MORE</a>
        </div>
      </div>
    </div>

  </div>
</div>
<script>
  function addToCart(item, price) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    cart.push({ name: item, price: price });
    localStorage.setItem('cart', JSON.stringify(cart));
    alert(`${item} added to cart!`);
  }
</script>


</body>
</html>