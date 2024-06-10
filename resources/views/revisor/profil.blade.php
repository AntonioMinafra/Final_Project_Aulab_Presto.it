<x-layout>

    <div class="container justify-content-center vh-100">
        <div class="row justify-content-center align-items-center ">
            <h3 class="display-3 text-center">nome e cognome</h3>
            <div class="col-3">
                <img class="rounded-circle img-fluid" src="{{Storage::url('public/img/profil-defaul.jpeg')}}" alt="">
            </div>
            <div class="col-4">
                <div class="ms-5">
                    <h4>Dati Personali</h4>
                    <p>nome:</p>
                    <p>email:</p>
                    <p>sei un revisore?</p>
                    <p>quanti articoli hai creato?</p>
                </div>
            </div>
        </div>
    </div>

</x-layout>