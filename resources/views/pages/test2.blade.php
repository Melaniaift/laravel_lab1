<!DOCTYPE html>
<h1>Input your name</h1>
<?php
echo Form::open(array('action'=>'FormController@test3'));
echo Form::text('name1');
echo Form::submit('->');
echo Form::close();
?>