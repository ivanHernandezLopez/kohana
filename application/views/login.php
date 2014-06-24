<form action="<?php echo URL::base(); ?>login" method="POST">
<input type="text" name="email">
<input type="password" name="password">
<input type="hidden" name="token" value="<?php echo Security::token(); ?>"> 
<input type="submit">
</form>