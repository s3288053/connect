hmmm..
<?php

require_once('db.php');
if(!$dbconn = mysql_connect(DB_HOST, DB_USER, DB_PW)){
<<<<<<< HEAD
echo "could not connect to mysql on " . DB_HOST . "\n";
echo mysql_error() . "/n";
exit;
}
echo "<h1>Awesome!</h1> <h2>We have connected to mysql </h2> <h3>Massive happy face :)</h3><br/>";
if(!mysql_select_db(DB_NAME, $dbconn)){
echo "could not connect to user database" . DB_NAME. "\n";
echo mysql_error() . "/n";
exit;
}
echo "<h1>connected to database :) :) " . DB_NAME . "</h1>";
=======
echo “could not connect to mysql on ". DB_HOST . '\n';
exit;
}
echo 'connected to mysql :)<br/>';
if(!mysql_select_db(DB_NAME, $dbconn)){
echo "could not connect to user database " . DB_NAME. '\n';
echo mysql_error() . '\n';
exit;
}
echo "connected to database :) :)" . DB_NAME;
>>>>>>> 6167a797ccbcd3325f139daad4ea8156c8319b89

?>
