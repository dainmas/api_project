<?php

function validate_max_40($field_input, &$field) {
    if( mb_strlen($field_input > 40)) {
        $field['error'] = 'Per ilgas žodis!';
		return false;
    }
	
	return true;
}

function validate_max_500($field_input, &$field) {
    if( mb_strlen($field_input > 500)) {
        $field['error'] = 'Komentaras per ilgas, jis negali viršyti 500 simbolių!';
		return false;
    }
	
	return true;
}


function validate_login($filtered_input, &$form) {
    $login_success = \App\App::$session->login(
            $filtered_input['email'],
            $filtered_input['password']
    );

    if (!$login_success) {
        $form['fields']['password']['error'] = 'Prisijungimo duomenys neteisingi!';
        $form['fields']['password']['value'] = '';
        return false;
    }

    return true;
}

function validate_mail($field_value, &$field) {
    $modelUser = new \App\Users\Model();
    $users = $modelUser->get(['email' => $field_value]);
    if ($users) {
        $field['error'] = 'Vartotojas tokiu el.paštu jau registruotas!';
        return false;
    }

    return true;
}

function validate_min_18_max_100($field_input, &$field) {
    if ($field_input < 18) {
        $field['error'] = 'Tu per jaunas!';
        return false;
    } elseif ($field_input > 100) {
        $field['error'] = 'Ar nepasendinai savęs?';
        return false;
    }
    
    return true;
}