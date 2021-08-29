<?php
require_once 'SQL.php';

class ProductService
{
	private $sql;

	function __construct(){
		$this->sql = new SQL();
	}

	public function getBoats(){
		return $this->sql->getBoats();
	}
	
	public function getPvcColors(){
		return $this->sql->getPvcColors();
	}

	public function getHypColors(){
		return $this->sql->getHypColors();
	}

	public function getThisBoat($productId) {
		return $this->sql->getThisBoat($productId);
	}

	public function getThisBoatBasicList($productId) {
		return $this->sql->getThisBoatBasicList($productId);
	}

	public function getThisBoatExtraList($productId) {
		return $this->sql->getThisBoatExtraList($productId);
	}

	public function getColorMaterialById($radioColorId){
		return $this->sql->getColorMaterialById($radioColorId);
	}
		
	public function getColorPriceById($radioColorId){
		return $this->sql->getColorPriceById($radioColorId);
	}
	
	public function getExtraPrice($extraId, $boatId){
		return $this->sql->getExtraPrice($extraId, $boatId);
	}

	public function getColorById($ColorId){
		return $this->sql->getColorById($ColorId);
	}

	public function getBoatName($productId){
		return $this->sql->getBoatName($productId);
	}

	public function getThisExtraName($orderExtraId){
		return $this->sql->getThisExtraName($orderExtraId);
	}
		
} 

?>