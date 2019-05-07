<form id="formField" class="form-horizontal" method="POST" action="{{ route('bf_compile_blend.update', '0') }}"  enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <div class="col-sm-4">
                    <label for="mat_code">Material Code</label>
                </div>
                 <div class="col-sm-8">
                    <input style="color:black;" id="seq" name="seq" class="form-control {{ $errors->has('seq') ? ' is-invalid' : '' }}" autofocus value="@if(isset($bf_compile_blend->seq)){{ $bf_compile_blend->seq }} @else @endif" />
                    <select style="color:black;" require id="mat_code" name="mat_code" class="form-control {{ $errors->has('mat_code') ? ' is-invalid' : '' }}">
                            <option value="">Pilih Layanan</option>
                            <option value="MSP103">PMSP103</option>
                    </select>
                    <span class="invalid-feedback validasiserviceid" role="alert">
                        <strong>{{ $errors->first('mat_code') }}</strong>
                    </span>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4">
                    <label for="title">Material Name</label>
                </div>
                <div class="col-sm-8">
                    <input style="color:black;" value="DOLOMITE-POWDER" id="mat_name" name="mat_name" rows="2" class="form-control {{ $errors->has('mat_name') ? ' is-invalid' : '' }}" autofocus value="{{ old('mat_name') }}" />
                    <span class="invalid-feedback titlevalidasi" role="alert">
                        <strong>{{ $errors->first('mat_name') }}</strong>
                    </span>
                </div>
            </div>
            <div class="form-group" >
                <div class="col-sm-4">
                    <label for="machine_no">Blast Furnace Equipment Number</label>
                </div>
                <div class="col-sm-8">
                    <select style="color:black;" require id="machine_no" name="machine_no" class="form-control {{ $errors->has('machine_no') ? ' is-invalid' : '' }}">
                        <option value="">Pilih</option>
                        <option value="Y1">Y1</option>
                    </select>
                    <span class="invalid-feedback validasicategory" role="alert">
                        <strong>{{ $errors->first('machine_no') }}</strong>
                    </span>
                </div>
            </div>
            <div class="form-group" >
                <div class="col-sm-4">
                    <label for="bfen">Description</label>
                </div>
                <div class="col-sm-8">
                    <input style="color:black;" id="desc" name="desc" rows="2" class="form-control {{ $errors->has('desc') ? ' is-invalid' : '' }}" autofocus value="{{ old('desc') }}" />
                    <span class="invalid-feedback validasicategory" role="alert">
                        <strong>{{ $errors->first('desc') }}</strong>
                    </span>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4">
                    <label for="title">Weight</label>
                </div>
                <div class="col-sm-8">
                    <input style="color:black;" id="weight" name="weight" rows="2" class="form-control {{ $errors->has('weight') ? ' is-invalid' : '' }}" autofocus value="{{ old('weight') }}" />
                    <span class="invalid-feedback titlevalidasi" role="alert">
                        <strong>{{ $errors->first('weight') }}</strong>
                    </span>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4">
                    <label for="title">Plan Start Time</label>
                </div>
                <div class="col-sm-8">
                    <input type="datetime-local" style="color:black;" id="pls" name="pls" rows="2" class="form-control {{ $errors->has('pls') ? ' is-invalid' : '' }}" autofocus value="{{ old('pls') }}" />
                    <span class="invalid-feedback titlevalidasi" role="alert">
                        <strong>{{ $errors->first('pls') }}</strong>
                    </span>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4">
                    <label for="title">Plan End Time</label>
                </div>
                <div class="col-sm-8">
                    <input type="datetime-local" style="color:black;" id="pls" name="ple" rows="2" class="form-control {{ $errors->has('ple') ? ' is-invalid' : '' }}" autofocus value="{{ old('ple') }}" />
                    <span class="invalid-feedback titlevalidasi" role="alert">
                        <strong>{{ $errors->first('ple') }}</strong>
                    </span>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4">
                    <label for="title">Remarks</label>
                </div>
                <div class="col-sm-8">
                    <input style="color:black;" id="remarks" name="remarks" rows="2" class="form-control {{ $errors->has('remarks') ? ' is-invalid' : '' }}" autofocus value="{{ old('remarks') }}" />
                    <span class="invalid-feedback titlevalidasi" role="alert">
                        <strong>{{ $errors->first('remarks') }}</strong>
                    </span>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4">
                </div>
                <div class="col-sm-4">
                    <button id="simpan1" class="btn btn-primary" >
                        Simpan
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>