<header>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#!">Amazing E-Book</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            
            {{-- @auth --}}
            
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a class="nav-link" href="/home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Cart</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Profile</a></li>
                    {{-- <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li> --}}
                </ul>
            </div>

            {{-- @endauth --}}

        </div>
    </nav>    
</header>