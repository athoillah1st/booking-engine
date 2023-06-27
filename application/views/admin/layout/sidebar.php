<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link <?= $this->uri->segment(1) == "" ? "" : "collapsed" ?>" href="<?= base_url() ?>">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link <?= $this->uri->segment(1) == ("Room" || "RoomType") ? "" : "collapsed" ?>" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>DATA ROOM</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content <?= $this->uri->segment(1) == ("Room" || "RoomType") ? "" : "collapse" ?>" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?= base_url('Room') ?>">
                        <i class="bi bi-circle"></i><span>ROOM</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('RoomType') ?>">
                        <i class="bi bi-circle"></i><span>ROOM TYPE</span>
                    </a>
                </li>

            </ul>
        </li><!-- End Components Nav -->

        <li class="nav-item">
            <a class="nav-link <?= $this->uri->segment(1) == ("book" || "cek_out") ? "" : "collapsed" ?>" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Data Booking</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content <?= $this->uri->segment(1) == ("book" || "cek_out") ? "" : "collapse" ?> " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?= base_url('book/data') ?>">
                        <i class="bi bi-circle"></i><span>Booking</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('book') ?>">
                        <i class="bi bi-circle"></i><span>Cek In</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('book/cek_out') ?>">
                        <i class="bi bi-circle"></i><span>Cek Out</span>
                    </a>
                </li>

            </ul>
        </li><!-- End Forms Nav -->



        <li class="nav-heading">Pages</li>



        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-register.html">
                <i class="bi bi-card-list"></i>
                <span>Register</span>
            </a>
        </li><!-- End Register Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-login.html">
                <i class="bi bi-box-arrow-in-right"></i>
                <span>Login</span>
            </a>
        </li><!-- End Login Page Nav -->



    </ul>

</aside><!-- End Sidebar-->