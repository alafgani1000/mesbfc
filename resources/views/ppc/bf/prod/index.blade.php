@extends('template')

@section('content')

<div>
    <h2>Compile Blast furnace Production Plan</h2>

    @include('flash-message')

    @include('ppc.bf.prod.find')

    <table class="table">
            {{ csrf_field() }} 
        <thead>
            <tr>
                <th>Prod Order</th>
                <th>Material Code</th>
                <th>Production Start</th>
                <th>Production End</th>
                <th>Production Days</th>
                <th>Weight</th>
                <th>Overhoul Days</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $prod)
            <tr>
                <td>{{ $prod->y_m }}</td>
                <td>{{ $prod->mat_code }}</td>
                <td>{{ $prod->plan_star_time }}</td>
                <td>{{ $prod->plan_end_time }}</td>
                <td>{{ $prod->furn_effe_prod_days}}</td>
                <td>{{ number_format($prod->furn_plan_yiel, 0)}}</td>
                <td>{{ $prod->stop_days}}</td>
                <td>{{ $prod->status}}</td>
                <td>
                    <div class="box-button">
                        <a data-url="{{ route('bf_compile_prod.showmodal',  $prod->seq) }}"
                            class="btn btn-warning btn-sm id-modal">Modal</a>
                    </div> 
                    <div class="box-button">
                        <a data-url="{{ route('bf_compile_prod.getbody',  $prod->seq) }}"
                            class="btn btn-warning btn-sm id-tes">Tes</a>
                    </div> 
                    <div class="box-button">
                        <a href="{{ route('bf_compile_prod.show', $prod->seq) }}"
                            class="btn btn-success btn-sm">Detail</a>
                    </div>
                    {{-- @if (Auth::check()) --}}
                    <div class="box-button">
                        <a href="{{ route('bf_compile_prod.edit', $prod->seq) }}"
                            class="btn btn-warning btn-sm">Edit</a>
                    </div>                 
                    <div class="box-button">
                        {!! Form::submit('Delete', [
                        'class' => 'btn btn-danger btn-sm form-delete',
                        'data-url' => route('bf_compile_prod.destroy', [ 'id' => $prod->seq ])
                        ]
                        ) !!}
                    </div> 
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>



</div>
{{-- / #ppc.bf.compileProd  --}}

<div class="table-nav">
    <div class="jumlah-data">
        <strong> Jumlah Data: {{ $jumlah_data }} </strong>
    </div>
    <div class="paging">
        {{ $data->links() }}
    </div>
</div>


{{-- @if (Auth::check()) --}}
<div class="tombol-nav">
    <a href=" {{ route('bf_compile_prod.create')}}" class="btn btn-primary">Tambah Data</a> 
</div>

<br/>
<br/>
<div style="margin-top:100px">
</div>
<div id="responseid" style="margin-top:2rem">

</div>

{{-- modal --}}

{{-- <button class="btn btn-primary" data-toggle="modal" data-target="#myModal" id="myModal">
        Launch demo modal
</button> --}}
<div id="modalresponse" style="margin-top:2rem">

</div>

{{-- end modal --}}
{{-- @endif --}}

{{-- @include('ppc.bf.prod.form') --}}

@endsection

@push('custom-scripts')
<script>
    $(document).ready(function(){
        $('.form-delete').click(function (event) {
            if (confirm("Anda Yakin Data Dihapus ?")) {
                var token = $("meta[name='csrf-token']").attr("content");
                var url = $(event.target).data('url');
            alert()
                $.ajax({ 
                    url: url,
                    type: "DELETE",
                    data: {"_token": token, },
        
                    success: function (data, textStatus, jqXHR) {
                        location.reload(true);
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        alert("AJAX error: " + textStatus + ' : ' + errorThrown);
                    },
                });
            }       
        });

        $('.id-tes').on('click',function(e){
            var token = $("meta[name='csrf-token']").attr("content");
            var url = $(event.target).data('url');
            $.ajax({ 
                url: url,
                type: "GET",
                data: {"_token": token, },

                success: function (data, textStatus, jqXHR) {
                   $("#responseid").html(data.html);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    alert("AJAX error: " + textStatus + ' : ' + errorThrown);
                },
            });
        });

        $('.id-modal').on('click',function(e){
            var token = $("meta[name='csrf-token']").attr("content");
            var url = $(event.target).data('url');
            $.ajax({ 
                url: url,
                type: "POST",
                data: {"_token": token, },

                success: function (data, textStatus, jqXHR) {
                   $("#modalresponse").html(data.html);
                   $('#myModal').modal('show');
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    alert("AJAX error: " + textStatus + ' : ' + errorThrown);
                },
            });
        });
    });

</script>
@endpush
