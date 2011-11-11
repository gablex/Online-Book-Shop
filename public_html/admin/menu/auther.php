<?php
// +-----------------------------------------------------------------------+
// | Copyright (c) 2002-2005, Richard Heyes, Harald Radi                   |
// | All rights reserved.                                                  |
// |                                                                       |
// | Redistribution and use in source and binary forms, with or without    |
// | modification, are permitted provided that the following conditions    |
// | are met:                                                              |
// |                                                                       |
// | o Redistributions of source code must retain the above copyright      |
// |   notice, this list of conditions and the following disclaimer.       |
// | o Redistributions in binary form must reproduce the above copyright   |
// |   notice, this list of conditions and the following disclaimer in the |
// |   documentation and/or other materials provided with the distribution.| 
// | o The names of the authors may not be used to endorse or promote      |
// |   products derived from this software without specific prior written  |
// |   permission.                                                         |
// |                                                                       |
// | THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS   |
// | "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT     |
// | LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR |
// | A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT  |
// | OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, |
// | SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT      |
// | LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, |
// | DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY |
// | THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT   |
// | (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE |
// | OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.  |
// |                                                                       |
// +-----------------------------------------------------------------------+
// | Author: Richard Heyes <http://www.phpguru.org/>                       |
// |         Harald Radi <harald.radi@nme.at>                              |
// +-----------------------------------------------------------------------+
//
// $Id: example.php,v 1.14 2005/03/02 02:16:51 richard Exp $
//error_reporting(E_ALL | E_STRICT);
    //require_once('HTML/TreeMenu.php');
    require_once('menu/TreeMenu.php');

    $icon         = 'folder1.gif';
    $expandedIcon = 'folder-expanded1.gif';

    $menu  = new HTML_TreeMenu();

    $node1   = new HTML_TreeNode(array('text' => "Authers", 'link' => "controlsystem.php?sec_id=1", 'icon' => $icon, 'expandedIcon' => $expandedIcon, 'expanded' => true), array('onclick' => ""));
	$node1_1 = &$node1->addItem(new HTML_TreeNode(array('text' => "New Auther", 'link' => "controlsystem.php?sec_id=5&cat=1", 'icon' => $icon, 'expandedIcon' => $expandedIcon)));
    $node1_1 = &$node1->addItem(new HTML_TreeNode(array('text' => "Edit Authers", 'link' => "controlsystem.php?sec_id=5&cat=2", 'icon' => $icon, 'expandedIcon' => $expandedIcon)));

    $menu->addItem($node1);

    // Create the presentation class
    $treeMenu = &new HTML_TreeMenu_DHTML($menu, array('images' => 'images', 'defaultClass' => 'treeMenuDefault'));
    $listBox  = &new HTML_TreeMenu_Listbox($menu, array('linkTarget' => '_self'));
?>
<html>
<head>
    <style type="text/css">
        body {
            font-family: Georgia;
            font-size: 11pt;
			font-weight: bold;
			text-decoration: none;
			 
        }
        
        .treeMenuDefault {
          font-family: Georgia;
            font-size: 11pt;
			font-weight: bold;
			text-decoration: none;
        }
        
        .treeMenuBold {
            font-family: Georgia;
            font-size: 11pt;
			font-weight: bold;
			text-decoration: none;
        }
		
		.menu {
     border-right: 1px solid white;
     text-decoration: none;
     
     padding: 5px;
     color: #313031;
     font-family: Tahoma;
     font-size: 8pt;
     font-weight: 600;
}

.menu:hover {
     color: #5A8EC6;
}.onmouse-over {
	background-image: url(../images/attendence1.gif);
}
    </style>
    <script src="menu/TreeMenu.js" language="JavaScript" type="text/javascript"></script>
</head>
<body>

<script language="JavaScript" type="text/javascript">
<!--
    a = new Date();
    a = a.getTime();
//-->
</script>

<?PHP $treeMenu->printMenu()?>
