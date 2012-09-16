<?php
class Saleem_Causecampaign_Block_PledgeBanner
    extends Mage_Core_Block_Template
    implements Mage_Widget_Block_Interface
{
	protected function _construct()
	{
		parent::_construct();
		$this->setTemplate("causecampaign/pledgeBanner.phtml");
	}
	
	public function getCharity() { 
		return Mage::getStoreConfig('causecampaign/general/charity',Mage::app()->getStore());
	}
	
	public function getTarget() { 
		return '$'.Mage::getStoreConfig('causecampaign/general/target',Mage::app()->getStore());
	}
	
	public function getPledgeType() { 
		return Mage::getStoreConfig('causecampaign/pledge/pledge_type',Mage::app()->getStore());
	}
	
	public function getPledgeRate() { 
		return Mage::getStoreConfig('causecampaign/pledge/pledge_rate',Mage::app()->getStore()).'%';
	}
	
	public function getPledgeAmount() {
		return '$'.Mage::getStoreConfig('causecampaign/pledge/pledge_amount',Mage::app()->getStore());
	}
	
	public function getPledge() {
		if ($this->getPledgeType() == "rate") {
			return $this->getPledgeRate();
		} else {
			return $this->getPledgeAmount();
		}
	}
	
	public function getCampaignEndDate() {
		return Mage::getStoreConfig('causecampaign/general/end_date',Mage::app()->getStore());
	}
	
	public function isInCampaign() {
		 return $this->getPledgeType() != "none";
	}
}