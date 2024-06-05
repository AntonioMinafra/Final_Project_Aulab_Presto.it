<x-layout>

    <div class="container-fluid vh-100 mt-5">
        <div class="row align-items-center justify-content-center ">
            <div class="col-6">
                <h3 class=" display-3 text-center position-relative">nome e cognome</h3>
                <img class=" position-relative rounded-circle img-fluid" src="{{Storage::url('public/img/profil-defaul.jpeg')}}" alt="">
            </div>
            <div class="col-6 d-flex">
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