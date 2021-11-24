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
                <h1 class="page-header__title">Editer Ticket</h1>
            </div>
            <form class="add-product__form" action="{{action('TicketController@update',$tickets['id'])}}" method="post">
                {{csrf_field()}}
                <div class="card add-product card--content-center">
                    <div class="card__wrapper">
                        <div class="card__container">
                            <h3>Client</h3>
                            <div class="add-product__row">
                                <input name="_method" type="hidden" value="PATCH">
                                <div class="add-product__right">
                                    <div class="row row--md">
                                        <div class="col-6 form-group form-group--lg">
                                            <label class="form-label">Nom Client</label>
                                            <div class="input-group">
                                                <input disabled class="input" name="nom_client" type="text" placeholder="" value="{{$tickets->client->nom_client}}" required>
                                            </div>
                                        </div>
                                        <div class="col-6 form-group form-group--lg">
                                            <label class="form-label">Numero Tel</label>
                                            <input disabled class="input" name="numero_tel" type="text" placeholder="" value="{{$tickets->client->numero_tel}}" required>
                                        </div>
                                        <div class="col-6 form-group form-group--lg">
                                            <label class="form-label">Email Client</label>
                                            <input disabled class="input" name="email_client" type="text" placeholder="" value="{{$tickets->client->email_client}}" required>
                                        </div>
                                        <div class="col-6 form-group form-group--lg">
                                            <label class="form-label">Adress Client</label>
                                            <input disabled class="input" name="adress_client" type="text" placeholder="" value="{{$tickets->client->adress_client}}" required>
                                        </div>
                                        <div class="col-12 form-group form-group--lg">
                                            <h3>Machine</h3>
                                        </div>
                                        <!-- <br> -->
                                        <div class="col-6 form-group form-group--lg">
                                            <label class="form-label">Produit</label>
                                            <div class="input-group">
                                                <input class="input" name="produit" type="text" placeholder="" value="{{$tickets->produit}}" required>
                                            </div>
                                        </div>
                                        <div class="col-6 form-group form-group--lg">
                                            <label class="form-label">Marque</label>
                                            <input class="input" name="marque" type="text" placeholder="" value="{{$tickets->marque}}" required>
                                        </div>
                                        <div class="col-6 form-group form-group--lg">
                                            <label class="form-label">N°série</label>
                                            <input class="input" name="n°série" type="text" placeholder="" value="{{$tickets->n°série}}" required>
                                        </div>
                                        <div class="col-6 form-group form-group--lg">
                                            <label class="form-label">Description panne</label>
                                            <input class="input" name="description_panne" type="text" placeholder="" value="{{$tickets->description_panne}}" required>
                                        </div>
                                        <div class="col-6 form-group form-group--lg">
                                            <label class="form-label">Accesoires machine</label>
                                            <input class="input" name="accesoires_machine" type="text" placeholder="" value="{{$tickets->accesoires_machine}}" required>
                                        </div>
                                        <div class="col-6 form-group form-group--lg">
                                            <label class="form-label">Etat machine</label>
                                            <input class="input" name="etat_machine" type="text" placeholder="" value="{{$tickets->etat_machine}}" required>
                                        </div>
                                        <div class="col-12 form-group form-group--lg">
                                            <label class="form-label">Mode</label>
                                            <input class="input" name="mode" type="text" placeholder="" value="{{$tickets->mode}}" required>
                                        </div>
                                        <div class="add-product__submit">
                                            <div class="modal__footer-button">
                                                <button class="button button--primary button--block" data-dismiss="modal" type="submit" data-modal="#addProductSuccess"><span class="button__text">Editer</span>
                                                </button>
                                            </div>
                                            <div class="modal__footer-button"><a class="button button--secondary button--block" href="{{url ('/ticket') }}"><span class="button__text">Annuler</span></a>
                                            </div>
                                        </div>
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