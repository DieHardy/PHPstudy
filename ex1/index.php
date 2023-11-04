<?php // the form makes a request to itself
require 'functions.php';
if ('POST' == $_SERVER['REQUEST_METHOD']){
    // if an array of errors is empty then print username
    if($form_errors = validate_form()){
    print_form($form_errors);
    }  else{
        process_form();
    }
} else{
print_form();
}