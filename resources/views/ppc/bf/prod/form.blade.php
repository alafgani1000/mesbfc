
@if (isset($bf_compile_prod))
  {!! Form::hidden('seq', $bf_compile_prod->seq) !!}
  {!! Form::hidden('plan_star_time', $bf_compile_prod->plan_star_time) !!}
  {!! Form::hidden('plan_end_time', $bf_compile_prod->plan_end_time) !!}
@endif
 
<form class="form-horizontal">

<div class="row">
  <div class="col-sm-6">
      <div class="form-group">  
          {!! Form::label('y_m', 'Prod Order:', ['class' => 'control-label col-sm-4']) !!}
          <div class="col-sm-8">
          {!! Form::text('y_m', null, ['class' => 'form-control']) !!}        
          </div>
      </div>

      <div class="form-group">  
          {!! Form::label('mat_code', 'Material Name', ['class' => 'control-label col-sm-4']) !!}
          <div class="col-sm-8">
          {!! Form :: select ( 'mat_code' , [ 'MBF101'  =>  'Hot Metal Blast Furnace' , 'MBF104'  =>  'Crude Hot Metal' ],
                null, ['class' => 'form-control']) !!}        
          </div>
      </div>

      <div class="form-group">  
          {!! Form::label('machine_no', 'Machine Name', ['class' => 'control-label col-sm-4']) !!}
          <div class="col-sm-8">
          {!! Form :: select ( 'machine_no' , [ 'G1'  =>  '1Blast Furnace' , 'G2'  =>  '2Blast Furnace' ],
                null, ['class' => 'form-control']) !!}        
          </div>
      </div>

      @if ($errors->any())
        <div class="form-group {{ $errors->has('furn_plan_yiel') ? 'has-error' : 'has-success' }}">
      @else
      <div class="form-group">  
      @endif
          {!! Form::label('furn_plan_yiel', 'Weight (Kg)', ['class' => 'control-label col-sm-4']) !!}
          <div class="col-sm-8">
          {!! Form::text('furn_plan_yiel', null, ['class' => 'form-control']) !!}        
          </div>
      </div>

      <div class="form-group">  
          {!! Form::label('plan_star_time', 'Start Date', ['class' => 'control-label col-sm-4']) !!}
          <div class="col-sm-8">
          {!! Form::date('plan_star_time', null, ['class' => 'form-control']) !!}        
          </div>
          
          
      </div>

      <div class="form-group">  
          {!! Form::label('plan_end_time', 'End Date', ['class' => 'control-label col-sm-4']) !!}
          <div class="col-sm-8">
          {!! Form::date('plan_end_time', null, ['class' => 'form-control']) !!}        
          </div>
          
      </div>

      <div class="form-group">  
          {!! Form::label('furn_effe_prod_days', 'Days', ['class' => 'control-label col-sm-4']) !!}
          <div class="col-sm-5">
          {!! Form::text('furn_effe_prod_days', null, ['class' => 'form-control', 'disabled' => 'disabled']) !!}        
          </div>
      </div>

      <div class="form-group">  
          {!! Form::label('o_start_time', 'Overhoul Start Date', ['class' => 'control-label col-sm-4']) !!}
          <div class="col-sm-8">
          {!! Form::date('o_start_time', null, ['class' => 'form-control']) !!}        
          </div>          
      </div>

      <div class="form-group">  
          {!! Form::label('o_end_time', 'Overhoul End Date', ['class' => 'control-label col-sm-4']) !!}
          <div class="col-sm-8">
          {!! Form::date('o_end_time', null, ['class' => 'form-control']) !!}        
          </div>
          
      </div>

      <div class="form-group">  
          {!! Form::label('stop_days', 'Days', ['class' => 'control-label col-sm-4']) !!}
          <div class="col-sm-5">
          {!! Form::text('stop_days', null, ['class' => 'form-control', 'disabled' => 'disabled']) !!}        
          </div>
      </div>

      
   
</div>



</form>

<div class="form-group">
{!! Form::submit('Simpan', ['class' => 'btn btn-primary col-sm-2']) !!}
</div>

