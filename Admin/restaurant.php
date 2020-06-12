<!DOCTYPE>
<html>
<head>
  <title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  <style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}

table{
  margin-top: 20px;
  border-collapse: collapse;
  width: 100%;
  color:#d96459;
  font-family: monospace;
  font-size: 25px;
  text-align: left;
}
th{
  background-color: #d96459;
  color: white;
}

/*w3 css*/
{font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.form-inline {  
  display: flex;
  flex-flow: row wrap;
  align-items: center;
}

.form-inline label {
  margin: 5px 10px 5px 0;
}

.form-inline input {
  vertical-align: middle;
  margin: 5px 10px 5px 0;
  padding: 10px;
  background-color: #fff;
  border: 1px solid #ddd;
}

.form-inline button {
  padding: 10px 20px;
  background-color: dodgerblue;
  border: 1px solid #ddd;
  color: white;
  cursor: pointer;
}

.form-inline button:hover {
  background-color: royalblue;
}

@media (max-width: 800px) {
  .form-inline input {
    margin: 10px 0;
  }
  
  .form-inline {
    flex-direction: column;
    align-items: stretch;
  }
}

/*slect tag*/
/*the container must be positioned relative:*/
.custom-select {
  position: relative;
  font-family: Arial;
}

.custom-select select {
  display: none; /*hide original SELECT element:*/
}

.select-selected {
  background-color: DodgerBlue;
}

/*style the arrow inside the select element:*/
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}

/*point the arrow upwards when the select box is open (active):*/
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}

/*style the items (options), including the selected item:*/
.select-items div,.select-selected {
  color: #ffffff;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
  user-select: none;
}

/*style items (options):*/
.select-items {
  position: absolute;
  background-color: DodgerBlue;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}

/*hide the items when the select box is closed:*/
.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}

</style>

</head>
<body>
<ul>
  <li><a class="active" href="home.php">Home</a></li>
  <li><a href="select.php">Admins</a></li>
  <li><a href="resturant.php">Add Resturant</a></li>
</ul>

<form class="form-inline" action="restaurantcode.php" method="post">
  <label for="name">Name</label>
  <input type="text" placeholder="Name" name="name">
  <label for="address">Address</label>
  <input placeholder="Enter Full Address" name="address">
  <label for="food category">Food Category</label>
  <select class="custom-select" style="width:200px;" name="foodcategory">
    <option>Select category:</option>
    <option>Italian</option>
    <option>Chinese</option>
    <option>Indian</option>
  </select>
  <label for="minprice">Min Price</label>
  <input  placeholder="Enter Min Price" name="minprice">
  <label for="foodquality">Food Quality</label>
 <select class="custom-select" style="width:200px;" name="foodquality">
    <option>Food Quality:</option>
    <option>Good</option>
    <option>Very Good</option>
    <option>Excellent</option>
  </select>
  <br><br>
  <button style="float: right;">Submit</button>
</form>
   <table>
  <tr>
    <!-- <th></th> -->
    <th>ID</th>
    <th>Name</th>
    <th>Address</th>
    <th>Food category</th>
    <th>Min Price</th>
    <th>Food Quality</th>
</tr>
   <?php
$conn = mysqli_connect("localhost", "root", "", "database");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id,name,address,foodcategory,minprice,foodquality FROM res";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"] . "</td><td>"
. $row["address"]. "</td><td>". $row["foodcategory"]."</td><td>". $row["minprice"]."</td><td>". $row["foodquality"]."</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>

</table>

</body>
</html>