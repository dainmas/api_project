<?php

namespace App\Views;

use App\App;

class Navigation extends \Core\View {

    public function __construct($data = []) {
        parent::__construct($data);
        
//        $this->addLink('left', '/', ['icon'=>'media/img/logoDainora.png', 'alt'=>'company logo']);

        $this->addLink('left', '/', 'Home');
        $this->addLink('right', '/vegetablesabout.php', 'About');

        if (App::$session->userLoggedIn()) {
            $user = App::$session->getUser();
            $label = $user->getName();

//            $this->addLink('right', '/index.php#footer', 'About');
            $this->addLink('right', '/logout.php', "Logout($label)");
        } else {
//            $this->addLink('right', 'https://www.google.lt', 'Win 100$');
            $this->addLink('right', '/login.php', 'Prisijungti');
            $this->addLink('right', '/register.php', 'Registruotis');
        }
    }

    public function addLink($section, $url, $title) {
        $link = ['url' => $url, 'title' => $title];

        if ($_SERVER['REQUEST_URI'] == $link['url']) {
            $link['active'] = true;
        }

        $this->data[$section][] = $link;
    }

    public function render($template_path = ROOT . '/app/templates/navigation.tpl.php') {
        return parent::render($template_path);
    }

}
