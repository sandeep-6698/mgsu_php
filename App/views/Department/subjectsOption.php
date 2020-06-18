<?php
	foreach ($this->data as $subject) {
	?>
		<option value="<?=$subject['id']?>"><?=$subject['sub_name'];?> </option>
	<?php }
?>