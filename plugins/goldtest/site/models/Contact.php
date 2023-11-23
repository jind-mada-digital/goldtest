<?php namespace Goldtest\Site\Models;

use Carbon\Carbon;
use Model;
use October\Rain\Database\Traits\Validation;
use RainLab\Translate\Models\Message;

/**
 * @property int    $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property bool   $is_a_swiss_ski_school
 * @property string $message
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Contact extends Model
{
    use Validation;

    /** @var string */
    public $table = 'goldtest_contacts';

    /** @var array Fillable fields */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'is_a_swiss_ski_school',
        'message',
        'username',
    ];

    /** @var array */
    public $rules = [
        'name' => 'required',
        'email' => ['email', 'required'],
        'phone' => ['required', 'regex:#^(\+\d{2}|00\d{2}|0)\s?(\d\s?){9}$#'],
        'message' => 'required',
        'username' => 'between:0,0',
    ];

    /** @var array The array of custom attribute names. */
    public $attributeNames = [];

    /** @var array The array of custom error messages. */
    public $customMessages = [];

    public function beforeValidate()
    {
        $this->attributeNames = $this->getAttributeNames();
        $this->customMessages = $this->getCustomMessages();
    }

    public function beforeSave()
    {
        unset($this->username);
    }

    protected function getAttributeNames()
    {
        return [
            'name' => Message::trans('Nom'),
            'email' => Message::trans('Email'),
            'phone' => Message::trans('N° de Tél'),
            'message' => Message::trans('Message'),
        ];
    }

    protected function getCustomMessages()
    {
        return [
            'required' => Message::trans('Merci de renseigner ce champ'),
        ];
    }
}
