<?php

function singularToPlural($character) {
    if (substr($character, -1) === 's') {
        return $character;
    } else {
        if (substr($character, -1) === 'y') {
            return str_replace(substr($character, -1), 'ies', $character);
        } else {
            return $character . 's';
        }
    }
}
