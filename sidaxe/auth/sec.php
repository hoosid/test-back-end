<?php 
function req($req){
  return htmlspecialchars(strip_tags($_POST[$req]));
}


?>