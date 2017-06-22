<?php

/* 
 * Licenced under Creative Commons Attribution-NoDerivatives 4.0
 *
 * Copyright 2017 
 * Web-Engineer.
 * http://www.web-engineer.co.uk.
 * @author James Cullimore.
 * james.cullimore@web-engineer.co.uk.
 *
 * This work is licensed under the Creative Commons Attribution-NoDerivatives 4.0 
 * International License. To view a copy of this license, visit 
 * http://creativecommons.org/licenses/by-nd/4.0/ 
 */

namespace Kn4ppster\Saml2\Exceptions;

use \Exception;

class InvalidSamlResponseException extends Exception {
    protected $message = 'SamlResponse Invalid, please check logs.';
    protected $code = 400;
	
    // Redefine the exception so message isn't optional and code is 400
    public function __construct($message, $code = 400, Exception $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}