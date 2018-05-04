<!DOCTYPE html>
<html>
	<head>
	    <meta charset="UTF-8"/>
	    <title>Tema WordPress</title>
	    <link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<?php
		global $wpdb;

		$query = "SELECT * FROM $wpdb->posts WHERE post_status = 'publish' ORDER BY post_modified DESC";
		$rows = $wpdb->get_results($query);
		foreach ($rows as $row) {
			echo "<h1 class='cool-effect'>" . $row->post_title . "</h1>";
			echo "<p class='content'>" . $row->post_content  . "</p>";
			echo "<p>" . $row->post_modified . "</p>";
			echo "<hr>";
		}
		?>
	</body>
</html>