<?php

/**
 * imva.biz OXID eShop Patches
 *
 *
 *
 * For redistribution in the provider's network only.
 *
 * Weitergabe außerhalb des Anbieternetzwerkes verboten.
 *
 *
 *
 * This software is intellectual property of imva.biz respectively of its author and is protected
 * by copyright law. This software product is provided "as it is" with no guarantee.
 *
 * You are free to use this software and to modify it in order to fit your requirements.
 *
 * Any modification, copying, redistribution, transmission outsitde of the provider's platforms
 * is a violation of the license agreement and will be prosecuted by civil and criminal law.
 *
 * By applying and using this software product, you agree to the terms and conditions of use.
 *
 *
 *
 * Diese Software ist geistiges Eigentum von imva.biz respektive ihres Autors und ist durch das
 * Urheberrecht geschützt. Diese Software wird ohne irgendwelche Garantien und "wie sie ist"
 * angeboten.
 *
 * Sie sind berechtigt, diese Software frei zu nutzen und auf Ihre Bedürfnisse anzupassen.
 *
 * Jegliche Modifikation, Vervielfältigung, Redistribution, Übertragung zum Zwecke der
 * Weiterentwicklung außerhalb der Netzwerke des Anbieters ist untersagt und stellt einen Verstoß
 * gegen die Lizenzvereinbarung dar.
 *
 * Mit der Übernahme dieser Software akzeptieren Sie die zwischen Ihnen und dem Herausgeber
 * festgehaltenen Bedingungen. Der Bruch dieser Bedingungen kann Schadensersatzforderungen nach
 * sich ziehen.
 *
 *
 *
 * (EULA-13/7-OS)
 *
 *
 *
 * (c) 2015 imva.biz, Johannes Ackermann, ja@imva.biz
 * @author Johannes Ackermann
 *
 * 15/11/17-16/6/1
 * v 0.2
 *
 */

$sMetadataVersion = '1.1';

/**
 * Module information
 */
$aModule = array(
		'id'			=> 'imva_oxidpatch',
		'title'			=> array(
				'de'	=>	'<img src="../modules/imva.biz/imva_oxidpatch/out/img/imva-Logo-12.png" alt=".iI" title="imva.biz" /> Patchmodul für OXID eShop',
				'en'	=>	'<img src="../modules/imva.biz/imva_oxidpatch/out/img/imva-Logo-12.png" alt=".iI" title="imva.biz" /> Patch module for OXID eShop',
		),
		'description'	=> array(
				'en'	=>	'<p>This module patches the shop system with some fixes that are not provided through OXID.</p>',
				'de'	=>	'<p>Dieses Modul stellt kleinere Korrekturen für das Shopsystem bereit</p>',
		),
		'thumbnail'		=> 'out/img/imva-Logo-90.png',
		'version'		=> '0.2',
		'author'		=> 'Johannes Ackermann',
		'url'			=> 'http://imva.biz',
		'email' 		=> 'imva@imva.biz',
		'files'			=>	array(
				'imva_oxidpatch_viewbase'			=>	'imva.biz/imva_oxidpatch/Controller/admin/imva_oxidpatch_viewbase.php',
				'imva_oxidpatch_main'				=>	'imva.biz/imva_oxidpatch/Controller/admin/imva_oxidpatch_main.php',
				'imva_oxidpatch_adminuserupdate'	=>	'imva.biz/imva_oxidpatch/Controller/admin/imva_oxidpatch_adminuserupdate.php',
		),
		'extend'		=> array(
				// patch
				'oxviewconfig'						=>	'imva.biz/imva_oxidpatch/Core/imva_oxidpatch_oxviewconfig',
		),
	    'events'       => array(
	    ),
		'templates'	=>	array(
				'imva_oxidpatch_main.tpl'			=>	'imva.biz/imva_oxidpatch/views/admin/tpl/imva_oxidpatch_main.tpl',
				'imva_oxidpatch_adminuserupdate.tpl'=>'imva.biz/imva_oxidpatch/views/admin/tpl/imva_oxidpatch_adminuserupdate.tpl',
		),
		'blocks'	=>	array(
				array(
			    		'template' => 'imva_oxidpatch_main.tpl',
			    		'block'    => 'imva_oxidpatch_header',
			    		'file'     => 'views/blocks/imva_oxidpatch_header.tpl'
		    	),
				array(
			    		'template' => 'imva_oxidpatch_main.tpl',
			    		'block'    => 'imva_oxidpatch_footer',
			    		'file'     => 'views/blocks/imva_oxidpatch_footer.tpl'
		    	),
				array(
			    		'template' => 'imva_oxidpatch_adminuserupdate.tpl',
			    		'block'    => 'imva_oxidpatch_header',
			    		'file'     => 'views/blocks/imva_oxidpatch_header.tpl'
		    	),
				array(
			    		'template' => 'imva_oxidpatch_adminuserupdate.tpl',
			    		'block'    => 'imva_oxidpatch_footer',
			    		'file'     => 'views/blocks/imva_oxidpatch_footer.tpl'
		    	),
	    ),
		'settings'	=>	array(
		    	array(
			    		'group'			=>	'imva_oxidpatch_features',
			    		'name'			=>	'imva_oxidpatch_sslAdminModule',
			    		'type'			=>	'bool',
			    		'value'			=>	false,
			    		'position'		=>	1,
		    	),
		    	array(
			    		'group'			=>	'imva_oxidpatch_features',
			    		'name'			=>	'imva_oxidpatch_adminIdModifier',
			    		'type'			=>	'bool',
			    		'value'			=>	false,
			    		'position'		=>	2,
		    	),
		),
);