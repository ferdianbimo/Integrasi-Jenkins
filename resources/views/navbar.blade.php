<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<!-- Navbar Start -->
<div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
        <div class="col-lg-6 px-5 text-start">
            <small><i class="fa fa-map-marker-alt text-primary me-2"></i>67 Asih Street, Surabaya</small>
            <small class="ms-4"><i class="fa fa-clock text-primary me-2"></i>07.00 - 20.00 WIB</small>
        </div>
        <div class="col-lg-6 px-5 text-end">
            <small><i class="fa fa-envelope text-primary me-2"></i>siapdonor@gmail.com</small>
            <small class="ms-4"><i class="fa fa-phone-alt text-primary me-2"></i>+62 899-1299-1399</small>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="/" class="navbar-brand ms-4 ms-lg-0">
            <h1 class="display-5 text-primary m-0">SiapDonor</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a>
                <a href="{{ route('information') }}" class="nav-item nav-link">Information</a>
                <a href="{{ route('donation') }}" class="nav-item nav-link">Blood Donation</a>
                <a href="/" class="nav-item nav-link">Login</a>
                {{-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu border-light m-0">
                        <a href="project.html" class="dropdown-item">Projects</a>
                        <a href="feature.html" class="dropdown-item">Features</a>
                        <a href="team.html" class="dropdown-item">Team Member</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link">Contact</a> --}}
            </div>
        </div>
    </nav>
</div>
<!-- Navbar End -->
</body>
