<nav class="navbar navbar-expand navbar bg-dark topbar mb-4 static-top shadow">
    <button id="sidebarTogglerTop" class="btn btn-link d-md none rounded circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <ul class="navbar-nav ml-auto">
        <div class="topbar-divider d-none d-sm-block"></div>
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="logout.php" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expaded="false">
                <span class="mr-2 d-none d-lg text-primary-900 small"></span>
                <img class="img-profile rounded-circle" src="assets/image/userlogo.png">
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
            <i class='fa fa-sign-out-alt'></i>&nbsp;<a href="logout.php" onClick="return confirm('Are you sure want to logged out!!')">Logout</a>
            </div>
        </li>
    </ul>
</nav>
