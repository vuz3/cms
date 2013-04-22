<?php
echo HTML::script($file);
if(isset($msg) && !empty($msg)) {
    if(isset($status) && false == $status){
        echo "<div class='error'> Error Log: " . $msg . "</div><br>";
    }
}
echo Form::open('',array('id' => 'form')) .
 '<fieldset>' .
 '<legend>' . __('Fill the fields') . '</legend>' .
 //$error.
    Form::label('login', __('Nick') . ':') .
        Form::input('login','', array('id' => 'login', 'placeholder' => 'Nick')) . '<br />' .
    Form::label('password', __('Password') . ':') .
        Form::password('password','', array('id' => 'password', 'placeholder' => 'Password')) . '<br />' .
    Form::submit('Submit', 'Submit', array('id' => 'submit'));

'</fieldset>' .
        Form::close();
?>