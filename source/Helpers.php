<?php

/**
 * @param string $date
 * @param string $time
 * @return string
 */
function convertDateTime(string $date, string $time): string
{
    return $date.' '.$time.':00';
}
