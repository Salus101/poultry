<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing - Poultry Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Top Header for Contact Information -->
    <header class="top-header">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="contact-info">
                <span><i class="fas fa-map-marker-alt"></i>Poultry Farm Nairobi, Kenya</span>
                <span><i class="fas fa-phone"></i> 0711110000 </span>
                <span><i class="fas fa-envelope"></i> info@poultrysystem.com</span>
            </div>
        </div>
    </header>


    <!-- Pricing Section -->
    <section class="pricing-section">
        <div class="container">
            <h1 class="text-center">Our Pricing Plans</h1>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <h3 class="card-title">Basic Plan</h3>
                            <p class="card-text">Ksh 5000 / month</p>
                            <ul class="list-unstyled">
                                <li>Inventory Management</li>
                                <li>Basic Support</li>
                                <li>Access to Reports</li>
                            </ul>
                            <a href="#" class="btn btn-primary">Select Plan</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <h3 class="card-title">Standard Plan</h3>
                            <p class="card-text">Ksh 17000 / month</p>
                            <ul class="list-unstyled">
                                <li>Inventory Management</li>
                                <li>Advanced Support</li>
                                <li>Custom Reports</li>
                                <li>Feed Scheduling</li>
                            </ul>
                            <a href="#" class="btn btn-primary">Select Plan</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <h3 class="card-title">Premium Plan</h3>
                            <p class="card-text">Ksh 17000 / month</p>
                            <ul class="list-unstyled">
                                <li>All Features of Standard Plan</li>
                                <li>Health Monitoring</li>
                                <li>Priority Support</li>
                                <li>Custom Integrations</li>
                            </ul>
                            <a href="#" class="btn btn-primary">Select Plan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer
    <footer id="footer" class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h5>About Poultry Management System</h5>
                    <p>We provide comprehensive tools to manage, track, and optimize your poultry operations, ensuring that your farm runs efficiently and profitably.</p>
                </div>

                <div class="col-md-4 mb-4">
                    <h5>Contact Us</h5>
                    <p><i class="fas fa-envelope"></i> mypoultryemail.com</p>
                    <p><i class="fas fa-phone"></i> +254711111111 </p>
                    <p><i class="fas fa-map-marker-alt"></i> Poultry Farm Nairobi, Kenya</p>
                </div>

                <div class="col-md-4 mb-4">
                    <h5>Subscribe to Our Newsletter</h5>
                    <form class="d-inline-block mt-3">
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Enter your email">
                            <button type="submit" class="btn btn-primary">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="mt-4">
                <p>&copy; 2024 Poultry Management System. All rights reserved.</p>
            </div>
        </div>
    </footer> -->

    <script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>
