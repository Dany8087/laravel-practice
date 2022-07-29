<header>
    <div class="header-left">
        <h2>Hi, <span>{{Session::get('username')}}</span></h2>
        <ul>
          <li>Home <i class="fas fa-angle-right"></i></li>
          <li><a class="active">Dashboard</a></li>
        </ul>

    </div>
    <div class="header-right">
      <ul>
        <li class="img-li dropdown">
          <a class="dropdown-toggle" id="dropdownProfile" data-bs-toggle="dropdown" aria-expanded="false"><img src="images/avatar-s-1.png" alt="user photo" /></a>
                      <ul class="dropdown-menu profile-ul" aria-labelledby="dropdownProfile">
                        <li><a class="dropdown-item" href="#"><i class="fas fa-user"></i> My Profile</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="logout"><i class="fas fa-sign-out-alt"></i> Log Out</a></li>
                      </ul>
        </li>
      </ul>

    </div>
  </header>