<?php namespace Lime\Forms\Components;

use Cms\Classes\ComponentBase;
use Lime\Forms\Models\Contact;
use Input;

class ContactForm extends ComponentBase
{
    public function componentDetails() {
      return [
        'name' => 'lime.forms::lang.component_name',
        'description' => 'lime.forms::lang.component_description'
      ];
    }

    public function defineProperties() {
      return [];
    }

    public function onSend() {
      $contact = new Contact();
      $contact->name = Input::get('name');
      $contact->email = Input::get('email');
      $contact->message = Input::get('message');
      $contact->save();
    }
}
