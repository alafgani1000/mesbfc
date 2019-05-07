<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class bpb_glyscjhRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'machine_no'        => 'required|in:G1,G2',
            'plan_star_time'    => 'required|date',
            'plan_end_time'     => 'required|date|gt:plan_star_time',
            'furn_plan_yiel'    => 'required|integer',
            'mat_code'          => 'required|in:MBF101,MBF104',
            'o_end_time'        => 'required_with:o_start_time|date|gt:o_start_time',
        ];
    }
}
