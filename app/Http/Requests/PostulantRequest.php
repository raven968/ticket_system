<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostulantRequest extends FormRequest
{
    
    public function rules(): array
    {
        return [
            'name' => 'required',
            'last_name_father' => 'required',
            'last_name_mother' => 'required',
            'cellphone' => 'required',
            'birthday' => 'required|date|date_format:Y/m/d',
            'street' => 'nullable',
            'street_number' => 'nullable',
            'colony' => 'nullable',
            'zip' => 'nullable',
            'state' => 'required',
            'city' => 'required',
            'genre' => 'required',
            'marital_status' => 'required',
            'economic_dependents' => 'required',
            'education_level_id' => 'required',
            'education_level_finish' => 'sometimes|date|date_format:Y/m/d',
            'first_work' => 'sometimes',
            'fiscal_situation' => 'sometimes',
            'position1' => 'sometimes',
            'company1' => 'sometimes',
            'init_date1' => 'nullable|date|date_format:Y/m/d',
            'finish_date1' => 'nullable|date|date_format:Y/m/d',
            'specialty1' => 'sometimes',
            'position2' => 'sometimes',
            'company2' => 'sometimes',
            'init_date2' => 'nullable|date|date_format:Y/m/d',
            'finish_date2' => 'nullable|date|date_format:Y/m/d',
            'specialty2' => 'sometimes',
            'position3' => 'sometimes',
            'company3' => 'sometimes',
            'init_date3' => 'nullable|date|date_format:Y/m/d',
            'finish_date3' => 'nullable|date|date_format:Y/m/d',
            'specialty3' => 'sometimes',
            'description' => 'sometimes',
            'password' => 'required'
        ];
    }
}
