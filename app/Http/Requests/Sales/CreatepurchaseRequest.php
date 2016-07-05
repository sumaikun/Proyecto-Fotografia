<?php

namespace Konrad\Http\Requests\Sales;

use Konrad\Http\Requests\Request;

class CreatepurchaseRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        
        $validation = ['card'=>'required|max:14|min:14',
        'name'=>'required|min:25|max:50',
        'security'=>'required|min:3|max:3',
        'zip'=>'required|min:4|max:7',
        'expired'=>'required',

        ];

        return $validation;
            //
        
    }
}
