@extends('template')

@section('content')

<h2>Rencana Produksi BF Detail</h2>

<div class="row">
    <div class="col-sm-6">
        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <td>{{ $bf_compile_prod->seq }}</td>
            </tr>
            <tr>
                <th>Production Order</th>
                <td>{{ $bf_compile_prod->y_m  }}</td>
            </tr>
            <tr>
                <th>Material Code</th>
                <td>{{ $bf_compile_prod->mat_code }}</td>
            </tr>
            <tr>
                <th>Material Name</th>
                <td>{{ $bf_compile_prod->material->mate_name }}</td> 
            </tr>
            <tr>
                <th>Tgl mulai</th>
                <td>{{ $bf_compile_prod->plan_star_time }}</td>
            </tr>
            <tr>
                <th>Tgl Selesai</th>
                <td>{{ $bf_compile_prod->plan_end_time }}</td>
            </tr>
            <tr>
                <th>Jumlah Hari</th>
                <td>{{ $bf_compile_prod->furn_effe_prod_days }}</td>
            </tr>
            <tr>
                <th>Jumlah Produksi (Kg)</th>
                <td>{{ $bf_compile_prod->furn_plan_yiel }}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>{{ $bf_compile_prod->status }}</td>
            </tr>
            <tr>
                <th>Catatan</th>
                <th>{{ $bf_compile_prod->remarks }}</th>
            </tr>
            
        </table>
    </div>

    <div class="col-sm-6">
            <table class="table table-striped">
                <tr>
                    <th>Machine No</th>
                    <td>{{ $bf_compile_prod->machine_no }}</td>
                </tr>
                <tr>
                    <th>Mulai Overhoul</th>
                    <td>{{ $bf_compile_prod->o_start_time }}</td>
                </tr>
                <tr>
                    <th>Akhir Overhoul</th>
                    <td>{{ $bf_compile_prod->o_end_time }}</td>
                </tr>
                <tr>
                    <th>Hari Overhoul</th>
                    <td>{{ $bf_compile_prod->stop_days }}</td>
                </tr>
                <tr>
                    <th>Penulis</th>
                    <td>{{ $bf_compile_prod->in_emp}}</td>
                </tr>
                <tr>
                    <th>Tgl Input</th>
                    <td>{{ $bf_compile_prod->in_date}}</td>
                </tr>
                <tr>
                    <th>Pengubah</th>
                    <td>{{ $bf_compile_prod->m_emp }}</td>
                </tr>
                <tr>
                    <th>Tgl Update</th>
                    <td>{{ $bf_compile_prod->m_date }}</td>
                </tr>
                <tr>
                    <th>Pengirim</th>
                    <td>{{ $bf_compile_prod->e_emp }}</td>
                </tr>
                <tr>
                    <th>Tanggal Kirim</th>
                    <td>{{ $bf_compile_prod->s_date }}</td>
                </tr>
                
            </table>
        </div>

</div>

@endsection