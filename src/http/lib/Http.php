<?php
namespace kevin4503\http;

/**
 * HTTP请求操作类
 * Class Http
 * @package kevin4503\http
 */
class Http
{
    /**
     * GET请求类
     * @param $url
     * @return bool|string
     */
    public static function requestByGet($url)
    {
        return file_get_contents($url);
    }
}
