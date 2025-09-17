<header>
    <nav class="navbar m-0 p-0">
        <div class="container-fluid align-items-center d-flex " style="background-color: var(--secondary-color)">
            <a class="navbar-brand mx-auto" href="{{ route('home') }}"><img style="max-width:140px"
                    src="{{ asset('logo/klikko.png') }}" alt="Logo Klikko"></a>
            <span class="d-flex justify-content-center align-items-center">
                <button class="btn btn-sm btn-outline-warning text-uppercase" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">Menù<i
                        class="bi bi-list"></i>
                </button>

            </span>
            <x-shared.offcanvas-navbar />

            

        </div>
        </div>
    </nav>
</header>
