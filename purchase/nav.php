<nav class="navbar navbar-expand-lg">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <p class="navbar-text">
            <span>Contact Numbers: <span class="mr-3">123-456-7890</span> <span>987-654-3210</span></span>
        </p>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item" id="loginNavItem">
                <a class="nav-link text-white" data-toggle="modal" data-target="#exampleModal">Login</a>
            </li>
            <li class="nav-item"  id="signupNavItem">
                <a class="nav-link  text-white"  >Sign Up</a>
            </li>
            <li class="nav-item" id="profileNavItem" >
                <a class="nav-link  text-white">My Profile</a>
            </li>

            <li class="nav-item" id="userLogoutNavItem" >
                <a class="nav-link  text-white">Welcome, <span id="loggedInUsername"></span></a>
            </li>
            <li class="nav-item" id="userLogoutNavItem">
                <a class="nav-link text-white" href="purchase_page.php?logout=true">Logout</a>
            </li>
        </ul>
    </div>
</nav>