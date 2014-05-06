<?php
if(DEV){
    $db_params = array(
        "user"=>"root",
        "pass"=>"",
        "name"=>"instadata",
        "host"=>"localhost"
        );
}else{
    $db_params = array(
    "user"=>"statapar",
    "pass"=>"5qu4754nd0475",
    "name"=>"statapar_instadata",
    "host"=>"127.0.0.1"
    );
}

function createConnection(){
    // Connect to database
    global $db_params;
    try {
        /* 
         * Config:
         *  - persistent connection (e.g. no need to re-establish connection
         *  - use native PDO mysql prepared statements
         *  - show exception errors
         */
        $db = new PDO("mysql:host=".$db_params{"host"}.";dbname=".$db_params{"name"}.";charset=utf8", 
            $db_params{"user"}, $db_params{"pass"}, array(
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_EMULATE_PREPARES => false,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        return $db;
    } catch (PDOException $e) {
        echo "Error connecting to database " . $e->getMessage() . "<br />";
    }
}

$db = createConnection();
?>