<div class="navbar">
    <div class="column-right">
        <div class="toggle-backward">
            <button><img src="/resources/icons/toggle-back.png"></button>
        </div>
        <div class="toggle-forward">
            <button><img src="/resources/icons/toggle-forward.png"></button>
        </div>
        <div class="navbar-label" id="navbar-left">
            <label>@yield('title')</label>
        </div>
    </div>
    <div class="column-left">
      <div class="navbar-left-img">  
            <img src="/resources/icons/user.png" class="user">
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
            <img src="/resources/icons/logout.png">
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
               {{ csrf_field() }}
            </form>
            {{-- <img src="/resources/icons/logout.png"> --}}
        </div>
        {{-- <div class="btn-add" id="add-asset">
            <button>Add Asset</button>
        </div>
        <div class="btn-add" id="add-voice">
                <button>Add DID</button>
        </div>
        <div class="btn-add" id="add-ip">
            <button> Add IP Address</button>
        </div>
        <div class="btn-add" id="add-server">
            <button> Add Server</button>
        </div>
    </div>
    <div class="rectangle"></div>
    <div class="location-info">
        <div class="location-input">
            <div class="iopex-location" id="manila">
                <img src="/resources/icons/ph.png" class="flag">
                <label>Manila, PHILIPPINES</label>
            </div>
            <div class="iopex-location" id="us">
                <img src="/resources/icons/us.png" class="flag">
                <label>San Jose, USA</label>
            </div>
            <div class="iopex-location" id="india">
                <img src="/resources/icons/india.png" class="flag">
                <label>Chennai, INDIA</label>
            </div>
            <div class="iopex-location" id="banglore">
                <img src="/resources/icons/india.png" class="flag">
                <label>Banglore, INDIA</label>
            </div>
        </div>       
    </div> --}}
    <div class="rectangle1"></div>
    <div class="user-info">
        <div class="user-input">
            <img src="/resources/icons/admin.png">
            <label>{{ auth()->user()->name }}</label>
        </div>
    </div>
</div>

{{-- <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

  <a class="navbar-brand mr-1" href="index.html">Start Bootstrap</a>

  <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
    <i class="fas fa-bars"></i>
  </button>
  <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
      <div class="input-group-append">
        <button class="btn btn-primary" type="button">
          <i class="fas fa-search"></i>
        </button>
      </div>
    </div>
  </form>

  <ul class="navbar-nav ml-auto ml-md-0">
    <li class="nav-item dropdown no-arrow mx-1">
      <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-bell fa-fw"></i>
        <span class="badge badge-danger">9+</span>
      </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Something else here</a>
      </div>
    </li>
    <li class="nav-item dropdown no-arrow mx-1">
      <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-envelope fa-fw"></i>
        <span class="badge badge-danger">7</span>
      </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Something else here</a>
      </div>
    </li>
    <li class="nav-item dropdown no-arrow">
      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user-circle fa-fw"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
        <a class="dropdown-item" href="#">{{ Auth::user()->name }}</a>
        <a class="dropdown-item" href="#">Settings</a>
        <div class="dropdown-divider"></div>	        
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
      </div>
    </li>
  </ul>

</nav>

<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
            Logout
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
      </div>
    </div>
  </div>
</div> --}}