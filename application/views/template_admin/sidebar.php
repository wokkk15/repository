
<body>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="h-100">
                <div class="sidebar-logo d-flex align-items-center">
                    <img src="<?php echo base_url() ?>assets/adminRepo/Logo.png" alt="Logo" class="me-2" style="height: 40px;">
                    <a href="#">Admin Repository</a>
                </div>
                <ul class="sidebar-nav">
                    <li class="sidebar-item">
                        <a id="dashboard-link" href="<?php echo base_url('admin/dashboard_admin') ?>" class="sidebar-link">
                            <i class="fa-solid fa-list pe-2"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a id="manejemen-link" href="#" class="sidebar-link collapsed" data-bs-target="#pages" data-bs-toggle="collapse"
                            aria-expanded="false"><i class="fa-solid fa-file-lines pe-2"></i>
                            Menejemen Sistem
                        </a>
                        <ul id="pages" class="sidebar-dropdown list-unstyled collapse">
                            <li class="sidebar-item">
                                <a href="<?php echo base_url('admin/subjek_admin') ?>" class="sidebar-link">Subjek</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="<?php echo base_url('admin/prodi_admin') ?>" class="sidebar-link">Prodi</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="<?php echo base_url('admin/jenis_dokumen_admin') ?>" class="sidebar-link">Jenis Dokumen</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="<?php echo base_url('admin/penulis_admin') ?>" class="sidebar-link">penulis</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a id="repository-link" href="<?php echo base_url('admin/repository_admin') ?>" class="sidebar-link">
                            <i class="fa-regular fa-user pe-2"></i>
                            Repository
                        </a>
                    </li>
                </ul>
            </div>
        </aside>

        <div class="main">
            <nav class="navbar navbar-expand px-3 border-bottom">
                <button class="btn" id="sidebar-toggle" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                                <img src="<?php echo base_url() ?>assets/adminRepo/image/profile.jpg" class="avatar img-fluid rounded" alt="">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Profile</a>
                                <a href="#" class="dropdown-item">Setting</a>
                                <a href="<?php echo base_url('login') ?>" class="dropdown-item">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>