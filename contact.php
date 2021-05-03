<?php include 'head.php'; 
include 'mainTitle.php'; 


?>

	<body>

		<div id="contactP">

			<a class="back" href="index.php"><p>Retour à l'accueil</p></a>

			<p>Pour  un achat ou une de demande de renseignements sur une aquarelle, vous pouvez m'écrire directement à l'adresse mail indiquée sous ma photo. Pour tout autre motif, merci d'utiliser le formulaire ci-dessous.</p>

		</div>


		<section id="contactPage">	

			<div id="contactForm">

				<aside>

					<div id="contactInfos">		

						<p><img src="https://nsm09.casimages.com/img/2021/01/07//21010710322125627317201610.jpg" alt="Photo de Michel NANQUETTE" /></p>
						<ul>
							<li>Michel NANQUETTE</li>
							<li>Bezons (95870)</li>
							<li>Plestin-les-Grèves (22310)</li>
							<li>m.nanquette@gmail.com</li>
						</ul>

					</div>

				</aside>	

<!-- Form, sending content to database for further request on bookContent.php -->				

				<form action="contact_regex.php" method="post">
					<label for="nom">Nom :</label> <input type="text" maxlength="64" name="name" id="name"  /><br />
					<label for="prénom">Prénom :</label> <input type="text" maxlength="64" name="firstName" id="firstName" /><br />
					<label for="adresse mail">Adresse mail :</label> <input type="text" maxlength="128" name="mail" id="mail" /><br />

					<label for="subject">Sujet :</label> <input type="text" max="64" name="subject" id="subject" /><br />
					<label for="message">Message :</label> <textarea name="message" id="message"></textarea><br />
					<input id="submit" type="submit" value="Envoyer" /><br />
				</form>	
			</div>		
		</section>
	</body>
</html>