<?php
function process_form(){
    print "Hello, " . $_POST['my_name'];
}
function print_form(){
    print<<<_HTML_
<form method="post" action="$_SERVER[PHP_SELF]">
    Your name: <input type="text" name="my_name">
    <br>
    <input type="submit" value="Send">
</form>
_HTML_;
}
function validate_form(){
 if(strlen($_POST['my_name']) < 3){
     return false;
 }   else{
     return true;
 }
}