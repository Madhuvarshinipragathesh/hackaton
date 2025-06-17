<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>MultiServe - Shop & Dine Smarter</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      scroll-behavior: smooth;
    }

    /* === Dual Hero Section === */
    .hero-dual {
      display: flex;
      height: 100vh;
      overflow: hidden;
    }

    .hero-left,
    .hero-right {
      flex: 1;
      color: white;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 3rem;
      position: relative;
    }

    .hero-left {
      background: url('sho.jpg') center/cover no-repeat;
    }

    .hero-right {
      background: url('food 1.jpg') center/cover no-repeat;
    }

    .hero-left::before,
    .hero-right::before {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(0, 0, 0, 0.5);
      z-index: 0;
    }

    .hero-left > *,
    .hero-right > * {
      position: relative;
      z-index: 1;
    }

    .hero-left h1,
    .hero-right h1 {
      font-size: 3rem;
      font-weight: 700;
      text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.7);
      margin-bottom: 1rem;
    }

    .hero-left p,
    .hero-right p {
      font-size: 1.3rem;
      font-weight: 500;
      text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.7);
      margin-bottom: 2rem;
    }

    .hero-left .btn,
    .hero-right .btn {
      font-weight: 600;
      padding: 0.75rem 2rem;
      border-radius: 30px;
      transition: background-color 0.3s ease;
    }

    .hero-left .btn:hover,
    .hero-right .btn:hover {
      background-color: #6a1b9a;
      color: white;
    }

    .navbar-brand span {
      color: #5b146e;
      font-weight: bold;
    }

    .feature-card {
      opacity: 0;
      transform: translateY(40px);
      transition: opacity 0.6s ease-out, transform 0.6s ease-out;
      cursor: pointer;
    }

    .feature-card.visible {
      opacity: 1;
      transform: translateY(0);
    }

    .feature-card:hover {
      transform: scale(1.05);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
      transition: all 0.3s ease;
      z-index: 10;
    }

    .cta {
      background-color: #5b146e;
      color: white;
      padding: 50px 20px;
      text-align: center;
    }

    .cta .btn {
      background-color: white;
      color: #5b146e;
      font-weight: bold;
      border-radius: 30px;
      padding: 0.75rem 2.5rem;
      font-size: 1.25rem;
    }

    .footer {
      background: #212529;
      color: #fff;
      padding: 30px 0;
      text-align: center;
    }

    .testimonials {
      background-color: #f8f9fa;
      padding: 50px 20px;
    }

    .testimonial {
      padding: 20px;
      border-radius: 10px;
      background: white;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      height: 100%;
    }

    @media (max-width: 768px) {
      .hero-dual {
        flex-direction: column;
        height: auto;
      }

      .hero-left,
      .hero-right {
        min-height: 50vh;
      }

      .hero-left h1,
      .hero-right h1 {
        font-size: 2rem;
      }
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
  <div class="container">
    <a class="navbar-brand" href="#"><span>MultiServe</span> Platform</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#features">Services</a></li>
        <li class="nav-item"><a class="nav-link" href="#testimonials">Reviews</a></li>
        <li class="nav-item"><a class="btn btn-light ms-2" href="login.html">Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<section class="hero-dual">
  <div class="hero-left">
    <h1>Shop Smart, Live Easy</h1>
    <p>Your ultimate shopping destination — from groceries to gadgets.</p>
    <a href="onlineshop.html" class="btn btn-light btn-lg">Start Shopping</a>
  </div>
  <div class="hero-right">
    <h1>Delicious Food Delivered</h1>
    <p>Enjoy fresh meals from local favorites without leaving home.</p>
    <a href="fooddeli.html" class="btn btn-light btn-lg">Order Food</a>
  </div>
</section>

<!-- Features Section -->
<section id="features" class="py-5 container">
  <div class="text-center mb-5">
    <h2 class="fw-bold">What We Offer</h2>
    <p class="text-muted">Smart services tailored to your daily needs</p>
  </div>
  <div class="row g-4">
    <div class="col-md-4">
      <div class="card feature-card h-100 text-center">
        <a href ="onlineshop.html"></a>
        <img src="s.jpg" class="card-img-top" alt="Shopping" />
        <div class="card-body">
          <h5 class="card-title">Online Shopping</h5>
          <p class="card-text">Order groceries, clothes, and more from trusted stores at your fingertips.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card feature-card h-100 text-center">
        <a href="fooddeli.html"></a>
        <img src="index f.png" class="card-img-top" alt="Food Delivery" />
        <div class="card-body">
          <h5 class="card-title">Food Delivery</h5>
          <p class="card-text">Delicious meals from your favorite restaurants delivered fast & fresh.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card feature-card h-100 text-center">
        <img src="track.jpg" class="card-img-top" alt="Live Tracking" />
        <div class="card-body">
          <h5 class="card-title">Live Order Tracking</h5>
          <p class="card-text">Stay updated with real-time tracking of every purchase or order.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Parallax Section Below Features -->
<section class="parallax-container d-flex mt-5">
  <div class="parallax parallax-left"></div>
  <div class="parallax parallax-right"></div>
</section>

<style>
  .parallax-container {
    height: 400px;
    width: 100%;
    display: flex;
  }

  .parallax {
    flex: 1;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }

  .parallax-left {
    background-image: url('ta.jpg');
  }

  .parallax-right {
    background-image: url('shopy.jpg');
  }

  @media (max-width: 768px) {
    .parallax-container {
      flex-direction: column;
      height: 800px;
    }

    .parallax {
      height: 50%;
      background-attachment: scroll;
    }
  }
</style>

<!-- Testimonials -->
<section id="testimonials" class="testimonials">
  <div class="container">
    <div class="text-center mb-4">
      <h2>What Users Say</h2>
    </div>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="testimonial">
          <p>“I love how convenient MultiServe is! I shop and order dinner without switching apps.”</p>
          <h6>- Ayesha R., College Student</h6>
        </div>
      </div>
      <div class="col-md-4">
        <div class="testimonial">
          <p>“Super intuitive and reliable. My food always arrives hot and fast.”</p>
          <h6>- Rahul M., Office Worker</h6>
        </div>
      </div>
      <div class="col-md-4">
        <div class="testimonial">
          <p>“This platform is a lifesaver during exams. Quick shopping + energy snacks = win.”</p>
          <h6>- Simran P., Engineering Student</h6>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Call to Action -->
<section class="cta">
  <h2 class="mb-3">Ready to Experience Convenience?</h2>
  <p class="lead mb-4">Download the app or sign up to get started!</p>
  <a href="signup.php" class="btn btn-lg">Join Now</a>
</section>

<!-- Footer -->
<footer class="footer">
  <p>&copy; 2025 MultiServe. Built with 💖 at the Hackathon.</p>
</footer>

<script>
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', e => {
      e.preventDefault();
      const target = document.querySelector(anchor.getAttribute('href'));
      if (target) {
        target.scrollIntoView({ behavior: 'smooth' });
      }
    });
  });

  function revealCards() {
    document.querySelectorAll('.feature-card').forEach(card => {
      const rect = card.getBoundingClientRect();
      if (rect.top < window.innerHeight - 100) {
        card.classList.add('visible');
      }
    });
  }

  window.addEventListener('scroll', revealCards);
  window.addEventListener('load', revealCards);
</script>

</body>
</html>