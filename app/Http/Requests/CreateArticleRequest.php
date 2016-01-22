<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Contracts\Validation\Validator;

class CreateArticleRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     * you may check if the authenticated user actually has the authority to update a given resource.
     * For example, if a user is attempting to update a blog post comment, do they actually own that comment?
     * If you plan to have authorization logic in another part of your application, simply return true from the authorize method:
     * 表示用户在提交表单的时候是否需要是认证用户，我们不需要认证，返回 true
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
        $rules = [
            'title'=>'required|max:255',
            'content'=>'required',
        ];

        if($this->method()==='PATCH')
        {
            $rules = [
                'title'=>'required',
                'content'=>'required',
            ];
        }
        return $rules;
    }

    /**
     * Customizing The Flashed Error Format
     * 注意 use Illuminate\Contracts\Validation\Validator;
     * @param Validator $validator
     *
     * @return mixed
     */
    //protected function formatErrors(Validator $validator)
    //{
    //    return [
    //        'title.required'=>'必须写个标题',
    //        'content.required'=>'内容也 必须写上,否则弄个死你',
    //    ];
    //}

    /**
     * Customizing The Error Messages
     * @return array
     */
    public function messages()
    {
        $messages = [
            'title.required'=>'The :attribute and :other must match.',
            'content.required'=>'The :attribute and :other 好的.',
        ];
        if($this->method()==='PATCH')
        {
            $messages = [
                'title.required'=>'The :attribute 得填啊',
                'content.required'=>'The :attribute and :other 好的.',
            ];
        }

        return $messages;
    }
}
