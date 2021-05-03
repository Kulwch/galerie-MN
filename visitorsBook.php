<?php include 'head.php';
include 'mainTitle.php'; 

?>
 
	<a class="back" href="index.php"><p>Retour à l'accueil</p></a>

	<div id="visitorsBookPage">

		<h3 id="bookTitle">Livre d'or</h3>

			<p>Afin d'enrichir le livre d'or de vos commentaires et impressions sur mes aquarelles, je vous propose de remplir le formulaire dédié sur la page de <a href="contact.php"><em>contact.</em></a></p>
			<p>Les messages sont modérés: tout contenu hors de propos et sans relation avec les oeuvres sera retiré.</p>

			<div id="bookContent">

<!-- Displaying the content with an 'include', goal: not mixing php and html -->

				<?php include 'bookContent.php'; ?>

			</div>

	</div>
</html>