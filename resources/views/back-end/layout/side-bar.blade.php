    
<div class="sidebar" data-color="purple" data-background-color="white" data-image="/assets/img/sidebar-1.jpg">
        <!--
            Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

            Tip 2: you can also add an image using data-image tag
        -->
      <div class="logo">
            <center>
            <a class="navbar-brand" href="/admin">
                <img width=50 height=50 src="/assets/logo/logo.jpg" alt=""> 
            </a>
            </center>
      </div>
      
      <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="nav-item active  ">
                    <a class="nav-link" href="#0">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                    </a>
                </li>
            </ul>
                <!-- your sidebar here -->
            <ul class="nav">
                <li class="nav-item  ">
                    <a class="nav-link" href="#0">
                    <i class="material-icons">article</i>
                    <p>Post</p>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a class="nav-link" href="#0">
                    <i class="material-icons">label</i>
                    <p>Label</p>
                    </a>
                </li>
            
            </ul>
            <ul class="nav">
                <li class="nav-item ">
                    <a class="nav-link" href="#0">
                    <i class="material-icons">perm_media</i>
                    <p>Galeri</p>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a class="nav-link" href="#0">
                    <i class="material-icons">insert_photo</i>
                    <p>Photos</p>
                    </a>
                </li>
                <li class="nav-item ">
                <a class="nav-link" href="{{--{{ route(backend.video) --}}">
                    <i class="material-icons">video_library</i>
                    <p>Videos</p>
                    </a>
                </li>
            </ul>
            <ul class="nav">
                <li class="nav-item  ">
                    <a class="nav-link" href="{{ route('users.index') }}">
                    <i class="material-icons">account_circle</i>
                    <p>Account</p>
                    </a>
                </li>
            </ul>
            <ul class="nav">
                <li class="nav-item active-pro">
                    <a class="nav-link" href="#0">
                    <i class="material-icons">settings</i>
                    <p>Settings</p>
                    </a>
                </li>
                
            </ul>
      </div>
</div>