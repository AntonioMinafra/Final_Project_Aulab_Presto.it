<x-layout>
    <div class="container mt-5 justify-content-center vh-100">
        <div class="row justify-content-center align-items-center ">
            <h3 class="display-3 text-center">{{$user->name}}</h3>
            <div class="col-3">
                <img class="rounded-circle img-fluid" src="{{Storage::url('public/img/profil-defaul.jpeg')}}" alt="">
            </div>
            <div class="col-4">
                <div class="ms-5">
                    <h4>Dati Personali</h4>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Nome: {{$user->name}}</li>
                        <li class="list-group-item">Email: {{$user->email}}</li>
                        <li class="list-group-item">{{ $user->is_revisor ? 'Sei un revisore' : 'Non sei un revisore' }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</x-layout>