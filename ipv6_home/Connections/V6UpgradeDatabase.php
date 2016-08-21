<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_V6UpgradeDatabase = "localhost";
$database_V6UpgradeDatabase = "V6_HOME";
$username_V6UpgradeDatabase = "root";
$password_V6UpgradeDatabase = "v6project1216";
$V6UpgradeDatabase = mysql_pconnect($hostname_V6UpgradeDatabase, $username_V6UpgradeDatabase, $password_V6UpgradeDatabase) or trigger_error(mysql_error(),E_USER_ERROR);
mysql_query("SET NAMES 'utf8'",$V6UpgradeDatabase);
?>