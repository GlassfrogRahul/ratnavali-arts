<!-- Button trigger modal -->
<button type="button" class="btn btn-primary d-none" data-toggle="modal" data-target="#exampleModal" id="modal-button">
    Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content pb-3">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body d-flex flex-column align-items-center">

                <img class="mb-5" src="asssets/images/monogram.png" width="30" height="30" alt="">
                <h5 class="modal-title h3 text-center -u-color-brown w-100 mb-3" id="modal-title">Modal title</h5>

                <img class="notification mb-5" src="asssets/svg/Notification.svg" alt="">

                <p class="text-center p2 px-5 mb-3" id="modal-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, dolore!</p>

            </div>
            <div class="modal-footer d-flex align-items-center justify-content-center pb-5">
                <button type="button" class="btn btn-secondary p2" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>













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
                        <a class="nav-link" href="craftmanship.php">Craftsmanship</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="women-empowerment.php">Women Empowerment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="https://blogs.ratnavaliarts.com">Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item align-self-stretch">
                        <div id="google_translate_element"></div>
                    </li>
                    <li class="nav-item mt-5 mt-lg-0">
                        <a class="btn mb-0 px-4 py-2" style="font-size: 1.4rem;color: #fff;border: 0;" href="book-appointment.php">Book Appointment</a>
                    </li>

                </ul>
            </div>

        </div>
    </div>
</nav>