<?php
/*
             _____           ____
            |   __|_____ _ _|    \ ___ _ _ ___
            |   __|     | | |  |  | -_| | |_ -|
            |_____|_|_|_|___|____/|___|\_/|___|
     Copyright (C) 2013 EmuDevs <http://www.emudevs.com/>

  This program is free software; you can redistribute it and/or modify it
  under the terms of the GNU General Public License as published by the
  Free Software Foundation; either version 2 of the License, or (at your
  option) any later version.

  This program is distributed in the hope that it will be useful, but WITHOUT
  ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or
  FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for
  more details.

  You should have received a copy of the GNU General Public License along
  with this program. If not, see <http://www.gnu.org/licenses/>.
*/
    if(!isset($_SESSION['loggedin']))
    {
        //Do Nothing
    }
    else
    {
        echo "<div id='nav'>";
        echo "<a href='?p=acp'>ACP Home</a>";
        echo "<a href='?p=acp_search'>User Search</a>";
        echo "<a href='?p=acp_control'>User Control</a>";
        echo "<a href='?p=log'>Access Log</a>";
        echo "</div>";
    }