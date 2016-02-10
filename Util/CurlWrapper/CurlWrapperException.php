<?php

namespace magento\Util\CurlWrapper;

/**
 * CurlWrapper Exceptions class
 *
 * @author Leonid Svyatov <leonid@svyatov.ru>
 * @copyright 2010-2011, 2014 Leonid Svyatov
 * @license http://www.opensource.org/licenses/mit-license.html MIT License
 * @version 1.3.0
 * @link http://github.com/svyatov/CurlWrapper
 */
class CurlWrapperException extends Exception
{
    /**
     * @param string $message
     */
    public function __construct($message)
    {
        $this->message = $message;
    }
}