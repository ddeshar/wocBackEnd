<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createPagesValidate extends FormRequest{

    protected $rules = [
        'title'   => 'required',
        'slug' => 'required|unique:pages',
        'status'   => 'numeric|required',
    ];

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules(){
        switch ($this->method()) {
            case 'POST':
                return $this->getPostRules();
            case 'PATCH':
                return $this->getPutRules();
            default:
                return $this->rules;
        }
    }

    private function getPostRules(){
        return $this->rules;
    }

    private function getPutRules(){
        $rules = $this->rules;
        $rules['slug'] = 'required|unique:pages,slug,' .$this->getSegmentFromEnd().',pageId';
        return $rules;
    }

    private function getSegmentFromEnd($position_from_end = 1) {
        $segments =$this->segments();
        return $segments[sizeof($segments) - $position_from_end];
    }
}
