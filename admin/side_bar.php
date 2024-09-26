
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <?php include("dashboard_nav.php") ?>
        <!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-layout-text-window-reverse"></i><span>Manage</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="tenants">
                        <i class="bi bi-circle"></i><span>Tenants</span>
                    </a>
                </li>
                <li>
                    <a href="caretakers">
                        <i class="bi bi-circle"></i><span>Caretaker</span>
                    </a>
                </li>
                <li>
                    <a href="apartments">
                        <i class="bi bi-circle"></i><span>Apartments</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Tables Nav -->

        <li class="nav-heading">Pages</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="users-profile.php">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li><!-- End Profile Page Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="logout.php">
                <i class="bi bi-box-arrow-in-right text-danger"></i>
                <span>Log Out</span>
            </a>
        </li><!-- End Login Page Nav -->
    </ul>

</aside>
<?php
if ($status == 0) {
    echo "<div style='
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      background-color: #fad81a;
      color: white;
      text-align: center;
      padding: 15px;
      font-size: 18px;
      z-index: 9999;
  '>
      ⚠️ Your account is not activated!
      <a href='../activate.php' style='color: white; text-decoration: underline;'>Activate Here</a>
  </div>
  ";
}
?>