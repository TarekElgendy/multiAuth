<?php

namespace App\Http\Requests\backend;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductRequest extends FormRequest
{
    public $rules = [];
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        if ($this->isMethod('post')) {
            return $this->createRules();
        } elseif ($this->isMethod('put')) {
            return $this->updateRules();
        }
    }
    public function createRules()
    {
        foreach (config('translatable.locales') as $locale) {
            $this->rules += [$locale . '.title' => 'required|unique:product_translations,title'];
        } // end of  for each
        $this->rules += ['image' => 'required|mimes:svg,jpg,bmp,jpeg,gif,png,eps,raw,cr2,nef,orf,sr2,tif,tiff,|max:2048',];
        $this->rules += ['image2' => 'nullable|mimes:svg,jpg,bmp,jpeg,gif,png,eps,raw,cr2,nef,orf,sr2,tif,tiff,|max:2048',];
        $this->rules += [
            'category_id' => 'required',
        ];
        return $this->rules;
    }
    public function updateRules()
    {
        $item = $this->route('product');
        foreach (config('translatable.locales') as $locale) {
            $this->rules += [$locale . '.title' => ['required', Rule::unique('product_translations', 'title')->ignore($item->id, 'product_id')]];
            $this->rules += [$locale . '.title' => ['required']];
        } // end of  for each
        $this->rules += ['image' => 'nullable|mimes:svg,jpg,bmp,jpeg,gif,png,eps,raw,cr2,nef,orf,sr2,tif,tiff,|max:2048',];
        $this->rules += ['image2' => 'nullable|mimes:svg,jpg,bmp,jpeg,gif,png,eps,raw,cr2,nef,orf,sr2,tif,tiff,|max:2048',];
        return $this->rules;
    }
    public function messages()
    {
        $msg = [];
        return $msg;
    }
}
