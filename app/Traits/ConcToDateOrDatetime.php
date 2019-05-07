<?php

namespace App\Traits;

use Carbon\Carbon;

// ubah date format string ke dateTime

// trait ConcToDateOrDatetime
// {
    // public function __get($name)
    // {
    //     $value = $this->attributes[$name];

    //     if (in_array($name, $this->concatenated_datetimes) && !is_null($value)) {
    //         $return  = Carbon::parse($value)->isoFormat('Y-MM-DD HH:mm:ss');
    //     } else if (in_array($name, $this->concatenated_dates) && !is_null($value)) {
    //         $year = substr($value, 0, 4);
    //         $month = substr($value, 4, 2);
    //         $day = substr($value, 6, 2);

    //         $return = Carbon::createFromDate($year, $month, $day)->format('d-m-Y');
    //     } else
    //         $return = $value;

    //     return $return;
//     }
// }
