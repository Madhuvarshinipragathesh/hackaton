<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Shop Online - MultiServe</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
    }
    .shop-card {
      transition: transform 0.3s ease;
    }
    .shop-card:hover {
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
    <a class="navbar-brand" href="index.html"><strong>MultiServe</strong> Shopping</a>
  </div>
</nav>

<!-- Cart Button -->
<a href="checkout.html" class="btn btn-success cart-btn">View Cart 🛒</a>

<!-- Shopping Items -->
<div class="container my-5">
  <h2 class="text-center mb-4">🛍️ Explore Top Deals</h2>
  <div class="row g-4">

    <!-- Product 1 -->
    <div class="col-md-4">
      <div class="card shop-card h-100">
        <img src="phone.jpg" class="card-img-top" alt="Mobile">
        <div class="card-body">
          <h5 class="card-title">Smartphone</h5>
          <p class="card-text">Latest Android smartphone with AI camera and fast charging.</p>
          <p class="fw-bold">₹14,999</p>
          <button class="btn btn-primary w-100" onclick="addToCart('Smartphone', 14999)">Add to Cart</button>
        </div>
      </div>
    </div>

    <!-- Product 2 -->
    <div class="col-md-4">
      <div class="card shop-card h-100">
        <img src="dress.jpg" class="card-img-top" alt="dress">
        <div class="card-body">
          <h5 class="card-title">Dresses</h5>
          <p class="card-text">💃 "Life isn’t perfect, but your outfit can be."</p>
          <p class="fw-bold">₹99-999</p>
          <button class="btn btn-primary w-100" onclick="addToCart('Smart phone with bluethooth', 1999)">Add to Cart</button>
        </div>
      </div>
    </div>

    <!-- Product 3 -->
    <div class="col-md-4">
      <div class="card shop-card h-100">
        <img src="shoes.jpg" class="card-img-top" alt="Shoes">
        <div class="card-body">
          <h5 class="card-title">Running Shoes</h5>
          <p class="card-text">Lightweight shoes perfect for jogging and gym workouts.</p>
          <p class="fw-bold">₹2,499</p>
          <button class="btn btn-primary w-100" onclick="addToCart('Running Shoes', 2499)">Add to Cart</button>
        </div>
      </div>
    </div>

    <!-- External Redirect Box -->
    <div class="col-md-4">
      <div class="card shop-card h-100 text-center" onclick="redirectToShop()" style="cursor: pointer;">
        <img src="index s.jpg" class="card-img-top" alt="More Deals">
        <div class="card-body">
          <h5 class="card-title">See More on Shopping...</h5>
          <p class="card-text">Tap here to shop from India's top e-commerce sites!</p>
          <p class="fw-bold text-primary">Click to Explore ➡️</p>
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



  function redirectToShop() {
    // Redirect to Flipkart (change to Amazon if needed)
    window.open("https://www.flipkart.com", "_blank");
  }
</script>

</body>
</html>