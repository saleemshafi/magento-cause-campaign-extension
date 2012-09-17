<?php
class Saleem_Causecampaign_Model_Charity
	extends Mage_Core_Model_Abstract
{
	public function getName($id) {
		$charities = $this->getCharities();
		return $charities[$id];
	}
	
	public function getCharities() {
		return array("llh" => "Little Helping Hands",
					 "lls" => "Leukemia and Lymphoma Society",
					 "habitat" => "Habitat for Humanity",
					 "aspca" => "ASPCA");
	}
}