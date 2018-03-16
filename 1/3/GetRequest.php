<?php
require "Request.php";

class GetRequest extends Request
{
    private const QUERY_STRING = "QUERY_STRING";

    function getData()
    {
        parse_str($_SERVER[self::QUERY_STRING], $parsedQuery);

        return $parsedQuery;
    }
}