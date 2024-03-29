<?php
//bootloaderis užkrauna klases(kad nerašytumėm daug require);
//griežtai reikalauja, kad metuoduose tokio  tipo variablai būtų paduoti
declare(strict_types = 1);

require 'config.php';

// Load Core Classes /requirina composerio autoload
require ROOT . '/vendor/autoload.php';

// Load Core Functions
require ROOT . '/core/functions/form/core.php';
require ROOT . '/core/functions/html/builder.php';

// Load App Functions
require ROOT . '/app/functions/validators.php';

// Create App
$app = new \App\App();