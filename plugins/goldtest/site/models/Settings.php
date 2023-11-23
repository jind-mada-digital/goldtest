<?php namespace Goldtest\Site\Models;

use Model;

/**
 * @method get($key, $default = null)
 */
class Settings extends Model
{
    public $implement = ['System.Behaviors.SettingsModel'];

    public $settingsCode = 'goldtest_settings';

    public $settingsFields = 'fields.yaml';

    public $jsonable = 'school_post_titles';
}
