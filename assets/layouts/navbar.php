    <!-- Check if the user is logged in -->

        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm p-2">

        <!-- End script -->

            <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm p-2">


            insert_csrf_token();


            <div class="container">
                <a class="navbar-brand" href="../home">

                    <!-- Check if the user is logged in -->
                        <img src="../assets/images/logo.png" alt="" width="50" height="50" class="mr-3">
                    <!-- End script or else -->
                        <img src="../assets/images/logo.png" alt="" width="50" height="50" class="mr-3">
                    <!-- End Else script -->

                    <!-- echo APP NAME -->

                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item">
                            <a class="nav-link" href="../welcome">Welcome</a>
                        </li>

                        <!--- Check if the user is logged in -->

                            <li class="nav-item">
                                <a class="nav-link" href="../contact">Contact Us</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="../login">Login</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="../register">Signup</a>
                            </li>

                        <!-- End script or else -->

                            <li class="nav-item">
                                <a class="nav-link" href="../dashboard">Dashboard</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="../home">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="../contact">Contact Us</a>
                            </li>

                            <div class="dropdown">
                                <button class="btn btn-dark dropdown-toggle" type="button" id="imgdropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img class="navbar-img" src="../assets/uploads/users/<?php echo $_SESSION['profile_image'] ?>">
                                    <span class="caret"></span>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="imgdropdown">
                                    <a class="dropdown-item text-muted" href="../profile"><i class="fa fa-user pr-2"></i> Profile</a>
                                    <a class="dropdown-item text-muted" href="../profile-edit"><i class="fa fa-pencil-alt pr-2"></i> Edit Profile</a>
                                    <a class="dropdown-item text-muted" href="../logout"><i class="fa fa-running pr-2"></i> Logout</a>
                                </div>
                            </div>

                        <!-- End Else script -->





                    </ul>
                </div>
            </div>
            </nav>