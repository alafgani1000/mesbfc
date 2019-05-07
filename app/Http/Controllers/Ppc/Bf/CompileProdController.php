<?php

namespace App\Http\Controllers\Ppc\Bf;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Ppc\Bf\CompileProd;
use App\Http\Requests\bpb_glyscjhRequest;

use Carbon\Carbon;
// use Illuminate\Support\Facades\DB;


class CompileProdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data   = CompileProd::where('status', 0)
            ->orderBy('plan_star_time', 'desc')
            ->paginate(5);
        $jumlah_data = $data->total();

        return view('ppc.bf.prod.index', compact('data', 'jumlah_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('ppc.bf.prod.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request['furn_effe_prod_days'] = Carbon::parse($request['plan_star_time'])
            ->diffInDays(Carbon::parse($request['plan_end_time']));

        $request['stop_days'] = Carbon::parse($request['o_start_time'])
            ->diffInDays(Carbon::parse($request['o_end_time']));

        $request['status'] = '0';
        $request['in_date'] = now()->format('YmdHis');

        $input = $request->all();
        CompileProd::create($input);

        return redirect()
            ->route('bf_compile_prod.index')
            ->with('flash-message', ['Data berhasil disimpan!', 'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bf_compile_prod = CompileProd::findOrFail($id);

        return  view('ppc.bf.prod.show', compact('bf_compile_prod'));
    }

    public function cari(Request $request)
    {
        $po    = trim($request->input('prod_order'));
        $d1 = str_replace('-', '', $request->input('tgl1'));
        $d2 = str_replace('-', '', $request->input('tgl2'));

        $data = null;

        if (($po != "") && ($d1 != "") && ($d2 != "")) {
            $data = CompileProd::byProduk($po)->inPeriod($d1, $d2)->paginate(5);
        } elseif ($po != "") {
            $data = CompileProd::byProduk($po)->paginate(5);
        } elseif (($d1 != "") && ($d2 != "")) {
            $data = CompileProd::inPeriod($d1, $d2)->paginate(5);
        }

        if ($data == null) {
            return redirect('bf_compile_prod');
        } else {
            $jumlah_data = $data->total();
            return view('ppc.bf.prod.index', compact('data', 'jumlah_data'));
        }
    }

    
    public function getbody($bf_compile_prod)
    {
        $bf_compile_prod    = CompileProd::find($bf_compile_prod);
        $view               = view('ppc.bf.prod.tes', compact('bf_compile_prod'))->render();
        return response()->json(['html'=>$view]);
    }


    public function showmodal($bf_compile_prod)
    {
        $bf_compile_prod    = CompileProd::find($bf_compile_prod);
        $view               = view('ppc.bf.prod.modal', compact('bf_compile_prod'))->render();
        return response()->json(['html'=>$view]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(CompileProd $bf_compile_prod)
    {
        return  view('ppc.bf.prod.edit', compact('bf_compile_prod'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $bf_compile_prod = CompileProd::findOrFail($id);


        if ($request->hasFile('status')) {
            $request['s_date'] = now()->format('YmdHis');
        } else {
            $request['m_date'] = now()->format('YmdHis');
        }

        $d1 = Carbon::parse($request['o_start_time']);
        $d2 = Carbon::parse($request['o_end_time']);
        $request['stop_days'] = $d1->diffInDays($d2);

        $request['furn_effe_prod_days'] = Carbon::parse($request['plan_star_time'])
            ->diffInDays(Carbon::parse($request['plan_end_time']));

        $input = $request->all();

        $bf_compile_prod->update($input);

        return redirect()
            ->route('bf_compile_prod.index')
            ->with('flash-message', ['Data berhasil di-update!', 'success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CompileProd $bf_compile_prod, Request $request)
    {
        // if ($request['status'] == 'New') {
        $bf_compile_prod->delete();

        if ($request->ajax() || $request->wantJson()) {
            $request->session()->flash('flash-message', ['Data berhasil dihapus!', 'success']);
            return response()->json(['message' => 'Data berhasil dihapus!'], 201);
        } else {
            return redirect()
                ->route('bf_compile_prod.index')
                ->with('flash-message', ['Data berhasil dihapus!', 'success']);
        }
    }
    // else {
    //     $request->session()->flash('flash-message', ['Data Sudah Dikirim Tidak bisa dihapus!', 'success']);
    // }
    // }
}
