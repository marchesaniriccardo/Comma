    <?php if (!isset($_SESSION['auth'])) { ?>

        <!-- nav class="navbar navbar-expand-md navbar-light bg-light p-2" -->

        <nav class="navbar navbar-expand-md navbar-transparent bg-transparent p-2 fixed-top">
            <div class="container-fluid">
                    <div class="col-1"></div>
                    <div class="col-3">
                        <a class="navbar-brand mx-auto d-table" href="../index.php">
                            <img class="mr-3" src="../assets/images/logo_intero_w.png" alt="" height="100px">
                        </a>
                    </div>
                    <div class="col-4"></div>
                    <div class="col-3 text-light text-center text-capitalize display-1 font-weight-bold">log-in</div>
                    <div class="col-1"></div>
            </div>

        <?php } else { ?>

            

            <?php } ?>
        </nav>