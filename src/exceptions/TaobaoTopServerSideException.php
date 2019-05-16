<?php

namespace ihipop\TaobaoTop\exceptions;

class TaobaoTopServerSideException extends \RuntimeException
{

    protected $subErrorCode;

    protected $responseBody;

    protected $subErrorMessage;

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
    public function getSubErrorMessage()
    {
        return $this->setSubErrorMessage;
    }

    /**
     * @param mixed $responseBody
     *
     * @return TaobaoTopServerSideException
     */
    public function setResponseBody($responseBody)
    {
        $this->responseBody = $responseBody;

        return $this;
    }
}
