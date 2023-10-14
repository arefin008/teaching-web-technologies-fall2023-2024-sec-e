<?php 
   $currentPassword = $_REQUEST["CurPassword"];
   $newPassword = $_REQUEST["newPassword"];
   $retypedPassword = $_REQUEST["retypePassword"];

   if ($newPassword == $currentPassword) {
       echo "New password cannot be the same as the current password.";
   } elseif ($newPassword !== $retypedPassword) {
       echo "New password and retyped password do not match.";
   } else {
       echo "Password changed successfully!";
   }

?>
