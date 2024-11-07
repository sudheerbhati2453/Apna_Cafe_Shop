<nav id="sidebar" style="background: linear-gradient(to right, #6a11cb, #2575fc); height: 100vh; transition: all 0.3s ease;">
    <div class="sidebar-header" style="padding: 20px; text-align: center;">
        <h3>
            <img src="../../images/managers/person4.gif" class="img-fluid" style="border-radius: 50%; width: 80px; height: 80px; transition: transform 0.3s;" />
            <h2>ADMIN</h2>
            <span style="color: white; font-size: 1.2rem; display: block; margin-top: 10px;"><?php echo $_SESSION['manager_username'] ?></span>
        </h3>
    </div>

    <ul class="list-unstyled components">
        <li class="active">
            <a href="manager_dashboard.php" class="dashboard" style="color: white; transition: background 0.3s; padding: 15px; display: flex; align-items: center;">
                <i class="material-icons">dashboard</i>
                <span style="margin-left: 10px;">Dashboard</span>
            </a>
        </li>

        <div class="small-screen navbar-display">
            <li class="dropdown d-lg-none d-md-block d-xl-none d-sm-block">
                <a href="#homeSubmenu0" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="color: white; transition: background 0.3s; padding: 15px; display: flex; align-items: center;">
                    <i class="material-icons">notifications</i>
                    <span style="margin-left: 10px;">4 notifications</span>
                </a>
                <ul class="collapse list-unstyled menu" id="homeSubmenu0">
                    <li><a href="#" style="color: white;">You have 5 new messages</a></li>
                    <li><a href="#" style="color: white;">You're now friends with Mike</a></li>
                    <li><a href="#" style="color: white;">Wish Mary on her birthday!</a></li>
                    <li><a href="#" style="color: white;">5 warnings in Server Console</a></li>
                </ul>
            </li>

            <li class="d-lg-none d-md-block d-xl-none d-sm-block">
                <a href="#" style="color: white; transition: background 0.3s; padding: 15px; display: flex; align-items: center;">
                    <i class="material-icons">apps</i>
                    <span style="margin-left: 10px;">Apps</span>
                </a>
            </li>

            <li class="d-lg-none d-md-block d-xl-none d-sm-block">
                <a href="#" style="color: white; transition: background 0.3s; padding: 15px; display: flex; align-items: center;">
                    <i class="material-icons">person</i>
                    <span style="margin-left: 10px;">User</span>
                </a>
            </li>

            <li class="d-lg-none d-md-block d-xl-none d-sm-block">
                <a href="#" style="color: white; transition: background 0.3s; padding: 15px; display: flex; align-items: center;">
                    <i class="material-icons">settings</i>
                    <span style="margin-left: 10px;">Settings</span>
                </a>
            </li>
        </div>

        <li>
            <a href="manager_menu.php" style="color: white; transition: background 0.3s; padding: 15px; display: flex; align-items: center;">
                <i class="material-icons">menu_book</i>
                <span style="margin-left: 10px;">Menu Categories</span>
            </a>
        </li>

        <li>
            <a href="manager_menuItems.php" style="color: white; transition: background 0.3s; padding: 15px; display: flex; align-items: center;">
                <i class="material-icons">coffee</i>
                <span style="margin-left: 10px;">Menu Items</span>
            </a>
        </li>

        <li>
            <a href="manager_toppingsCategory.php" style="color: white; transition: background 0.3s; padding: 15px; display: flex; align-items: center;">
                <i class="material-icons">menu</i>
                <span style="margin-left: 10px;">Toppings Categories</span>
            </a>
        </li>

        <li>
            <a href="manager_toppings.php" style="color: white; transition: background 0.3s; padding: 15px; display: flex; align-items: center;">
                <i class="material-icons">widgets</i>
                <span style="margin-left: 10px;">Toppings Items</span>
            </a>
        </li>

        <li>
            <a href="manager_addOffers.php" style="color: white; transition: background 0.3s; padding: 15px; display: flex; align-items: center;">
                <i class="material-icons">menu</i>
                <span style="margin-left: 10px;">Offers</span>
            </a>
        </li>
    </ul>
</nav>

<style>
/* Sidebar link hover effect */
#sidebar a:hover {
    background: rgba(255, 255, 255, 0.2); /* Lighten background on hover */
    border-radius: 5px; /* Add border radius */
}

/* Sidebar header hover effect */
.sidebar-header h3 img:hover {
    transform: scale(1.1); /* Scale the profile image on hover */
}
</style>
