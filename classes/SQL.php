<?php
require 'Database.php';
session_start();

class SQL
{
	private $con;
	function __construct()	{
		$this->con = Database::getConnection("localhost","boats","root","");
	}

	public function getBoats(){
		return $this->con->query("SELECT * FROM boatlist WHERE stock = '1'");
	}

	public function getColorMaterialById($radioColorId){
		$stm = $this->con->prepare("SELECT material FROM colors WHERE id=?");
		$stm->bindParam(1,$radioColorId);
		$stm->execute();
		return $stm->fetchColumn();
	}
	
	public function getColorPriceById($radioColorId){
		$stm = $this->con->prepare("SELECT price FROM colors WHERE id=?");
		$stm->bindParam(1,$radioColorId);
		$stm->execute();
		return $stm->fetchColumn();
	}

	public function getPvcColors(){
		return $this->con->query("SELECT * FROM colors WHERE colors.material = 'PVC'");
	}

	public function getHypColors(){
		return $this->con->query("SELECT * FROM colors WHERE colors.material = 'Hypalon'");
	}

	public function getThisBoat($productId) {
		$stm = $this->con->prepare("SELECT * FROM boatlist WHERE id = :id");
		$stm->bindParam(":id",$productId);
		$stm->execute();
		return $stm->fetchAll();
	}

	public function getThisBoatBasicList($productId) {
		$stm = $this->con->prepare("SELECT basicName FROM basicconnection INNER JOIN basiclist ON basicconnection.basicid=basiclist.id WHERE modellid = :id");
		$stm->bindParam(":id",$productId);
		$stm->execute();
		return $stm->fetchAll();
	}

	public function getThisBoatExtraList($productId) {
		$stm = $this->con->prepare("SELECT extraName, extraid, extraprice FROM extralist INNER JOIN extraconnection ON extralist.id=extraconnection.extraid WHERE modellid = :id");
		$stm->bindParam(":id",$productId);
		$stm->execute();
		return $stm->fetchAll();
	}

	public function orderDetailsRegistrate($userName, $userPhone, $userMail, $boatId, $radioColorId, $colorMaterial, $colorPrice, $radioBodyPrice, $sumPrice, $sumVatPrice) {
		$stm = $this->con->prepare("INSERT INTO ordersum(buyername, phone, email, boatid, colorid, material, materialprice, bodyprice, sumprice, sumvatprice) VALUES (?,?,?,?,?,?,?,?,?,?)");
		$stm->bindParam(1, $userName);
		$stm->bindParam(2, $userPhone);
		$stm->bindParam(3, $userMail);
		$stm->bindParam(4, $boatId);
		$stm->bindParam(5, $radioColorId);
		$stm->bindParam(6, $colorMaterial);
		$stm->bindParam(7, $colorPrice);
		$stm->bindParam(8, $radioBodyPrice);
		$stm->bindParam(9, $sumPrice);
		$stm->bindParam(10, $sumVatPrice);
		$stm->execute();
		$lastOrderId = $this->con->lastInsertId();
		return ($lastOrderId);
	}

	public function orderExtraRegistrate($lastOrderId, $extraId,$extraPrice){
		$stm = $this->con->prepare("INSERT INTO orderextra(orderid, orderedextraid, extraprice) VALUES (?,?,?)");
		$stm->bindParam(1, $lastOrderId);
		$stm->bindParam(2, $extraId);
		$stm->bindParam(3, $extraPrice);
		$stm->execute();
		return $stm->fetchAll();
	}

	public function orderBasicRegistrate($lastOrderId, $boatName){
		$stm = $this->con->prepare("INSERT INTO orderbasic(orderid, orderedbasicname) VALUES (?,?)");
		$stm->bindParam(1, $lastOrderId);
		$stm->bindParam(2, $boatName);
		$stm->execute();
		return $stm->fetchAll();
	}

	public function getExtraPrice($extraId, $boatId){
		$stm = $this->con->prepare("SELECT extraprice FROM extraconnection WHERE extraid = :id AND modellid = :id2");
		$stm->bindParam(":id",$extraId);
		$stm->bindParam(":id2",$boatId);
		$stm->execute();
		$temp = $stm->fetch();
		return $temp[0];
	}

	public function getOrderList() {
		return $this->con->query("SELECT * FROM ordersum ORDER BY date DESC;");
	}

	public function getColorById($ColorId){
		$stm = $this->con->prepare("SELECT color FROM colors WHERE id=?");
		$stm->bindParam(1,$ColorId);
		$stm->execute();
		return $stm->fetchColumn();
	}

	public function getBoatName($productId) {
		$stm = $this->con->prepare("SELECT modell FROM boatlist WHERE id = :id");
		$stm->bindParam(":id",$productId);
		$stm->execute();
		return $stm->fetchColumn();
	}

	public function getOrderExtraList($orderId){
		$stm = $this->con->prepare("SELECT * FROM orderextra WHERE orderid=?");
		$stm->bindParam(1,$orderId);
		$stm->execute();
		return $stm->fetchAll();
	}

	public function getOrderBasicList($orderId){
		$stm = $this->con->prepare("SELECT * FROM orderbasic WHERE orderid=?");
		$stm->bindParam(1,$orderId);
		$stm->execute();
		return $stm->fetchAll();
	}

	public function getThisExtraName($orderExtraId){
		$stm = $this->con->prepare("SELECT extraName FROM extralist WHERE id=?");
		$stm->bindParam(1,$orderExtraId);
		$stm->execute();
		return $stm->fetchColumn();
	}

	public function orderStatusRefused($CurrentOrderId) {
		$stm = $this->con->prepare("UPDATE ordersum SET status = 'elutasítva' WHERE id=?");
		$stm->bindParam(1, $CurrentOrderId);
		$stm->execute();
	}

	public function orderStatusAccepted($CurrentOrderId) {
		$stm = $this->con->prepare("UPDATE ordersum SET status = 'jóváhagyva' WHERE id=?");
		$stm->bindParam(1, $CurrentOrderId);
		$stm->execute();
	}

	public function orderStatusPending($CurrentOrderId) {
		$stm = $this->con->prepare("UPDATE ordersum SET status = 'függőben' WHERE id=?");
		$stm->bindParam(1, $CurrentOrderId);
		$stm->execute();
	}

	public function loginDataCheck($manager, $password) {
		$stm = $this->con->prepare("SELECT COUNT(id) AS qty FROM manager WHERE manager LIKE ? AND password LIKE ?");
		$stm->bindParam(1, $manager);
		$stm->bindParam(2, $password);
		$stm->execute();
		$result = $stm->fetch();
		return ($result['qty'] == 1);
	}
	
	public function getUserId($manager) {
		$stm = $this->con->prepare("SELECT id FROM manager WHERE manager LIKE ?");
		$stm->bindParam(1, $manager);
		$stm->execute();
		$result = $stm->fetch();
		return $result['id'];
	}
	
	public function getPublicUserData($userId) {
		$stm = $this->con->prepare("SELECT manager FROM manager WHERE id=?");
		$stm->bindParam(1, $userId);
		$stm->execute();
		return $stm->fetchColumn();
	}

	
}

?>