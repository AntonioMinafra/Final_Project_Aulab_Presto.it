<x-layout>

    <x-masthead/>

    @if (session('access.denied'))
    <div class="alert rounded-3  alert-success">
        {{ session('access.denied') }}
    </div>
    @endif

    <div class="container my-5">
        <div class="row justify-content-end ">
            <div class="col">
                <a href="{{route('profil')}}">
                    <button class="btn btn-dark ">
                        Profilo
                    </button>
                </a>
            </div>
        </div>
    </div>

    <x-message/>

    <livewire:index-announcements/>



</x-layout>