<?php namespace Goldtest\Site\Models;

use Model;
use RainLab\Location\Behaviors\LocationModel;

/**
 * School Model
 */
class School extends Model
{
    /** @var string The database */
    public $table = 'goldtest_site_schools';

    /** @var array Guarded fields */
    protected $guarded = ['*'];

    /** @var array Fillable fields */
    protected $fillable = [];

    public $implement = [LocationModel::class];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
