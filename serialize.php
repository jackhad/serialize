<select id="Realtionship" class="validate[required]" name="Realtionship">
<option value="">Choose Option</option>
<option value="112">Husband</option>
<option value="113">Wife</option>
</select> 
<input type="text" name="Relname" id="Relname">
<input type="submit" name="submit" >


<?php 
$relation=array();
$reltype=$_POST['Realtionship'];
$relation[$reltype]=$_POST['Relname']; 
$reladata=serialize($relation);
print_r($reladata) // you can insert this variable into table field
?>
