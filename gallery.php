<?php include 'head.php'; ?>
<?php include 'mainTitle.php';



  $host_name = 'db5001505821.hosting-data.io';
  $database = 'dbs1262929';
  $user_name = 'dbu1424414';
  $password = 'Kulwch2310!';
  $dbh = null;

  // Connection to database

  $dbh = new PDO("mysql:host=$host_name; dbname=$database;", $user_name, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
?>

	<a class="back" href="index.php"><p>Retour à l'accueil</p></a>

	<section id="galleryPage">

		<p>Pour voir une aquarelle en détails (800x600 pixels pour le format paysage, 600x800 en format portrait), cliquez sur sa miniature dans la galerie.</p>
		<p><strong>Les aquarelles avec une croix rouge ne sont pas à vendre.</p>

		<p id="slide">Vous pouvez dérouler les aquarelles avec un "slide" sur le côté.</strong></p>

		<div id="gallery">

			<table>
				<thead>
					<caption>Galerie</caption>
				</thead>

				<tfoot>
					<tr>
						<td>Toute reproduction d'oeuvre, même à des fins non commerciales, sans l'accord de son auteur est interdite.</td>
						<td id="up"><a href="#gallery">Retour en haut de page</a></td>
					</tr>
				</tfoot>

				<tbody>
					<tr>
						<td class="legend">Formats paysage</td>
					</tr>
					<tr>

<!-- Database requests, displaying 6 paintings per row -->

						<?php
							$req = $dbh->query('SELECT year, title, url, miniUrl FROM landscapePaintings ORDER BY year DESC LIMIT 1, 6');

							while ($data = $req->fetch()) {
								?>
									<td>
										<a target="blank" href="<?= $data['url'] ?>">
											<figure>
												<img src="<?= $data['miniUrl'] ?>" />
												<figcaption><?= $data['year'] ?>, <?= $data['title'] ?></figcaption>
											</figure>
										</a>
									</td>
								<?php
							}
							$req->closeCursor();
						?>
					</tr>
					<tr>
						<?php
							$req = $dbh->query('SELECT year, title, url, miniUrl FROM landscapePaintings ORDER BY year DESC LIMIT 7, 6');

							while ($data = $req->fetch()) {
								?>
									<td>
										<a target="blank" href="<?= $data['url'] ?>">
											<figure>
												<img src="<?= $data['miniUrl'] ?>" />
												<figcaption><?= $data['year'] ?>, <?= $data['title'] ?></figcaption>
											</figure>
										</a>
									</td>
								<?php
							}
							$req->closeCursor();
						?>
					</tr>
					<tr>
						<?php
							$req = $dbh->query('SELECT year, title, url, miniUrl FROM landscapePaintings ORDER BY year DESC LIMIT 13, 6');

							while ($data = $req->fetch()) {
								?>
									<td>
										<a target="blank" href="<?= $data['url'] ?>">
											<figure>
												<img src="<?= $data['miniUrl'] ?>" />
												<figcaption><?= $data['year'] ?>, <?= $data['title'] ?></figcaption>
											</figure>
										</a>
									</td>
								<?php
							}
							$req->closeCursor();
						?>
					</tr>
					<tr>
						<?php
							$req = $dbh->query('SELECT year, title, url, miniUrl FROM landscapePaintings ORDER BY year DESC LIMIT 19, 6');

							while ($data = $req->fetch()) {
								?>
									<td>
										<a target="blank" href="<?= $data['url'] ?>">
											<figure>
												<img src="<?= $data['miniUrl'] ?>" />
												<figcaption><?= $data['year'] ?>, <?= $data['title'] ?></figcaption>
											</figure>
										</a>
									</td>
								<?php
							}
							$req->closeCursor();
						?>
					</tr>
					<tr>
						<?php
							$req = $dbh->query('SELECT year, title, url, miniUrl FROM landscapePaintings ORDER BY year DESC LIMIT 25, 6');

							while ($data = $req->fetch()) {
								?>
									<td>
										<a target="blank" href="<?= $data['url'] ?>">
											<figure>
												<img src="<?= $data['miniUrl'] ?>" />
												<figcaption><?= $data['year'] ?>, <?= $data['title'] ?></figcaption>
											</figure>
										</a>
									</td>
								<?php
							}
							$req->closeCursor();
						?>
					</tr>
					<tr>
						<?php
							$req = $dbh->query('SELECT year, title, url, miniUrl FROM landscapePaintings ORDER BY year DESC LIMIT 31, 6');

							while ($data = $req->fetch()) {
								?>
									<td>
										<a target="blank" href="<?= $data['url'] ?>">
											<figure>
												<img src="<?= $data['miniUrl'] ?>" />
												<figcaption><?= $data['year'] ?>, <?= $data['title'] ?></figcaption>
											</figure>
										</a>
									</td>
								<?php
							}
							$req->closeCursor();
						?>
					</tr>
					<tr>
						<?php
							$req = $dbh->query('SELECT year, title, url, miniUrl FROM landscapePaintings ORDER BY year DESC LIMIT 37, 6');

							while ($data = $req->fetch()) {
								?>
									<td>
										<a target="blank" href="<?= $data['url'] ?>">
											<figure>
												<img src="<?= $data['miniUrl'] ?>" />
												<figcaption><?= $data['year'] ?>, <?= $data['title'] ?></figcaption>
											</figure>
										</a>
									</td>
								<?php
							}
							$req->closeCursor();
						?>
					</tr>
					<tr>
						<?php
							$req = $dbh->query('SELECT year, title, url, miniUrl FROM landscapePaintings ORDER BY year DESC LIMIT 43, 6');

							while ($data = $req->fetch()) {
								?>
									<td>
										<a target="blank" href="<?= $data['url'] ?>">
											<figure>
												<img src="<?= $data['miniUrl'] ?>" />
												<figcaption><?= $data['year'] ?>, <?= $data['title'] ?></figcaption>
											</figure>
										</a>
									</td>
								<?php
							}
							$req->closeCursor();
						?>
					</tr>
					<tr>
						<td class="legend">Formats portrait</td>
					</tr>

<!-- Same thing, now for portrait paintings -->

					<tr class="portrait">
						<?php
							$req = $dbh->query('SELECT year, title, url, miniUrl FROM portraitPaintings ORDER BY year DESC LIMIT 1, 6');

							while ($data = $req->fetch()) {
								?>
									<td>
										<a target="blank" href="<?= $data['url'] ?>">
											<figure>
												<img src="<?= $data['miniUrl'] ?>" />
												<figcaption><?= $data['year'] ?>, <?= $data['title'] ?></figcaption>
											</figure>
										</a>
									</td>
								<?php
							}
							$req->closeCursor();
						?>
					</tr>
					<tr class="portrait">
						<?php
							$req = $dbh->query('SELECT year, title, url, miniUrl FROM portraitPaintings ORDER BY year DESC LIMIT 7, 6');

							while ($data = $req->fetch()) {
								?>
									<td>
										<a target="blank" href="<?= $data['url'] ?>">
											<figure>
												<img src="<?= $data['miniUrl'] ?>" />
												<figcaption><?= $data['year'] ?>, <?= $data['title'] ?></figcaption>
											</figure>
										</a>
									</td>
								<?php
							}
							$req->closeCursor();
						?>
					</tr>
				</tbody>
			</table>
		</div>
	</section>
</html>