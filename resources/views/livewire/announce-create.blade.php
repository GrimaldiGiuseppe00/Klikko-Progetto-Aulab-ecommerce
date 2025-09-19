<section class="container py-5 mt-3 " style="background-color:var(--background-color)">
    <h2 class="text-center">Crea un annuncio</h2>
    <div class="row justify-content-center">
        <div class="col-12 position-relative ">
            <img class="position-absolute bottom-0 end-0 opacity-50 img-form "style="max-width:100px"
                src="{{ asset('logo/klikko.png') }}" alt="Logo Klikko">
            <form class="text-center">
                <div class="mb-3 hstack gap-2 p-3">
                    <label for="name" class="form-label">Titolo</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                </div>
                <div class="mb-3 hstack gap-2 p-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="number" class="form-control" id="price">
                </div>
                <div class="mb-3 hstack gap-2 p-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <input type="text" class="form-control" id="description">
                </div>
                <button type="submit" class="btn w-50">Crea annuncio</button>
            </form>
        </div>

    </div>


</section>
