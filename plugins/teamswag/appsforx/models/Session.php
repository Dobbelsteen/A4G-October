<?php namespace Teamswag\Appsforx\Models;

use Model;

/**
 * session Model
 */
class Session extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'teamswag_appsforx_sessions';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $belongsTo = ['Event' => ['Teamswag\Appsforx\Models\Event'], 'Location' => ['Teamswag\Appsforx\Models\Location']];

    public $belongsToMany = [
        'speakers' => [
            'Teamswag\Appsforx\Models\Speaker',
            'table' => 'teamswag_appsforx_se_sp'
        ]
    ];

    public $rules = [
        'name' => 'required',
        'start_time' => 'required',
        'duration' => 'required|integer',
        'slug' => ['regex:/^[a-z0-9\/\:_\-\*\[\]\+\?\|]*$/i', 'unique:teamswag_appsforx_sessions'],
    ];

    public $customMessages = [
        'required' => 'The :attribute field is required'
    ];

    public function getNiveauOptions($keyValue = null)
    {
        return ['Beginner'=> 'Beginner', 'Intermediate'=> 'Intermediate', 'Advanced'=> 'Advanced', 'Expert'=> 'Expert'];
    }

    public function getTypeOptions($keyValue = null)
    {
        return ['Workshop'=> 'Workshop', 'Panel'=> 'Panel', 'Keynote'=> 'Keynote', 'Hackathon'=> 'Hackathon'];
    }
}
