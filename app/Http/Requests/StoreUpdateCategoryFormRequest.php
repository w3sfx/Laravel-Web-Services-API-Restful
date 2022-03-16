<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateCategoryFormRequest extends FormRequest
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
        //dd($this->segment(3));
        if($this->segment(3) != null){
            return [
                'name' => "required|min:3|max:50|unique:categories,name,{$this->segment(3)},id",
            ];
        }
        else {
            return [
                'name' => "required|min:3|max:50|unique:categories",
            ];
        }
    }
}
