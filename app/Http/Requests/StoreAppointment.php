<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAppointment extends FormRequest
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
        return [
            //
        ];
    }

    public function data()
    {
        return $data= [
            'name'   => $this->get('name'),
            'email'=>$this->get('email'),
            'number'=>$this->get('number'),
            'tnumber'=>$this->get('tnumber'),
            'gender'=>$this->get('gender'),
            'payment'=>$this->get('payment'),
            'message'=>$this->get('message'),
        ];

    }
}
