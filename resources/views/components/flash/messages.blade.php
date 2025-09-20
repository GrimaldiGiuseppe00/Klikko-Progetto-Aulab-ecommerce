@if (session('success'))

    <div class="alert text-center alert-success">

        {{ session('success') }}

    </div>

@endif
@if (session('warning'))

    <div class="alert text-center alert-success">

        {{ session('warning') }}

    </div>

@endif
@if (session('danger'))

    <div class="alert text-center alert-success">

        {{ session('danger') }}

    </div>

@endif
@if (session('status'))

    <div class="alert alert-success">

        {{ session('status') }}

    </div>

@endif