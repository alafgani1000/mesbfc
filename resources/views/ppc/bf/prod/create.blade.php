@extends('template')

@section('content')

<div>
    <h2>Create Rencana Produksi BF</h2> 

    {!! Form::open(['url' => 'bf_compile_prod', 'files' => true]) !!}
    @include('ppc.bf.prod.form')
    {!! Form::close() !!}

</div>
    

    
@endsection



