<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Compile Blast furnace Production Plan</h4>
            </div>
            <div class="modal-body">
                <form id="formField" class="form-horizontal" method="POST" action="{{ route('bf_compile_blend.update', '0') }}"  enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label for="plan_number">Plan Number</label>
                                </div>
                                <div class="col-sm-6">
                                    <input type="hidden" style="color:black;" id="bpbseq" name="seq" rows="2" class="form-control {{ $errors->has('seq') ? ' is-invalid' : '' }}" autofocus value="{{ $bf_compile_blend->seq }}" />
                                    <input readonly type="text" name="plan_number" class="form-control {{ $errors->has('plan_number') ? ' is-invalid' : '' }}" autofocus value="{{ $bf_compile_blend->pbd_no }}" />
                                    <span class="invalid-feedback plan_number" role="alert">
                                        <strong>{{ $errors->first('plan_number') }}</strong>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label for="mat_code">Material Code</label>
                                </div>
                                <div class="col-sm-6">
                                    <select style="color:black;" require id="bpbmat_code" name="mat_code" class="form-control {{ $errors->has('mat_code') ? ' is-invalid' : '' }}">
                                            <option value="">Pilih Layanan</option>
                                            <option value="MSP103">PMSP103</option>
                                    </select>
                                    <span class="invalid-feedback validasiserviceid" role="alert">
                                        <strong>{{ $errors->first('mat_code') }}</strong>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label for="title">Material Name</label>
                                </div>
                                <div class="col-sm-6">
                                    <input style="color:black;" value="DOLOMITE-POWDER" id="bpbmat_name" name="mat_name" rows="2" class="form-control {{ $errors->has('mat_name') ? ' is-invalid' : '' }}" autofocus value="{{ old('mat_name') }}" />
                                    <span class="invalid-feedback titlevalidasi" role="alert">
                                        <strong>{{ $errors->first('mat_name') }}</strong>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group" >
                                <div class="col-sm-6">
                                    <label for="batch">Batch</label>
                                </div>
                                <div class="col-sm-6">
                                    <input style="color:black;" id="batch" name="bpbbatch" rows="2" class="form-control {{ $errors->has('batch') ? ' is-invalid' : '' }}" autofocus value="{{ old('batch') }}" />
                                    <span class="invalid-feedback titlevalidasi" role="alert">
                                        <strong>{{ $errors->first('batch') }}</strong>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label for="title">Weight</label>
                                </div>
                                <div class="col-sm-6">
                                    <input style="color:black;" id="weight" name="bpbweight" rows="2" class="form-control {{ $errors->has('weight') ? ' is-invalid' : '' }}" autofocus value="{{ old('weight') }}" />
                                    <span class="invalid-feedback titlevalidasi" role="alert">
                                        <strong>{{ $errors->first('weight') }}</strong>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label for="title">Remarks</label>
                                </div>
                                <div class="col-sm-6">
                                    <input style="color:black;" id="remarks" name="bpbremarks" rows="2" class="form-control {{ $errors->has('remarks') ? ' is-invalid' : '' }}" autofocus value="{{ old('remarks') }}" />
                                    <span class="invalid-feedback titlevalidasi" role="alert">
                                        <strong>{{ $errors->first('remarks') }}</strong>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6">
                                </div>
                                <div class="col-sm-6">
                                    <button id="btnmatchange" class="btn btn-primary" >
                                        Simpan
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>