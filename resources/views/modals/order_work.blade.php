<div id="modal_order_work" class="modal">
    <div class="modal-header">
        <div class="header_modal_order_work">
            <h4>Zakajite Rabotu</h4>
        </div>
    </div>
    <div class="modal-content">
        <div class="body_modal_order_work">
            <form action="" method="POST" class="order_work_modal_form" data-action="{{url('/order-work')}}">
                {{csrf_field()}}
                <div class="input-field col s12">
                    <select name="order_work_category" class="order_work_categoryy">
                        <option value="" disabled selected>Katergorii</option>
                        <option value="diplomnaya">Diplomnaya</option>
                        <option value="kursovaya">Kursovaya</option>
                        <option value="referat">Referat</option>
                        <option value="esse">Esse</option>
                    </select>
                </div>
                <div class="input-field col s12">
                    <select name="order_work_fakultet" class="order_work_fakultet">
                        <option value="" disabled selected>Fakultet</option>
                        <option value="economika">Ekonomika</option>
                        <option value="turizm">Turizm</option>
                        <option value="management">Menegment</option>
                        <option value="uridiicheskii">Uridicheskii</option>
                        <option value="mej_otnosheniya">Mejdunarodnie ornosheniya</option>
                        <option value="inform">Prikladnaya Matematika</option>
                        <option value="in_yaz">Inostrannye Yaziki</option>
                    </select>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input value="" id="name_modal_order_work" name="name_modal_order_work" type="text" class="validate">
                        <label class="active" for="name_modal_order_work">Name of work</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input value="" id="nauch_ruk_modal_order_work" name="nauch_ruk_modal_order_work" type="text" class="validate">
                        <label class="active" for="nauch_ruk_modal_order_work">Nauchnyy rukovoditel</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input type="date" id="date_sdachi" name="date_sdachi" class="datepicker">
                        <label class="active" for="date_sdachi">Data sdachi</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input value="" id="nameOfStud_modal_order_work" name="nameOfStud_modal_order_work" type="text" class="validate">
                        <label class="active" for="nameOfStud_modal_order_work">Name of Student</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input value="" id="number_modal_order_work" name="number_modal_order_work" type="text" class="validate">
                        <label class="active" for="number_modal_order_work">Number</label>
                    </div>
                </div>
            </form>
        </div>

    </div>
    <div class="modal-footer">
        <a href="#!" class=" modal-action btn waves-effect waves-green order_work_modal_btn" >Zakazat</a>
    </div>
</div>