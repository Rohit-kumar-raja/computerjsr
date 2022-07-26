<x-layout>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-heading">
                <div class="panel-heading">
                    <h2>All Rent's <i class="fas fa-history"></i></h2>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table table-striped table-bordered" id="example">
                        <thead class=" text-primary" >
                            <tr>
                                <th>S.NO</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Duration</th>
                                <th>Ram</th>
                                <th>Storage Type</th>
                                <th>Storage</th>
                                <th>prosessor</th>
                                <th>prosessor generation</th>
                                <th>win type</th>
                                <th>office</th>
                                <th>antivirus</th>
                                <th>system Type</th>
                                <th>screen type</th>
                                <th>screen size</th>
                                <th>graphics</th>
                                <th>Date</th>
                                <th>Address/Others</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $rent)
                                <!-- Button trigger modal -->


                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalCenter{{ $rent->id }}" tabindex="-1"
                                    role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">
                                                    Address</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                PinCode : {{ $rent->pincode }}
                                                <hr>
                                                City : {{ $rent->city }}
                                                <hr>
                                                District : {{ $rent->district }}
                                                <hr>
                                                State : {{ $rent->state }}
                                                <hr>
                                                Address : {{ $rent->address }}
                                            </div>
                                            <div class="modal-body">
                                                <h5>Others Details</h5>
                                                <hr>


                                                Mouse : {{ $rent->mouse }}
                                                <hr>
                                                Keyboard : {{ $rent->keyboard }}
                                                <hr>

                                            </div>

                                        </div>
                                    </div>
                                </div>



                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    {{-- <td><img src="{{ asset('assets/pages/img/rents') }}/{{ $rent->image }}"
                                            width="50"></td> --}}
                                    <td>{{ $rent->name }}</td>
                                    <td>{{ $rent->phone }}</td>
                                    <td>{{ $rent->email }}</td>
                                    <td>{{ $rent->duration }} days</td>
                                    <td>{{ $rent->ram_size }} GB</td>                                
                                    <td>{{ $rent->storage_type }}</td>
                                    <td>{{ $rent->storage_size }} GB</td>
                                    <td>{{ $rent->prosessor }}</td>
                                    <td>{{ $rent->prosessor_generation }}</td>
                                    <td>{{ $rent->win_type }}</td>
                                    <td>{{ $rent->office }}</td>
                                    <td>{{ $rent->antivirus }}</td>
                            
                                    <td>{{ $rent->system_type }}</td>
                                    <td>{{ $rent->screen_type }}</td>
                                    <td>{{ $rent->screen_size }}</td>
                                    <td>{{ $rent->graphics }}</td>
                            
                                    <td>{{ $rent->created_at }}</td>
                                    <td><button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                            data-target="#exampleModalCenter{{ $rent->id }}">
                                            <i class="fas fa-eye" aria-hidden="true"></i>
                                        </button></td>


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
