<div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">                        
                        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                    </ul>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <div class="d-sm-none d-lg-inline-block">Hallo, Admin</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-title"></div>
                            <a href="" class="dropdown-item has-icon"> <!-- base_url('admin/auth/gantipass'); -->
                                <i class="fas fa-key"></i> Ganti Password
                            </a>
                            <a href="features-settings.html" class="dropdown-item has-icon">
                                <i class="fas fa-cog"></i> Settings
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="views/logout.php" class="dropdown-item has-icon text-danger"> <!-- base_url('auth/logout'); -->
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <img src="https://i.pinimg.com/originals/66/82/d4/6682d4172ec12c5a0e8ad5271c3495ee.jpg" style="width:auto; height: 40px;" alt="logo">
                        <a href="dashboard.php">Paradigma</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="index.html">RMS</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Dashboard</li>
                        <li><a class="nav-link" href="views/dashboard.php"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li>
                        <li class="menu-header">Data Master</li>
                        <li><a class="nav-link" href="views/pilihmk.php"><i class="fas fa-list"></i> <span>Mata Kuliah</span></a></li>
                    </ul>

                </aside>
            </div>