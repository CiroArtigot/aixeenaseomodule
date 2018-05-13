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

	$document = JFactory::getDocument();

	if($params->get( 'Code','')) echo($params->get( 'Code',''));
	
	if($params->get( 'php','')) eval($params->get( 'php','')); 
	
	if($params->get( 'css','')) $document->addStyleDeclaration($params->get( 'css',''));
	
	if($params->get( 'script','')) $document->addScriptDeclaration($params->get( 'script',''));
	
	if($params->get( 'include','')) include('includes/'.$params->get( 'include','')); 
	
	
?>