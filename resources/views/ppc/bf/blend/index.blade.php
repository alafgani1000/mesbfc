@extends('template')

@section('content')

<div>
    <h2>Compile Blast Furnace Blending Proportion Sheet</h2>

    @include('flash-message')

    @include('ppc.bf.prod.find')

    <table class="table">
            {{ csrf_field() }} 
        <thead>
            <tr>
                <th>Seq</th>
                <th>Plan Number</th>
                <th>Material Code</th>
                <th>Machine No</th>
                <th>Weight</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>In Emp</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $prod)
            <tr>
                <td><a data-url="{{ route('bf_compile_blend.showbpb',  $prod->seq) }}"  class="id-tes">{{ $prod->seq }}</a></td>
                <td>{{ $prod->pbd_no }}</td>
                <td>{{ $prod->mat_cd }}</td>
                <td>{{ $prod->machine_no }}</td>
                <td>{{ number_format($prod->weight, 0)}}</td>
                <td>{{ $prod->pb_star_time}}</td>
                <td>{{ $prod->pb_end_time}}</td>
                <td>{{ $prod->in_emp}}</td>
                <td>
                    <div class="box-button">
                        <a data-url="{{ route('bf_compile_blend.createbpb',  $prod->seq) }}"
                            class="btn btn-success btn-sm id-modal">Mat Change</a>
                    </div> 
                    <div class="box-button">
                        <a data-url="{{ route('bf_compile_blend.show',  $prod->seq) }}"
                            class="btn btn-success btn-sm id-modal">Detil</a>
                    </div> 
                    {{-- @if (Auth::check()) --}}
                    <div class="box-button">
                        <a href="{{ route('bf_compile_blend.edit', $prod->seq) }}"
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
    <a href=" {{ route('bf_compile_blend.create')}}" class="btn btn-primary">Tambah Data</a> 
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
                type: "GET",
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

        $('#btnmatchange').on('click',function(e){
            var token = $("meta[name='csrf-token']").attr("content");
            var url = $(event.target).data('url');
            $.ajax({ 
                url: url,
                type: "GET",
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
