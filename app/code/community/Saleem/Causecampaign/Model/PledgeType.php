<?php
class Saleem_Causecampaign_Model_PledgeType
	extends Mage_Core_Model_Abstract
{
	public function getPledgeTypes() {
		return array("none" => "None", 
				"rate" => "Percent of Order", 
				"amount" => "Flat Amount of Order");
	}
}