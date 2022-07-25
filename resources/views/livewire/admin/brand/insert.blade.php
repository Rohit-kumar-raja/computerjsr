<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Brand <i class="fas fa-wallet    "></i>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="{{ route('admin.brand.add') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="created_at" value="{{ date('Y-m-d h:m:s') }}" id="">
                    <div class="row  p-2">
                        <div class="form-group col-sm-4">
                            <label class=" control-label">Brand Title</label>
                            <div>
                                <input type="text" class="form-control input-md" placeholder="Title" name="title">
                            </div>
                        </div>
                        <div class="form-group col-sm-4">
                            <label class=" control-label">Brand Subtitle</label>
                            <div>
                                <input type="text" class="form-control input-md" placeholder="Subtitle" name="subtitle">
                            </div>
                        </div>
                        {{-- <div class="form-group col-sm-4">
                            <label class=" control-label">Brand Link</label>
                            <div>
                                <input type="text" class="form-control input-md" placeholder="Link" name="link">
                            </div>
                        </div> --}}
                        <div class="form-group col-sm-4">
                            <label class=" control-label">Brand Image</label>
                            <div class="row">
                                <input type="file" accept="image/*" class="form-control" name="image">

                           
                            </div>
                        </div>
                        <div class="form-group col-sm-4">
                            <label class=" control-label">Status</label>
                            <div>
                                <select class="form-control" name="status">
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="text-center p-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</div>
