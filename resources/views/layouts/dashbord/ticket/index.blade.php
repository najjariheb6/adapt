@extends('layouts.home')

@section('main')
<main class="page-content">
    <div class="container">
        <div class="page-header">
            <h1 class="page-header__title">Tickets</h1>
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
                            <li class="breadcrumbs__item disabled"><a class="breadcrumbs__link" href="#"><span>Ticket</span>
                                    <svg class="icon-icon-keyboard-right breadcrumbs__arrow">
                                        <use xlink:href="#icon-keyboard-right"></use>
                                    </svg></a>
                            </li>
                            <li class="breadcrumbs__item active"><span class="breadcrumbs__link">Tickets</span>
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
                    <div class="page-tools__right-item"><a class="button-icon" href="#"><span class="button-icon__icon">
                                <svg class="icon-icon-import">
                                    <use xlink:href="#icon-import"></use>
                                </svg></span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="toolbox">
            <div class="toolbox__row row gutter-bottom-xs">
                <div class="toolbox__left col-12 col-lg">
                    <div class="toolbox__left-row row row--xs gutter-bottom-xs">
                        <div class="form-group form-group--inline col-12 col-sm-auto">
                            <label class="form-label">Voir</label>
                            <div class="input-group input-group--white input-group--append">
                                <input class="input input--select" type="text" value="10" size="1" data-toggle="dropdown" readonly><span class="input-group__arrow">
                                    <svg class="icon-icon-keyboard-down">
                                        <use xlink:href="#icon-keyboard-down"></use>
                                    </svg></span>
                                <div class="dropdown-menu dropdown-menu--right dropdown-menu--fluid js-dropdown-select"><a class="dropdown-menu__item active" href="#" tabindex="0" data-value="10">10</a><a class="dropdown-menu__item" href="#" tabindex="0" data-value="15">15</a><a class="dropdown-menu__item" href="#" tabindex="0" data-value="20">20</a>
                                    <a class="dropdown-menu__item" href="#" tabindex="0" data-value="25">25</a><a class="dropdown-menu__item" href="#" tabindex="0" data-value="50">50</a>
                                </div>
                            </div>
                        </div>
                        <div class="form-group form-group--inline col col-sm-auto">
                            <div class="input-group input-group--white input-group--prepend input-group--append">
                                <div class="input-group__prepend">
                                    <svg class="icon-icon-calendar">
                                        <use xlink:href="#icon-calendar"></use>
                                    </svg>
                                </div>
                                <input class="input input--select" type="text" value="01.12.18 / 07.12.18" readonly><span class="input-group__arrow">
                                    <svg class="icon-icon-keyboard-down">
                                        <use xlink:href="#icon-keyboard-down"></use>
                                    </svg></span>
                            </div>
                        </div>
                        <div class="form-group form-group--inline col-12 col-sm-auto d-none d-sm-block">
                            <div class="toolbox__status input-group input-group--white input-group--append">
                                <input class="input input--select" type="text" value="Modes" data-toggle="dropdown" readonly><span class="input-group__arrow">
                                    <svg class="icon-icon-keyboard-down">
                                        <use xlink:href="#icon-keyboard-down"></use>
                                    </svg></span>
                                <div class="dropdown-menu dropdown-menu--right dropdown-menu--fluid js-dropdown-select">
                                    <a class="dropdown-menu__item active" href="#" tabindex="0" data-value="Les modes">
                                        <span class="marker-item"></span> Modes
                                    </a>
                                    <a class="dropdown-menu__item" href="#" tabindex="0" data-value="Garentie">
                                        <span class="marker-item color-green"></span> Garentie
                                    </a>
                                    <a class="dropdown-menu__item" href="#" tabindex="0" data-value="Facture">
                                        <span class="marker-item color-blue"></span> Facture
                                    </a>
                                    <a class="dropdown-menu__item" href="#" tabindex="0" data-value="Sous contrat">
                                        <span class="marker-item color-orange"></span> Sous contrat
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="form-group form-group--inline col-12 col-sm-auto d-none d-sm-block">
                            <div class="toolbox__status input-group input-group--white input-group--append">
                                <input class="input input--select" type="text" value="Status" data-toggle="dropdown" readonly><span class="input-group__arrow">
                                    <svg class="icon-icon-keyboard-down">
                                        <use xlink:href="#icon-keyboard-down"></use>
                                    </svg></span>
                                <div class="dropdown-menu dropdown-menu--right dropdown-menu--fluid js-dropdown-select">
                                    <a class="dropdown-menu__item active" href="#" tabindex="0" data-value="Les modes">
                                        <span class="marker-item"></span> Les modes
                                    </a>
                                    <a class="dropdown-menu__item" href="#" tabindex="0" data-value="Non examiné">
                                        <span class="marker-item color-blue"></span> Non examiné
                                    </a>
                                    <a class="dropdown-menu__item" href="#" tabindex="0" data-value="Encours">
                                        <span class="marker-item color-orange"></span> Encours
                                    </a>
                                    <a class="dropdown-menu__item" href="#" tabindex="0" data-value="Terminé">
                                        <span class="marker-item color-green"></span> Terminé
                                    </a>
                                    <a class="dropdown-menu__item" href="#" tabindex="0" data-value="Annulé">
                                        <span class="marker-item color-red"></span> Annulé
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="toolbox__right col-12 col-lg-auto">
                    <div class="toolbox__right-row row row--xs flex-nowrap">
                        <div class="col col-lg-auto">
                            <form class="toolbox__search" method="GET">
                                <div class="input-group input-group--white input-group--prepend">
                                    <div class="input-group__prepend">
                                        <svg class="icon-icon-search">
                                            <use xlink:href="#icon-search"></use>
                                        </svg>
                                    </div>
                                    <input class="input" type="text" placeholder="Chercher ticket">
                                </div>
                            </form>
                        </div>
                        <div class="col-auto">
                            <button class="button-add button-add--blue" onclick="javascript:location.href = '{{url('/ticket/create')}}'" data-modal="#addProduct"><span class="button-add__icon">
                                    <svg class="icon-icon-plus">
                                        <use xlink:href="#icon-plus"></use>
                                    </svg></span><span class="button-add__text"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="table-wrapper">
            <div class="table-wrapper__content table-collapse scrollbar-thin scrollbar-visible" data-simplebar>
                <table class="table table--lines">
                    <colgroup>
                        <col width="90px">
                        <col width="100px">
                        <col width="16%">
                        <col>
                        <col>
                        <col>
                        <col>
                        <col>
                    </colgroup>
                    <thead class="table__header">
                        <tr class="table__header-row">
                            <th>
                                <div class="table__checkbox table__checkbox--all">
                                    <label class="checkbox">
                                        <input class="js-checkbox-all" type="checkbox" data-checkbox-all="product"><span class="checkbox__marker"><span class="checkbox__marker-icon">
                                                <svg class="icon-icon-checked">
                                                    <use xlink:href="#icon-checked"></use>
                                                </svg></span></span>
                                    </label>
                                </div>
                            </th>
                            <th class="d-none d-lg-table-cell"><span>Ref</span>
                            </th>
                            <th class="table__th-sort d-none d-sm-table-cell"><span class="align-middle">Nom Client</span><span class="sort sort--down"></span>
                            </th>
                            <th class="table__th-sort "><span class="align-middle">Numero Tel</span><span class="sort sort--down"></span>
                            </th>
                            <th class="table__th-sort d-none d-sm-table-cell"><span class="align-middle">Produit</span><span class="sort sort--down"></span>
                            </th>
                            <th class="table__th-sort d-none d-sm-table-cell"><span class="align-middle">Mode</span><span class="sort sort--down"></span>
                            </th>
                            <th class="table__th-sort d-none d-sm-table-cell"><span class="align-middle">Status</span><span class="sort sort--down"></span>
                            </th>
                            <th class="table__th-sort"><span class="align-middle">Date</span><span class="sort sort--down"></span>
                            </th>

                            <th class="table__actions"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tickets as $ticket)
                        <tr class="table__row">
                            <td class="table__td">
                                <div class="table__checkbox table__checkbox--all">
                                    <label class="checkbox">
                                        <input type="checkbox" data-checkbox="product"><span class="checkbox__marker"><span class="checkbox__marker-icon">
                                                <svg class="icon-icon-checked">
                                                    <use xlink:href="#icon-checked"></use>
                                                </svg></span></span>
                                    </label>
                                </div>
                            </td>
                            <td class="d-none d-lg-table-cell table__td">
                                <span class="text-grey">{{$ticket->references}}</span>
                            </td>
                            <td class="table__td d-none d-sm-table-cell">
                                <span>{{$ticket->client->nom_client}}</span>
                            </td>
                            <td class="d-none d-sm-table-cell table__td">
                                <span>{{$ticket->client->numero_tel}}</span>
                            </td>
                            <td class="table__td"><span>{{$ticket->produit}}</span>
                            </td>
                            <td class="d-none d-sm-table-cell table__td">
                                <div class="table__status">
                                    <span class="table__status-icon color-green"></span>
                                    {{$ticket->mode}}
                                </div>
                            </td>
                            <td class="d-none d-sm-table-cell table__td">
                                <div class="table__status"><span class="table__status-icon color-green"></span> {{$ticket->status}} </div>
                            </td>
                            <td class="table__td text-nowrap"><span>12.07.2018</span> 10:00 PM</td>
                            <td class="table__td table__actions">
                                <div class="items-more">
                                    <!-- <button class="items-more__button">
                                                    <svg class="icon-icon-more">
                                                        <use xlink:href="#icon-more"></use>
                                                    </svg>
                                                </button> -->
                                    {{--<div class="dropdown-items dropdown-items--right dropdown-items--up">
                                        <div class="dropdown-items__container">
                                            <ul class="dropdown-items__list">
                                                <li class="dropdown-items__item">
                                                    <a class="dropdown-items__link" href="{{action('TicketController@show', $ticket['id'])}} ">
                                    <span class="dropdown-items__link-icon">
                                        <svg class="icon-icon-view">
                                            <use xlink:href="#icon-view"></use>
                                        </svg>
                                    </span>Details
                                    </a>
                                    </li>
                                    <li class="dropdown-items__item">
                                        <a class="dropdown-items__link" href="{{action('TicketController@edit', $ticket['id'])}} ">
                                            <span class="dropdown-items__link-icon">
                                                <svg class="icon-icon-archive">
                                                    <use xlink:href="#icon-archive"></use>
                                                </svg>
                                            </span>Edite
                                        </a>
                                    </li>
                                    <form action="{{action('TicketController@destroy',$ticket->id)}}" method="post">
                                        {{ csrf_field() }}
                                        <input name="_method" type="hidden" value="DELETE">
                                        <li class="dropdown-items__item">
                                            <button id="submit" type="submit" class="dropdown-items__link">
                                                <span class="dropdown-items__link-icon">
                                                    <svg class="icon-icon-trash">
                                                        <use xlink:href="#icon-trash"></use>
                                                    </svg>
                                                </span>Delete
                                            </button>
                                        </li>
                                    </form>
                                    </ul>
                                </div>
            </div>--}}
            <div class="col-auto">
                <a href="{{action('TicketController@show', $ticket['id'])}} ">
                    <button class="button-add button-add--blue ">
                        <span class="button-add__icon">
                            <svg class="icon-icon-view">
                                <use xlink:href="#icon-view"></use>
                            </svg>
                        </span>
                    </button>
                </a>
            </div>
            <div class="col-auto">
                <a href="{{url('/ticket/pdf-view', $ticket->id)}} ">
                    <button class="button-add button-add--blue ">
                        <span class="button-add__icon">
                            <svg class="icon-icon-print">
                                <use xlink:href="#icon-print"></use>
                            </svg>
                        </span>
                    </button>
                </a>
            </div>
            <div class="col-auto">
                <a href="{{action('TicketController@edit', $ticket['id'])}} ">
                    <button class="button-add button-add--blue ">
                        <span class="button-add__icon">
                            <svg class="icon-icon-archive">
                                <use xlink:href="#icon-action"></use>
                            </svg>
                        </span>
                    </button>
                </a>
            </div>
            <div class="col-auto">
                <a href="{{action('InterventionController@edit', $ticket['id'])}} ">
                    <button class="button-add button-add--blue ">
                        <span class="button-add__icon">
                            <svg class="icon-icon-bill">
                                <use xlink:href="#icon-bill"></use>
                            </svg>
                        </span>
                    </button>
                </a>
            </div>
            <div class="col-auto">
                <form action="{{action('TicketController@destroy',$ticket->id)}}" method="post">
                    {{ csrf_field() }}
                    <input name="_method" type="hidden" value="DELETE">
                    <button type="submit" class="button-add button-add--blue ">
                        <span class="button-add__icon">
                            <svg class="icon-icon-trash">
                                <use xlink:href="#icon-trash"></use>
                            </svg>
                        </span>
                    </button>
                </form>
            </div>
        </div>
        </td>
        </tr>
        @endforeach
        </tbody>
        </table>
    </div>
    <div class="table-wrapper__footer">
        <div class="row">
            <div class="table-wrapper__show-result col text-grey"><span class="d-none d-sm-inline-block">Voir</span> 1 Vers 10 <span class="d-none d-sm-inline-block">de 50 tickets</span>
            </div>
            <div class="table-wrapper__pagination col-auto">
                <ol class="pagination">
                    <li class="pagination__item">
                        <a class="pagination__arrow pagination__arrow--prev" href="#">
                            <svg class="icon-icon-keyboard-left">
                                <use xlink:href="#icon-keyboard-left"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="pagination__item active"><a class="pagination__link" href="#">1</a>
                    </li>
                    <li class="pagination__item"><a class="pagination__link" href="#">2</a>
                    </li>
                    <li class="pagination__item"><a class="pagination__link" href="#">3</a>
                    </li>
                    <li class="pagination__item pagination__item--dots">...</li>
                    <li class="pagination__item"><a class="pagination__link" href="#">10</a>
                    </li>
                    <li class="pagination__item">
                        <a class="pagination__arrow pagination__arrow--next" href="#">
                            <svg class="icon-icon-keyboard-right">
                                <use xlink:href="#icon-keyboard-right"></use>
                            </svg>
                        </a>
                    </li>
                </ol>
            </div>
        </div>
    </div>
    </div>
    </div>
</main>
@endsection