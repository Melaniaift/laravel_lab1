<!DOCTYPE html>

<h1>Input your name</h1>
<?php
echo Form::open();
echo $bau;
echo Form::text('name1');
echo Form::submit('->');
echo Form::close();
?>