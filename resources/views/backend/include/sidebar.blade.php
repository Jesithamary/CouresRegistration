<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="index.html">
       <img src="{{ asset('backend/assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
       <h5 class="logo-text">Course Registration</h5>
     </a>
   </div>
   <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">DASHBOARD</li>
    

    @if(Auth::user()->user_type == "student")

      <li>
        <a href="{{route('student.list')}}">
          <i class="zmdi zmdi-format-list-bulleted"></i> <span>Student</span>
        </a>
      </li>
      @endif



      @if(Auth::user()->user_type == "admin")

      <li>
        <a href="tables.html">
          <i class="zmdi zmdi-grid"></i> <span>Admin</span>
        </a>
      </li>
      @endif



      @if(Auth::user()->user_type == "teacher")

      <li>
        <a href="">
          <i class="zmdi zmdi-face"></i> <span>Teacher</span>
        </a>
      </li>
      @endif
      <li>
        <a href="tables.html">
          <i ></i> <span>staff</span>
        </a>
      </li>     
      <li>
        <a href="tables.html">
          <i ></i> <span>profile</span>
        </a>
      </li>     
      <!-- <li>
        <a href="tables.html">
          <i ></i> <span>details</span>
        </a>
      </li>      -->
      <li>
        <a href="login.html" target="_blank">
        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
       
              <span class="menu-title">Logout</span>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
        </a>
      </li>
     

       

     
    </ul>
   
   </div>