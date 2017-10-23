<?php
/**
 * Copyright (c) 2017. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
 * Morbi non lorem porttitor neque feugiat blandit. Ut vitae ipsum eget quam lacinia accumsan.
 * Etiam sed turpis ac ipsum condimentum fringilla. Maecenas magna.
 * Proin dapibus sapien vel ante. Aliquam erat volutpat. Pellentesque sagittis ligula eget metus.
 * Vestibulum commodo. Ut rhoncus gravida arcu.
 */

namespace Sahakavatar\Framework\Http\Requests;

use Sahakavatar\Cms\Http\Requests\Request;
use Sahakavatar\Framework\Repository\VersionsRepository;

class UploadCssRequest extends Request
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
                'version' => 'required|max:255'
            ];
        }
        return [];
    }

    /**
     * Configure the validator instance.
     *
     * @param  \Illuminate\Validation\Validator $validator
     * @return void
     */
    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            $fileData = md5(\File::get($this->file('file')));
            $version = new VersionsRepository();
            $result = $version->findBy('content', $fileData);
            if ($result) {
                $validator->errors()->add('file', 'File already exists');
            }

            $validatorRule = \Validator::make(['file' => $this->file('file')], [
                'file' => "required|file:css,min.css"
            ]);
            if ($validatorRule->fails()) {
                $validator->errors()->add('file', 'File should be css file');
            }
        });
    }

}