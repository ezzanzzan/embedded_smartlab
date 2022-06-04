<?php
class db {
	var $conn;
	function db() {
	$this->conn = mysqli_connect("localhost", "root", "dmswjd123", "smartlab") or die (mysqli_error());
	}
	function finish() {
		mysqli_close($this->conn) or die (mysqli_error());
	}
	function act($q) {
		mysqli_query($this->conn, $q) or die (mysqli_error());
	}
	function get($q, &$rs, &$rn) {
		$rs=NULL;
		$rn=0;
		$rs1 = mysqli_query($this->conn, $q) or die (mysqli_error());
		$rn = mysqli_num_rows($rs1);
		while ($row=mysqli_fetch_array($rs1)) 
			$rs[] = $row;
	}
}
?>

