<?php

namespace App\Http\Requests\WikiRequest;

use Illuminate\Foundation\Http\FormRequest;

class WikiPostRequest extends FormRequest
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
            'title' => 'required',
        ];
    }

    public function trimPostResponce()
    {   
      $this->title = trim($this->title);
      return $this;
    }
   

    public function FormatPostResponce()
    {   
        $search = [' ', '+', '&'];
        $replace = ['%20', '%2B', '%26'];

        return str_replace($search, $replace, $this->title);
    }
}
