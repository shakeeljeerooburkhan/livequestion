<!DOCTYPE html>
<html>
<head>
	<title>Live Question</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="inscri.css">
</head>
<body>
	
	<section id="back" class="container-fluid">
		<div id="pose" class="row">
			<form id="pose2" method="POST" action="#">
        <h2 id="pose3">inscription</h2>
          <div class="colorMind">
            <div id="pad" class="col-md-6 col-lg-6">
              <label class="pink" for="identifiant">Prenom</label>
              <input  type="text" id="email" name="identifiant" class="form-control" placeholder="Votre Prenom">
              <label class="pink" for="name">NOM</label>
              <input  type="text" id="email" name="name" class="form-control" placeholder="Votre Nom">
				      <label class="pink" for="age">age</label>
				      <input  type="text" id="email" name="age" class="form-control" placeholder="Votre age">
              <label class="pink" for="password">mot de passe</label>
              <input type="text" id="email" name="password" class="form-control" placeholder="votre mot de passe">
            </div>
            <div id="pad2" class="col-md-6 col-lg-6">
              <label class="pink" for="falsename">pseudo</label>
              <input type="text" id="email" name="falsename" class="form-control" placeholder="votre pseudo"><label class="pink" for="phone">telephone</label>
              <input type="telephone" id="email" name="phone" class="form-control" placeholder="votre numero de telephone">
					    <label class="pink" for="email">email</label>
              <input type="email" id="email" name="email" class="form-control" placeholder="votre email">
              <label class="pink" for="password">confirmé mot de passe</label>
              <input type="text" id="email" name="password" class="form-control" placeholder="votre mot de passe">
            </div>
            <div id="pad1">
					   <input id="connected" type="submit" name="submit" class="button1" value="valider">
            </div>
          </div>
			</form>
    </div>
	</section>
</body>
</html>