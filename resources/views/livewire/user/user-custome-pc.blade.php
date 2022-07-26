<x-layout>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-heading">
                <div class="panel-heading">
                    <h2>All Custom Pc <i class="fas fa-history"></i></h2>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table table-striped table-bordered" id="example">
                        <thead class=" text-primary">
                            <tr>
                                <th>S.NO</th>
                                <th>cabinate_name</th>
                                <th>processor_name</th>
                                <th>motherboard_name</th>
                                <th>graphic_card_name</th>
                                <th>smps_name</th>
                                <th>primay_storrage</th>
                                <th>secondary_storage</th>
                                <th>ram_name</th>
                                <th>coolers_name</th>
                                <th>wifi_name</th>
                                <th>total</th>
                                <th>Date</th>
                                <th>Print</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $rent)
                                <tr>
                                    <td>{{ $loop->iteration ?? ' ' }}</td>
                                    <td>{{ $rent->cabinate_name ?? ' ' }}</td>
                                    <td>{{ $rent->processor_name ?? ' ' }}</td>
                                    <td>{{ $rent->motherboard_name ?? ' ' }}</td>
                                    <td>{{ $rent->graphic_card_name ?? ' ' }} </td>
                                    <td>{{ $rent->smps_name ?? ' ' }} </td>
                                    <td>{{ $rent->primary_name ?? ' ' }}</td>
                                    <td>{{ $rent->secondary_name ?? ' ' }} </td>
                                    <td>{{ $rent->ram_name ?? ' ' }}</td>
                                    <td>{{ $rent->coolers_name ?? ' ' }}</td>
                                    <td>{{ $rent->wifi_name ?? ' ' }}</td>
                                    <td>{{ $rent->total ?? ' ' }}</td>
                                    <td>{{ $rent->created_at ?? ' ' }}</td>
                                    <td> <a href="{{ route('customise.printuser', $rent->id ?? '') ?? ' ' }}"
                                            class="btn btn-primary"> <i class="fas fa-print"></i> </a> </td>


                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-layout>
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
<style>
    th {
        text-transform: capitalize;
    }
</style>
