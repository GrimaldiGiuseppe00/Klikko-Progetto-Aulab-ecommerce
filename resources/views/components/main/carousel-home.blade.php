<section>
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-inner" style="max-height:80vh;">
            <div class="carousel-item active">
                <img src="{{ asset('images/landing-carousel.png') }}"
                    class="d-block w-100"style="object-fit:cover; aspect-ratio: 16/9" alt="immagine 1 carosello">
            </div>
            <div class="carousel-item ">
                <img src="{{ asset('images/landing-carousel-2.jpg') }}"
                    class="d-block w-100"style="object-fit:cover; aspect-ratio: 16/9" alt="immagine 2 carosello">
            </div>
        </div>
        <button class="carousel-control-prev carousel-control-wrapper " type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon custom-icon-control " aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next carousel-control-wrapper" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="next">
            <span class="carousel-control-next-icon custom-icon-control" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
