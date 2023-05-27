<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class UpdateTaskRequest extends FormRequest
{
    public function rules()
    {
        return [
            'title' => [
                'required', 'string',
            ],
            'description' => [
                'required', 'string',
            ],
            'start_time' => [
                'required', 'date',
            ],
            'end_time' => [
                'required', 'date',
            ],
            'current_price' => [
                'required', 'integer',
            ],
        ];
    }

    public function authorize()
    {
        return Gate::allows('task_access');
    }
}