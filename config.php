<?php

//SITE_ROOT contain the full path
define('SITE_ROOT', dirname(__FILE__));
// site url
//you can chenge this line according to your directory file
define('SITE_URL', 'http://'.$_SERVER['HTTP_HOST'].'/newlanguage/');

//ADMIN_URL contains the url of the a folder
define('ADMIN_URL', SITE_URL . 'u/');

//STYLE_URL contains the url to the css folder
define('STYLE_URL', SITE_URL . 'u/css/');

//SCRIPT_URL contains the url to the js folder
define('SCRIPT_URL', SITE_URL . 'u/js/');

//IMAGE_URL contains the url to the img folder
define('IMAGE_URL', SITE_URL . 'u/img/');

//GAME_URL contains the url of the a/game folder
define('GAME_URL', SITE_URL . 'u/game/');

//STORY_URL contains the url of the a/story folder
define('STORY_URL', SITE_URL . 'u/story/');

//VOCABULARY_URL contains the url of the a/vocabulary folder
define('VOCABULARY_URL', SITE_URL . 'u/vocabulary/');

//ADMIN_DIR contains the full path to the a folder
define('ADMIN_DIR', SITE_ROOT . '/u/');

//INCLUDE_DIR contains the full path to the include folder
define('INCLUDE_DIR', SITE_ROOT . '/include/');



//*****************MySql DataBase Information*******************//

///** MySQL hostname */
define('SERVERNAME', 'localhost');

///** MySQL database port */
define('PORT', '3306');

///** The name of the database */
define('DBNAME', 'registration');

///** MySQL database username */
define('DBUSER', 'root');

///** MySQL database password */
define('DBPASS', '');

///** MySQL database password */
define('DSN', 'mysql:host='.SERVERNAME.';dbname='.DBNAME.';');


//***************************//

//your email address
define('EMAIL', '');

?>

