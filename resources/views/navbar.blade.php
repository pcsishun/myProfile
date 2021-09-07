
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('') }}">
                <img src="{{ asset('image/icon_profile.png') }}"  width="60" height="60">
            </a>

            <div class="dropdown navbar-toggler">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    MENU
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li class="nav-item" >
                        <a class="dropdown-item" aria-current="page" href="{{ url('/biography') }}">BIOGRAPHY</a>
                    </li>
                    <li class="nav-item" >
                        <a class="dropdown-item" href="{{ url('/skill') }}">SKILL</a>
                    </li>
                    <li class="nav-item" >
                        <a class="dropdown-item" href="{{ url('/exp') }}">EXPERIENCE</a>
                    </li>
                    <li class="nav-item" >
                        <a class="dropdown-item" href="{{ url('/contact') }}">CONTACT</a>
                    </li>
                </ul>
            </div>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item" >
                        <h5><a class="nav-link" aria-current="page" href="{{ url('/biography') }}">BIOGRAPHY</a></h5>
                    </li>
                    <li class="nav-item" >
                        <h5><a class="nav-link" href="{{ url('/skill') }}">SKILL</a></h5>
                    </li>
                    <li class="nav-item" >
                        <h5><a class="nav-link" href="{{ url('/exp') }}">EXPERIENCE</a></h5>
                    </li>
                    <li class="nav-item" >
                        <h5><a class="nav-link" href="{{ url('/contact') }}">CONTACT</a></h5>
                    </li>
                </ul>
            </div>
            <a class="navbar-brand" href="#">
                <img src="{{ asset('image/login.png') }}"  width="30" height="30">
               LOGIN
            </a>
        </div>
    </nav>




    
