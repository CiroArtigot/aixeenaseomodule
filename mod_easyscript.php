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
	
	if($params->get( 'ip','') && ($_SERVER['REMOTE_ADDR'] != $params->get( 'ip',''))) return;
	
	require(JModuleHelper::getLayoutPath('mod_easyscript'));
	
	?>