<?php

$loader = require __DIR__.'/vendor/autoload.php';

$API_KEY = 'AAFCDDv9GbzWJx1DwR6ghFwoenx-Tw9fj7c';

// create Telegram API object
$telegram = new Longman\TelegramBot\Telegram($API_KEY);

// set webhook
$telegram->setWebHook('https://github.com/botkuiz/kuiz.git');
After c reate hook.php and put:

<?php

$loader = require __DIR__.'/vendor/autoload.php';

$API_KEY = 'AAFCDDv9GbzWJx1DwR6ghFwoenx-Tw9fj7c';

// create Telegram API object
$telegram = new Longman\TelegramBot\Telegram($API_KEY);

// handle telegram webhook request
$telegram->handle();
