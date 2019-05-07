<div>
    <table class="table">
            {{ csrf_field() }} 
        <thead>
            <tr>
                <th>Seq</th>
                <th>Father Seq</th>
                <th>Material Name</th>
                <th>Material Code</th>
                <th>Pb</th>
                <th>In Emp</th>
                <th>In Date</th>
                <th>Remark</th>
                <th>Action</th>
            </tr>
        </thead>
        @foreach ($data as $item)
            <tr>
                <td>{{ $item->seq }}</td>
                <td>{{ $item->father_seq }}</td>
                <td>{{ $item->mat_na }}</td>
                <td>{{ $item->mat_code }}</td>
                <td>{{ $item->pb }}</td>
                <td>{{ $item->in_emp }}</td>
                <td>{{ $item->in_date }}</td>
                <td>{{ $item->remarks }}</td>
                <td>
                    {{-- @if (Auth::check()) --}}
                    <div class="box-button">
                        <a href="{{ route('bf_compile_prod.edit', $item->seq) }}"
                            class="btn btn-warning btn-sm">Edit</a>
                    </div>                 
                    <div class="box-button">
                        {!! Form::submit('Delete', [
                        'class' => 'btn btn-danger btn-sm form-delete',
                        'data-url' => route('bf_compile_prod.destroy', [ 'id' => $item->seq ])
                        ]
                        ) !!}
                    </div> 
                </td>
            </tr>
         @endforeach
    </table>
</div>