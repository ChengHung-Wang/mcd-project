<?php
    $conn = new PDO("mysql:host=127.0.0.1;dbname=mcd_projects;charset=utf8","root","");
    $p = $_POST;
    $c = $_COOKIE;
    $g = $_GET;
    function alert($mess,$url){
		echo "<script>alert('$mess');location.href='$url'</script>";
	}
	function q($cmd){
		global $conn;
		return $conn->query($cmd);
	}
	function f($cmd){
		return q($cmd)->fetchAll();
    }
    function auto_insert($table,$id,$data){
		global $conn;
		if($id == ""){
			q("INSERT INTO `$table`(`ID`)VALUES(null)");
			$id = $conn->lastInsertID();
		}
		foreach ($data as $k=>$v) {
		 	 // loop through values
		 	 q("UPDATE `$table` SET `$k` = '$v' WHERE `ID` = $id"); 
		 	 echo "UPDATE `$table` SET `$k` = '$v' WHERE `ID` = $id";
		} 
	}