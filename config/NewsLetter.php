<?php

use JetBrains\PhpStorm\NoReturn;

class NewsLetter
{
    public function initiate()
    {

        $mailchimp = new \MailchimpMarketing\ApiClient();

        $mailchimp->setConfig([
            'apiKey' => config('services.mailchimp.key')/*'20856220052570c3e49e168856ba8ac6-us21'*/,
            'server' => 'us21',
        ]);

        return $mailchimp;
    }
}
