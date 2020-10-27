<?php

/*
**  ERRORS_DISPLAY
*/
//A ENLEVER EN PROD
error_reporting(E_ALL);
ini_set('display_errors', true);
/*
**  SESSIONS
*/
ini_set('session.cookie_lifetime', false);
session_start();


/*
**  CONSTANTS
*/

define("PATH_REQUIRE", substr($_SERVER['SCRIPT_FILENAME'], 0, -9));
define("PATH", substr($_SERVER['PHP_SELF'], 0, -9));

//  Website Informations
define("WEBSITE_TITLE", "Mon site");
define("WEBSITE_NAME", "Mon site");
define("WEBSITE_URL", "https://monsite.com");
define("WEBSITE_DESCRIPTION", "T");
define("WEBSITE_KEYWORDS", "");
define("WEBSITE_LANGUAGE", "");
define("WEBSITE_AUTHOR", "");
define("WEBSITE_AUTHOR_MAIL", "");

// FACEBOOK OPEN GRAPH tags
define("WEBSITE_FACEBOOK_NAME", "");
define("WEBSITE_FACEBOOK_DESCRIPTION", "");
define("WEBSITE_FACEBOOK_URL", "");
define("WEBSITE_FACEBOOK_IMAGE", "");

//  DATABASE
define("DATABASE_HOST", "localhost");
define("DATABASE_NAME", "blogmvc");
define("DATABASE_USER", "root");
define("DATABASE_PASSWORD", "");
?>