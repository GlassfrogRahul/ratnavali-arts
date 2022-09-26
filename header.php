<nav class="navbar navbar-light">
    <div class="container-lg d-flex align-items-center">
        <a class="navbar-brand" href="index.php">
            <img src="./asssets/images/logo-wide.png" width="200" height="auto" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <img src="./asssets/images/menu-logo.png" width="35" height="35" alt="Menu Logo">
            <span>MENU</span>
        </button>

        <?php
        if (isset($user)) {
        ?>
            <div class="nav-item dropdown position-relative mr-auto ml-lg-auto mr-lg-5 mr-lg-0">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="./asssets/svg/User.svg" width="30" height="30" alt="">
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="profile.php">Profile</a>
                    <a class="dropdown-item" href="user-dashboard.php">Appointments</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
            </div>
        <?php
        } else {
        ?>
            <a href="./login.php" class="btn login-button ml-auto -u-bg-brown d-flex align-items-center ">
                <span>Login</span>
                <svg width="25" height="25">
                    <use href="./asssets/svg/sprite.svg#icon-log-in"></use>
                </svg>
            </a>
        <?php
        }
        ?>



        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="container">
                <ul class="navbar-nav ">
                    <li class="nav-item d-lg-none d-flex align-items-center justify-content-center" data-toggle="collapse" onclick="toggleNavbar()">
                        <img src="./asssets/images/menu-logo.png" width="35" height="35" alt="Menu Logo">
                        <span>MENU</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="craftmanship.php">Craftmanship</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="women-empowerment.php">Women Empowerment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item -u-bg-brown mt-5 mt-lg-0">
                        <a class="btn mb-0 px-4 py-2" style="font-size: 1.4rem;color: #fff;border: 0;" href="video-call.php">Book Appointment</a>
                    </li>

                </ul>
            </div>

        </div>
    </div>
</nav>