<?php 
 
$server = "localhost";
$username = "root";
$passward = "";
$dbname = "search_test";

$conn = mysqli_connect($server,$username,$passward,$dbname); 
$output='';

if (isset($_POST['search']))
 {
	$searchq = $_POST['search'];
	$searchq = preg_replace("#[^0-9a-z]#i"," ", $searchq);

	$query = mysqli_query($conn,"SELECT * FROM members WHERE author_name LIKE '%$searchq%' OR  book_name LIKE '%$searchq%' OR  category LIKE '%$searchq%' ") or die("Could not search...");
	$count = mysqli_num_rows($query);
	if ($count== 0) 
	{
		$output = 'no result found';
	}
	else
	{
		while($row = mysqli_fetch_array($query))
		{
			$author_name = $row['author_name'];
			$book_name = $row['book_name'];
			$category=$row['category'];

			$output .='<div>'.$author_name.' '.$book_name.' '.$category.'</div>' ;
		}
	}
  }
  
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>search</title>
</head>
<body>

	<form action="search.php" method="post">
		<input type="text" name="search" placeholder="search...">
        <button type="submit" value="search"></button>
	</form>
	<?php print("$output"); 
	?>

</body>
</html>