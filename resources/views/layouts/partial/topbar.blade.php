<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">Dashboard</a>
          </div>
         
          <div class="collapse navbar-collapse justify-content-end">
            
            <ul class="navbar-nav">
             {{-- <li class="nav-item">
                                          <a class="nav-link" href="#pablo">
                                            <i class="material-icons">dashboard</i>
                                            <p class="d-lg-none d-md-block">
                                              Dashboard
                                            </p>
                                          </a>
                                        </li>
                                        <li class="nav-item dropdown">
                                          <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="material-icons">person</i>
                                               <i class="material-icons">profile</i>
                                            
                                          </a>
                                          
                                        </li>--}}
                          
              <li>

                    <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">

                        <i class="material-icons">exit_to_app</i>

                        Logout

                    </a>

                    <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none">

                        @csrf

                    </form>

                </li>
            </ul>
          </div>
        </div>
      </nav>
      