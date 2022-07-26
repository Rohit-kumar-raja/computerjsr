<x-adminlayout>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-sm-4">
                    <h2>Custom Pc</h2>
                </div>
                <div class="col-sm-4">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active"> Custom Pc</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div>
      
        <div class="container" style="padding:30px 0;">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">

                            <div class="row">
                                <div class="col-md-10">
                                    <i class="fas fa-list"> All Custom Pc</i>

                                </div>

                            </div>
                            </h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">

                                @if (session('store'))
                                    <div class="alert alert-success">
                                        {{ session('store') }}
                                    </div>
                                @endif
                                @if (session('delete'))
                                    <div class="alert alert-danger">
                                        {{ session('delete') }}
                                    </div>
                                @endif
                                @if (session('update'))
                                    <div class="alert alert-success">
                                        {{ session('update') }}
                                    </div>
                                @endif
                                @if (session('status'))
                                    <div class="alert alert-secondary">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                @if (session('status1'))
                                    <div class="alert alert-success">
                                        {{ session('status1') }}
                                    </div>
                                @endif
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
                                                <td> <a href="{{ route('customise.printAdmin', $rent->id ?? '') }}"
                                                        class="btn btn-primary"> <i class="fas fa-print"></i> </a> </td>


                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-adminlayout>
