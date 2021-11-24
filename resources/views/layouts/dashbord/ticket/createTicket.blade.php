@extends('layouts.home')

@section('main')
    <main class="page-content">
        <div class="container">
            <div class="page-header">
                <h1 class="page-header__title">Create Ticket</h1>
            </div>
            <div class="card add-product card--content-center">
                <div class="card__wrapper">
                    <div class="card__container">
                        <div class="toolbox">
                            <div class="toolbox__row row gutter-bottom-xs">
                                <div class="col-auto">
                                    <button class="button-add button-add--blue" data-modal="#addProduct"><span class="button-add__icon">
                                            <svg class="icon-icon-plus">
                                                <use xlink:href="#icon-plus"></use>
                                            </svg></span><span class="button-add__text"></span></button>
                                </div>
                                <div class="form-group form-group--inline col col-sm-auto">
                                    <form class="add-product__form" action="{{action('TicketController@store')}}" method="POST">
                                        {{csrf_field()}}
                                        <table>
                                            <tr class="form-group form-group--inline col-12 col-sm-auto">
                                                <td>
                                                    <div class="form-group form-group--inline col-12 col-sm-auto">
                                                        <label class="form-label">Client</label>
                                                        <select class="input input--select" name="client_id" id="client">
                                                            @foreach($clients as $client)
                                                            <option value="{{$client->id}}">{{$client->nom_client}}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                        {{-- <span class="input-group__arrow">
                                                                    <svg class="icon-icon-keyboard-down">
                                                                    <use xlink:href="#icon-keyboard-down"></use>
                                                                    </svg></span> --}}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group form-group--inline col-12 col-sm-auto">
                                                        <label class="form-label">Mode</label>
                                                        <select class="input input-select" name="mode">

                                                            <option>Garentie</option>
                                                            <option>Facture</option>
                                                            <option>Sous-Contrat</option>
                                                        </select>
                                                        {{-- <span class="input-group__arrow">
                                                                    <svg class="icon-icon-keyboard-down">
                                                                    <use xlink:href="#icon-keyboard-down"></use>
                                                                    </svg></span> --}}
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>


                                </div>

                            </div>
                        </div>
                    </div>
                    {{-- <div class="add-product__row" name="info_client" id="info_client" style="display:none">
                                        <h4 class="page-header__title">Client</h4>
                                            <br/>
                                        <div class="add-product__right"  >
                                        
                                            <div class="row" >
                                                <div class="col-8 form-group form-group--lg">
                                                    <label class="form-label">Nom Client</label>
                                                    <div class="input-group">
                                                        <input class="input"  name="nom_client" type="text" placeholder="" value="" required>
                                                    
                                                    </div>
                                                </div>
                                                <div class="col-8 form-group form-group--lg">
                                                    <label class="form-label">Numero tel</label>
                                                    <input class="input" name="numero_tel" type="text" placeholder="" value="" required>
                                                </div>
                                                <div class="col-8 form-group form-group--lg">
                                                    <label class="form-label">Email Client</label>
                                                    <input class="input" name="email_client" type="text" placeholder="" value="" required>
                                                </div>
                                            </div>
                                        
                                        </div>
                                        
                                    </div> --}}
                    <div class="add-product__row">
                        {{-- <input name="_method" type="hidden" value="post"> --}}
                        <h4 class="page-header__title">Machine</h4>
                        <br />
                        <div class="add-product__right">
                            <div class="col-12 form-group form-group--lg">
                                <label class="form-label">Produit</label>
                                <div class="input-group">
                                    <input class="input" name="produit" type="text" placeholder="" value="" required>
                                </div>
                            </div>
                            <div class="col-12 form-group form-group--lg">
                                <label class="form-label">Marque</label>
                                <input class="input" name="marque" type="text" placeholder="" value="" required>
                            </div>
                            <div class="col-12 form-group form-group--lg">
                                <label class="form-label">N° Série</label>
                                <input class="input" name="n°série" type="text" placeholder="" value="" required>
                            </div>
                            <!-- <div class="col-12 form-group form-group--lg">
                                            <label class="form-label">Referance</label>
                                            <input class="input" name="references" type="text" placeholder="" value="" required>
                                        </div> -->

                        </div>
                        <div class="add-product__left">
                            <div class="row row--md">
                                <div class="col-12 form-group form-group--lg">
                                    <label class="form-label">Description de la panne</label>
                                    <div class="input-group">
                                        <input class="input" name="description_panne" type="text" placeholder="" value="" required>
                                    </div>
                                </div>
                                <div class="col-12 form-group form-group--lg">
                                    <label class="form-label">Accesoires de la machine</label>
                                    <input class="input" name="accesoires_machine" type="text" placeholder="" value="" required>
                                </div>
                                <div class="col-12 form-group form-group--lg">
                                    <label class="form-label">Etat de la machine</label>
                                    <input class="input" name="etat_machine" type="text" placeholder="" value="" required>
                                </div>

                            </div>
                        </div>
                        <div class="add-product__submit">
                            <div class="modal__footer-button">
                                <button class="button button--primary button--block" data-dismiss="modal" type="submit"><span class="button__text">Ajouter</span>
                                </button>
                            </div>
                            <div class="modal__footer-button"><a class="button button--secondary button--block" href="#"><span class="button__text">Annuler</span></a>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </main>
    @section('modals')
        @include('layouts.dashbord.modals')
    @endsection
@endsection