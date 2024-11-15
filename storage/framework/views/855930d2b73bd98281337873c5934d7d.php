<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo e($pageTitle); ?></title>
</head>
<body>
    
    

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/heading2.png" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-8">
                                    <p class="d-inline-block border border-white rounded text-primary fw-semi-bold py-1 px-3 animated slideInDown">
                                        Welcome to SiapDonor</p>
                                    <h1 class="display-1 mb-4 animated slideInDown">Information
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    

     <!-- Features Start -->
     <div class="container-xxl feature py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Why Donation ?</p>
                    <h1 class="display-5 mb-4">Reasons Why You Should to Donate your Blood !</h1>
                    <p class="mb-4">Blood donation is an activity that provides a number of health benefits.
                         Some of the benefits of donating blood range from increasing red blood cell production to maintaining heart health.
                    </p>
                    <a class="btn btn-primary py-3 px-5" href="https://www.halodoc.com/artikel/ini-9-manfaat-donor-darah-secara-rutin-untuk-kesehatan">Explore More</a>
                </div>
                <div class="col-lg-6">
                    <div class="row g-4 align-items-center">
                        <div class="col-md-6">
                            <div class="row g-4">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                    <div class="feature-box border rounded p-4">
                                        <i class="fa fa-check fa-3x text-primary mb-3"></i>
                                        <h4 class="mb-3">Reduce The Risks of Cancer</h4>
                                        <p class="mb-3">The main trigger for cancer cells is exposure to free radicals in the body.
                                            Well, this substance usually accumulates in your blood circulation.
                                             By doing so, the risk of cancer can be minimized.</p>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="feature-box border rounded p-4">
                                        <i class="fa fa-check fa-3x text-primary mb-3"></i>
                                        <h4 class="mb-3">Increase Blood Cells Productions</h4>
                                        <p class="mb-3">Someone who donates blood regularly, their body will stimulate the formation of new,
                                             fresh blood. This process can make you healthier.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeIn" data-wow-delay="0.7s">
                            <div class="feature-box border rounded p-4">
                                <i class="fa fa-check fa-3x text-primary mb-3"></i>
                                <h4 class="mb-3">Detect Disease Early</h4>
                                <p class="mb-3">Before you can donate blood, of course you have to go through a number of examinations.
                                    The standard procedure is a blood test to detect serious illnesses.
                                    There are several tests that you need to do, such as HIV, syphilis, hepatitis B, hepatitis C, and malaria.
                                    The aim is to prevent disease transmission through blood transfusions.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/recipient.png" alt="Image">
                    
                </div>
            </div>
        </div>
    </div>


    
</body>

<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\siapdonor\resources\views/information.blade.php ENDPATH**/ ?>