<div class="top-navbar" style="background: linear-gradient(to right, #ff758c, #ff7eb3); box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);">
    <nav class="navbar navbar-expand-lg" style="padding: 10px;">
        <div class="container-fluid">
            <button type="button" id="sidebarCollapse" class="d-xl-block d-lg-block d-md-mone d-none" style="border: none; background: transparent; cursor: pointer; transition: transform 0.3s;">
                <span class="material-icons" style="font-size: 24px; color: white; transition: transform 0.3s;">arrow_back_ios</span>
            </button>
            
            <a class="navbar-brand" href="#" style="color: white; font-size: 1.5rem; font-weight: bold;"> <?php echo $section ?> </a>
            
            <button class="d-inline-block d-lg-none ml-auto more-button" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
                style="border: none; background: transparent; color: white;">
                <span class="material-icons" style="font-size: 24px;">more_vert</span>
            </button>

            <div class="collapse navbar-collapse d-lg-block d-xl-block d-sm-none d-md-none d-none" id="navbarSupportedContent">
                <ul class="nav navbar-nav ml-auto">   
                    <li class="dropdown nav-item active">
                        <a href="#" class="nav-link" data-toggle="dropdown" style="color: white; transition: color 0.3s;">
                           <span class="material-icons" style="font-size: 24px;">notifications</span>
                           <span class="notification" style="background: red; color: white; border-radius: 50%; padding: 2px 5px; font-size: 12px; position: absolute; top: 0; right: 0;">0</span>
                       </a>
                    </li>

                    <li class="nav-item" id="logout" style="position: relative;">
                        <a class="nav-link" href="../logout.php" style="color: white; transition: color 0.3s; position: relative;">
                            logout
                            <span class="logout-animation" style="position: absolute; left: 50%; bottom: -2px; width: 0; height: 2px; background: white; transition: width 0.3s, left 0.3s;"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<style>

#logout a:hover {
    color: #ff7eb3; 
}

/* Animation effect on hover */
#logout a:hover .logout-animation {
    width: 100%;
    left: 0; 
}

#sidebarCollapse:hover {
    transform: scale(1.1);
}
</style>
