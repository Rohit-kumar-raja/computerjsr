<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<section class="content p-2">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">
                    <div >
                        <div id="printableArea">
                            <table  class="table table-bordered" >
                                <tbody>
                                    <tr>
                                        <td colspan="6" align="center">
                                            <h3>Quick Secure India Pvt Ltd.</h3>

                                            Holding No-2, Ramdas Bhatta, Main Road
                                            Adjecent to Brajdham Mandir, near Dhobhi Ghat<br>
                                            Bistupur, Jamshedpur-831001, Jharkhand.<br>
                                            <strong>Phone:</strong> [000-000-0000],
                                            <strong>Website:</strong> www.quicksecureindia.com
                                            <hr>

                                        </td>
                                    </tr>
                             

                                    <tr>

                                      

                                        <td><strong>Date </strong></td>
                                        <td><strong>:</strong></td>
                                        <td valign='center'>{{ date('d/m/Y', strtotime($data->created_at)) }}</td>

                                    </tr>

                                    <tr>
                                        <td><strong>cabinate_name </strong></td>
                                        <td><strong>:</strong></td>
                                        <td>{{ $data->cabinate_name ?? ' ' }}</td>
                                        <td><strong>cabinate_brand </strong></td>
                                        <td><strong>:</strong></td>
                                        <td>{{ $data->cabinate_brand ?? ' ' }}</td>
                                    </tr>

                                    <tr>
                                        <td><strong>processor_brand </strong></td>
                                        <td><strong>:</strong></td>
                                        <td>{{ $data->processor_brand ?? ' ' }}</td>
                                        <td><strong>processor_name </strong></td>
                                        <td><strong>:</strong></td>
                                        <td>{{ $data->processor_name ?? ' ' }}</td>
                                    </tr>

                                    <tr>
                                        <td><strong>motherboard_brand </strong></td>
                                        <td><strong>:</strong></td>
                                        <td>{{ $data->motherboard_brand ?? ' ' }}</td>
                                        <td><strong> motherboard_name </strong></td>
                                        <td><strong>:</strong></td>
                                        <td>{{ $data->motherboard_name ?? ' ' }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>graphic_card_brand </strong></td>
                                        <td><strong>:</strong></td>
                                        <td>{{ $data->graphic_card_brand ?? ' ' }}</td>

                                        <td><strong>graphic_card_name </strong></td>
                                        <td><strong>:</strong></td>
                                        <td>{{ $data->graphic_card_name ?? ' ' }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>smps_brand </strong></td>
                                        <td><strong>:</strong></td>
                                        <td>{{ $data->smps_brand ?? ' ' }}</td>

                                        <td><strong>smps_name </strong></td>
                                        <td><strong>:</strong></td>
                                        <td>{{ $data->smps_name ?? ' ' }}</td>
                                    </tr>

                                    <tr>
                                        <td><strong>primay_storrage </strong></td>
                                        <td><strong>:</strong></td>
                                        <td>{{ $data->primay_storrage ?? ' ' }}</td>

                                        <td><strong>primary_storage_name </strong></td>
                                        <td><strong>:</strong></td>
                                        <td>{{ $data->primary_name ?? ' ' }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>secondary_storage </strong></td>
                                        <td><strong>:</strong></td>
                                        <td>{{ $data->secondary_storage ?? ' ' }}</td>

                                        <td><strong>secondary_storage_name </strong></td>
                                        <td><strong>:</strong></td>
                                        <td>{{ $data->secondary_name ?? ' ' }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>ram_brand </strong></td>
                                        <td><strong>:</strong></td>
                                        <td>{{ $data->ram_brand ?? ' ' }}</td>

                                        <td><strong>ram_name </strong></td>
                                        <td><strong>:</strong></td>
                                        <td>{{ $data->ram_name ?? ' ' }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>coolers_brand </strong></td>
                                        <td><strong>:</strong></td>
                                        <td>{{ $data->coolers_brand ?? ' ' }}</td>

                                        <td><strong>coolers_name </strong></td>
                                        <td><strong>:</strong></td>
                                        <td>{{ $data->coolers_name ?? ' ' }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>wifi_brand </strong></td>
                                        <td><strong>:</strong></td>
                                        <td>{{ $data->wifi_brand ?? ' ' }}</td>

                                        <td><strong>wifi_name </strong></td>
                                        <td><strong>:</strong></td>
                                        <td>{{ $data->wifi_name ?? ' ' }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>custom_mode </strong></td>
                                        <td><strong>:</strong></td>
                                        <td>{{ $data->custom_mode ?? ' ' }}</td>

                                        
                                    </tr>
                                
                                    <tr>
                                        <td colspan='4'>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td colspan='4'>
                                            <h3>Customer Detail</h3>
                                        </td>
                                    </tr>
                                    @php
                                        $user=DB::table('users')->find($data->user_id);
                                        
                                    @endphp
                                    <tr>
                                        <td><strong>Customer Name </strong></td>
                                        <td><strong>:</strong></td>
                                        <td>{{ $user->name ?? '' ?? ' ' }}</td>

                                        <td><strong>Contact No. </strong></td>
                                        <td><strong>:</strong></td>
                                        <td>{{ $user->phone ?? '' ?? ' ' }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>E-Mail </strong></td>
                                        <td><strong>:</strong></td>
                                        <td>{{ $user->email ?? '' ?? ' ' }}</td>

                                    </tr>
                                   
                                  

                                   

                                </tbody>
                            </table>
                        </div>
                        <hr>
                        <!--<button id="myBtn">Open Modal</button>-->

                        <!-- The Modal -->
                        <div id="myModal" class="modal">

                            <!-- Modal content -->


                        </div>


                   <div class="text-center" id="print">
                    <a href="#" class="btn btn-success btn-sm" onclick="print_form()">Print</a>
                   </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    td strong{
        text-transform: capitalize;
    }
</style>
<script>
  function print_form(){
    document.getElementById('print').style.display="none";
    print();
    window.location.reload();
  }
</script>