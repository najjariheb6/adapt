<form method="POST" action="{{route('client.store')}}">
    {{ csrf_field() }}
    <div class="modal modal--panel modal--right" id="addProduct">
        <div class="modal__overlay" data-dismiss="modal"></div>
        <div class="modal__wrap">
            <div class="modal__window scrollbar-thin" data-simplebar>
                <div class="modal__content">
                    <div class="modal__header">
                        <div class="modal__container">
                            <h2 class="modal__title">Ajouter Client</h2>
                        </div>
                    </div>
                    <div class="modal__body">
                        <div class="modal__container">

                            <div class="row row--md">
                                <div class="col-12 form-group form-group--lg">
                                    <label class="form-label">Nom client</label>
                                    <div class="input-group">
                                        <input class="input" type="text" placeholder="" name="nom_client" value="" required>
                                    </div>
                                </div>
                                <div class="col-12 form-group form-group--lg">
                                    <label class="form-label" name="discription">Numéro de Tel</label>
                                    <div class="input-editor">
                                        <input class="input" type="text" placeholder="" name="numero_tel" value="" required>
                                    </div>
                                </div>
                                <div class="col-12 form-group form-group--lg">
                                    <label class="form-label">Email client</label>
                                    <div class="input-group">
                                        <input class="input" type="text" placeholder="" name="email_client" value="" required>
                                    </div>
                                </div>
                                <div class="col-12 form-group form-group--lg">
                                    <label class="form-label">Adresse client</label>
                                    <div class="input-group">
                                        <input class="input" type="text" placeholder="" name="adress_client" value="" required>
                                    </div>
                                </div>
                            </div>
                            <div class="modal__footer">
                                <div class="modal__container">
                                    <div class="modal__footer-buttons">
                                        <div class="modal__footer-button">
                                            <button class="button button--secondary button--block"><span class="button__text">Ajouter</span>
                                            </button>
                                        </div>
                                        <div class="modal__footer-button">
                                            <button class="button button--secondary button--block" data-dismiss="modal"><span class="button__text">Annuler</span>
                                            </button>
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

<div class="modal modal--panel modal--right" id="addProduct">
    <div class="modal__overlay" data-dismiss="modal">
    </div>
    <div class="modal__wrap">
        <div class="modal__window scrollbar-thin" data-simplebar>
            <div class="modal__content">
                <div class="modal__header">
                    <div class="modal__container">
                        <h2 class="modal__title">Ajouter Client</h2>
                    </div>
                </div>
                <div class="modal__body">
                    <div class="modal__container">
                        <form method="POST" action="{{action('ClientController@store')}}">
                            {{ csrf_field() }}
                            <div class="row row--md">
                                <div class="col-12 form-group form-group--lg">
                                    <label class="form-label">Nom client</label>
                                    <div class="input-group">
                                        <input class="input" type="text" placeholder="" name="nom_client" value="" required>
                                    </div>
                                </div>
                                <div class="col-12 form-group form-group--lg">
                                    <label class="form-label" name="discription">Numero de Tel</label>
                                    <div class="input-editor">
                                        <input class="input" type="text" placeholder="" name="numero_tel" value="" required>
                                    </div>
                                </div>
                                <div class="col-12 form-group form-group--lg">
                                    <label class="form-label">Email client</label>
                                    <div class="input-group">
                                        <input class="input" type="text" placeholder="" name="email_client" value="" required>
                                    </div>
                                </div>
                                <div class="col-12 form-group form-group--lg">
                                    <label class="form-label">Adresse client</label>
                                    <div class="input-group">
                                        <input class="input" type="text" placeholder="" name="adress_client" value="" required>
                                    </div>
                                </div>
                            </div>
                            <div class="modal__footer">
                                <div class="modal__container">
                                    <div class="modal__footer-buttons">
                                        <div class="modal__footer-button">
                                            <button class="button button--secondary button--block"><span class="button__text">Ajouter</span>
                                            </button>
                                        </div>
                                        <div class="modal__footer-button">
                                            <button class="button button--secondary button--block" data-dismiss="modal"><span class="button__text">Annuler</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>