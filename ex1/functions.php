<?php
function process_form(){
    print "Hello, " . $_POST['my_name'] . "<br>";
    print "Your email: " . $_POST['email'];
}
function print_form($errors =''){
    if($errors){
        print 'Please correct these errors: <ul><li>';
            print implode('</li><li>', $errors);
        print '</li></ul>';
    }
    print<<<_HTML_
<form method="post" action="$_SERVER[PHP_SELF]">
    Your name: <input type="text" name="my_name">
    <br>
    Your email: <input type="email" name="email">
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
 if(strlen($_POST['email']) == 0){
     $errors[] = "You have to enter an email!";
 }
 return $errors;
}