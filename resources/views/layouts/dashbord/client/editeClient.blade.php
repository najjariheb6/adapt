@extends('layouts.home')

@section('main')
<main class="page-content">
    <div class="container">
        {{-- /alert --}}
        @if(session()->has('success'))
        <div class="alert alert-success d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                <use xlink:href="#check-circle-fill" />
            </svg>
            <div>
                {{session()->get('success')}}
            </div>
        </div>
        @endif
        {{-- end alert --}}
        <div class="page-header">
            <h1 class="page-header__title">Modifier Category</h1>
        </div>
        <form class="add-product__form" action="{{action('ClientController@update',$clients['id'])}}" method="post">
            {{csrf_field()}}
            <div class="card add-product card--content-center">
                <div class="card__wrapper">
                    <div class="card__container">

                        <div class="add-product__row">
                            <input name="_method" type="hidden" value="PATCH">
                            <div class="add-product__right">
                                <div class="row row--md">
                                    <div class="col-12 form-group form-group--lg">
                                        <label class="form-label">Nom Client</label>
                                        <div class="input-group">
                                            <input class="input" name="nom_client" type="text" placeholder="" value="{{$clients->nom_client}}" required>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group form-group--lg">
                                        <label class="form-label">Numero Tel</label>
                                        <input class="input" name="numero_tel" type="text" placeholder="" value="{{$clients->numero_tel}}" required>
                                    </div>
                                    <div class="col-12 form-group form-group--lg">
                                        <label class="form-label">Email Client</label>
                                        <input class="input" name="email_client" type="text" placeholder="" value="{{$clients->email_client}}" required>
                                    </div>
                                    <div class="col-12 form-group form-group--lg">
                                        <label class="form-label">Adress Client</label>
                                        <input class="input" name="adress_client" type="text" placeholder="" value="{{$clients->adress_client}}" required>
                                    </div>

                                </div>
                                <div class="add-product__submit">
                                    <div class="modal__footer-button">
                                        <button class="button button--primary button--block" data-dismiss="modal" type="submit" data-modal="#addProductSuccess"><span class="button__text">Modifier</span>
                                        </button>
                                    </div>
                                    <div class="modal__footer-button"><a class="button button--secondary button--block" href="{{url ('/client') }}"><span class="button__text">Annuler</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    </div>

    </form>
</main>
@endsection