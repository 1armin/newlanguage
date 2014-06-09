<?php

class connect
{

// ** MySQL function ** //


/** MySQL hostname */
var $servername = SERVERNAME;

/** MySQL database port */
var $port = PORT;

/** The name of the database */
var $dbname = DBNAME;

/** MySQL database username */
var $dbuser = DBUSER;

/** MySQL database password */
var $dbpass = DBPASS;


//connect
function connect()
{
  $GLOBALS['dblink'] = mysql_connect($this->servername .":". $this->port,$this->dbuser,$this->dbpass);
  mysql_select_db($this->dbname,$GLOBALS['dblink']);	
}

//select
function select($selectsql)
{
$result = mysql_query($selectsql,$GLOBALS['dblink']);
return $result;
}

//docommand
function docommand($sql)
{
mysql_query($sql,$GLOBALS['dblink']);
}

//disconnect
function disconnect()
{
mysql_close($GLOBALS['dblink']);
}

}
?>