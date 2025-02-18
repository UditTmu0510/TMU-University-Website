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

public static function fetchMetaTagsBySlug(array $slugs)
    {
       
        $slugs = array_pad($slugs, 5, 'na');
    
   
        $query = self::where('status', 'Y');
    
        if (!isset($slugs[0]) || $slugs[0] === 'na') {
            $query->where('slug1', 'na')
                  ->where('slug2', 'na')
                  ->where('slug3', 'na')
                  ->where('slug4', 'na')
                  ->where('slug5', 'na');
        } else {
            $query->where('slug1', $slugs[0]);
    
            if (isset($slugs[1]) && $slugs[1] !== 'na') {
                $query->where('slug2', is_numeric($slugs[1]) ? 'na' : $slugs[1]);
            } else {
                $query->where('slug2', 'na');
            }
    
            if (isset($slugs[2]) && $slugs[2] !== 'na') {
                $query->where('slug3', is_numeric($slugs[2]) ? 'na' : $slugs[2]);
            } else {
                $query->where('slug3', 'na');
            }
    
            if (isset($slugs[3]) && $slugs[3] !== 'na') {
                $query->where('slug4', is_numeric($slugs[3]) ? 'na' : $slugs[3]);
            } else {
                $query->where('slug4', 'na');
            }
    
            if (isset($slugs[4]) && $slugs[4] !== 'na') {
                $query->where('slug5', $slugs[4]);
            } else {
                $query->where('slug5', 'na');
            }
        }
    
       
        return $query->first();
    }
  
}

