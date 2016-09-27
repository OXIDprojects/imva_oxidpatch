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

class imva_oxidpatch_adminuserupdate extends imva_oxidpatch_viewbase
{



	/** Template key for view */
	protected $_sThisTemplate = 'imva_oxidpatch_adminuserupdate.tpl';



    /**
     * Init.
     */
	public function init()
	{
		parent::init();

		if (($this->getConfig()->getRequestParameter('imva_runUserUpdate') == 'yesplease') &&
		($this->imva_oxidpatch_allowFeature('imva_oxidpatch_adminIdModifier')))
		{
			$this->imva_launchUserUpdate();
		}
	}
	
	
	
	/**
	 * Launch User Update.
	 * 
	 * If you run a deployment line with automated migration script execution,
	 * you may use the below commands inside your scripts.
	 * If you have futher tables in use that contain User IDs, please extend the following lines
	 * (see the statements).
	 * 
	 * @return boolean
	 */
	public function imva_launchUserUpdate()
	{
		$oxDb = oxDb::getDb(oxDb::FETCH_MODE_ASSOC);
		
		$AdminUsers = $oxDb->getAll("SELECT OXID FROM oxuser WHERE OXRIGHTS = 'malladmin'");			
		foreach ($AdminUsers as $UserId)
		{
			$TheOldUserId = $UserId['OXID'];
			
			$User = oxNew('oxUser');
			$User->load($TheOldUserId);
			
			$TheNewUserId = md5(
                // Some stuff to make it random
                $User->oxuser__oxusername->value .
                oxRegistry::getConfig()->getConfigParam('sShopDir') .
                rand(99, getrandmax()) .
                $User->oxuser__oxshopid->value
            );
			
			// Statements -->
			
			$Statement = "UPDATE `oxuser` SET  `OXID` =  '$TheNewUserId' WHERE  `OXID` = '$TheOldUserId';";
			$oxDb->execute($Statement);
			
			$Statement = "UPDATE `oxobject2group` SET `OXOBJECTID` =  '$TheNewUserId' WHERE `OXOBJECTID` = '$TheOldUserId'";
			$oxDb->execute($Statement);
			
			$Statement = "UPDATE `oxuserbaskets` SET `OXUSERID` =  '$TheNewUserId' WHERE `OXUSERID` = '$TheOldUserId'";
			$oxDb->execute($Statement);
			
			$Statement = "UPDATE `oxuserpayments` SET `OXUSERID` =  '$TheNewUserId' WHERE `OXUSERID` = '$TheOldUserId'";
			$oxDb->execute($Statement);
			
			$Statement = "UPDATE `oxacceptedterms` SET `OXUSERID` =  '$TheNewUserId' WHERE `OXUSERID` = '$TheOldUserId'";
			$oxDb->execute($Statement);
			
			$Statement = "UPDATE `oxvouchers` SET `OXUSERID` =  '$TheNewUserId' WHERE `OXUSERID` = '$TheOldUserId'";
			$oxDb->execute($Statement);
			
			//<-- Statements
			
			unset($User);
		}

		$this->wasExecuted = true;
		return true;
	}
}
