<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;


class metas extends Model
{
    use HasFactory,Searchable;

    protected $table = 'meta_tags_new';

    public function searchableAs() :string 
    {
      return 'meta_tags_new';
    }


    public function toSearchableArray()
    {
        return [
            'meta_keywords' => $this->meta_keywords,
            'meta_title' => $this->meta_title,
            'meta_description' => $this->meta_description,
            'disp_attribute_1' => $this->disp_attribute_1,
            'disp_attribute_2' => $this->disp_attribute_2
        ];
    }


  
}

