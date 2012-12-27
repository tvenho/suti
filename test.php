<?php

$newsml = simplexml_load_file('c:\play\hotfolder\96033909.xml');
$guid = $newsml['guid'];
echo $guid;
$qcode =  $newsml->itemMeta[0]->itemClass[0]['qcode'];
echo $qcode;
$versioncreated = $newsml->itemMeta[0]->versionCreated;
echo $versioncreated;
$firstcreated = $newsml->itemMeta[0]->firstCreated;
echo $firstcreated;


mysql_connect("localhost", "tuomas", "tuomas") or die(mysql_error());
echo "Connected to MySQL<br />";

mysql_select_db("test") or die(mysql_error());
echo "Connected to Database";

?>