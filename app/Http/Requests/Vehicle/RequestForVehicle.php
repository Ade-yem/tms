<?php

namespace App\Http\Requests\Vehicle;

use Illuminate\Foundation\Http\FormRequest;

class RequestForVehicle extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
            'vehicleModel' => ['required', 'string'],
            'whereTo' => ['required', 'string', 'max:255'],
            'reason' => ['required', 'string', 'max:255'],
        ];
    }
}
