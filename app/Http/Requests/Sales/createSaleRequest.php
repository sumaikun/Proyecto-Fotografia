<?php

namespace Konrad\Http\Requests\Sales;

use Konrad\Http\Requests\Request;



class createSaleRequest extends Request
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
        $validate =  [ 'archivo'=> 'mimes:png,jpeg,jpg|image_size:512-1500,650-1920'
        
        ];   

        return $validate;
        
    }
}
