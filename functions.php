<?php

function dnd($data)
{   //dnd: dump and die
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die;
}


function displayErrors($errors)
{
    if (empty($errors)) return false;

    echo '<ul class="errors">';
    foreach ($errors as $error) {
        echo "<li>{$error}</li>";
    }
    echo '</ul>';
}
