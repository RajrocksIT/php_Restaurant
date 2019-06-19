<?php

require_once("config.php");
require_once("header.php");



 global $username;

echo "
    <body>
        <div id='wrapper'>
            <div id='top'>
                <div id='logo'></div>
            </div>
                <div id='content'>
           
	<ul>
	<a href='index.php'>Home</a>
	<a href='register.php'>Register New Account</a>
	</ul>";

                        include ("login.php");
