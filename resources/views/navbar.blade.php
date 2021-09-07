<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('') }}">
                <img src="{{ asset('image/icon_profile.png') }}"  width="60" height="60">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item" style="margin-left: 50px;">
                        <h5><a class="nav-link" aria-current="page" href="{{ url('/biography') }}">BIOGRAPHY</a></h5>
                    </li>
                    <li class="nav-item" style="margin-left: 50px;">
                        <h5><a class="nav-link" href="{{ url('/skill') }}">SKILL</a></h5>
                    </li>
                    <li class="nav-item" style="margin-left: 50px;">
                        <h5><a class="nav-link" href="{{ url('/exp') }}">EXPERIENCE</a></h5>
                    </li>
                    <li class="nav-item" style="margin-left: 50px;">
                        <h5><a class="nav-link" href="{{ url('/contact') }}">CONTACT</a></h5>
                    </li>
                </ul>
            </div>
            <a class="navbar-brand" href="#">
               LOGIN
            </a>
        </div>
    </nav>


    