<?php

namespace App\Models\Setting;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $table = 'bbb_mate_cd';
    protected $primaryKey = 'seq';
    public $timestamps = false;

    public function compileProds()
    {
        return $this->hasMany('App\Models\Ppc\Bf\CompileProd', 'mat_code', 'mate_cd');
    }
}
