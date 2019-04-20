<?php
include('db.php');
if($_POST['id'])
{
    $id=$_POST['id'];
    
    $stmt = $DB_con->prepare("SELECT * FROM subcategory WHERE CategoryID=:id");
    $stmt->execute(array(':id' => $id));
    ?><option selected="selected">Select Subcategory :</option><?php
	while($row=$stmt->fetch(PDO::FETCH_ASSOC))
	{
		?>
        <option value="<?php echo $row['SubCategoryID']; ?>"><?php echo $row['Desc_Eng']; ?></option>
        <?php
	}
}
?>