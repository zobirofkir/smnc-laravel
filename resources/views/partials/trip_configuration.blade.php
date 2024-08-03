<form id="trip_configuration_form" action="{{ route('inscription.payment') }}" method="POST">
    @csrf
    <input type="hidden" name="total" value="{{ $total }}">
    <div class="row">

        <div class="col-lg-7">
            <div class="cs_contact_form cs_style_1 cs_white_bg cs_radius_30" style="padding: 83px 50px">
                <h3>Configurez vos tripes</h3>
                <hr>
                <br>
                <div>
                    <div class="cs_radio_group">
                        <div class="cs_radio_wrap">
                            <input class="cs_radio_input" type="radio" name="accommodation" id="with_accommodation"
                                   value="with_accommodation"
                                   @if($accommodation == 'with_accommodation') checked @endif>
                            <label class="cs_radio_label" for="with_accommodation">Avec Hébergement</label>
                        </div>
                        <div class="cs_radio_wrap">
                            <input class="cs_radio_input" type="radio" name="accommodation" id="without_accommodation"
                                   value="without_accommodation"
                                   @if($accommodation == 'without_accommodation') checked @endif>
                            <label class="cs_radio_label" for="without_accommodation">Sans Hébergement</label>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="isAjax" value="1">

                <br>
                <br>
                <br>
                @if($accommodation == 'with_accommodation')
                    <div>
                        <h4 class="mb-3">Hébergement:</h4>
                        <ul style="list-style: none">
                            <li>
                                <div>
                                    <label class="cs_input_label cs_heading_color">Chambre:</label>
                                    <div class="cs_radio_group">
                                        <div class="cs_radio_wrap">
                                            <input class="cs_radio_input" type="radio" name="room" id="single_room"
                                                   value="Chambre Single" @if($room == 'Chambre Single') checked @endif>
                                            <label class="cs_radio_label" for="single_room">Chambre Single</label>
                                        </div>
                                        <div class="cs_radio_wrap">
                                            <input class="cs_radio_input" type="radio" name="room" id="twin_room"
                                                   value="Chambre Twin" @if($room == 'Chambre Twin') checked @endif>
                                            <label class="cs_radio_label" for="twin_room">Chambre Twin</label>
                                        </div>
                                        <div class="cs_radio_wrap">
                                            <input class="cs_radio_input" type="radio" name="room" id="double_room"
                                                   value="Chambre Double" @if($room == 'Chambre Double') checked @endif>
                                            <label class="cs_radio_label" for="twin_room">Chambre Double</label>
                                        </div>
                                    </div>
                                    <div class="cs_height_42 cs_height_xl_25"></div>
                                </div>
                            </li>

                            @if($room == 'Chambre Twin')
                                <li>
                                    <div>
                                        <label class="cs_input_label cs_heading_color">Colocataire:</label>
                                        <input name="roommate" type="text" class="cs_form_field"
                                               placeholder="Nom et Prénom" required value="{{ $roommate }}">
                                    </div>
                                    <div class="cs_height_42 cs_height_xl_25"></div>
                                </li>
                            @endif

                            <li>
                                <div>
                                    <label class="cs_input_label cs_heading_color">Date d'arrivée:</label>
                                    <div class="cs_with_icon_input">
                                        <input type="text" class="cs_form_field" id="depart_day_datepicker" name="depart_day" required value="{{ $depart_day }}" readonly>
                                        <i class="fa-solid fa-calendar-days"></i>
                                    </div>
                                    <div class="cs_height_42 cs_height_xl_25"></div>
                                </div>
                            </li>
                            <script>
                                $(function() {
                                    $("#depart_day_datepicker" ).datepicker({
                                        minDate: new Date(2024, 4, 9),
                                        maxDate: new Date(2024, 4, 11),
                                    });
                                } );
                            </script>

                            <li>
                                <div>
                                    <label class="cs_input_label cs_heading_color">Nuits:</label>
                                    <div class="cs_radio_group">
                                        <div class="cs_radio_wrap">
                                            <input class="cs_radio_input" type="radio" name="nights" id="1_night"
                                                   value="1" @if($nights == 1) checked @endif>
                                            <label class="cs_radio_label" for="1_night">1 Nuit</label>
                                        </div>
                                        <div class="cs_radio_wrap">
                                            <input class="cs_radio_input" type="radio" name="nights" id="2_night"
                                                   value="2" @if($nights == 2) checked @endif>
                                            <label class="cs_radio_label" for="2_night">2 Nuits</label>
                                        </div>
                                        <div class="cs_radio_wrap">
                                            <input class="cs_radio_input" type="radio" name="nights" id="3_night"
                                                   value="3" @if($nights == 3) checked @endif>
                                            <label class="cs_radio_label" for="3_night">3 Nuits</label>
                                        </div>
                                        {{--                                    <div class="cs_radio_wrap">--}}
                                        {{--                                        <input class="cs_radio_input" type="radio" name="nights" id="4_night" value="4" @if($nights == 4) checked @endif>--}}
                                        {{--                                        <label class="cs_radio_label" for="4_night">4 Nuits</label>--}}
                                        {{--                                    </div>--}}
                                        {{--                                    <div class="cs_radio_wrap">--}}
                                        {{--                                        <input class="cs_radio_input" type="radio" name="nights" id="5_night" value="5" @if($nights == 5) checked @endif>--}}
                                        {{--                                        <label class="cs_radio_label" for="5_night">5 Nuits</label>--}}
                                        {{--                                    </div>--}}
                                    </div>
                                    <div class="cs_height_42 cs_height_xl_25"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="mb-3">Accompagnement:</h4>
                        <ul style="list-style: none">
                            <li>
                                <div>
                                    <label class="cs_input_label cs_heading_color">Repas:</label>
                                    <div class="cs_radio_group" style="flex-direction: column;gap: 0 30px">
                                        <div class="cs_radio_wrap">
                                            <input class="cs_radio_input" type="checkbox" name="meals[]" id="child_meal"
                                                   value="Adulte" @if(in_array('Adulte', $meals)) checked @endif>
                                            <label class="cs_radio_label cs_checkbox_label"
                                                   for="child_meal">Adulte</label>
                                        </div>
                                        <div class="cs_radio_wrap">
                                            <input class="cs_radio_input" type="checkbox" name="meals[]" id="adult_meal"
                                                   value="Enfant de plus de 8 ans"
                                                   @if(in_array('Enfant de plus de 8 ans', $meals)) checked @endif>
                                            <label class="cs_radio_label cs_checkbox_label" for="adult_meal">Enfant de
                                                plus de 8 ans</label>
                                        </div>
                                    </div>
                                    <div class="cs_height_42 cs_height_xl_25"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                @endif
            </div>
        </div>

        <div class="col-lg-5">
            <div class="cs_contact_form cs_style_1 cs_white_bg cs_radius_30" style="padding: 83px 50px">
                <h3>Résumé</h3>
                <hr>
                <br>

                <div>
                    <div class="mb-5">
                        <h4 class="mb-3">Inscription</h4>
                        @foreach($inscriptions as $inscription)
                            <p>{{ $inscription['label'] }} = {{ $inscription['price'] }} DH </p>
                        @endforeach
                    </div>

                    <div class="mb-5">
                        <h4 class="mb-3">Hébergement</h4>
                        @foreach($accommodations as $accommodation)
                            <p>{{ $accommodation['label'] }} = {{ $accommodation['price'] }} DH</p>
                        @endforeach
                    </div>

                    <div class="mb-5">
                        <h4 class="mb-3">Accompagnement</h4>
                        @foreach($accompaniments as $accompaniment)
                            <p>{{ $accompaniment['label'] }} = {{ $accompaniment['price'] }} DH </p>
                        @endforeach
                    </div>
                </div>

                <div>
                    <h4 style="text-align: right;color: green">Total: {{ $total }} DH</h4>
                </div>

                <br>

                <h3>Paiement</h3>
                <hr>
                <br>

                <div>
                    <ul>
                        <li>
                            <div>
                                <h5>Payer avec virement bancaire:</h5>
                                <p>RIB: 022 810 0000500028015030 23</p>
                                <div>
                                    <div class="form-group" id="transfer_bank_input_wrapper">
                                        <label for="transfer_bank_input" class="cs_btn cs_style_1 w-100 mt-2" style="cursor: pointer">
                                            <span>Upload le reçu de paiement</span>
                                        </label>
                                        <input type="file" class="form-control-file" name="transfer_bank" id="transfer_bank_input" style="display: none">
                                    </div>
                                    <button id="transfer_bank_btn" type="button" class="cs_btn cs_style_1 w-100 mt-2" style="font-weight: bold;display: none">
                                        <span>Envoyer</span>
                                    </button>
                                </div>

                            </div>
                            <br><br><br>
                        </li>

                        {{--                    <li>--}}
                        {{--                        <div>--}}
                        {{--                            <h5>Payez avec une carte de crédit:</h5>--}}
                        {{--                            <button type="button" class="cs_btn cs_style_99 w-100" style="font-weight: bold">--}}
                        {{--                                <span>Continue</span>--}}
                        {{--                            </button>--}}
                        {{--                        </div>--}}
                        {{--                    </li>--}}
                    </ul>
                </div>


            </div>
        </div>

    </div>
</form>
