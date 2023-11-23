<?php namespace Goldtest\Site\Components;

use Cms\Classes\ComponentBase;
use Goldtest\Site\Models\Contact as ContactModel;
use Goldtest\Site\Models\Settings;
use Mail;

class Contact extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Contact',
            'description' => '',
        ];
    }

    public function onSendContact()
    {
        $contact = new ContactModel(post());
        $contact->save();

        $this->sendEmailToGoldtest($contact);
        $this->sendEmailToClient($contact);

        return [
            '#contactForm' => $this->renderPartial('@success'),
        ];
    }

    private function sendEmailToGoldtest(ContactModel $contact)
    {
        Mail::send('goldtest.site::mail.contact_goldtest', [
            'contact' => $contact->toArray(),
        ], function ($message) {
            $message->to(Settings::get('send_contact_to'));
        });
    }

    private function sendEmailToClient(ContactModel $contact)
    {
        Mail::send('goldtest.site::mail.contact_client', [
            'contact' => $contact->toArray(),
        ], function ($message) use ($contact) {
            $message->to($contact->email);
        });
    }
}
