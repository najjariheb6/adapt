@extend('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    Index
                </div>
                <div class="card-body">
                    <form action="{{route('facture.store')}}" methode="post" class="form">
                    @csrf_field
                    <div class="row">
                        <div class="col-4">
                            <div class="form-groupe">
                                <label for="nom_client">Nom Client</label>
                                <input type="text" name="nom_client"> 
                            </div>
                        </div>
                        <div class="col-4"></div>
                        <div class="col-4"></div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection