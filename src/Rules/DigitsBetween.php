<?php

namespace Neko\Validation\Rules;

use Neko\Validation\Rule;

class DigitsBetween extends Rule
{

    /** @var string */
    protected $message = "The :attribute must have a length between the given :min and :max";

    /** @var array */
    protected $fillableParams = ['min', 'max'];

    /**
     * Check the $value is valid
     *
     * @param mixed $value
     * @return bool
     */
    public function check($value): bool
    {
        $this->requireParameters($this->fillableParams);

        $min = (int) $this->parameter('min');
        $max = (int) $this->parameter('max');

        $length = strlen((string) $value);
        if($length >= $min && $length <= $max)
        {
            return true;
        }else{
            return false;
        }
    }
}
