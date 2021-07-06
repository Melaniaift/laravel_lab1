<!DOCTYPE html>
<h1>Lower/Upper</h1>
<?php
echo Form::open();
echo Form::text('name1');
echo Form::submit('->');
echo Form::text('name2',"$bau")."<br/><br/>";
echo Form::label('Lower');
echo Form::radio('char','Lower')."<br/>";
echo Form::label('Upper');
echo Form::radio('char','Upper')."<br/>";
echo Form::close();

?>