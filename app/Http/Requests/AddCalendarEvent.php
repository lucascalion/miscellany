<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddCalendarEvent extends FormRequest
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
            'entity_id' => 'exists:entities,id',
            'name' => '',
            'date' => 'required',
            'length' => 'required|integer|min:1',
            'is_recurring' => '',
            'recurring_until' => '',
            'comment' => '',
        ];
    }
}
