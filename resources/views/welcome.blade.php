<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poultry Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"> <!-- Font Awesome CDN -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

    <!-- Header -->
    <header>
        <div class="container d-flex align-items-center justify-content-between">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-black text-decoration-none">
                <img src="{{ asset('logo.jpg') }}" alt="Poultry Logo" height="40">
            </a>
            <ul class="nav">
                <li><a href="#" class="nav-link px-2">Home</a></li>
                <li><a href="#" class="nav-link px-2">Features</a></li>
                <li><a href="#" class="nav-link px-2">Pricing</a></li>
                <li><a href="#" class="nav-link px-2">Contact</a></li>
            </ul>
            <div class="social-icons">
                <a href="https://facebook.com" class="text-black mx-2" title="Facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://twitter.com" class="text-black mx-2" title="Twitter">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="https://linkedin.com" class="text-black mx-2" title="LinkedIn">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a href="https://instagram.com" class="text-black mx-2" title="Instagram">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <h1 class="display-4">Manage Your Poultry Farm with Ease</h1>
                <p class="lead">Track, Analyze, and Improve Your Poultry Operations</p>
                <a href="#" class="btn btn-outline-light">Purchase Now</a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-4">
                <i class="fas fa-boxes fa-3x mb-3"></i> <!-- Inventory Management Icon -->
                <h3>Inventory Management</h3>
                <p>Keep track of your poultry stock and resources.</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-calendar-check fa-3x mb-3"></i> <!-- Feed Scheduling Icon -->
                <h3>Feed Scheduling</h3>
                <p>Automate and manage your feed schedule effectively.</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-heartbeat fa-3x mb-3"></i> <!-- Health Monitoring Icon -->
                <h3>Health Monitoring</h3>
                <p>Monitor the health of your poultry and receive alerts.</p>
            </div>
        </div>
    </div>
</section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>Contact us: +1 234 567 890 | info@poultrysystem.com</p>
            <p>Follow us on: 
                <a href="#" class="text-white ms-2">Facebook</a> | 
                <a href="#" class="text-white ms-2">Twitter</a> | 
                <a href="#" class="text-white ms-2">LinkedIn</a>
            </p>
            <form class="d-inline-block mt-3">
                <input type="email" class="form-control" placeholder="Enter your email">
                <button type="submit" class="btn btn-primary mt-2">Subscribe</button>
            </form>
        </div>
    </footer>

</body>
</html>
