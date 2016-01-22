<?php namespace Teamswag\Appsforx\Models;

use Model;

/**
 * Location Model
 */
class Location extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'teamswag_appsforx_locations';

    /**
     * @var array Guarded fields
     */
    protected $guarded = [''];

    /**
     * @var array Fillable fields
     */
    protected $fillable = ['name', 'description'];

    /**
     * @var array Relations
     */
    public $hasMany = ['Sessions' => ['Teamswag\Appsforx\Models\Session']];

    public $rules = [
        'name' => 'required'
    ];

}