<!DOCTYPE html>
<h1>Move text</h1>
<?php
echo Form::open();
echo Form::text('var1');
echo Form::submit('->');
echo Form::textarea('var2',"$var1");
echo Form::submit('->');
echo Form::select('var3',[
    'lalele'=>'lalele',
    'trandafiri'=>'trandafiri',
    'toporasi'=>'toporasi',
    "$var2"=>"$var2",
]);
echo Form::submit('->');
echo Form::text('var4',"$var3");
echo Form::close();

?>
