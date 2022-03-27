<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="images/logo-koperasi.png" alt="logo" class="img-fluid"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-5 me-auto">
                <a class="nav-link text-dark font-poppins mx-1 hvr-underline-from-center" href="/cooperative">Home</a>
                <a class="nav-link text-dark font-poppins mx-1 hvr-underline-from-center" href="#contact">Diskon</a>
                <li class="nav-item dropdown">
                    <a class="nav-link text-dark dropdown-toggle font-poppins mx-1 hvr-underline-from-center" href="#"
                        id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                        @foreach ($categories as $item)
                            <li><a class="dropdown-item" href="">{{ Str::ucfirst($item->nama) }}</a></li>
                        @endforeach
                    </ul>
                </li>

            </div>

            <form action="" class="d-flex me-5">
                <div class="input-group">
                    <span class="input-group-text bg-transparent" id="basic-addon1"><button
                            class="bg-transparent p-0"><i class="fas fa-search text-dark"></i></button></span>
                    <input type="search" class="form-control search" placeholder='Search for "Wearpack"'
                        aria-label="Username" aria-describedby="basic-addon1">
                </div>
            </form>

            {{-- <a href="" class="mx-3 text-dark" data-bs-target="tooltip" title="Like"><i
                    class="far fa-heart text-main3 fs-4"></i></a> --}}
            <a href="/my-cart" class="mx-3 text-dark position-relative" data-bs-target="tooltip" title="Your Cart"><i
                    class="fab fa-opencart text-main3 fs-4"></i>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    {{ $cart }}
                    <span class="visually-hidden">Cart</span>
                </span></a>
            <a href="/my-profile" class="text-dark ms-3 profil"><img src="foto-profile/{{ auth()->user()->profile }}"
                    class="img-fluid" width="50" alt="foto profil"></a>
        </div>
    </div>
</nav>
