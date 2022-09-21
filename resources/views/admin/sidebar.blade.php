<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{url('home')}}">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboards</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Appointments</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('today')}}">Today</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('pending')}}">Pending</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('allAppointments')}}">All Appointments</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="ti-settings menu-icon"></i>
              <span class="menu-title">Settings</span>
            </a>
          </li>
        </ul>
      </nav>