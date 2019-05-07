@extends('template')

@section('content')
    

    <div>
        <h2>Update Rencana Produksi BF</h2> 
    
        {!! Form::model($bf_compile_prod, ['method' => 'PATCH', 'action' => ['Ppc\Bf\CompileProdController@update', $bf_compile_prod->seq], 'files' => true]) !!}
            @include('ppc.bf.prod.form')
        {!! Form::close() !!}
    </div>

@endsection