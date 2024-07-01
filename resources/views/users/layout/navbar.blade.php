<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
      <div class="container">
        <a class="navbar-brand logo"  style="color:purple" href="/">EDL Manager</a>
        <button data-toggle="collapse" data-target="#navcol-1" class="navbar-toggler">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navcol-1">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/#Features">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/#Pricing">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/faq">FAQ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contact">Contact</a>
            </li>
            @if(!session()->has('edlManagerUserId'))
            <li class="nav-item">
              <a class="nav-link" href="/login">Log in</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/register">New User?</a>
            </li>
            @endif 
            @if(session()->has('edlManagerUserId'))
            <li class="nav-item dropdown">
               <a aria-expanded="false" data-toggle="dropdown" class="dropdown-toggle nav-link">Manage</a>
               <div class="dropdown-menu">
                  <!-- <a class="dropdown-item" href="/manage/">Dashboard</a> -->
                  <!-- <a class="dropdown-item" href="/manage/edl/">EDLs</a> -->
                  <a class="dropdown-item" href="/sources/">Sources</a>
                  <a class="dropdown-item" href="/logout">Logout</a>
                  <!-- <a class="dropdown-item" href="/manage/sources/add/templates/">Source Templates</a> -->
               </div>
            </li> 
            @endif 
          </ul>
        </div>
      </div>
    </nav>