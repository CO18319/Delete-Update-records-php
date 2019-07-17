<form action="table_up.php" method="post">
	<label>Enter name</label><input type="text" name="up_name"><br>
	<label>Enter rollno</label><input type="text" name="up_roll"><br>
	<label>Enter fee</label><input type="text" name="up_fee"><br>
	<input type="hidden" name="hidden" value="<?php echo $_REQUEST["id2"]?>">
	<input type="submit" name="Update">
</form>