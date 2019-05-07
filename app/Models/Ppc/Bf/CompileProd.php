<?php

namespace App\Models\Ppc\Bf;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
// use App\Traits\ConcToDateOrDatetime;  //format field string to date (php)


class CompileProd extends Model
{
    // use ConcToDateOrDatetime;

    protected $table = 'bpb_glyscjh';
    protected $primaryKey = 'seq';
    public $timestamps = false;

    protected $fillable = [
        'y_m',
        'machine_no',
        'furn_effe_prod_days',
        'furn_plan_yiel',
        'stop_days',
        'status',
        'remarks',
        'in_emp',
        'in_date',
        'm_emp',
        'm_date',
        's_emp',
        's_date',
        'plan_star_time',
        'plan_end_time',
        'mat_code',
        'o_start_time',
        'o_end_time',
        'rownum',
    ];

    //format penulisan dateTime
    private function conToDateTime($value)
    {
        $hasil = null;
        $len = strlen($value);

        if ($len == 10) $value = $value . "0000";
        if ($len == 12) $value = $value . "00";
        $len = strlen($value);

        if ($len == 8) {
            return Carbon::parse($value)->format('Y-m-d');
        }

        if ($len == 14)
            $hasil = Carbon::parse($value)->format('Y-m-d H:i:s');

        return ($hasil);
    }


    private function strDate($value)
    {
        $hasil = null;
        //date
        if (strlen($value) >= 10) {
            $year = substr($value, 0, 4);
            $month = substr($value, 5, 2);
            $day = substr($value, 8, 2);

            $hasil = $year . $month . $day;
        }

        //dateTime 
        if (strlen($value) >= 18) {
            $h = substr($value, 11, 2);
            $m = substr($value, 14, 2);
            $s = substr($value, 17, 2);

            $hasil = $hasil . $h . $m . $s;
        }

        return $hasil;
    }



    //join tabel  bpb_glyscjh dg tabel BBB_MATE_CD
    public function material()
    {
        return $this->belongsTo('App\Models\Setting\Material', 'mat_code', 'mate_cd');
    }

    // ---------------------- tampilkan format date (accessor) 
    public function getPlanStarTimeAttribute($value)
    {
        return $this->conToDateTime($value);
    }

    public function getPlanEndTimeAttribute($value)
    {
        return $this->conToDateTime($value);
    }

    public function getOStartTimeAttribute($value)
    {
        return $this->conToDateTime($value);
    }
    public function getOEndTimeAttribute($value)
    {
        return $this->conToDateTime($value);
    }

    public function getInDateAttribute($value)
    {
        return $this->conToDateTime($value);
    }

    public function getMDateAttribute($value)
    {
        return $this->conToDateTime($value);
    }

    public function getSDateAttribute($value)
    {
        return $this->conToDateTime($value);
    }


    public function getStatusAttribute($value)
    {
        $hasil = null;
        if ($value == '0') $hasil = 'New';
        if ($value == '1') $hasil = 'Send';

        return $hasil;
    }
    public function getMachineNoAttribute($value)
    {
        $hasil = null;
        if ($value == 'G1') $hasil = '1Blast Furnace';
        if ($value == 'G2') $hasil = '2Blast Furnace';

        return $hasil;
    }

    //----------------------------set format date ke string ketika save (mutator)
    public function setPlanStarTimeAttribute($value)
    {
        $this->attributes['plan_star_time'] = $this->strDate($value);
    }

    public function setPlanEndTimeAttribute($value)
    {
        $this->attributes['plan_end_time'] = $this->strDate($value);
    }
    public function setOStartTimeAttribute($value)
    {
        $this->attributes['o_start_time'] = $this->strDate($value);
    }
    public function setOEndTimeAttribute($value)
    {
        $this->attributes['o_end_time'] = $this->strDate($value);
    }

    public function scopeByProduk($query, $p)
    {
        return $query->where('y_m', 'LIKE', '%' . $p . '%');
    }

    public function scopeInPeriod($query, $start, $end)
    {
        return $query->where('plan_star_time', '>=', $start)
            ->where('plan_end_time', '<=', $end);
    }
}
