<?php namespace Pm\Product\Models;

use Model;

/**
 * Model
 */
class Category extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    

    public function scopePopular($query,$type)
    {

        return $query->take($type);
        
    }

   

    /**
     * @var string The database table used by the model.
     */
    public $table = 'pm_product_category';


    
    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachOne = [
        'image' => 'System\Models\File'
    ];

    public $attachMany = [
        'gallery' => 'System\Models\File'
    ];
}
