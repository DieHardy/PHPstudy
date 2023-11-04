<?php
require 'functions.php';
// the form makes a request to itself
if ('POST' == $_SERVER['REQUEST_METHOD']){
    if(validate_form()){
    process_form();
    }
    else{
        print_form();
    }
} else{
print_form();
}