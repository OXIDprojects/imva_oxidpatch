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
 * (c) 2015-2016 imva.biz, Johannes Ackermann, ja@imva.biz
 * @author Johannes Ackermann
 *
 * 15/11/17-16/9/27
 * v 0.2.1
 *
 */

$sMetadataVersion = '1.1';

/**
 * Module information
 */
$aModule = [
    'id'    => 'imva_oxidpatch',
    'title' => [
            'de'    =>	'<img src="../modules/imva.biz/imva_services/out/img/imva-Logo-12.png" alt=".iI" title="imva.biz" />
                Patchmodul für OXID eShop',
            'en'	=>	'<img src="../modules/imva.biz/imva_services/out/img/imva-Logo-12.png" alt=".iI" title="imva.biz" />
                Patch module for OXID eShop',
    ],
    'description'	=> [
        'de'    =>	'<p>Dieses Modul stellt kleinere Korrekturen für das Shopsystem bereit.<br>
            <a href="https://imva.biz/oxid-services/oxid-module/module-services/"
            target="_blank">Dieses Modul sollte in Kombination mit dem <b>Kernmodul</b> eingesetzt werden, welches Sie
            kostenlos beziehen k&ouml;nnen.</a></p>',
        'en'    =>  '<p>This module patches the shop system with some fixes that are not provided through OXID.<br>
            <a href="https://imva.biz/oxid-services/oxid-module/module-services/"
            target="_blank">This module should be used in combination with the <b>Core module</b>, which you may obtain
            free-of-charge from our website.</a></p>',
    ],
    'thumbnail'		=>  '../imva_services/out/img/imva-Logo-90.png',
    'version'		=>  '0.2.1',
    'author'		=>  'Johannes Ackermann',
    'url'			=>  'https://imva.biz',
    'email' 		=>  'imva@imva.biz',
    'files'			=>	[
        'imva_oxidpatch_viewbase'			=>	'imva.biz/imva_oxidpatch/Controller/admin/imva_oxidpatch_viewbase.php',
        'imva_oxidpatch_main'				=>	'imva.biz/imva_oxidpatch/Controller/admin/imva_oxidpatch_main.php',
        'imva_oxidpatch_adminuserupdate'	=>	'imva.biz/imva_oxidpatch/Controller/admin/imva_oxidpatch_adminuserupdate.php',
    ],
    'extend'		=> [
        // patch
        'oxviewconfig'						=>	'imva.biz/imva_oxidpatch/Core/imva_oxidpatch_oxviewconfig',
    ],
    'events'       => [
    ],
    'templates'	=>	[
        'imva_oxidpatch_main.tpl'			=>	'imva.biz/imva_oxidpatch/View/admin/tpl/imva_oxidpatch_main.tpl',
        'imva_oxidpatch_adminuserupdate.tpl'=>  'imva.biz/imva_oxidpatch/View/admin/tpl/imva_oxidpatch_adminuserupdate.tpl',
    ],
    'blocks'	=>	[
        [
            'template' => 'imva_oxidpatch_main.tpl',
            'block'    => 'imva_oxidpatch_header',
            'file'     => 'View/blocks/imva_oxidpatch_header.tpl'
        ],
        [
            'template' => 'imva_oxidpatch_main.tpl',
            'block'    => 'imva_oxidpatch_footer',
            'file'     => 'View/blocks/imva_oxidpatch_footer.tpl'
        ],
        [
            'template' => 'imva_oxidpatch_adminuserupdate.tpl',
            'block'    => 'imva_oxidpatch_header',
            'file'     => 'View/blocks/imva_oxidpatch_header.tpl'
        ],
        [
            'template' => 'imva_oxidpatch_adminuserupdate.tpl',
            'block'    => 'imva_oxidpatch_footer',
            'file'     => 'View/blocks/imva_oxidpatch_footer.tpl'
        ],
    ],
    'settings'	=>	[
        [
            'group'		=>	'imva_oxidpatch_features',
            'name'		=>	'imva_oxidpatch_sslAdminModule',
            'type'		=>	'bool',
            'value'		=>	false,
            'position'	=>	1,
        ],
        [
            'group'		=>	'imva_oxidpatch_features',
            'name'		=>	'imva_oxidpatch_adminIdModifier',
            'type'		=>	'bool',
            'value'		=>	false,
            'position'	=>	2,
        ],
    ],
];
