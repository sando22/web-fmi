<?php


class Request
{
    private const REQUEST_METHOD = "REQUEST_METHOD";
    private const SERVER_NAME = "SERVER_NAME";
    private const REQUEST_URI = "REQUEST_URI";
    private const SCRIPT_NAME = "SCRIPT_NAME";
    private const HTTP_USER_AGENT = "HTTP_USER_AGENT";

    protected $_server;

    /**
     * Request constructor.
     * @param $_server
     */
    public function __construct($_server)
    {
        $this->_server = $_server;
    }

    function getMethod()
    {
        return strtolower($this->_server[self::REQUEST_METHOD]);
    }

    function getPath()
    {
        return $this->_server[self::SCRIPT_NAME];
    }

    function getURL()
    {
        return $this->_server[self::SERVER_NAME] . $this->_server[self::REQUEST_URI];
    }

    function getUserAgent()
    {
        return $this->_server[self::HTTP_USER_AGENT];
    }
}