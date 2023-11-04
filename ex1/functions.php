<?php
function process_form(){
    print "Hello, " . $_POST['my_name'];
}
function print_form($errors =''){
    if($errors){
        print 'Please correct these errors: <ul><li>';
        print implode('</li></li>', $errors);
        print '</li></ul>';
    }
    print<<<_HTML_
<form method="post" action="$_SERVER[PHP_SELF]">
    Your name: <input type="text" name="my_name">
    <br>
    <input type="submit" value="Send">
</form>
_HTML_;
}
function validate_form(){
    $errors = array();
 if(strlen(trim($_POST['my_name'])) < 3){
     $errors[] = 'Your name must be at least 3 letters long.';
 }
 if($_POST['my_name'] == 'administrator'){
     $errors[] = 'You can`t be an administrator';
 }
 return $errors;
}