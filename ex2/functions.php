<?php
function print_form($errors = ''){
    if($errors){
        print 'Please correct these errors: <ul><li>';
        print implode('</li><li>', $errors);
        print '</li></ul>';
    }
print <<<_HTML_
<form method="post" action="$_SERVER[PHP_SELF]">
<label for="colors">Choose a color:</label> <br>
<select name="colors" id="colors">
<option value="red">Red</option>
<option value="Yellow">Yellow</option>
<option value="Green">Green</option>
<option value="Magenta">Magenta</option>
<option value="Purple">Purple</option>
</select><br>
Width: <input type="text" name="width"><br>
Height: <input type="text" name="height"><br>
<input type="submit" value="Choose">
</form>
_HTML_;
}
function validation_object(){
    $errors = array();
    if (!filter_input(INPUT_POST, 'width', FILTER_VALIDATE_INT)
    || !filter_input(INPUT_POST, 'height', FILTER_VALIDATE_INT)){
        $errors[] = "Type a number for width and height.";
    }
    return $errors;
}
function process_color(){
    print <<< _HTML_
<div style="background-color: {$_POST['colors']}; 
width: {$_POST['width']}px; height: {$_POST['height']}px; "></div>
_HTML_;
}