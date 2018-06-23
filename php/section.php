<?php
function lecture()
{
    $args = func_get_args();
    $len = func_num_args();
    $istodo = false;

    $s = "<br>\n <div class='row middle'>\n";
    $s .= "<div class='col-6-6 head shadow nave'>{$args[0]}</div>\n";
    $s .= "<div class='col-3-6 head shadow'>\n";
    $s .= "<p>Czego Się Nauczyłem</p>\n";
    $s .= "</div>\n";
    $s .= "<div class='col-3-6 head shadow orange'>\n";
    $s .= "<p>Czego Się Douczę</p>\n";
    $s .= "</div>\n";
    $s .= "</div>\n";
    $s .= "<div class='row middle'>\n";
    $s .= "<div class='col-3-6 shadow'>\n";
    for ($i = 1; $i < $len; $i++) {
        if ($args[$i] == ":") {
            $istodo = true;
            $s .= "</div>\n";
            $s .= "<div class='col-3-6 shadow'>\n";
            $s .= "<ul>\n";
        } else if ($istodo == false) {
            $s .= "<p class='textbox'>{$args[$i]}</p>\n";
        } else {
            $s .= "<li class='libox'>{$args[$i]}</li>\n";
        }
    }
    $s .= "</ul>\n";
    $s .= "</div>\n";
    $s .= "</div>\n";

    return $s;
}

function gloasrry()
{
    $args = func_get_args();

    $s = "<br>\n <div class='row middle'>\n";
    $s .= "<div class='col-6-6 head shadow nave orange'>{$args[0]}</div>\n";
    $s .= "<div class='col-6-6 head shadow'>\n";
    $s .= "<p>$args[1]</p>\n";
    $s .= "</div>\n";
    $s .= "<div class='col-6-6 shadow'>\n";
    $s .= "<p class='textbox'>{$args[2]}</p>\n";
    $s .= "</div>\n";
    $s .= "</div>\n";

    return $s;
}
?>