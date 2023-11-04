<?php
function process_form(){
    print "Hello, " . $_POST['my_name'] . "<br>";
    print "Your email: " . $_POST['email'] . "<br>";
    print "Your age: " . $_POST['age'];
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
        <br>
    Your age: <input type="text" name="age">
    <input type="submit" value="Send">
</form>
_HTML_;
}
function validate_form(){
    $errors = array();
 if(3 > strlen(trim($_POST['my_name'])) ){
     $errors[] = 'Your name must be at least 3 letters long.';
 }
 if('administrator' == $_POST['my_name'] ){
     $errors[] = 'You can`t be an administrator.';
 }
 if(0 == strlen($_POST['email']) ){
     $errors[] = "You have to enter an email.";
 }
 if(!is_null($_POST['age']) || filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT)){
     if(18 > $_POST['age']){
         $errors[] = "You can`t be less than 18.";
     }
 } else{
     $errors[] = "Please enter a valid age.";
 }
 return $errors;
}