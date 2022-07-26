<x-layout>
    <link rel="stylesheet" href="{{ asset('assets/pages/css/custom.css') }}">

    <div class="main bg-black">
        <div class="container">
            <!-- BEGIN SIDEBAR & CONTENT -->
            <div class="row margin-bottom-40">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif

                @if ($message = Session::get('error'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                <div class="col-lg-6">
                    <img id="pc_img" src="{{ asset('assets/pages/img/desktop__5.png') }}" alt="component image">
                </div>
                <div class="col-lg-6 rig-form-right">
                    <h2 class="form-title">CUSTOM RIG</h2>
                    <form action="{{ route('customise.storeData') }}" method="POST" id="form">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="created_at" value="{{ date('Y-m-d h:m:s') }}">
                        <div class="form-row">
                            <div class="col-lg-6">
                                <label for="country">Cabinates <span class="require">*</span></label>
                                <select name="cabinate_name" class="form-control rig-form-field input-sm"
                                    onchange="ajaxGet(this.value,'cabinate_brand')">
                                    <option selected disabled> --- Select Cabinates --- </option>
                                    @foreach ($cabinate as $cabin)
                                        <option value="{{ $cabin->slug . '@' . $cabin->sale_price }} ">
                                            {{ $cabin->name }} +
                                            ₹ {{ $cabin->sale_price }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-lg-6">
                                <label for="country">Cabinates <span class="require">*</span></label>
                                <select id="cabinate_brand" name="cabinate_brand"
                                    class="form-control rig-form-field input-sm">
                                    <option selected disabled> --- Select Cabinates --- </option>

                                </select>
                            </div>


                            <div class="col-lg-6">
                                <label for="country">PROCESSOR BRAND <span class="require">*</span></label>
                                <select name="processor_brand" onchange="ajaxBrand(this.value,'processor_name')"
                                    class="form-control rig-form-field input-sm" id="cabinate">
                                    <option disabled selected> --- Please Select --- </option>
                                    @foreach ($processor as $pro)
                                        <option value="{{ $pro->brand . '|' . $pro->subcategory_id }}">
                                            {{ $pro->brand }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label for="country"> PROCESSORS <span class="require">*</span></label>
                                <select name="processor_name" id="processor_name"
                                    class="form-control rig-form-field input-sm" id="brand">
                                    <option disabled selected> --- Please Select --- </option>

                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label for="country">MOTHERBOARD BRAND <span class="require">*</span></label>
                                <select name="motherboard_brand" onchange="ajaxBrand(this.value,'motherboard_name')"
                                    class="form-control rig-form-field input-sm">
                                    <option value="" selected> --- Please Select --- </option>
                                    @foreach ($motherboard as $pro)
                                        <option value="{{ $pro->brand . '|' . $pro->subcategory_id }}">
                                            {{ $pro->brand }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label for="country"> MOTHERBOARDS <span class="require">*</span></label>
                                <select name="motherboard_name" id="motherboard_name"
                                    class="form-control rig-form-field input-sm">
                                    <option value="" selected> --- Please Select --- </option>
                                    <option value="244">Aaland Islands</option>
                                    <option value="1">Afghanistan</option>
                                    <option value="2">Albania</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label for="country">GRAPHIC CARD BRAND <span class="require">*</span></label>
                                <select name="graphic_card_brand" onchange="ajaxBrand(this.value,'graphic_card_name')"
                                    class="form-control rig-form-field input-sm">
                                    <option value="" selected> --- Please Select --- </option>
                                    @foreach ($graphic_card as $pro)
                                        <option value="{{ $pro->brand . '|' . $pro->subcategory_id }}">
                                            {{ $pro->brand }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label for="country"> GRAPHIC CARD <span class="require">*</span></label>
                                <select name="graphic_card_name" id="graphic_card_name"
                                    class="form-control rig-form-field input-sm">
                                    <option value="" selected> --- Please Select --- </option>

                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label for="country">SMPS BRAND <span class="require">*</span></label>
                                <select name="smps_brand" onchange="ajaxBrand(this.value,'smps_name')"
                                    class="form-control rig-form-field input-sm">
                                    <option value="" selected> --- Please Select --- </option>
                                    @foreach ($smps as $pro)
                                        <option value="{{ $pro->brand . '|' . $pro->subcategory_id }}">
                                            {{ $pro->brand }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label for="country">SMPS <span class="require">*</span></label>
                                <select name="smps_name" id="smps_name" class="form-control rig-form-field input-sm">
                                    <option value="" selected> --- Please Select --- </option>

                                </select>
                            </div>
                            {{-- <div class="col-lg-6">
                                    <label for="country">CORSAIR BRAND <span class="require">*</span></label>
                                    <select name="corsair_brand" onchange="ajaxBrand(this.value,'corsair_name')"
                                        class="form-control rig-form-field input-sm">
                                        <option value="" selected> --- Please Select --- </option>
                                        @foreach ($corsair as $pro)
                                            <option value="{{ $pro->brand . '|' . $pro->subcategory_id }}">
                                                {{ $pro->brand }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-6">
                                    <label for="country">CORSAIR <span class="require">*</span></label>
                                    <select id="corsair_name" name="corsair_name"
                                        class="form-control rig-form-field input-sm">
                                        <option value="" selected> --- Please Select --- </option>
    
                                    </select>
                                </div> --}}
                            <div class="col-lg-6">
                                <label for="country">Storage <span class="require">*</span></label>
                                <div class="checkbox">
                                    <label>
                                        <input name="primay_storrage" onclick="storage()" id="primary"
                                            type="checkbox">
                                        Primary Storage
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label for="country">Storage <span class="require">*</span></label>
                                <div class="checkbox">
                                    <label>
                                        <input name="secondary_storage" onclick="storage()" id="secondary"
                                            type="checkbox">
                                        Secondary Storage
                                    </label>
                                </div>
                            </div>
                            <div id="primary_s" class="col-lg-6">
                                <label for="country">PRIMARY STORAGE TYPE <span class="require">*</span></label>
                                <select onchange="storage_type(this.value,'primary_name')" name="primary_storage_type"
                                    class="form-control rig-form-field input-sm">
                                    <option disabled selected> --- Please Select --- </option>
                                    <option value="ssd">SSD</option>
                                    <option value="hard-disk">HDD</option>
                                </select>
                            </div>
                            <div class="col-lg-6" id="primary_ss">
                                <label for="country"> PRIMARY SSD/HDD(Brand) <span class="require">*</span></label>
                                <select id="primary_name" name="primary_name"
                                    class="form-control rig-form-field input-sm">
                                    <option value="" selected> --- Please Select --- </option>

                                </select>
                            </div>

                            <div class="col-lg-6" id="secondary_s">
                                <label for="country">SECONDARY STORAGE TYPE <span class="require">*</span></label>
                                <select name="secondary_storage_type"
                                    onchange="storage_type(this.value,'secondary_name')"
                                    class="form-control rig-form-field input-sm">
                                    <option disabled selected> --- Please Select --- </option>
                                    <option value="ssd">SSD</option>
                                    <option value="hard-disk">HDD</option>
                                </select>
                            </div>
                            <div class="col-lg-6" id="secondary_ss">
                                <label for="country"> SECONDARY SSD/HDD(Brand) <span class="require">*</span></label>
                                <select name="secondary_name" id="secondary_name"
                                    class="form-control rig-form-field input-sm">
                                    <option value="" selected> --- Please Select --- </option>

                                </select>
                            </div>

                            <div class="col-lg-6">
                                <label for="country">RAM <span class="require">*</span></label>
                                <select name="ram_brand" onchange="ajaxBrand(this.value,'ram_name')"
                                    class="form-control rig-form-field input-sm">
                                    <option value="" selected> --- Please Select RAM BRAND --- </option>
                                    @foreach ($ram as $pro)
                                        <option value="{{ $pro->brand . '|' . $pro->subcategory_id }}">
                                            {{ $pro->brand }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label for="country">RAM/SIZE <span class="require">*</span></label>
                                <select name="ram_name" id="ram_name" class="form-control rig-form-field input-sm">
                                    <option value="" selected> --- All rams of that selected brand --- </option>
                                    <option value="244">Brand 1</option>
                                    <option value="1">Brand 2</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label for="country">COOLERS <span class="require">*</span></label>
                                <select name="coolers_brand" onchange="ajaxBrand(this.value,'coolers_name')"
                                    class="form-control rig-form-field input-sm">
                                    <option value="" selected> Show all coolers </option>
                                    @foreach ($coolers as $pro)
                                        <option value="{{ $pro->brand . '|' . $pro->subcategory_id }}">
                                            {{ $pro->brand }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label for="country"> COOLERS NAME <span class="require">*</span></label>
                                <select name="coolers_name" id="coolers_name"
                                    class="form-control rig-form-field input-sm">
                                    <option value="" selected> Show all coolers of that type </option>

                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label for="country">Wifi BRAND <span class="require">*</span></label>
                                <select name="wifi_brand" onchange="ajaxBrand(this.value,'wifi_name')"
                                    class="form-control rig-form-field input-sm">
                                    <option value="" selected> Show all wifi </option>
                                    @foreach ($wifi as $pro)
                                        <option value="{{ $pro->brand . '|' . $pro->subcategory_id }}">
                                            {{ $pro->brand }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-lg-6">
                                <label for="country"> WIFI <span class="require">*</span></label>
                                <select name="wifi_name" id="wifi_name" class="form-control rig-form-field input-sm">
                                    <option value="" selected> Show all coolers of that type </option>
                                </select>
                            </div>
                            <input type="hidden" name="total" id="total_input">
                            <div class="col-lg-12">
                                <label for="country">CUSTOM MOD<span class="require">*</span></label>
                                <textarea name="custom_mode" id="" cols="30" placeholder="Custom MOD"></textarea>
                            </div>
                        </div>


                    </form>
                </div>
                <div class="row" style="margin:30px 0;">
                    <div class="col-sm-6">
                        <h3 class="tot_price">Total Price: Rs <span id="total">00.00</span> <span
                                style="color: #014f98;font-size: 18px;">
                                (Inclusive of all taxes)</span></h3>
                    </div>
                    <div class="col-sm-6">
                        <img onclick="submit_form()" src="{{ asset('assets/pages/img/icons/pdf.png') }}"
                            class="img-fluid pdf-img"
                            style="width: 154px;
                            margin-top: -15px;" alt="">
                    </div>
                </div>
            </div>
            <!-- END SIDEBAR & CONTENT -->
        </div>
    </div>
    <script>
        // var array = document.getElementsByClassName('col-lg-6');
        // for (let index = 3; index < array.length; index++) {
        //     array[index].style.display = "none";

        // }
    </script>

    <script>
        var x = 3;

        function ajaxGet(data, id) {
            getImageData(data);
            fullcalculation();
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onload = function() {

                document.getElementById(id).innerHTML = this.responseText;
                document.getElementsByClassName('col-lg-6')[x].style.display = 'block';
                document.getElementsByClassName('col-lg-6')[x + 1].style.display = 'block';
                x++;
                x++;
            }
            xmlhttp.open("GET", "/customise/" + data, true);
            xmlhttp.send();
        }

        function ajaxBrand(data, id) {
            fullcalculation();

            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onload = function() {
                x++;
                x++;

                document.getElementById(id).innerHTML = this.responseText;
                document.getElementsByClassName('col-lg-6')[x].style.display = 'block';
                document.getElementsByClassName('col-lg-6')[x + 1].style.display = 'block';

            }
            xmlhttp.open("GET", "/customise/brand/" + data);
            xmlhttp.send();

        }


        var primary = document.getElementById('primary').checked
        var secondary = document.getElementById('secondary').checked
        if (primary == true) {
            document.getElementById('primary_s').style.display = "block"
            document.getElementById('primary_ss').style.display = "block"

        } else {
            document.getElementById('primary_s').style.display = "none"
            document.getElementById('primary_ss').style.display = "none"

        }
        if (secondary == true) {
            document.getElementById('secondary_s').style.display = "block"
            document.getElementById('secondary_ss').style.display = "block"

        } else {
            document.getElementById('secondary_s').style.display = "none"
            document.getElementById('secondary_ss').style.display = "none"

        }



        function storage() {
            fullcalculation();

            var primary = document.getElementById('primary').checked
            var secondary = document.getElementById('secondary').checked
            if (primary == true) {
                document.getElementById('primary_s').style.display = "block"
                document.getElementById('primary_ss').style.display = "block"

            } else {
                document.getElementById('primary_s').style.display = "none"
                document.getElementById('primary_ss').style.display = "none"

            }
            if (secondary == true) {
                document.getElementById('secondary_s').style.display = "block"
                document.getElementById('secondary_ss').style.display = "block"

            } else {
                document.getElementById('secondary_s').style.display = "none"
                document.getElementById('secondary_ss').style.display = "none"

            }
            x++;
            x++;
        }

        function storage_type(data, id) {
            fullcalculation();
            storage();
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onload = function() {

                document.getElementById(id).innerHTML = this.responseText;
                document.getElementsByClassName('col-lg-6')[x].style.display = 'block';
                document.getElementsByClassName('col-lg-6')[x + 1].style.display = 'block';
                x++;
                x++;
            }
            xmlhttp.open("GET", "/customise/storage/" + data);
            xmlhttp.send();
            x++;
            x++;
        }

        function getImageData(data) {
            fullcalculation();

            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onload = function() {

                document.getElementById('pc_img').src = this.responseText;
            }
            xmlhttp.open("GET", "/customise/image/" + data);
            xmlhttp.send();
        }

        function fullcalculation() {
            var total_amount = 0;
            var array = document.getElementsByTagName('select');
            for (let index = 0; index < array.length; index++) {
                var amount = (array[index].value).split("@")[1]
                if (amount > 0) {
                    total_amount = total_amount + Number(amount);
                }

            }
            document.getElementById('total').innerHTML = total_amount;
            document.getElementById('total_input').value = total_amount;

        }


        function submit_form() {
            document.getElementById('form').submit();
        }
    </script>
    <style>
        select option {
            color: #000 !important;
        }
    </style>

</x-layout>
