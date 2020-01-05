<?php 
ob_start();


function setComments($conn) {
	
	if (isset($_POST['commentSubmit'])) {
		$uid = $_POST['uid'];
		$date = $_POST['date'];
		$message = $_POST['message'];
		
		
		
		$sql = "INSERT INTO comments (uid, date, message)
		VALUES ('$uid', '$date', '$message')";
		$result = $conn->query($sql);
		header("Location: index.php?reviewed");
		
		
		
	}
	
}






function getComments($conn) {
	$sql = "SELECT * FROM comments";
	$result = $conn->query($sql);
	while ($row = $result->fetch_assoc()) {
		echo "<div class = 'commentBox'>";
		echo $row['uid']." <br>";
		echo $row['date']." <br> ";
		echo nl2br($row['message']);
		echo "</div>";
		
	}
	
}

?>