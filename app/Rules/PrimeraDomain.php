<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

/**
 * Check if the inputed email address is a valid Primera email address
 */
class PrimeraDomain implements Rule
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
        $arr = explode('@', $value);

        return in_array($arr[1], ['primera-africa.com', 'primeramfbank.com', 'primeracredit.com']);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Invalid email address';
    }
}
