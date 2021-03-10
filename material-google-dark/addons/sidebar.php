<div class="sidebar" data-color="purple" data-background-color="black" data-image="assets/img/sidebar-2.jpg">
  <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

    Tip 2: you can also add an image using data-image tag
-->
  <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
      Creative Tim
    </a></div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li <?php echo $pages == "dashboard" ? "class='nav-item active'" : "class='nav-item'"; ?>>
        <a class="nav-link" href="dashboard">
          <i class="material-icons">dashboard</i>
          <p>Dashboard</p>
        </a>
      </li>
      <li <?php echo $pages == "user" ? "class='nav-item active'" : "class='nav-item'"; ?>>
        <a class="nav-link" href="user">
          <i class="material-icons">person</i>
          <p>User Profile</p>
        </a>
      </li>
      <li <?php echo $pages == "tables" ? "class='nav-item active'" : "class='nav-item'"; ?>>
        <a class="nav-link" href="tables">
          <i class="material-icons">content_paste</i>
          <p>Table List</p>
        </a>
      </li>
      <li <?php echo $pages == "typography" ? "class='nav-item active'" : "class='nav-item'"; ?>>
        <a class="nav-link" href="typography">
          <i class="material-icons">library_books</i>
          <p>Typography</p>
        </a>
      </li>
      <li <?php echo $pages == "icons" ? "class='nav-item active'" : "class='nav-item'"; ?>>
        <a class="nav-link" href="icons">
          <i class="material-icons">bubble_chart</i>
          <p>Icons</p>
        </a>
      </li>
      <li <?php echo $pages == "map" ? "class='nav-item active'" : "class='nav-item'"; ?>>
        <a class="nav-link" href="map">
          <i class="material-icons">location_ons</i>
          <p>Maps</p>
        </a>
      </li>
      <li <?php echo $pages == "notifications" ? "class='nav-item active'" : "class='nav-item'"; ?>>
        <a class="nav-link" href="notifications">
          <i class="material-icons">notifications</i>
          <p>Notifications</p>
        </a>
      </li>
    </ul>
  </div>
</div>
