<?php 

	/**
	 * Easy Script module
	 * Module Version 4.0.0 - Joomla! Version 3.x
	 * Author: Ciro Artigot
	 * info@aixeena.org
	 * http://aixeena.org
	 * Copyright (c) 2018 Ciro Artigot. All Rights Reserved. 
	 * License: GNU/GPL 2, http://www.gnu.org/licenses/gpl-2.0.html
	 */
	
	// no direct access
	
	defined('_JEXEC') or die('Restricted access'); 
	
	$app = JFactory::getApplication();
	$itemid   = (int) $app->input->getCmd('Itemid', '');
	
	echo 'itemid: '.$itemid;

?>

