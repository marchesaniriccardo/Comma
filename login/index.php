<?php

define('TITLE', "Comma - Login");
include '../assets/layouts/header.php';
check_logged_out();
?>

<div class="centered-axis-x">
    <img src="../assets/images/logo_intero_w.png" alt="" height="100px">
</div>

<div class="row h-100">
    <!--- Left Column --->
    <div class="col-lg-6 col-md-12" id="left_col">

    </div>
    <!-- Right Column -->
    <div class="row col-lg-6 col-md-12" id="right_col">
        <div class="col-2" id=""></div>
        <div class="col-8" id="">
            <form class="form-auth" action="../includes/login_include" method="POST">
                <?php insert_csrf_token(); ?>
                <div class="form-group">
                    <label for="username" class="sr-only text-light">Username</label>
                    <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
                    <sub class="text-danger">
                        <?php
                            if (isset($_SESSION['ERRORS']['nouser']))
                                echo $_SESSION['ERRORS']['nouser'];
                        ?>
                    </sub>
                </div>
            </form>
        </div>
        <div class="col-2" id=""></div>
    </div>
</div>



<?php

include '../assets/layouts/footer.php'

?>