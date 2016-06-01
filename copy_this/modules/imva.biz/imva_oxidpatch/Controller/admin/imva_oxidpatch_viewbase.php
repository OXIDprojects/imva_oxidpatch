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
 * (c) 2014-2016 imva.biz, Johannes Ackermann, ja@imva.biz
 * @author Johannes Ackermann
 *
 * 15/11/17-16/6/1
 * v 0.2
 *
 */

class imva_oxidpatch_viewbase extends oxAdminView
{
	/** Template key for view */
	protected $_sTemplate = null;
	
	
	
	/**
	 * Render view.
	 * 
	 * @see oxAdminView::render()
	 */
	public function render()
	{
		parent::render();
		
		$this->_aViewData['oView'] = $this;
		$this->_aViewData['oViewConf'] = $this->getViewConfig();
		
		if (isset($this->_sTemplate))
		{
			return $this->_sTemplate;
		}
		else{
			echo 'IMVA_OXIDPATCH_VIEWBASE_NOTEMPLATE';
		}
	}
	
	
	
	/**
	 * Should be used for each feature to tell whether it is allowed.
	 * 
	 * @param boolean
	 */
	public function imva_oxidpatch_allowFeature($SettingsDescriptor)
	{
		if (!$SettingsDescriptor){
			return false;
		}
		return $this->getConfig()->getConfigParam($SettingsDescriptor);
	}
	
	
	
	/**
	 * Returns the version of this module.
	 *
	 * @param null
	 * @return string
	 */
	public function imva_oxidpatch_getModuleVersion()
	{
		$ThisModule = oxNew('oxModule');
		$ThisModule->load('imva_oxidpatch');
		
		return $ThisModule->getInfo('version');
	}
}