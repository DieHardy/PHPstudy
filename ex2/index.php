<?php //color picker
require 'functions.php';
if("POST" == $_SERVER["REQUEST_METHOD"]){
    if($form_errors= validation_object()){
        print_form($form_errors);
    } else{
      process_color();
    }
} else{
    print_form();
}
