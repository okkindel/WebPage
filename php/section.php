<?php 

function section(){
  $args = func_get_args();
  $len = func_num_args();
  $istodo = false;

  $s = "<br>\n <div class='row middle'>\n";
  $s.= "<div class='col-6-6 head shadow nave'>{$args[0]}</div>\n";
  $s.= "</div>\n";
  $s.= "<div class='row middle'>\n";
  $s.= "<div class='col-3-6 head shadow'>\n";
  $s.= "<p>Czego Się Nauczyłem</p>\n";
  $s.= "</div>\n";
  $s.= "<div class='col-3-6 head shadow todo'>\n";
  $s.= "<p>Czego Się Douczę</p>\n";
  $s.= "</div>\n";
  $s.= "</div>\n";
  $s.= "<div class='row middle'>\n";
  $s.= "<div class='col-3-6 shadow'>\n";
  for ($i = 1; $i < $len; $i++) {
    if ($args[$i] == ":") {
      $istodo = true;
      $s.= "</div>\n";
      $s.= "<div class='col-3-6 shadow'>\n";
      $s.= "<ul>\n";
    }
    else if ($istodo == false) {
      $s.= "<p class='textbox'>{$args[$i]}</p>\n";
    } else {
      $s.= "<li class='libox'>{$args[$i]}</li>\n";
    }
  }
  $s.= "</ul>\n";
  $s.= "</div>\n";
  $s.= "</div>\n";

  return $s;
}
?>