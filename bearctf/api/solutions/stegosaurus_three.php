<?php
  if($_POST['answer'] === '{this_was_honestly_a_ploy_to_use_a_bunch_of_stegosaurus_pictures} '){
    $response = array('success' => 'yes','response' => 'Correct!');
  }else{
    $response = array('success' => 'no','reason' => 'Incorrect!');
  }
?>
