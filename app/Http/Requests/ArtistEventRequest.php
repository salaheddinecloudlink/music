<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArtistEventRequest extends FormRequest
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
            'event_name'=>'required',
            'venue'=>'required',
            'address'=>'required',
            'city'=>'required',
            'state'=>'required',
            'zip'=>'required',
            'start_time'=>'required',
            'finish_time'=>'required',

            'event_date'=>'required',
            'event_link'=>'required',

            'SongType'=>'required',

            'picture'=>'required|mimes:jpeg,jpg,png',

        ];
    }
}
