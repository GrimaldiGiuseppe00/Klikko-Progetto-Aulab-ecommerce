<section>
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel"    data-bs-interval="3000">
        <div class="carousel-inner" style="max-height:80vh;">

            <!-- Primo item -->
            <div class="carousel-item active">
                <img src="{{ asset('images/landing-carousel.png') }}" class="d-block w-100 image-carousel img-fluid"
                    alt="immagine 1 carosello">

                <!-- Descrizione responsive -->
                <div
                    class="d-flex flex-column text-center align-items-center  justify-content-center position-absolute top-0 end-0 p-3 p-md-5 wrapper-description">
                    <div class="overlay-carousel-description"></div>

                    <h1 class="title-carousel">
                        Milioni di persone hanno già utilizzato
                    </h1>

                    <img class="img-carousel-descrip mb-2" src="{{ asset('logo/klikko.png') }}"
                        alt="Logo klikko" style="max-width:150px">

                    {{-- @auth --}}
                    <a href="#" class="link-carousel btn">
                        Inserisci articolo
                    </a>
                    {{-- @endauth --}}
                </div>
            </div>

            <!-- Secondo item -->
            <div class="carousel-item">
                <img src="{{ asset('images/landing-carousel-2.jpg') }}" class="d-block w-100 image-carousel img-fluid"
                    alt="immagine 2 carosello">
            </div>
        </div>

        <!-- Controlli -->
        <button class="carousel-control-prev  carousel-control-wrapper " type="button"
            data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon custom-icon-control" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next carousel-control-wrapper" type="button"
            data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon custom-icon-control" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

        <!-- Logo watermark -->
        <div class="position-absolute z-1 bottom-0 opacity-50">
            <img src="{{ asset('logo/klikko.png') }}" class="logo-watermark-carousel " alt="Logo Klikko">
        </div>
    </div>
</section>
