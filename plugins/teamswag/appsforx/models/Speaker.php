<?php namespace Teamswag\Appsforx\Models;

use Model;

/**
 * Speaker Model
 */
class Speaker extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'teamswag_appsforx_speakers';

    /**
     * @var array Guarded fields
     */
    protected $guarded = [''];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $belongsToMany = [
        'sessions' => [
            'Teamswag\Appsforx\Models\Session',
            'table' => 'teamswag_appsforx_se_sp'
        ]
    ];
    
    public $attachOne = [
        'avatar' => ['System\Models\File', 'order' => 'sort_order'],
        'content_images' => ['System\Models\File']
    ]; 

    public $rules = [
        'name' => 'required'
    ];

    public $customMessages = [
        'required' => 'The :attribute field is required'
    ];
}