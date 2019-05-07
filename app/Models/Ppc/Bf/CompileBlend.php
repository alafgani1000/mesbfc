<?php

namespace App\Models\Ppc\Bf;

use Illuminate\Database\Eloquent\Model;

class CompileBlend extends Model
{
    protected $table        = 'lt_sjs_pb';
    protected $primaryKey   = 'seq';
    public $timestamps      = false;

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
}
