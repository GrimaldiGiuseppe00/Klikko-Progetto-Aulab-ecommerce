<header>
    <nav class="navbar m-0 p-0">
        <div class="container-fluid align-items-center d-flex " style="background-color: var(--secondary-color)">
            <a class="navbar-brand mx-auto" href="{{ route('home') }}"><img style="max-width:140px"
                    src="{{ asset('logo/klikko.png') }}" alt="Logo Klikko"></a>
            <div class="hstack justify-content-center gap-2 align-items-center">
                @guest
                    <a href="{{route('login')}}"class="btn my-sm-2">Accedi<i class="ms-2 bi bi-person-circle"></i></a>
                @endguest
                @auth
                    <a href="#"class="btn my-sm-2">Profilo<i class="ms-2 bi bi-person-circle"></i></a>
                @endauth
                <div class="vr" style="color: var(--primary-color);"></div>
                <button class="btn  my-sm-2" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">Menù<i
                        class="bi bi-list"></i>
            </button>

        </div>
            <x-shared.offcanvas-navbar />

            

        </div>
        </div>
    </nav>
</header>
