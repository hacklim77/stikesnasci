<div class="main-panel ps-container ps-theme-default ps-active-y">   
<nav class="navbar navbar-transparent navbar-absolute">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?= base_url('admin_stksn'); ?>"> Admin Dashboard </a>
            
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><h5><?= $admin['nama_admin'] ?></h5></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="material-icons">notifications</i>
                        <!-- <span class="notification">5</span> -->
                        <p class="hidden-lg hidden-md">Notifications</p>
                    </a>
                    <!-- <ul class="dropdown-menu">
                        <li>
                            <a href="#">Mike John responded to your email</a>
                        </li>
                        <li>
                            <a href="#">You have 5 new tasks</a>
                        </li>
                        <li>
                            <a href="#">You're now friend with Andrew</a>
                        </li>
                        <li>
                            <a href="#">Another Notification</a>
                        </li>
                        <li>
                            <a href="#">Another One</a>
                        </li>
                    </ul> -->
                </li>
                <li>
                    <a href="<?= base_url('admin/logout') ?>" class="dropdown-toggle" >
                        <!-- <i class="material-icons">person</i> -->
                        <i class="material-icons">indeterminate_check_box</i> Keluar
                        <p class="hidden-lg hidden-md">Profile</p>
                        
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>