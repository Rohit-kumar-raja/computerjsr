<x-layout>

    <link rel="stylesheet" href="{{ asset('assets/pages/css/custome.css') }}">

    <div class="main bg-black">
        <div class="container">
            <!-- BEGIN SIDEBAR & CONTENT -->
            <div class="row margin-bottom-40">
                <div class="col-lg-6">
                    <img src="{{ asset('images/desktop__5.png') }}" alt="component image">
                </div>
                <div class="col-lg-6 rig-form-right">
                    <h2 class="form-title">CUSTOM RIG</h2>
                    <form>
                        <div class="form-row">
                            {{-- <div class="col-lg-6">
                <label for="country">Usage <span class="require">*</span></label>
                    <select class="form-control rig-form-field input-sm" id="country">
                    
                    
                    </select>
                </div> --}}

                            <div class="col-lg-6">
                                <label for="country">Cabinates <span class="require">*</span></label>
                                <select class="form-control rig-form-field input-sm" onchange="ajaxGet(this.value)"
                                    id="country">
                                    <option selected disabled> --- Select Cabinates --- </option>
                                    @foreach ($cabinate as $cabin)
                                        <option value="{{ $cabin->slug }}">{{ $cabin->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-lg-6">
                                <label for="country">Cabinates <span class="require">*</span></label>
                                <select id="cabinate_name" class="form-control rig-form-field input-sm">
                                    <option selected disabled> --- Select Cabinates --- </option>

                                </select>
                            </div>


                            <div class="col-lg-6">
                                <label for="country">PROCESSOR BRAND <span class="require">*</span></label>
                                <select onchange="ajaxBrand(this.value)" class="form-control rig-form-field input-sm"
                                    id="cabinate">
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
                                <select class="form-control rig-form-field input-sm" id="brand">
                                    <option disabled selected> --- Please Select --- </option>

                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label for="country">MOTHERBOARD BRAND <span class="require">*</span></label>
                                <select class="form-control rig-form-field" input-sm" id="country">
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
                                <select class="form-control rig-form-field" input-sm" id="country">
                                    <option value="" selected> --- Please Select --- </option>
                                    <option value="244">Aaland Islands</option>
                                    <option value="1">Afghanistan</option>
                                    <option value="2">Albania</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label for="country">GRAPHIC CARD BRAND <span class="require">*</span></label>
                                <select class="form-control rig-form-field" input-sm" id="country">
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
                                <select class="form-control rig-form-field" input-sm" id="country">
                                    <option value="" selected> --- Please Select --- </option>

                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label for="country">SMPS BRAND <span class="require">*</span></label>
                                <select class="form-control rig-form-field" input-sm" id="country">
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
                                <select class="form-control rig-form-field" input-sm" id="country">
                                    <option value="" selected> --- Please Select --- </option>
                                  
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label for="country">CORSAIR BRAND <span class="require">*</span></label>
                                <select class="form-control rig-form-field" input-sm" id="country">
                                    <option value="" selected> --- Please Select --- </option>
                                    @foreach ($smps as $pro)
                                        <option value="{{ $pro->brand . '|' . $pro->subcategory_id }}">
                                            {{ $pro->brand }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label for="country">CORSAIR  <span class="require">*</span></label>
                                <select class="form-control rig-form-field" input-sm" id="country">
                                    <option value="" selected> --- Please Select --- </option>
                                    @foreach ($corsair as $pro)
                                        <option value="{{ $pro->brand . '|' . $pro->subcategory_id }}">
                                            {{ $pro->brand }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label for="country">Storage <span class="require">*</span></label>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" checked="checked"> Primary Storage
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label for="country">Storage <span class="require">*</span></label>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" checked="checked"> Secondary Storage
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label for="country">PRIMARY STORAGE <span class="require">*</span></label>
                                <select class="form-control rig-form-field" input-sm" id="country">
                                    <option value="" selected> --- Please Select --- </option>
                                    <option value="244">SSD</option>
                                    <option value="1">HDD</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label for="country">SSD(Brand) /HDD <span class="require">*</span></label>
                                <select class="form-control rig-form-field" input-sm" id="country">
                                    <option value="" selected> --- Please Select --- </option>
                                    <option value="244">Brand 1</option>
                                    <option value="1">Brand 2</option>
                                </select>
                            </div>
                          
                            <div class="col-lg-6">
                                <label for="country">Secondary STORAGE <span class="require">*</span></label>
                                <select class="form-control rig-form-field" input-sm" id="country">
                                    <option value="" selected> --- Please Select --- </option>
                                    <option value="244">SSD</option>
                                    <option value="1">HDD</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label for="country">SSD(Brand) /HDD <span class="require">*</span></label>
                                <select class="form-control rig-form-field" input-sm" id="country">
                                    <option value="" selected> --- Please Select --- </option>
                                    <option value="244">Brand 1</option>
                                    <option value="1">Brand 2</option>
                                </select>
                            </div>
                           
                            <div class="col-lg-6">
                                <label for="country">RAM <span class="require">*</span></label>
                                <select class="form-control rig-form-field" input-sm" id="country">
                                    <option value="" selected> --- Please Select RAM BRAND --- </option>
                                    <option value="244">SSD</option>
                                    <option value="1">HDD</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label for="country">Call ram brand name <span class="require">*</span></label>
                                <select class="form-control rig-form-field" input-sm" id="country">
                                    <option value="" selected> --- All rams of that selected brand --- </option>
                                    <option value="244">Brand 1</option>
                                    <option value="1">Brand 2</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label for="country">Coolers <span class="require">*</span></label>
                                <select class="form-control rig-form-field" input-sm" id="country">
                                    <option value="" selected> Show all coolers </option>
                                    <option value="244">Brand 1</option>
                                    <option value="1">Brand 2</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label for="country">call Selected cooler name<span class="require">*</span></label>
                                <select class="form-control rig-form-field" input-sm" id="country">
                                    <option value="" selected> Show all coolers of that type </option>
                                    <option value="244">Brand 1</option>
                                    <option value="1">Brand 2</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label for="country">Wifi<span class="require">*</span></label>
                                <select class="form-control rig-form-field" input-sm" id="country">
                                    <option value="" selected> Show all wifi </option>
                                    <option value="244">Brand 1</option>
                                    <option value="1">Brand 2</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label for="country">CUSTOM MOD<span class="require">*</span></label>
                                <textarea name="" id="" cols="30" placeholder="Custom MOD"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row" style="margin:30px 0;">
                    <div class="col-lg-6">
                        <h3 class="tot_price">Total Price: Rs 88125<span style="color: #014f98;font-size: 18px;">
                                (Inclusive of all taxes)</span></h3>
                    </div>
                    <div class="col-lg-6">
                        <img src="assets/pages/img/icons/pdf.png" class="img-fluid pdf-img"
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
        var x = 1;

        function ajaxGet(data) {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onload = function() {
                console.log(this.responseText);
                document.getElementsByTagName('select')[x].innerHTML = this.responseText;
                document.getElementsByClassName('col-lg-6')[x].style.display = 'block';
                document.getElementsByClassName('col-lg-6')[x + 1].style.display = 'block';
                x++;
            }
            xmlhttp.open("GET", "/customise/" + data, true);
            xmlhttp.send();
        }

        function ajaxBrand(data) {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onload = function() {
                console.log(this.responseText);
                document.getElementsByTagName('select')[3].innerHTML = this.responseText;
                document.getElementsByClassName('col-lg-6')[x].style.display = 'block';
                document.getElementsByClassName('col-lg-6')[x + 1].style.display = 'block';
                x++;
            }
            xmlhttp.open("GET", "/customise/brand/" + data);
            xmlhttp.send();
        }
    </script>
</x-layout>
