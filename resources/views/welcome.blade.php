<x-layout>

    <x-masthead/>

    @if (session('access.denied'))
    <div class="alert rounded-3  alert-success">
        {{ session('access.denied') }}
    </div>
    @endif
    @auth
    <div class="container my-5">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <a href="{{route('profil')}}">
                    <button class="btn btn-dark ">
                        Profilo
                    </button>
                </a>
            </div>
        </div>
    </div>
    @endauth

    <x-message/>

    <livewire:index-announcements/>



</x-layout>