<?php

namespace App\Http\Requests\Vehicle;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Vehicle;
use Illuminate\Validation\Rule;

class CreateVehicleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        $auth = auth()->user();

        return auth()->check() && $auth->role === 'admin';
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'image' => ['required', 'string', 'max:255'],
            'model' => ['required', 'string', 'max:255', Rule::unique(Vehicle::class)],
            'quantity'  => ['required', 'integer'],
            'numOfSeats' => ['required', 'integer'],
            'rate' => ['required', 'integer']
        ];
    }
}
