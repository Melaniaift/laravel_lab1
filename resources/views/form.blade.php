<!DOCTYPE html>
<h1>Add numbers</h1>
<?php
echo Form::open();
echo Form::text('var1',"$var1");
echo Form::text('plus',"+");
echo Form::text('var2',"$var2");
echo Form::submit('egal');
echo Form::text('var3',"$var3");
echo Form::close();
?>