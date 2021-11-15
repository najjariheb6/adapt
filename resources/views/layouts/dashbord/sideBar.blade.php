@section('sideBar')
    <aside class="sidebar">
                <div class="sidebar__backdrop"></div>
                <div class="sidebar__container">
                    <div class="sidebar__top">
                        <div class="container container--sm">
                            <a class="sidebar__logo" href="#">
                                <img
                                    class="sidebar__logo-icon"
                                    src=" {{asset('img/content/logotype.svg')}} "
                                    alt="#"
                                    width="44"
                                />
                                <div class="sidebar__logo-text">Adapt</div>
                            </a>
                        </div>
                    </div>
                    <div
                        class="sidebar__content"
                        data-simplebar="data-simplebar"
                    >
                        <nav class="sidebar__nav">
                            <ul class="sidebar__menu">
                                <li class="sidebar__menu-item">
                                    <a
                                        class="sidebar__link active"
                                        href="#"
                                        aria-expanded="true"
                                        ><span class="sidebar__link-icon">
                                            <svg class="icon-icon-dashboard">
                                                <use
                                                    xlink:href="#icon-dashboard"
                                                ></use></svg></span
                                        ><span class="sidebar__link-text"
                                            >Dashboard</span
                                        ></a
                                    >
                                </li>
                                <li class="sidebar__menu-item">
                                    <a
                                        class="sidebar__link"
                                        href="#"
                                        data-toggle="collapse"
                                        data-target="#E-Commerce"
                                        aria-expanded="false"
                                        ><span class="sidebar__link-icon">
                                            <svg class="icon-icon-cart">
                                                <use
                                                    xlink:href="#icon-cart"
                                                ></use></svg></span
                                        ><span class="sidebar__link-text"
                                            >Category</span
                                        ><span class="sidebar__link-arrow">
                                            <svg
                                                class="icon-icon-keyboard-down"
                                            >
                                                <use
                                                    xlink:href="#icon-keyboard-down"
                                                ></use></svg></span
                                    ></a>
                                    <div class="collapse" id="E-Commerce">
                                        <ul class="sidebar__collapse-menu">
                                            <li class="sidebar__menu-item">
                                                <a
                                                    class="sidebar__link"
                                                    href="{{url ('/category') }}"
                                                    ><span
                                                        class="
                                                            sidebar__link-signal
                                                        "
                                                    ></span
                                                    ><span
                                                        class="
                                                            sidebar__link-text
                                                        "
                                                        >Categoies</span
                                                    ></a
                                                >
                                            </li>
                                            <li class="sidebar__menu-item">
                                                <a
                                                    class="sidebar__link"
                                                    href="{{url('CategoryController@index')}}"
                                                    ><span
                                                        class="
                                                            sidebar__link-signal
                                                        "
                                                    ></span
                                                    ><span
                                                        class="
                                                            sidebar__link-text
                                                        "
                                                        >Add Gategory</span
                                                    ></a
                                                >
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </aside>
@show