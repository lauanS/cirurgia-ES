<?php

define("URL_BASE", "http://localhost/cirurgia-ES");

define("SITE", "Cirurgia - G14");


/**
 * @param string|null $uri
 * @return string
 */
function url(string $uri = null): string
{
    if ($uri){
        return URL_BASE."/{$uri}";
    }
    else{
        return URL_BASE;
    }
}