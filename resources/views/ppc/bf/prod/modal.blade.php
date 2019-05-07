<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel">Compile Blast furnace Production Plan</h4>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="service_id">Prod Order:</label>
                        <br/>
                        {{ $bf_compile_prod->y_m }}
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group" >
                        <label for="categories">Material Code:</label>
                        <br/>
                        {{ $bf_compile_prod->mat_code }}   
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="service_id">Production Start:</label>
                        <br/>
                        {{ $bf_compile_prod->plan_star_time }}
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group" >
                        <label for="categories">Production End:</label>
                        <br/>
                        {{ $bf_compile_prod->plan_end_time }} 
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="service_id">Production Days:</label>
                        <br/>
                        {{ $bf_compile_prod->furn_effe_prod_days }}
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group" >
                        <label for="categories">Weight:</label>
                        <br/>
                        {{ number_format($bf_compile_prod->furn_plan_yiel, 0)}} 
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="service_id">Overhoul Days:</label>
                        <br/>
                        {{ $bf_compile_prod->stop_days }}
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group" >
                        <label for="categories">Status:</label>
                        <br/>
                        {{ $bf_compile_prod->status }} 
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
        </div>
        </div>
    </div>
</div>