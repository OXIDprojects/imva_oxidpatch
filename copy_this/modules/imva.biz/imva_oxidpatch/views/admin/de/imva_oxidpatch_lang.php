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
 * (c) 2014-2016 imva.biz, Johannes Ackermann, ja@imva.biz
 * @author Johannes Ackermann
 *
 * 15/11/17-16/9/27
 * v 0.2.1
 *
 */

$sLangName  = "Deutsch";
$aLang = array(
		'charset'										=>	'UTF-8',
		
		// Group
		'imva_modules_group'							=>	'imva.biz-Module',
		'imva_oxidpatch_information'					=>	'Informationen',
	
		// Titles
		'imva_oxidpatch'								=>	'Patches',
		'IMVA_OXIDPATCH_ADMINUPDATE'					=>	'Admin-Benutzer-Upd.',
		
		// Text
		'IMVA_OXIDPATCH_FEATUREOFF'						=>	'Dieses Feature ist derzeit nicht freigeschaltet.',
		'IMVA_OXIDPATCH_MAIN_SETTINGSHINT'				=>	'Öffnen Sie den Bereich &bdquo;Einstellungen&rdquo; in der Modulverwaltung
															und aktivieren Sie dort die gewünschten Patches.',
		'IMVA_OXIDPATCH_MAIN_INTRO'						=>	'<ol>
																<li>Patch für die Behandlung von Ressourcenpfaden, wenn Modul-Controller via HTTPS
																im Shop-Admin aufgerufen werden.
																<a href="https://github.com/OXID-eSales/oxideshop_ce/pull/208">Technische Details</a></li>
																<li>Sicherheitspatch zum Modifizieren der systeminternen Benutzeridentifikatoren, um das Angriffsrisiko zu verringern.</li>
															</ol>',
		'IMVA_OXIDPATCH_ADMINUPDATE_LAUNCH_HLP'			=>	'Klicken Sie zum Ändern der User-IDs auf die nach folgenden Schaltfläche.
															Bitte erstellen Sie vorher eine Datenbanksicherung und machen Sie sich mit
															der Funktionsweise dieses Moduls vertraut, falls Ihr Shop mit
															Drittanbietermodulen im Funktionsumfang ergänzt wurde.',
		'IMVA_OXIDPATCH_ADMINUPDATE_LAUNCH'				=>	'Patch ausführen',
		'IMVA_OXIDPATCH_ADMINUPDATE_SUCCESS'			=>	'Toll! Der Patch wurde ausgeführt! Sie können diesen Vorgang beliebig
															wiederholen (und immer wieder neue Benutzer-IDs erzeugen).',		
		
		// Settings
		'SHOP_MODULE_GROUP_imva_oxidpatch_features'		=>	'Features aktivieren/deaktivieren',
		'SHOP_MODULE_imva_oxidpatch_sslAdminModule'		=>	'TLS-Patch für Ressourcen von Modulen im Shop-Admin',
		'SHOP_MODULE_imva_oxidpatch_adminIdModifier'	=>	'Ändern von Benutzer-Idents durch das Modul erlauben (Datenbanksicherung empfohlen)',
);
