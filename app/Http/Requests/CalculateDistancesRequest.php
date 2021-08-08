<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CalculateDistancesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'response_unit' => 'required|in:meter,yard',
            'distances' => 'required|array|size:2',
            'distances.*.value' => 'required|numeric',
            'distances.*.unit' => 'required|in:meter,yard',
        ];
    }
}
