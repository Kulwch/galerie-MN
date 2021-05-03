<?php

$req = $dbh->prepare('SELECT year, title, url, miniUrl FROM landscapePaintings ORDER BY year DESC LIMIT ' . $i . ', 6');

while ($data = $req->fetch()) {

	switch ($i) {
		case 1;
		case 7;
		case 13;
		case 19;
		case 25;
		case 31;
		case 37;
		case 43;
		case 49;
		case 55;
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
		default;
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
		break;
		}
	}
}
?>
	