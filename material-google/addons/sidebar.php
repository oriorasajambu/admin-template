<div class="sidebar" data-color="purple" data-background-color="white" data-image="assets/img/sidebar-1.jpg">
  <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

    Tip 2: you can also add an image using data-image tag
-->
  <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
      Creative Tim
    </a></div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li <?php if($pages == "dashboard") echo "class='nav-item active'"; else echo "class='nav-item'"; ?>>
        <a class="nav-link" href="dashboard">
          <i class="material-icons">dashboard</i>
          <p>Dashboard</p>
        </a>
      </li>
      <li <?php if($pages == "user profile") echo "class='nav-item active'"; else echo "class='nav-item'"; ?>>
        <a class="nav-link" href="user profile">
          <i class="material-icons">person</i>
          <p>User Profile</p>
        </a>
      </li>
      <li <?php if($pages == "tables") echo "class='nav-item active'"; else echo "class='nav-item'"; ?>>
        <a class="nav-link" href="tables">
          <i class="material-icons">content_paste</i>
          <p>Table List</p>
        </a>
      </li>
      <li <?php if($pages == "typography") echo "class='nav-item active'"; else echo "class='nav-item'"; ?>>
        <a class="nav-link" href="typography">
          <i class="material-icons">library_books</i>
          <p>Typography</p>
        </a>
      </li>
      <li <?php if($pages == "icons") echo "class='nav-item active'"; else echo "class='nav-item'"; ?>>
        <a class="nav-link" href="icons">
          <i class="material-icons">bubble_chart</i>
          <p>Icons</p>
        </a>
      </li>
      <li <?php if($pages == "maps") echo "class='nav-item active'"; else echo "class='nav-item'"; ?>>
        <a class="nav-link" href="maps">
          <i class="material-icons">location_ons</i>
          <p>Maps</p>
        </a>
      </li>
      <li <?php if($pages == "notifications") echo "class='nav-item active'"; else echo "class='nav-item'"; ?>>
        <a class="nav-link" href="notifications">
          <i class="material-icons">notifications</i>
          <p>Notifications</p>
        </a>
      </li>
    </ul>
  </div>
</div>
