<html>
<head>
    <title>Search Bar </title>
</head>
<body>
<?php 
    $connection = mysqli_connect('localhost','root','','mydb');
    
    if(isset($_POST['search']))
    {
        $searchkey = $_POST['search'];
        $sql = "SELECT * FROM product Where P_Name LIKE '%$searchkey%'";
    }
    else
    {
        $sql = "SELECT * FROM product";
        $searchkey="";
    }
    $result =mysqli_query($connection,$sql);     
?>
<form action="" method="post" >
<h2 align="center">Product Search</h2><br><br>
<table align="center">
<tr>
    <td>
        
        <input type="text" name="search" placeholder="Search By ProductName"
        value = "<?php echo $searchkey ?>">
        <button class="btn">Search</button>
    </td>
<tr>
<table>
</form>
<br><br>
<table width="50%"  border="1" cellpadding ="5" align="center"  border="1px solid black" style="border-collapse : collapse;" >
	<tr>
        <th>Id &nbsp;&nbsp;</th>
		<th>Product Name &nbsp;&nbsp;</th>
		<th>Description &nbsp;&nbsp;</th>
		<th>Catagory &nbsp;&nbsp;</th>
        <th>Price &nbsp;&nbsp;</th>
        <th>Image</th>
	</tr>
    <?php while($row = mysqli_fetch_object($result)) 
    {?>
        <tr>
        
            <td><?php echo $row->P_id ?>&nbsp;&nbsp;</td>
            <td><?php echo $row->P_Name ?>&nbsp;&nbsp;</td>
            <td><?php echo $row->P_Desc ?>&nbsp;&nbsp;</td>
            <td><?php echo $row->P_Category ?>&nbsp;&nbsp;</td>
            <td><?php echo $row->P_Price ?>&nbsp;&nbsp;&nbsp;</td>
            <td><img src="<?php echo "../files/".$row['P_Picture'];?>"width="100px" alt="Image"></td>
                 
        </tr>
    <?php } ?>	
</table>
<br><br><br>
<a href="pageone.php">back</a>
</body>
</html>


