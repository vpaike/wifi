<? 
/*
	Copyright (C) 2013  xtr4nge [_AT_] gmail.com

	This program is free software: you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation, either version 3 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/ 
?>
<? include "menu.php" ?>

<br>
<div class="rounded-top" align="center"> Modules </div>
<div class="rounded-bottom">

<?
$isurlsnarfup = exec("ps auxww | grep urlsnarf | grep -v -e grep");
if ($isurlsnarfup != "") {
    #echo "URL Snarf  <font color=\"lime\"><b>enabled</b></font>.&nbsp; | <a href=\"page_status.php?service=urlsnarf&action=stop\"><b>stop</b></a><br />";
    echo "&nbsp;URL Snarf  <font color=\"lime\"><b>enabled</b></font>.&nbsp; | <a href=\"scripts/status_urlsnarf.php?service=urlsnarf&action=stop&page=module\"><b>stop</b></a><br />";
} else { 
    #echo "URL Snarf  <font color=\"red\"><b>disabled</b></font>. | <a href=\"page_status.php?service=urlsnarf&action=start\"><b>start</b></a><br />"; 
    echo "&nbsp;URL Snarf  <font color=\"red\"><b>disabled</b></font>. | <a href=\"scripts/status_urlsnarf.php?service=urlsnarf&action=start&page=module\"><b>start</b></a><br />"; 
}
?>

<?
$isdnsspoofup = exec("ps auxww | grep dnsspoof | grep -v -e grep");
if ($isdnsspoofup != "") {
    #echo "DNS Spoof  <font color=\"lime\"><b>enabled</b></font>.&nbsp; | <a href=\"page_status.php?service=dnsspoof&action=stop\"><b>stop</b></a><br />";
    echo "&nbsp;DNS Spoof  <font color=\"lime\"><b>enabled</b></font>.&nbsp; | <a href=\"scripts/status_dnsspoof.php?service=dnsspoof&action=stop&page=module\"><b>stop</b></a><br />";
} else { 
    #echo "DNS Spoof  <font color=\"red\"><b>disabled</b></font>. | <a href=\"page_status.php?service=dnsspoof&action=start\"><b>start</b></a> | <a href=\"page_config.php?config#dnsspoof\"><b>edit</b></a><br/>"; 
    echo "&nbsp;DNS Spoof  <font color=\"red\"><b>disabled</b></font>. | <a href=\"scripts/status_dnsspoof.php?service=dnsspoof&action=start&page=module\"><b>start</b></a>";
    echo " | <a href=\"page_config.php?config#dnsspoof\"><b>edit</b></a><br/>"; 
}

?>

<?
$iskismetup = exec("ps auxww | grep kismet_server | grep -v -e grep");
if ($iskismetup != "") {
    //echo "&nbsp;&nbsp;&nbsp;Kismet  <font color=\"lime\"><b>enabled</b></font>.&nbsp; | <a href=\"page_status.php?service=kismet&action=stop\"><b>stop</b></a><br />";
    //echo "&nbsp;&nbsp;&nbsp;Kismet  <font color=\"lime\"><b>enabled</b></font>.&nbsp; | <a href=\"action.php?service=kismet&action=stop\"><b>stop</b></a><br />";
    echo "&nbsp;&nbsp;&nbsp;&nbsp;Kismet  <font color=\"lime\"><b>enabled</b></font>.&nbsp; | <a href=\"scripts/status_kismet.php?service=kismet&action=stop&page=module\"><b>stop</b></a><br />";
} else { 
    //echo "&nbsp;&nbsp;&nbsp;Kismet  <font color=\"red\"><b>disabled</b></font>. | <a href=\"page_status.php?service=kismet&action=start\"><b>start</b></a><br/>"; 
    //echo "&nbsp;&nbsp;&nbsp;Kismet  <font color=\"red\"><b>disabled</b></font>. | <a href=\"action.php?service=kismet&action=start\"><b>start</b></a><br/>";
    echo "&nbsp;&nbsp;&nbsp;&nbsp;Kismet  <font color=\"red\"><b>disabled</b></font>. | <a href=\"scripts/status_kismet.php?service=kismet&action=start&page=module\"><b>start</b></a>";
    echo " | <a href=\"page_kismet.php\"><b>edit</b></a><br/>"; 
}

?>

<?
$issquidup = exec("ps auxww | grep squid3 | grep -v -e grep");
if ($issquidup != "") {
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Squid  <font color=\"lime\"><b>enabled</b></font>.&nbsp; | <a href=\"scripts/status_squid.php?service=squid&action=stop&page=module\"><b>stop</b></a><br />";
} else { 
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Squid  <font color=\"red\"><b>disabled</b></font>. | <a href=\"scripts/status_squid.php?service=squid&action=start&page=module\"><b>start</b></a>";
    echo " | <a href=\"page_squid.php\"><b>edit</b></a><br/>"; 
}

?>

<?
$issslstripup = exec("ps auxww | grep sslstrip | grep -v -e grep");
if ($issslstripup != "") {
    #echo "&nbsp;Wireless  <font color=\"lime\"><b>enabled</b></font>.&nbsp; | <a href=\"page_status.php?service=wireless&action=stop\"><b>stop</b></a><br />";
    echo "&nbsp;&nbsp;sslstrip  <font color=\"lime\"><b>enabled</b></font>.&nbsp; | <a href=\"scripts/status_sslstrip.php?service=sslstrip&action=stop&page=module\"><b>stop</b></a><br />";
} else { 
    #echo "&nbsp;Wireless  <font color=\"red\"><b>disabled</b></font>. | <a href=\"page_status.php?service=wireless&action=start\"><b>start</b></a><br />"; 
    echo "&nbsp;&nbsp;sslstrip  <font color=\"red\"><b>disabled</b></font>. | <a href=\"scripts/status_sslstrip.php?service=sslstrip&action=start&page=module\"><b>start</b></a>"; 
    echo " | <a href=\"page_sslstrip.php\"><b>edit</b></a><br/>"; 
}
?>
</div>

