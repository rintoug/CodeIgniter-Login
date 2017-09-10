# CodeIgniter-Login
Sample script demonstrating a CodeIgniter login
In application/config/autoload.php
Autoload helpers

<pre>$autoload['helper'] = array('url','common');</pre>

Autoload libraries

<pre>$autoload['libraries'] = array('database','session');</pre>

Database you want to add the your database details in applicationconfig/database.php
<pre>
$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'tbo',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);
</pre>
