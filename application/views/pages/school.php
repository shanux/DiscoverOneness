<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<div class="container">

<?php

	foreach ($query->result() as $row)
	{
	   echo $row->Name;
	   echo $row->Category;
	   echo $row->Area;
	}

?>

</div>