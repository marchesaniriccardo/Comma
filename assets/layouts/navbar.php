    <?php if (!isset($_SESSION['auth'])) { ?>

        <!-- nav class="navbar navbar-expand-md navbar-light bg-light p-2" -->

        <nav class="navbar navbar-expand-md navbar-transparent bg-transparent p-2">
            <div class="container width-100">
                    <div class="col-1"></div>
                    <div class="col-3">
                        <a class="navbar-brand mx-auto d-table" href="../index.php">
                            <img class="mr-3" src="../assets/images/logo_intero_w.png" alt="Dio bubu" height="100px">
                        </a>
                    </div>
                    <div class="col-4"></div>
                    <div class="col-3 text-light text-center text-capitalize">log-in</div>
                    <div class="col-1"></div>
            </div>

        <?php } else { ?>

            

            <?php } ?>
        </nav>