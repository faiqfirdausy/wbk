<nav class="navbar navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <!-- <img src="{{ asset('img/logo.png') }}" class="" alt="User Image"> -->
      <a href="#" class="navbar-brand"><b>Wilayah Bebas Korupsi</b></a>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
        <i class="fa fa-bars"></i>
      </button>
    </div>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <li class="dropdown messages-menu">
          
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-envelope-o"></i>
            <span class="label label-success">4</span>
          </a>
          <ul class="dropdown-menu">
            <li class="header">You have 4 messages</li>
            <li>
              <ul class="menu">
                <li>
                  <a href="#">
                    <div class="pull-left">
                      <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    </div>
                    <h4>
                      Support Team
                      <small><i class="fa fa-clock-o"></i> 5 mins</small>
                    </h4>
                    <p>Why not buy a new awesome theme?</p>
                  </a>
                </li>                
              </ul>
            </li>
            <li class="footer"><a href="#">See All Messages</a></li>
          </ul>
        </li>
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="{{ asset('img/user.png') }}" class="user-image" alt="User Image">
            <span class="hidden-xs">{{ Auth::user()->name }}</span>
          </a>
          <ul class="dropdown-menu">
            <li class="user-header">
              <img src="{{ asset('img/user.png') }}" class="img-circle" alt="User Image">
              <p>
                {{ Auth::user()->name }}
                <small>Terakhir Login : 12 Rabiul Awal 1467 H</small>
              </p>
            </li>
            <li class="user-footer">
              <div class="pull-left">
                <a href="#" class="btn btn-default btn-flat">Pengaturan</a>
              </div>
              <div class="pull-right">
                <a href="#" class="btn btn-default btn-flat">Keluar</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>