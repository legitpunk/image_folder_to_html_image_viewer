<?php

//get the new "domain_name" which would be assigned to the $_POST['value'] variable, and write to "config.cfg" file
$filename = $_SESSION['drive_site_dir'] . 'config.cfg';
$line_i_am_looking_for = 2;
$lines = file( $filename , FILE_IGNORE_NEW_LINES );
$lines[$line_i_am_looking_for] = $_POST['value'].';';
file_put_contents( $filename , implode( "\n", $lines ) );






?>