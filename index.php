<?php
$data = json_decode(file_get_contents('https://randomfox.ca/floof/'), true);
$pic = $data['image'];
echo '<img src="'.$pic.'">';
?>
