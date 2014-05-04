<?php
function verificarmail($email){ 
  if (!preg_match("^([a-zA-Z0-9._]+)@([a-zA-Z0-9.-]+).([a-zA-Z]{2,4})$^",$email)){ 
      return FALSE; 
  } else { 
       return TRUE; 
  } 
}
?>