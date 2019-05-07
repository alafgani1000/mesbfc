<div>
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
        <tr>
            <td>{{ $bf_compile_prod->y_m }}</td>
            <td>{{ $bf_compile_prod->mat_code }}</td>
            <td>{{ $bf_compile_prod->plan_star_time }}</td>
            <td>{{ $bf_compile_prod->plan_end_time }}</td>
            <td>{{ $bf_compile_prod->furn_effe_prod_days}}</td>
            <td>{{ number_format($bf_compile_prod->furn_plan_yiel, 0)}}</td>
            <td>{{ $bf_compile_prod->stop_days}}</td>
            <td>{{ $bf_compile_prod->status}}</td>
        </tr>
    </table>
</div>