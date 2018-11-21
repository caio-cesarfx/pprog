<?php

namespace App\Exceptions;

use Exception;

class BusinessException extends Exception{

    public $errors;

    /**
     * @param mixed $errors
     * @param int $httpCode The HTTP Response code
     */
    public function __construct($errors) {

        if (is_string($errors)){
            $errors = ['default' => $errors];
        }

        $this->errors = $errors;
        parent::__construct("Erro negocial: " . print_r($errors,true) ,422);
    }


}