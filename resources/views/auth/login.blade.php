<x-layouts.main-layout>
    <x-slot:pageTitle>Accedi</x-slot:pageTitle>

    <section class="container  p-5 my-3" style="background-color: var(--background-color)">
        <div class="mb-3p-3 text-center">
            <h2>Accedi al tuo account</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 position-relative ">
                  <img class="position-absolute bottom-0 end-0 opacity-50 img-form "style="max-width:100px" src="{{ asset('logo/klikko.png') }}" alt="Logo Klikko">
                <form action="{{ route('login') }}" method="POST" class="text-center">
                    @csrf

                    <div class="mb-3 hstack gap-2 p-3">
                        <label for="email" class="form-label">Indirizzo email</label>
                        <input type="email" name="email" class="form-control " value="{{ old('email') }}"
                            id="email" aria-describedby="emailHelp">
                        @error('email')
                            <div class="text-danger m-0 small text-nowrap">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3 hstack gap-2 p-3">
                        <label for="password" class="form-label ">Password</label>
                        <input type="password" name="password" class="form-control " id="password">
                        @error('password')
                            <div class="text-danger small text-nowrap">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3 hstack gap-2 p-3">
                        <label for="password_confirmation" class="form-label">Conferma password</label>
                        <input type="password" name="password_confirmation" class="form-control "
                            id="password_confirmation">
                        @error('password_confirmation')
                            <div class="text-danger small text-nowrap">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="text-center">
                        <p class="small m-0"><strong>Non sei ancora registrato?</strong></p>
                        <p><a href="{{ route('register') }}" class="link-dark link-opacity-75-hover">Registrati</a></p>
                    </div>

                    <button type="submit" class="btn btn-primary w-50">Accedi</button>
                    <button type="button" class="btn " data-bs-container="body" data-bs-toggle="popover"
                        data-bs-placement="bottom" data-bs-content="I campi sopra elencati sono obbligatori.">
                        <i class="bi bi-patch-question"></i>
                    </button>
                </form>
            </div>
        </div>


    </section>
</x-layouts.main-layout>
