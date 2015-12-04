<!DOCTYPE HTML>
<html>
	<head>
		<title>
		MVC : Model Prevention
		</title>
		<meta charset="utf-8">
	</head>
	<body>
		<nav id="sidebar_nav">
			<ul>
				{% for cat in all_cat %}
				<li>
					<a href="http://suala.info/prevention/{{cat.cat}}">{{cat.cat}}</a>
				</li>
				{% endfor %}
			</ul>
		</nav>
		<div>
			<h1>
				Les premiers reflexes en cas d'urgence
			</h1>
			<h2>
				L'inconscience
			</h2>
			<a href="http://www.croix-rouge.fr/Je-me-forme/Particuliers/Les-6-gestes-de-base/L-inconscience"></a>
			<h2>
				La défribilation : l'arrêt cardiaque 
			</h2>
			<a href="http://www.croix-rouge.fr/Je-me-forme/Particuliers/Les-6-gestes-de-base/L-arret-cardiaque-la-defibrillation"></a>
			<h2>
				L'étouffement
			</h2>
			<a href="http://www.croix-rouge.fr/Je-me-forme/Particuliers/Les-6-gestes-de-base/L-etouffement"></a>
			<h2>
				L'accident de voiture
			</h2>
			<a href="http://www.pompiers-14.org/pages/temoin-accident"></a>

		</div>
	</body>
</html>	