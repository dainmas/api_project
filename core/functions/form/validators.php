<?php

//tikrina ar jaunesnis ir ar ne per senas
function validate_number_range($field_input, &$field, $params) {
    if($field_input < $params['min'] || $field_input < $params['max']){
        $field['error'] = 'Blogai nurodytas amžius';
        return false;
    }
     return true;
}

//if ($field_input < 18) {
//    $field['error'] = 'Tu per jaunas!';
//    return false;
//} elseif ($field_input > 100) {
//    $field['error'] = 'Ar nepasendinai savęs?';
//    return false;
//}
//
//return true;

//tikrina ar sutampa password su password repeat
function validate_fields_match($filtered_input, &$form, $params) {
    //sutapti
    $match = true;

    foreach ($params as $field_id) {
        //ref_value palyginamoji verte
        $ref_value = $ref_value ?? $filtered_input[$field_id];
        if ($ref_value != $filtered_input[$field_id]) {
            $match = false;
            break;
        }
    }

    if (!$match) {
        $form['fields'][$field_id]['error'] = 'Laukai nesutampa!';
        return false;
    }

    return true;
}

function validate_not_empty($field_value, &$field) {
    if (strlen($field_value) == 0) {
        $field['error'] = 'Laukas negali būti tuščias';
    } else {
        return true;
    }
}

function validate_is_number($field_value, &$field) {
    if (!is_numeric($field_value)) {
        $field['error'] = 'Įveskite skaičių!';
    } else {
        return true;
    }
}

function validate_is_positive($field_value, &$field) {
    if ($field_value < 0) {
        $field['error'] = 'Įveskite teigiamą skaičių.';
    } else {
        return true;
    }
}
