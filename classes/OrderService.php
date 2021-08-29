<?php

require_once 'SQL.php';

class OrderService
{
	private $sql;

	function __construct(){
		$this->sql = new SQL();
	}

	public function sumExtraItemPrices ($extraListIdArray, $colorPrice, $radioBodyPrice, $boatId){
		$extraSum = 0;
        $sumPrice = 0;
        foreach ($extraListIdArray as $value) {
            $extraId = $value;
            $onePrice = $this->sql->getExtraPrice($extraId, $boatId);
            $extraSum += $onePrice;
        }
        $sumPrice = $extraSum + $colorPrice + $radioBodyPrice;
		return $sumPrice;
	}

	public function sumPriceWithVat($sumPrice){
		$vat = 1.27;
		$sumVatPrice = $sumPrice * $vat;
		return $sumVatPrice;
	}

	public function orderRegistrate($userName, $userPhone, $userMail, $boatId, $radioColorId, $colorMaterial, $colorPrice, $radioBodyPrice, $sumPrice, $sumVatPrice, $extraListIdArray, $boatBasics) {
		$lastOrderId = $this->sql->orderDetailsRegistrate($userName, $userPhone, $userMail, $boatId, $radioColorId, $colorMaterial, $colorPrice, $radioBodyPrice, $sumPrice, $sumVatPrice);
		
		foreach ($boatBasics as $value) {
			$boatName = $value[0];
			$this->sql->orderBasicRegistrate($lastOrderId, $boatName);
		}	

		foreach ($extraListIdArray as $value) {
			$extraId = $value;
			$extraPrice = $this->sql->getExtraPrice($extraId, $boatId);
			$this->sql->orderExtraRegistrate($lastOrderId, $extraId,$extraPrice);
		}
	}

	public function getOrderList(){
		return $this->sql->getOrderList();
	}

	public function getOrderExtraList($orderId){
		return $this->sql->getOrderExtraList($orderId);
	}
	
	public function getOrderBasicList($orderId){
		return $this->sql->getOrderBasicList($orderId);
	}
	
	public function orderStatusRefused($CurrentOrderId){
		return $this->sql->orderStatusRefused($CurrentOrderId);
	}

	public function orderStatusAccepted($CurrentOrderId){
		return $this->sql->orderStatusAccepted($CurrentOrderId);
	}

	public function orderStatusPending($CurrentOrderId){
		return $this->sql->orderStatusPending($CurrentOrderId);
	}

} 

?>