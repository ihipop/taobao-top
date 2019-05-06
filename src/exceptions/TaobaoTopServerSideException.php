<?php

namespace ihipop\TaobaoTop\exceptions;

class TaobaoTopServerSideException extends \RuntimeException
{

    public $subErrorCode;


    public $setSubErrorMessage;

    public function __construct(string $message = "", int $code = 0, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    public function setSubErrorCode($subErrorCode)
    {
        $this->subErrorCode = $subErrorCode;

        return $this;
    }

    public function setSubErrorMessage($setSubErrorMessage)
    {
        $this->setSubErrorMessage = $setSubErrorMessage;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSubErrorCode()
    {
        return $this->subErrorCode;
    }

    /**
     * @return mixed
     */
    public function getSetSubErrorMessage()
    {
        return $this->setSubErrorMessage;
    }
}