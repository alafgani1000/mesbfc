<?php

namespace App\Http\Controllers\Ppc\Bf;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Ppc\Bf\CompileBlend;
use App\Models\Ppc\BpbMatchange;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Yajra\Oci8\Query;
use Yajra\Pdo\Oci8 as PDO;
use Yajra\Oci8\Connectors;
use Yajra\Oci8\Auth\OracleUserProvider;
use Yajra\Pdo\Oci8\Statement;


class CompileBlendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data   = CompileBlend::orderBy('seq', 'desc')->paginate(5);
        $jumlah_data = $data->total();

    return view('ppc.bf.blend.index', compact('data', 'jumlah_data'));
    }

    public function showbpb($bf_compile_blend)
    {
        $data   = BpbMatchange::where('father_seq', $bf_compile_blend)
            ->orderBy('seq', 'desc')
            ->paginate(10);
        $view   = view('ppc.bf.blend.partials.bpbmatchage', compact('data'))->render();
        return response()->json(['html'=>$view]);
       
    }

    public function createbpb($bf_compile_blend)
    {
        $bf_compile_blend   = CompileBlend::where('seq',$bf_compile_blend)->first();
        $view               = view('ppc.bf.blend.creatematchange', compact('bf_compile_blend'))->render();
        return response()->json(['html'=>$view]);
    }

    public function storebpb(Request $request)
    {
        // PROCEDURE p_smodify1 (
        //     itype          IN       VARCHAR2,
        //     p_seq          IN       VARCHAR2,
        //     p_father_seq   IN       VARCHAR2,
        //     p_mat_code     IN       bpb_matchange.mat_code%TYPE,
        //     p_mat_na       IN       bpb_matchange.mat_na%TYPE,
        //     p_batch        IN       VARCHAR2,
        //     p_pb           IN       VARCHAR2,
        //     p_remarks      IN       bpb_matchange.remarks%TYPE,
        //     p_in_emp       IN       bpb_matchange.in_emp%TYPE,
        //     p_e_code       OUT      NUMBER,
        //     p_e_msg        OUT      VARCHAR2
        //  );

        $itype              = 'I';
        $p_seq              = '';
        $p_father_seq       = '';
        $p_mat_code         = $request['mat_code'];
        $p_mat_na           = $request['machine_no'];
        $p_batch            = $request['weight'];
        $p_pb               = $request['desc'];
        $p_remarks          = Carbon::parse($request['pls'])->format('dmYHis');
        $p_in_emp           = Carbon::parse($request['ple'])->format('dmYHis');
        $p_e_code           = 0;
        $p_e_msg            = '';
        

        $pdo = DB::getPdo();

        $stmt = $pdo->prepare("begin PKG_APC0030C.p_smodify(:itype, :p_seq, :p_father_seq, :p_mat_code, :p_mat_na, :p_batch, :p_pb,:p_remarks, :p_in_emp, :p_in_emp, :p_e_code, :p_remarks, :p_in_emp, :p_e_code, :p_e_msg); end;");
        $stmt->bindParam(':itype', $itype, PDO::PARAM_STR, 200);
        $stmt->bindParam(':p_seq', $p_seq, PDO::PARAM_INT);
        $stmt->bindParam(':p_pbd_no', $p_pbd_no, PDO::PARAM_STR, 200);
        $stmt->bindParam(':p_mat_cd', $p_mat_cd, PDO::PARAM_STR, 200);
        $stmt->bindParam(':p_mat_name', $p_mat_name, PDO::PARAM_STR, 200);
        $stmt->bindParam(':p_machine_no', $p_machine_no, PDO::PARAM_STR, 200);
        $stmt->bindParam(':p_weight', $p_weight, PDO::PARAM_INT);
        $stmt->bindParam(':p_pbd_scheme', $p_pbd_scheme,PDO::PARAM_STR, 200);
        $stmt->bindParam(':p_pb_star_time', $p_pb_star_time, PDO::PARAM_STR, 200);
        $stmt->bindParam(':p_pb_end_time', $p_pb_end_time, PDO::PARAM_STR, 200);
        $stmt->bindParam(':p_pb_type', $p_pb_type, PDO::PARAM_STR, 200);
        $stmt->bindParam(':p_remarks', $p_remarks, PDO::PARAM_STR, 200);
        $stmt->bindParam(':p_in_emp', $p_in_emp, PDO::PARAM_STR, 200);
        $stmt->bindParam(':p_e_code', $p_e_code, PDO::PARAM_INT);
        $stmt->bindParam(':p_e_msg', $p_e_msg, PDO::PARAM_STR, 200);
        $stmt->execute();

        dd(p_e_code);

        if($p_e_msg == null)
        {
            return redirect()
                ->route('bf_compile_blend.index')
                ->with('flash-message', ['Data berhasil disimpan!', 'success']);
        }
        else
        {
            return redirect()
                ->route('bf_compile_blend.create')
                ->with('flash-message', ['Error: '. $p_e_msg, 'success']);
        }

       
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ppc.bf.blend.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($bf_compile_blend)
    {
        $bf_compile_blend = CompileBlend::where('seq',$bf_compile_blend)->first();
        return view('ppc.bf.blend.create', compact('bf_compile_blend'));
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
        /*
            itype            IN       VARCHAR2,
            p_seq            IN       lt_sjs_pb.seq%TYPE,
            p_pbd_no         IN       lt_sjs_pb.pbd_no%TYPE,
            p_mat_cd         IN       VARCHAR2,
            p_mat_name       IN       VARCHAR2,
            p_machine_no     IN       lt_sjs_pb.machine_no%TYPE,
            p_weight         IN       lt_sjs_pb.weight%TYPE,
            p_pbd_scheme     IN       lt_sjs_pb.pbd_scheme%TYPE,
            p_pb_star_time   IN       lt_sjs_pb.pb_star_time%TYPE,
            p_pb_end_time    IN       lt_sjs_pb.pb_end_time%TYPE,
            p_pb_type        IN       lt_sjs_pb.pb_type%TYPE,
            p_remarks        IN       lt_sjs_pb.remarks%TYPE,
            p_in_emp         IN       lt_sjs_pb.in_emp%TYPE,
            p_e_code         OUT      NUMBER,
            p_e_msg          OUT      VARCHAR2

        */

        if($request['seq'] == null)
        {
            $itype            = 'I';
        }
        else
        {
            $itype            = 'U';
        }
        $p_seq            = '';
        $p_pbd_no         = '';
        $p_mat_cd         = $request['mat_code'];
        $p_mat_name       = $request['mat_name'];
        $p_machine_no     = $request['machine_no'];
        $p_weight         = $request['weight'];
        $p_pbd_scheme     = $request['desc'];
        $p_pb_star_time   = Carbon::parse($request['pls'])->format('dmYHis');
        $p_pb_end_time    = Carbon::parse($request['ple'])->format('dmYHis');
        $p_pb_type        = '';
        $p_remarks        = $request['remarks'];
        $p_in_emp         = 'X000006';
        $p_e_code         =  0;
        $p_e_msg          =  '';
        

        $pdo = DB::getPdo();

        $stmt = $pdo->prepare("begin PKG_APC0030C.p_smodify(:itype, :p_seq, :p_pbd_no, :p_mat_cd, :p_mat_name, :p_machine_no, :p_weight,:p_pbd_scheme, :p_pb_star_time, :p_pb_end_time, :p_pb_type, :p_remarks, :p_in_emp, :p_e_code, :p_e_msg); end;");
        $stmt->bindParam(':itype', $itype, PDO::PARAM_STR, 200);
        $stmt->bindParam(':p_seq', $p_seq, PDO::PARAM_INT);
        $stmt->bindParam(':p_pbd_no', $p_pbd_no, PDO::PARAM_STR, 200);
        $stmt->bindParam(':p_mat_cd', $p_mat_cd, PDO::PARAM_STR, 200);
        $stmt->bindParam(':p_mat_name', $p_mat_name, PDO::PARAM_STR, 200);
        $stmt->bindParam(':p_machine_no', $p_machine_no, PDO::PARAM_STR, 200);
        $stmt->bindParam(':p_weight', $p_weight, PDO::PARAM_INT);
        $stmt->bindParam(':p_pbd_scheme', $p_pbd_scheme,PDO::PARAM_STR, 200);
        $stmt->bindParam(':p_pb_star_time', $p_pb_star_time, PDO::PARAM_STR, 200);
        $stmt->bindParam(':p_pb_end_time', $p_pb_end_time, PDO::PARAM_STR, 200);
        $stmt->bindParam(':p_pb_type', $p_pb_type, PDO::PARAM_STR, 200);
        $stmt->bindParam(':p_remarks', $p_remarks, PDO::PARAM_STR, 200);
        $stmt->bindParam(':p_in_emp', $p_in_emp, PDO::PARAM_STR, 200);
        $stmt->bindParam(':p_e_code', $p_e_code, PDO::PARAM_INT);
        $stmt->bindParam(':p_e_msg', $p_e_msg, PDO::PARAM_STR, 200);
        $stmt->execute();

        if($p_e_code == null)
        {
            return redirect()
                ->route('bf_compile_blend.index')
                ->with('flash-message', ['Data berhasil disimpan!', 'success']);
        }
        else
        {
            return redirect()
            ->route('bf_compile_blend.create')
            ->with('flash-message', ['Error: '. $p_e_msg, 'success']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
