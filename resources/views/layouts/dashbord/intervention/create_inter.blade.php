@extends('layouts.home')

@section('sub_header')
@include('layouts\dashbord\sub_header')
@endsection
@section('main')
<main class="page-content page-content--order-header">
    <div class="container">
        <div class="page-header">
            <h3 class="page-header__subtitle d-lg-none">Fiche d'intervention</h3>
            <h1 class="page-header__title">Tickets <span class="text-grey">#{{$tickets->references}}</span></h1>
        </div>
        <div class="page-tools">
            <div class="page-tools__breadcrumbs">
                <div class="breadcrumbs">
                    <div class="breadcrumbs__container">
                        <ol class="breadcrumbs__list">
                            <li class="breadcrumbs__item">
                                <a class="breadcrumbs__link" href="index.html">
                                    <svg class="icon-icon-home breadcrumbs__icon">
                                        <use xlink:href="#icon-home"></use>
                                    </svg>
                                    <svg class="icon-icon-keyboard-right breadcrumbs__arrow">
                                        <use xlink:href="#icon-keyboard-right"></use>
                                    </svg>
                                </a>
                            </li>
                            <li class="breadcrumbs__item disabled"><a class="breadcrumbs__link" href="#"><span>Adapt</span>
                                    <svg class="icon-icon-keyboard-right breadcrumbs__arrow">
                                        <use xlink:href="#icon-keyboard-right"></use>
                                    </svg></a>
                            </li>
                            <li class="breadcrumbs__item"><a class="breadcrumbs__link" href="orders.html"><span>Ticket</span>
                                    <svg class="icon-icon-keyboard-right breadcrumbs__arrow">
                                        <use xlink:href="#icon-keyboard-right"></use>
                                    </svg></a>
                            </li>
                            <li class="breadcrumbs__item active"><span class="breadcrumbs__link">Details</span>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="page-tools__right">
                <div class="page-tools__right-row">
                    <div class="page-tools__right-item"><a class="button-icon" href="#"><span class="button-icon__icon">
                                <svg class="icon-icon-print">
                                    <use xlink:href="#icon-print"></use>
                                </svg></span></a>
                    </div>
                    <div class="page-tools__right-item">
                        <button class="button-icon" type="button"><span class="button-icon__icon">
                                <svg class="icon-icon-trash">
                                    <use xlink:href="#icon-trash"></use>
                                </svg></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-order">
            <div class="card__wrapper">
                <section class="card-order__section pt-0">
                    <div class="card__container">
                        <div class="card__header">
                            <div class="row gutter-bottom-xs justify-content-between flex-grow-1">
                                <div class="col">
                                    <h2 class="card__title">Client</h2>
                                </div>
                                <div class="col-auto"><span class="card__date">Placed on {{$tickets->created_at}}</span>
                                </div>
                            </div>
                        </div>
                        <ul class="card-order__customer-list">
                            <li class="card-order__customer-item">
                                <svg class="icon-icon-user">
                                    <use xlink:href="#icon-user"></use>
                                </svg> <b>Nom client:</b> <span>{{$tickets->client->nom_client}}</span>
                            </li>
                            <li class="card-order__customer-item">
                                <svg class="icon-icon-phone">
                                    <use xlink:href="#icon-phone"></use>
                                </svg> <b>Mobile:</b> <a href="tel:0701234567">{{$tickets->client->numero_tel}}</a>
                            </li>
                            <li class="card-order__customer-item">
                                <svg class="icon-icon-email">
                                    <use xlink:href="#icon-email"></use>
                                </svg> <b>Email:</b> <a href="mailto:example@mail.com">{{$tickets->client->email_client}}</a>
                            </li>
                            <li class="card-order__customer-item">
                                <svg class="icon-icon-location">
                                    <use xlink:href="#icon-location"></use>
                                </svg> <b>Adresse:</b> <a href="mailto:example@mail.com">{{$tickets->client->adress_client}}</a>
                            </li>
                        </ul>
                    </div>
                </section>
                <section class="card-order__section card-order__method">
                    <div class="card-order__footer-submit float-right">
                        <button class="button button--secondary add-prod" type="button">
                            <span class="button__text">Ajouter Produit</span>
                        </button>
                    </div>
                    <div class="card__container">

                        <h2 class="card__title">Machine</h2>
                        <div class="row gutter-bottom-sm">
                            <div class="col">
                                <ul class="card-order__list">
                                    <li><b>Produit:</b> {{$tickets->produit}}</li>
                                    <li><b>Marque:</b> {{$tickets->marque}}</li>
                                    <li><b>N°série:</b> {{$tickets->n°série}}</li>
                                </ul>
                            </div>
                            <div class="col">
                                <ul class="card-order__list">
                                    <li><b>Description de la panne:</b> {{$tickets->description_panne}}</li>
                                    <li><b>Accesoires Machine:</b> {{$tickets->accesoires_machine}}</li>
                                    <li><b>Etat de la machine: </b>{{$tickets->etat_machine}}</li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-10 col-md-8 col-xl card-order__method-status">
                                <div class="card-order__status-panel">
                                    <div class="form-group form-group--inline">
                                        <label class="form-label">Mode</label>
                                        <div class="input-group input-group--white input-group--append">
                                            <select class="input js-input-select input--fluid" data-placeholder="">
                                                <option value="mode" selected="selected">{{$tickets->mode}}
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group form-group--inline">
                                        <label class="form-label">Status</label>
                                        <div class="input-group input-group--white input-group--append">
                                            <select class="input js-input-select input--fluid" data-placeholder="">
                                                <option value="{{$tickets->status}}" selected="selected">{{$tickets->status}}
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="card-order__product scrollbar-thin scrollbar-visible" data-simplebar>
                    <table class="table table--lines table--groups table--striped">
                        <colgroup>
                            <col class="colgroup-2">
                            <col class="colgroup-2">
                            <col>
                            <col>
                            <col>
                        </colgroup>
                        <thead class="table__header">
                            <tr class="table__header-row">
                                <th><span class="text-nowrap">PRODUIT</span>
                                </th>
                                <th class="text-center"><span>REF</span>
                                </th>
                                <th class="text-center"><span>PRIX</span>
                                </th>
                                <th class="text-center"><span>QUANTITE</span>
                                </th>
                                <th class="text-center"><span>TOTAL</span>
                                </th>
                                <th class="table__actions"></th>
                            </tr>
                        </thead>
                        <tbody id="products_tbody">
                            {{--<tr class="table__row">
                                <td editable class="table__td">
                                    <div class="input-group input-group--prepend-xs">
                                        <div class="input-group__prepend">@</div>
                                        <div class="input input--edit y_prod_name" contenteditable="true"></div>
                                    </div>  
                                </td>
                                <td class="table__td text-center text-dark-theme">
                                    <div class="d-inline-block">
                                        <div class="input-group input-group--prepend-xs">
                                            <div class="input-group__prepend">#</div>
                                            <div class="input input--edit y_prod_ref" contenteditable="true"></div>
                                        </div>
                                    </div>
                                </td>
                                <td class="table__td text-center text-dark-theme x_prod_price">
                                    <div class="d-inline-block">
                                        <div class="input-group input-group--prepend-xs">
                                            <div class="input-group__prepend">$</div>
                                            <div class="input input--edit y_prod_price" contenteditable="true"></div>
                                        </div>
                                    </div>
                                </td>
                                <td class="table__td text-center x_prod_qte">
                                    <input class="input input--edit text-center text-light-theme y_prod_qte" type="number" value="1" min="1" max="999">
                                </td>
                                <td class="table__td text-center text-dark-theme">
                                    <div class="d-inline-block">
                                        <div class="input-group input-group--prepend-xs">
                                            <div class="input-group__prepend">$</div>
                                            <div class="input input--edit y_prod_total">0</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="table__td table__actions text-dark-theme">
                                    <button class="table__remove prod_remove" type="button">
                                        <svg class="icon-icon-trash">
                                            <use xlink:href="#icon-trash"></use>
                                        </svg>
                                    </button>
                                </td>
                            </tr>--}}
                            <!--{{-- <tr class="table__row">
                                <td class="table__td">
                                    <div class="mw-200"><span class="text-light-theme">MacBook Pro 15” (Mid 2018)</span>
                                    </div>
                                </td>
                                <td class="table__td text-center text-dark-theme">
                                    <div class="d-inline-block">
                                        <div class="input-group input-group--prepend-xs">
                                            <div class="input-group__prepend">$</div>
                                            <div class="input input--edit" contenteditable="true">2500</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="table__td text-center">
                                    <input class="input input--edit text-center text-light-theme" type="number" value="10" min="0" max="999">
                                </td>
                                <td class="table__td text-nowrap text-dark-theme">$25,000</td>
                                <td class="table__td table__actions text-dark-theme">
                                    <button class="table__remove" type="button">
                                        <svg class="icon-icon-trash">
                                            <use xlink:href="#icon-trash"></use>
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr class="table__row">
                                <td class="table__td">
                                    <div class="mw-200"><span class="text-light-theme">MacBook Pro 15” (Mid 2018)</span>
                                    </div>
                                </td>
                                <td class="table__td text-center text-dark-theme">
                                    <div class="d-inline-block">
                                        <div class="input-group input-group--prepend-xs">
                                            <div class="input-group__prepend">$</div>
                                            <div class="input input--edit" contenteditable="true">2500</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="table__td text-center">
                                    <input class="input input--edit text-center text-light-theme" type="number" value="10" min="0" max="999">
                                </td>
                                <td class="table__td text-nowrap text-dark-theme">$25,000</td>
                                <td class="table__td table__actions text-dark-theme">
                                    <button class="table__remove" type="button">
                                        <svg class="icon-icon-trash">
                                            <use xlink:href="#icon-trash"></use>
                                        </svg>
                                    </button>
                                </td>
                            </tr> --}}-->
                        </tbody>
                    </table>
                </div>
                <div class="card-order__footer-total">
                    <div class="card__container">
                        <div class="row gutter-bottom-sm justify-content-end">
                            <div class="card-order__footer-submit col-12 col-sm">
                                <button class="button button--secondary add-prod" type="button">
                                    <span class="button__text">Ajouter Produit</span>
                                </button>
                            </div>
                            <div class="col-auto">
                                <ul class="card-order__total">
                                    <li class="card-order__total-item">
                                        <div class="card-order__total-title">Subtotal:</div>
                                        <!-- <div class="card-order__total-value" id="subtotal">$0</div> -->
                                        <div class="input-group">$
                                            <div class="input input--edit">
                                                <input style="width: 40px !important;" value="0" disabled id="subtotal" type="text"  name="subtotal">
                                            </div>
                                        </div>
                                    </li>
                                    <li class="card-order__total-item">
                                        <div class="card-order__total-title">TAX(%):</div>
                                        <div class="input-group">%
                                            <div class="input input--edit">
                                                <input style="width: 40px !important;" value="0" id="tax" type="number" min="0"name="tax">
                                            </div>
                                        </div>
                                    </li>
                                    <li class="card-order__total-item">
                                        <div class="card-order__total-title">Remise(%):</div>
                                        <div class="input-group">%
                                            <div class="input input--edit">
                                                <input style="width: 40px !important;" value="0" id="discount" type="number" min="0"name="discount">
                                            </div>
                                        </div>
                                    </li>
                                    <li class="card-order__total-item">
                                        <div class="card-order__total-title">Timbre:</div>
                                        <div class="input-group">$
                                            <div class="input input--edit">
                                                <input style="width: 40px !important;"min="0" value="0" id="timbre" type="number" step="0.01" name="timbre">
                                            </div>
                                        </div>
                                    </li>
                                    <li class="card-order__total-item">
                                        <div class="card-order__total-title">DIAGNOSTIQUE:</div>
                                        <div class="input-group">$
                                            <div class="input input--edit">
                                                <input style="width: 40px !important;" value="0" id="diagnostic" min="0"type="number" name="diagnostic">
                                            </div>
                                        </div>
                                    </li>
                                    <li class="card-order__total-item card-order__total-footer">
                                        <div class="card-order__total-title">total:</div>
                                        <div class="card-order__total-value" >$
                                            <input style="width: 50px !important;" value="0" disabled id="final_price" type="text" name="final_price">
                                        </div>
                                    </li>
                                </ul>
                                <br>
                                <button class="button button--primary btn_calculate" type="button">
                                    <span class="button__text">Enregistrer</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
@section('script')
<script src="{{asset('js\validation.js')}}"></script>
<script>
    // $(document).ready(function() {
    $(document).on('click', ".prod_remove", function(e) {
        old_price = $(this).closest('tr').find('.y_prod_total').html();
        subtotal = $('#subtotal').val();
        $('#subtotal').val(subtotal - old_price);
        var r = $(this).closest('tr').remove();
    });
    // })
    $("#subtotal").on("keyup",function(){
        alert('change');
      var sub = parseFloat($(this).val());
      var tax = parseFloat($("#tax").val());
      var discount = parseFloat($("#discount").val());
      var timbre = parseFloat($("#timbre").val());
      tax = (sub / 100) * tax;
      discount = (sub / 100) * discount;
      var fp = sub-discount-tax+timbre;
      $("#final_price").val(fp);

    });
</script>
@endsection