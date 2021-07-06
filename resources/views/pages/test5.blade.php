<!DOCTYPE html>
<h1>Input your name</h1>
<?php
echo Form::open();
echo Form::label('name1');
echo Form::text('name1');

echo Form::submit('->');

echo Form::label('name2');
echo Form::textarea('name2',"$bau");
echo Form::close();
?>

