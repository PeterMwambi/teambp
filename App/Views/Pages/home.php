<?php

use Models\Core\App\Utilities\Url;

?>

<!DOCTYPE html>
<html lang="en">
<?php require_once(Url::GetPath("app/views/includes/meta/head.php")); ?>

<body>


    <section class="container-fluid">

        <div class="d-flex justify-content-center">
            <h1 class="my-5 animate__animated animate__fadeIn"><em>Welcome to Kenya's Largest Software Developers
                    Network</em></h1>
        </div>
        <div class="row">
            <div class="col-lg-6 animate__animated animate__slideInLeft">
                <div class="d-flex justify-content-center">
                    <img src="<?php echo Url::GetReference("resources/assets/images/png/employee.png") ?>"
                        class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6 animate__animated animate__slideInRight">
                <div class="d-flex justify-content-center mt-5">
                    <h3><em>Are you tired of the hustle ? </em></h3>
                </div>

                <div class="d-flex justify-content-center mt-3">
                    <h5>Don't stress out. We are here to help you</h3>
                </div>
                <div class="d-flex justify-content-center mt-3">
                    <h6><b>We introduce the fastest way to get you noticed</b></h6>
                </div>
                <div class="d-flex justify-content-center">
                    <h6 class="text-muted text-center col-lg-6 col-9">We connect you to your dream company in very
                        few steps, and right
                        at
                        the
                        click of a
                        button
                    </h6>
                </div>
                <div class="d-flex justify-content-center mt-3">
                    <em class="me-2"><strong>Its Simple !</strong></em>
                    <em class="me-2"><strong>Its Reliable !</strong></em>
                    <em class="me-2"><strong>Its Fast !</strong></em>
                </div>

                <div class="d-flex justify-content-center mt-3">
                    <div>
                        <a class="btn btn-success" href="member-registration">Get Started &raquo;</a>
                    </div>
                    <div class="mx-3">
                        <a class="btn btn-primary" href="javascript:void(0)">Find out more &raquo;</a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <?php require_once(Url::GetPath("app/views/includes/meta/scripts.php")); ?>
</body>

</html>