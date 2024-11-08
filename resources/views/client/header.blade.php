<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <img src="/logo.png" alt="" style="height: 80px">
                <a href="index.html" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
                    <h1 class="m-0 text-primary">ITI Courses</h1>
                </a>
                <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto p-4 p-lg-0">

                        <a href="/home" class="nav-item nav-link active">Home</a>
                        <a href="{{route('login')}}" class="nav-item nav-link">Login</a>
                        <a href="/about" class="nav-item nav-link">About</a>
                        <a href="/Courses" class="nav-item nav-link">Course</a>
                        <a href="/admission" class="nav-item nav-link">Admission</a>
                    </div>
                    <a href="/create" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Apply<i class="fa fa-arrow-right ms-3"></i></a>
                </div>
            </nav>
            @yield('content')
<!-- Navbar End -->
