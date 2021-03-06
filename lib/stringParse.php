<?php
function find_text($text, $delimit_start = '`', $delimit_end = '`') {
    $start = strpos($text, $delimit_start);
    if ($start === false) return false;

    $end = strpos( substr($text, $start + 1), $delimit_end); 
    if ($end === false) return false;

    return substr ( $text, $start + 1, $end);
}