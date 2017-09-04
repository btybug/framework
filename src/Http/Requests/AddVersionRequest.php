<?php
namespace Sahakavatar\Framework\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Sahakavatar\Cms\Http\Requests\Request;

class AddVersionRequest extends Request
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
        if ($this->isMethod('POST')) {
            return [
                'name' => 'required|max:255|unique:versions',
                'type' => 'required|in:css,js,jquery'
            ];
        }
        return [];
    }

    /**
     * Configure the validator instance.
     *
     * @param  \Illuminate\Validation\Validator  $validator
     * @return void
     */
    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            if ($this->input('type') == 'css') {
                $validatorRule = \Validator::make([ 'file' => $this->file('file')], [
                    'file' => "required|file:css,min.css"
                ]);
                if ($validatorRule->fails()) {
                    $validator->errors()->add('file', 'File should be css file');
                }
            }elseif($this->input('type') == 'js' or $this->input('type') == 'jquery'){
                $validatorRule = \Validator::make([ 'file' => $this->file('file')], [
                    'file' => "required|file:js,min.js"
                ]);
                if ($validatorRule->fails()) {
                    $validator->errors()->add('file', 'File should be javascript file');
                }
            }
        });
    }

}