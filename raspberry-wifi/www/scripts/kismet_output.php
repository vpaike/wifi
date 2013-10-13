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
<?
include "../login_check.php";
include "../config/config.php";
include "../functions.php";

// Checking POST & GET variables...
if ($regex == 1) {
    regex_standard($_GET["file"], "../msg.php", $regex_extra);
    regex_standard($_GET["action"], "../msg.php", $regex_extra);
}

$file = $_GET["file"];
$action = $_GET["action"];

if ($file == "all") {
    $exec = "/usr/bin/giskismet --database ../logs/kismet/wireless.dbl -x ../logs/kismet/*.netxml";
    exec("../bin/danger \"" . $exec . "\"" );
    $exec = "/usr/bin/giskismet --database ../logs/kismet/wireless.dbl -q 'select * from wireless' -o ../logs/kismet/output_all.kml";
    exec("../bin/danger \"" . $exec . "\"" );
} else {
    if ($action == "delete") {
        $exec = "rm ../logs/kismet/$file.netxml";
        exec("../bin/danger \"" . $exec . "\"" );
        $exec = "rm ../logs/kismet/$file.pcapdump";
        exec("../bin/danger \"" . $exec . "\"" );        
        $exec = "rm ../logs/kismet/$file.alert";
        exec("../bin/danger \"" . $exec . "\"" );        
        $exec = "rm ../logs/kismet/$file.gpsxml";
        exec("../bin/danger \"" . $exec . "\"" );
        $exec = "rm ../logs/kismet/$file.nettxt";
        exec("../bin/danger \"" . $exec . "\"" );
    } else {
        $exec = "/bin/rm ../kismet/wireless.dbl";
        exec("../bin/danger \"" . $exec . "\"" );
        $exec = "/usr/bin/giskismet --database ../logs/kismet/wireless.dbl -x ../logs/kismet/$file.netxml";
        exec("../bin/danger \"" . $exec . "\"" );
        $exec = "/usr/bin/giskismet --database ../logs/kismet/wireless.dbl -q 'select * from wireless' -o ../logs/kismet/output_$file.kml";
        exec("../bin/danger \"" . $exec . "\"" );
    }
}

header('Location: ../page_kismet.php');

?>