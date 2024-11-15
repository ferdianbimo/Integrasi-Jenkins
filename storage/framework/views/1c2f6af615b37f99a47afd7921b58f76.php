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
                    <img class="w-100" src="img/heading.png" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-8">
                                    <p
                                        class="d-inline-block border border-white rounded text-primary fw-semi-bold py-1 px-3 animated slideInDown">
                                        Welcome to SiapDonor</p>
                                    <h1 class="display-1 mb-4 animated slideInDown">Donation
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

    <!-- Facts Start -->
    
    <!-- Facts End -->

    <div class="container mt-4">
        <div class="row mb-0">
            <div class="col-lg-9 col-xl-10">
                <h2 class="mb-3">Available Donators</h4>
            </div>
            <div class="col-lg-3 col-xl-2">
                <div class="d-grid gap-2">
                    <a href="" class="btn btn-primary">Create Donors</a>
                </div>
            </div>
        </div>
        <div class="table-responsive border p-3 rounded-3">
            <table class="table table-bordered table-hover table-striped mb-0 bg-white datatable" id="donorTable">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Age</th>
                        <th>Blood Type</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>

        </div>
    </div>
    <div class="col-lg-9 col-xl-10">
        <h2 class="mb-3">
            </h4>
    </div>
    
</body>

<?php $__env->startPush('scripts'); ?>
    <script type="module">
        $(document).ready(function() {
            $("#donorTable").DataTable({
                serverSide: true,
                processing: true,
                ajax: "/getDonors",
                columns: [{
                        data: "DT_RowIndex",
                        name: "DT_RowIndex",
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: "firstname",
                        name: "firstname"
                    },
                    {
                        data: "lastname",
                        name: "lastname"
                    },
                    {
                        data: "email",
                        name: "email"
                    },
                    {
                        data: "gender",
                        name: "gender"
                    },
                    {
                        data: "age",
                        name: "age"
                    },
                    {
                        data: "bloodtype.type",
                        name: "bloodtype.type"
                    },
                    { data: "action", name: "action", orderable: false, searchable: false },
                ],
                order: [
                    [0, "desc"]
                ],
                lengthMenu: [
                    [10, 25, 50, 100, -1],
                    [10, 25, 50, 100, "All"],
                ],
            });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\siapdonor\resources\views/donation.blade.php ENDPATH**/ ?>