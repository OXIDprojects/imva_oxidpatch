<?php

/**
 * imva.biz OXID eShop Patches
 *
 *
 * For redistribution in the provider's network only.
 *
 * Weitergabe außerhalb des Anbieternetzwerkes verboten.
 *
 * This software is intellectual property of imva.biz respectively of its author and is protected
 * by copyright law. This software product is provided "as it is" with no guarantee.
 * You are free to use this software and to modify it in order to fit your requirements.
 * Any modification, copying, redistribution, transmission outsitde of the provider's platforms
 * is a violation of the license agreement and will be prosecuted by civil and criminal law.
 * By applying and using this software product, you agree to the terms and conditions of use.
 *
 * Diese Software ist geistiges Eigentum von imva.biz respektive ihres Autors und ist durch das
 * Urheberrecht geschützt. Diese Software wird ohne irgendwelche Garantien und "wie sie ist"
 * angeboten.
 * Sie sind berechtigt, diese Software frei zu nutzen und auf Ihre Bedürfnisse anzupassen.
 * Jegliche Modifikation, Vervielfältigung, Redistribution, Übertragung zum Zwecke der
 * Weiterentwicklung außerhalb der Netzwerke des Anbieters ist untersagt und stellt einen Verstoß
 * gegen die Lizenzvereinbarung dar.
 * Mit der Übernahme dieser Software akzeptieren Sie die zwischen Ihnen und dem Herausgeber
 * festgehaltenen Bedingungen. Der Bruch dieser Bedingungen kann Schadensersatzforderungen nach
 * sich ziehen.
 *
 * (EULA-13/7-OS)
 *
 *
 * (c) 2014-2016 imva.biz, Johannes Ackermann, ja@imva.biz
 * @author Johannes Ackermann
 *
 * 15/11/17-16/9/27
 * v 0.2.1
 *
 */

$sLangName  = "English";
$aLang = array(
		'charset'										=>	'UTF-8',
		
		// Group
		'imva_modules_group'							=>	'imva.biz modules',
		'imva_oxidpatch_information'					=>	'Information',
	
		// Titles
		'imva_oxidpatch'								=>	'Patches',
		'IMVA_OXIDPATCH_ADMINUPDATE'					=>	'Admin user upd.',
		
		// Text
		'IMVA_OXIDPATCH_FEATUREOFF'						=>	'This feature is currently not enabled.',
		'IMVA_OXIDPATCH_MAIN_SETTINGSHINT'				=>	'Open the &quot;settings&quot; section in the module administration
															and enable the desired patches right there.',
		'IMVA_OXIDPATCH_MAIN_INTRO'						=>	'<ol>
																<li>Patch for ressource path treatment while calling module
																controllers via HTTPS.
																<a href="https://github.com/OXID-eSales/oxideshop_ce/pull/208">Details</a></li>
																<li>Security patch that modifies the internal user identifiers in order to reduce the risk of unwanted data manipulation.</li>
															</ol>',
		'IMVA_OXIDPATCH_ADMINUPDATE_LAUNCH_HLP'			=>	'Click the following button to launch the update.
															Please create a fresh database backup and dig into the functionality
															of this module if your shop has been extended with 3rd party modules.
															',
		'IMVA_OXIDPATCH_ADMINUPDATE_LAUNCH'				=>	'Run patch now!',
		'IMVA_OXIDPATCH_ADMINUPDATE_SUCCESS'			=>	'Great! The patch was successfully applied! You can repeat this procedure if
															you like (and generate new idents again and again).',
		
		// Settings
		'SHOP_MODULE_GROUP_imva_oxidpatch_features'		=>	'Enable/disable features',
		'SHOP_MODULE_imva_oxidpatch_sslAdminModule'		=>	'Apply TLS patch for resources of 3rd party admin extensions',
		'SHOP_MODULE_imva_oxidpatch_adminIdModifier'	=>	'Allow the module to modify user IDs (Database backup recommended)',		
);
