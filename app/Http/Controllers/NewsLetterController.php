<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Validation\ValidationException;
use NewsLetter;

class NewsLetterController extends Controller
{
    public function Subscribe()
    {
        try
        {
            $response = (new NewsLetter())->initiate()->lists->addListMember(config('services.mailchimp.list'), [
                "email_address" => request('email_for_newsletter'),
                "status" => "subscribed"]);

        } catch (Exception $exception) {

            throw ValidationException::withMessages(
                ['email_for_newsletter' => 'This email could not be added to subscription list for newsletters. ']);

            return redirect('/#newsletter');
        }

        return redirect(request()->routeIs('home'))->with('success', 'You are successfully subscribed for newsletters ✌✌✌');


    }


}
