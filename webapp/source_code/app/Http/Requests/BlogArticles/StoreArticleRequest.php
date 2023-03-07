<?php

namespace App\Http\Requests\BlogArticles;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends FormRequest
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
	        'article_title'             => ['required'],
	        'article_body'              => ['required'],
	        'date_created'              => ['required'],
	        'meta_description'          => ['required'],
	        'meta_keyword'              => ['required'],
            // 'article_files'          => 'max:10000|mimes:doc,docx,jpeg,png,jpg,pdf',
             'averta' => 'max:10000|mimes:jpeg,png,jpg,gif'
        ];
    }

	public function messages()
	{
		return [
            'article_title.required' => 'You must enter an the post title.',
			'article_body.required' =>  'You must enter an post body.',
            'date_created.required' => ' You must enter the date created.',
            'meta_description.required' => ' You must enter the meta description.',
            'meta_keyword.required' => ' You must enter the meta keywords.',
            'averta.max' => ' Cover image too large',
            'averta.mimes' => 'image must be of the type .jpeg, jpg, png or gif',
		];
	}
}
