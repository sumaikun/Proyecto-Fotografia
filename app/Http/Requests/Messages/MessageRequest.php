<?php

namespace Konrad\Http\Requests\Message;

use Konrad\Http\Requests\Request;

class MessageRequest extends Request
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
        $validation = ['title'=>'required|max:14|min:6',
        'message'=>'required|min:20|max:350',
        'security'=>'required|min:3|max:3',
        'sendid'=>'required|max:3',
        'getid'=>'required|max:3',

        ];

        return $validation;
    }
}
