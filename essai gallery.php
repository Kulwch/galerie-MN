<?php

// Looping the display request for paintings

for( $i = 1; $i < 60; $i += 6 ) {

	$req = $dbh->prepare('SELECT year, title, url, miniUrl FROM landscapePaintings ORDER BY year DESC LIMIT ' . $i . ', 6');

	
	while ($data = $req->fetch()) {
		?>
			<tr>
				<td>
					<a target="blank" href="<?= $data['url'] ?>">
						<figure>
								<img src="<?= $data['miniUrl'] ?>" />
								<figcaption><?= $data['year'] ?>, <?= $data['title'] ?></figcaption>
						</figure>
					</a>
				</td>
			</tr>
		<?php
	}
}	
	$req->closeCursor();
?>

<!-- Error: Displays the whole db oon one row, not 6 per row -->
