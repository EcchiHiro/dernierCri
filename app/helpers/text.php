<?php

function trim_text($text, $length, $endText = '...') {

    $text = strip_tags($text);

    if (strlen($text) <= $length) {
        return $text;
    }

    $last_space = strrpos(substr($text, 0, $length), ' ');
    $trimmed_text = substr($text, 0, $last_space);

    $trimmed_text .= $endText;

    return $trimmed_text;
}


