<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'booking_type' => 'required|string|max:50',
            'guest_count' => 'required|integer|max:100',
            'child_count' => 'required|integer|max:100',
            'seat' => 'required|string|max:10',
            'body' => 'required|string|max:200',
            'customer_name' => 'required|string|max:10',
            'customer_phone' => 'required|string|max:15',
            'receptionist_name' => 'required|string|max:10',
            'final_confirmation' => 'required|string|max:2',
            'start' => 'required',
            'end' => 'required|after:start',
        ];
    }

    protected function prepareForValidation()
    {
        $start = ($this->filled(['start_date', 'start_time'])) ? $this->start_date . ' ' . $this->start_time : '';
        $end = ($this->filled(['end_date', 'end_time'])) ? $this->end_date . ' ' . $this->end_time : '';
        $this->merge([
            'start' => $start,
            'end' => $end,
        ]);
    }
}
