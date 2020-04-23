<?php 
 
$server = "localhost";
$username = "root";
$passward = "";
$dbname = "db";

$conn = mysqli_connect($server,$username,$passward,$dbname); 
$output='';


if (isset($_POST['search']))
 {
	$searchq = $_POST['search'];
	$searchq = preg_replace("#[^0-9a-z]#i"," ", $searchq);
	
	$query = mysqli_query($conn,"SELECT * FROM book123 WHERE author_name  LIKE '%$searchq%'  OR  book_name LIKE '%$searchq%' OR  category LIKE '%$searchq%'");
	if(mysqli_num_rows($query)!=0)
	{
		echo "<b>Results are-:</b><br><br>";

		
       // echo "author name " . $row["author_name"]. " - book name: " . $row["book_name"]. "- category: " . $row["category"]. "<br>";
			echo "<table border='1'>

<tr>

<th>Book_Id</th>

<th>Book_name</th>

<th>Author_name</th>

<th>Category</th>

<th>Quantity</th>

<th>Price</th>

</tr>";

 

while($row = $query->fetch_assoc())

  {

  echo "<tr>";

  echo "<td>" . $row['book_id'] . "</td>";

  echo "<td>" . $row['book_name'] . "</td>";

  echo "<td>" . $row['author_name'] . "</td>";

  echo "<td>" . $row['category'] . "</td>";

  echo "<td>" . $row['quantity'] . "</td>";

  echo "<td>" . $row['cost']. "</td>";

  echo '<img src="'.$row['book_image'].'" alt="HTML5 Icon" style="width:100px;height:100px">';
  echo "</tr>";

  }

echo "</table>";
    }
	
	else
	{
		echo "not found";
	}
	/*$count = mysqli_num_rows($query);
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
	}*/
  }
  
 ?>
 <form action="demo.php" method="post">
		<input type="text" name="search" placeholder="search...">
        <button type="submit" value="search"></button>
	</form>