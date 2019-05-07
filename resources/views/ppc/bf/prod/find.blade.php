<div id="find">
    {!! Form::open(['url' => 'ppc/bf/prod/find', 'method' => 'GET', 'id' => 'find']) !!}
        <div class="row">
            
    
            <div class="col-md-9"> 
                <div class="input-group">

                    <div class="col-md-2"> 
                        {!! Form::label('tgl1', 'Periode') !!}                   
                    </div>
                    <div class="col-md-5">                
                        {!! Form:: date('tgl1', request('tgl1'), ['class' => 'form-control']) !!}
                    </div>

                    <div class="col-md-5">
                        {!! Form:: date('tgl2', request('tgl2'), ['class' => 'form-control']) !!}
                    </div>
                </div>
            </div>
    
            <div class="col-md-3">
                <div class="input-group">
                    {!! Form::text('prod_order', request('prod_order'), 
                    ['class' => 'form-control', 'placeholder' => 'Masukkan Prod Order']) !!}
                
                    <span class="input-group-btn">
                    {!! Form::button('Cari', ['class' => 'btn btn-default', 'type' => 'submit']) !!}
                </span>
                </div>
            </div>

            

        </div>
    {!! Form::close() !!}
    </div>