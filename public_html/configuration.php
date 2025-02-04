<?php

// HTTP
define('HTTP_SERVER',"http://witcher.ow");

// HTTPS
define('HTTPS_SERVER',"http://witcher.ow");

// CDNS
define('MAIN_CDN',"http://witcher.ow");

// PHP VERSION
if (version_compare(PHP_VERSION, "5.4.7", "<")) {
    echo "<P style='text-align: center;margin-top: 100px;'><B>WITCHER FRAMEWORK</B> requires PHP version 5.4.7 or later.</P>";
    die("<P style='text-align: center;margin-top:30%;font-size: 9px;'>POWERED BY Witcher ".date("Y")." <B>WITCHER FRAMEWORK</B></P>");
}

// REQUIRED EXTENSIONS
$requiredExtensions = ['curl'];
foreach($requiredExtensions as $requiredExtension) {
    if (!extension_loaded($requiredExtension)) {
        echo "<P style='text-align: center;margin-top: 100px;'>You require PHP's \"" . $requiredExtension . "\" extension. Please install/enable it on your server and try again.</P>";
        die("<P style='text-align: center;margin-top:30%;font-size: 9px;'>POWERED BY Witcher ".date("Y")." <B>WITCHER FRAMEWORK</B></P>");
    }
}

define('PROJECT_CODE','witcher.ow');

define('WITCHER_VERSION','3.0');

// DIR
define('DIR_CORE',"C:/xampp/htdocs/LATEST/witcher/core/");
define('DIR_MODELS',"C:/xampp/htdocs/LATEST/witcher/app/model/");
define('DIR_APPLICATION',"C:/xampp/htdocs/LATEST/witcher/app/");
define('DIR_ROOT',"C:/xampp/htdocs/LATEST/");
define('DIR_PUBLIC',"C:/xampp/htdocs/LATEST/public_html/");
define('DIR_LOADER',"C:/xampp/htdocs/LATEST/witcher/app/autoloader.php");
if (file_exists(DIR_ROOT) and file_exists(DIR_LOADER) and file_exists(DIR_MODELS) and file_exists(DIR_APPLICATION) and file_exists(DIR_CORE)) {
    require_once(DIR_LOADER);
    $witcher = new witcher();
    $witcher->Run();
} else {
    echo "<P style='text-align: center;font-size: 26px;margin-top: 100px;'><B>Unknown directories in config file.</B> If you haven't already installed the application then go <A HREF='/install/index.php'>/install/index.php</A></P>";
    die("<P style='text-align: center;margin-top:30%;font-size: 9px;'>POWERED BY Witcher ".date("Y")." <B>WITCHER FRAMEWORK</B></P>");
}