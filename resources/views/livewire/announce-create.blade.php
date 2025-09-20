<section class="container py-5 mt-3 " style="background-color:var(--background-color)">
     <x-flash.messages/>
    <h2 class="text-center ">Crea un annuncio</h2>
    <div class="row justify-content-center">
        <div class="col-12 position-relative ">
            <img class="position-absolute bottom-0 end-0 opacity-50 img-form "style="max-width:100px"
                src="{{ asset('logo/klikko.png') }}" alt="Logo Klikko">
            <form wire:submit="storeAnnounce" class="text-center">
                <div class="mb-3 hstack gap-2 p-3">
                    <label for="name" class="form-label">Titolo</label>
                    <input wire:model="title" type="text" class="form-control" id="name"
                        aria-describedby="emailHelp">

                    </div>
                    @error('title')
                        <strong class="text-danger m-0 small text-nowrap ">{{ $message }}<i
                                class="bi bi-exclamation-circle-fill ms-2"></i></strong>
                    @enderror
                <div class="mb-3 hstack gap-2 p-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input wire:model="price" type="text" class="form-control" id="price">
                </div>
                @error('price')
                    <strong class="text-danger m-0 small text-nowrap ">{{ $message }}<i
                            class="bi bi-exclamation-circle-fill ms-2"></i></strong>
                @enderror
                <div class="mb-3 hstack gap-2 p-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea wire:model="description" placeholder="Descrizione del annuncio.." class="form-control"
                        id="description"style="height:100px"></textarea>
                    </div>
                    @error('description')
                        <strong class="text-danger m-0 small text-nowrap ">{{ $message }}<i class="bi bi-exclamation-circle-fill ms-2"></i></strong>
                    @enderror
                <div class="d-flex gap-3 mb-3 mt-3 flex-wrap justify-content-center">
                    @foreach ($categories as $category)
                        <div class="form-check">
                            <input wire:model="category_id" class="form-check-input" name="category_id" type="radio"
                                value="{{ $category->id }}" id="category{{ $category->id }}">
                            <label class="form-check-label" for="category{{ $category->id }}">
                                {{ $category->name }}
                            </label>
                        </div>
                    @endforeach
                </div>


                <button type="submit" class="btn w-50">Crea annuncio</button>
            </form>
        </div>

    </div>


</section>
