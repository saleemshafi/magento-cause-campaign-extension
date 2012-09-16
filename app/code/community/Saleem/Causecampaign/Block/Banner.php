<?php
class Saleem_Causecampaign_Block_Banner
    extends Mage_Core_Block_Template
    implements Mage_Widget_Block_Interface
{
	protected function _construct()
	{
		parent::_construct();
		$this->setTemplate("causecampaign/banner.phtml");
	}
	
	public function _toHtml() {
		return parent::_toHtml();
	}
}