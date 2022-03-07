<?php

namespace App\Exceptions;

class InvalidMatchIdException extends \Exception
{
    protected $message = 'There is no match with the provided ID associated to you! Please try again!';
}