<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidCaptcha implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        //
        return $this->verifyCaptcha($value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Captcha verification failed';
    }

    private function verifyCaptcha($token) {
        try {
            $client = new \GuzzleHttp\Client();
            $response = $client->request('POST', 'https://www.google.com/recaptcha/api/siteverify', [
                'form_params' => [
                    'secret' => env('CAPTCHA_SECRET'),
                    'response' => $token
                ]
            ]);

            $result = json_decode($response->getBody());

            return $result->success;

        } catch(\Exception $e) {
            return false;
        }
    }
}
