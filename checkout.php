<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Checkout - MultiServe</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f8f9fa;
    }
    .checkout-card {
      max-width: 800px;
      margin: 40px auto;
    }
    .checkout-summary {
      background: #fff;
      border-radius: 10px;
      padding: 30px;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
    }
    .form-control:focus {
      box-shadow: none;
      border-color: #5b146e;
    }
    .btn-checkout {
      background-color: #5b146e;
      color: white;
      font-weight: bold;
    }
    .btn-checkout:hover {
      background-color: #451156;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="index.html"><strong>MultiServe</strong> Checkout</a>
  </div>
</nav>

<!-- Checkout Content -->
<div class="container checkout-card">
  <div class="checkout-summary">
    <h3 class="mb-4 text-center">🛒 Checkout</h3>

    <!-- Cart Summary -->
    <h5>Your Cart:</h5>
    <ul class="list-group mb-4" id="cart-list">
      <!-- Items will be added here by JavaScript -->
    </ul>

    <!-- User Form -->
    <form id="checkout-form">
      <div class="mb-3">
        <label for="fullName" class="form-label">Full Name</label>
        <input type="text" class="form-control" id="fullName" required />
      </div>

      <div class="mb-3">
        <label for="address" class="form-label">Delivery Address</label>
        <textarea class="form-control" id="address" rows="2" required></textarea>
      </div>

      <div class="mb-3">
        <label for="phone" class="form-label">Mobile Number</label>
        <input type="tel" class="form-control" id="phone" required />
      </div>

      <div class="mb-3">
        <label for="payment" class="form-label">Payment Method</label>
        <select class="form-select" id="payment" required>
          <option value="cod">Cash on Delivery</option>
          <option value="upi">UPI</option>
          <option value="card">Credit/Debit Card</option>
        </select>
      </div>

      <!-- Submit Button -->
      <button type="submit" class="btn btn-checkout w-100">Place Order</button>
    </form>
  </div>
</div>

<script>
  // Load cart from localStorage
  let cartItems = JSON.parse(localStorage.getItem('cart')) || [];

  const cartList = document.getElementById('cart-list');
  let total = 0;

  if (cartItems.length === 0) {
    cartList.innerHTML = `<li class="list-group-item">Your cart is empty.</li>`;
  } else {
    cartItems.forEach(item => {
      total += item.price;
      const li = document.createElement('li');
      li.className = 'list-group-item d-flex justify-content-between align-items-center';
      li.textContent = item.name;
      const span = document.createElement('span');
      span.textContent = `₹${item.price}`;
      li.appendChild(span);
      cartList.appendChild(li);
    });

    // Total
    const totalLi = document.createElement('li');
    totalLi.className = 'list-group-item d-flex justify-content-between align-items-center fw-bold';
    totalLi.innerHTML = `Total <span>₹${total}</span>`;
    cartList.appendChild(totalLi);
  }

  // Handle Order Submit
  document.getElementById('checkout-form').addEventListener('submit', function(e) {
    e.preventDefault();

    if (cartItems.length === 0) {
      alert("Your cart is empty!");
      return;
    }

    alert("🎉 Order placed successfully! Thank you for shopping with MultiServe.");
    localStorage.removeItem('cart'); // Clear cart
    window.location.href = "index.html"; // Go back to homepage
  });
</script>

</body>
</html>