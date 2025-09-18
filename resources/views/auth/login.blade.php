<x-layouts.main-layout>
    <x-slot:pageTitle>Accedi</x-slot:pageTitle>

    <article class="container p-5 my-3">
        <form action="{{ route('login') }}" method="POST" class="text-center">
            @csrf


            <div class="mb-3 hstack gap-2">
                <button type="button" class="btn " data-bs-container="body" data-bs-toggle="popover"
                    data-bs-placement="left" data-bs-content="L'email è obbligatoria.">
                    <i class="bi bi-patch-question"></i>
                </button>
                <label for="email" class="form-label">Indirizzo email</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                @error('email')
                    <div class="text-danger m-0 small text-nowrap">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3 hstack gap-2">
                <button type="button" class="btn " data-bs-container="body" data-bs-toggle="popover"
                    data-bs-placement="left" data-bs-content="La password è obbligatoria.">
                    <i class="bi bi-patch-question"></i>
                </button>
                <label for="password" class="form-label ">Password</label>
                <input type="password" name="password" class="form-control " id="password">
                @error('password')
                    <div class="text-danger small text-nowrap">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3 hstack gap-2 ">
                <button type="button" class="btn " data-bs-container="body" data-bs-toggle="popover"
                    data-bs-placement="left" data-bs-content="La conferma della password è obbligatoria.">
                    <i class="bi bi-patch-question"></i>
                </button>
                <label for="password_confirmation" class="form-label">Conferma la tua password</label>
                <input type="password" name="password_confirmation" class="form-control " id="password_confirmation">
                @error('password_confirmation')
                    <div class="text-danger small text-nowrap">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary w-50">Accedi</button>
        </form>
    </article>
</x-layouts.main-layout>
