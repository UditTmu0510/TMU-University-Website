<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Laravel\Scout\EngineManager;
use Laravel\Scout\Engines\Engine;



class Metas extends Model
{
    use HasFactory, Searchable;

    protected $table = 'meta_tags_new';

    protected $guarded = [];

    protected $fillable = [
        'page_name', 
        'slug1', 
        'slug2', 
        'slug3', 
        'slug4', 
        'slug5', 
        'meta_title', 
        'meta_description', 
        'meta_keywords', 
        'og_title', 
        'og_site_name', 
        'og_url', 
        'og_description', 
        'og_type', 
        'og_image', 
        'canonical_tag', 
        'image_alt_tag', 
        'sitemap_url', 
        'disp_attribute_1', 
        'disp_attribute_2', 
        'status', 
        'priority', 
        'schema_markup', 
        'no_index_status'
    ];

    public function searchableAs() :string 
    {
      return 'meta_tags_new';
    }


     public function toSearchableArray()
    {
        return [
            'meta_title' => $this->meta_title,
            'meta_description' => $this->meta_description,
            'disp_attribute_1' => $this->disp_attribute_1,
            'disp_attribute_2' => $this->disp_attribute_2,
            'priority' => $this->priority,
        ];
    }
    
     public function searchableUsing(): Engine
    {
        return app(EngineManager::class)->engine('algolia');
    }


  
}

