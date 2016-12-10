<?php
	$con = mysql_connect("localhost","root");
	if(!$con)
	{
		die("<b>Došlo je do pogreške i nije se moguće spojiti na MySQL server</b>");
	}
	mysql_query("CREATE DATABASE ProjektniZadatak");	
	mysql_select_db("ProjektniZadatak");
	$tblname="Recenzije";
	$sql="SELECT * FROM $tblname";
	$result=@mysql_query($sql);
	if (!$result)
{
	mysql_close($con);
	$con = mysql_connect("localhost","root");
	mysql_select_db("ProjektniZadatak");
	mysql_query("CREATE TABLE Recenzije(
		fname varchar(30),
		address varchar(40),
		email varchar(30),
		usrtel bigint(15),
		message varchar(1000)
		)");
}
?>