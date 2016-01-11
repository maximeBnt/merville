<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
	<head>
		<title>Merville musique</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="css/bootstrap.min.css" rel="stylesheet">
	</head>

	<body>



		<form class="form-horizontal" action="traitement.php" method="post">
<fieldset>

<!-- Form Name -->
<legend>Inscription</legend>

<!-- Nom input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nom"></label>  
  <div class="col-md-4">
  <input id="nom" name="nom" type="text" placeholder="Nom" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Prenom input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="prenom"></label>  
  <div class="col-md-4">
  <input id="prenom" name="prenom" type="text" placeholder="Prénom" class="form-control input-md" required="">
    
  </div>
</div>

<!-- EMAIL input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="mail"></label>  
  <div class="col-md-4">
  <input id="mail" name="mail" type="email" placeholder="E-mail" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="mail"></label>  
  <div class="col-md-4">
Date de naissance :    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic"></label>
  <div class="col-md-4">
  	<select id="jour" name="jour">
      <option selected>Jour</option>
    	<?php
			$i = 0;
			while ($i<32){
				echo "<option value='" . $i . "'> " . $i . "</option> ";
				$i++;
			}
    	?>
    </select>
    <select id="mois" name="mois">
      <option selected>Jour</option>
      <option value="1">Janvier</option>
      <option value="2">Février</option>
      <option value="3">Mars</option>
      <option value="4">Avril</option>
      <option value="5">Mai</option>
      <option value="6">Juin</option>
      <option value="7">Juillet</option>
      <option value="8">Août</option>
      <option value="9">Septembre</option>
      <option value="10">Octobre</option>
      <option value="11">Novembre</option>
      <option value="12">Décembre</option>
    </select>
    <select id="annee" name="annee">
      <option selected>Année</option>
    	<?php
			$i = 2010;
			while ($i>1900){
				echo "<option value='" . $i . "'> " . $i . "</option> ";
				$i= $i-1;
			}
    	?>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="adresse"></label>  
  <div class="col-md-4">
  <input id="adresse" name="adresse" type="text" placeholder="Adresse complète" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="telephone"></label>  
  <div class="col-md-4">
  <input id="telephone" name="telephone" type="tel" placeholder="Numéro de téléphone" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="instrument"></label>  
  <div class="col-md-4">
  <input id="instrument" name="instrument" type="text" placeholder="Instrument (si pratiqué)" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="niveau"></label>  
  <div class="col-md-4">
  <input id="niveau" name="niveau" type="text" placeholder="Niveau musical" class="form-control input-md">
  <span class="help-block">(minimum fin de 1er cycle ou 3/4 ans de pratique)</span>  
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios"></label>
  <div class="col-md-4">
  <div class="radio">
    <label for="radios-0">
      <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
      Cours + pension complète : 340€
    </label>
    </br>Attention
	</div>
  <div class="radio">
    <label for="radios-1">
      <input type="radio" name="radios" id="radios-1" value="2">
      Cours + pension complète : 350€
    </label>
	</div>
  <div class="radio">
    <label for="radios-2">
      <input type="radio" name="radios" id="radios-2" value="3">
      Cours + 1/2 pension (repas du midi) : 210€
    </label>
	</div>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="commentaires"></label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="commentaires" name="commentaires">Commentaires ?</textarea>
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-8">
    <button type="submit" id="submit" name="submit" class="btn btn-success">Valider</button>
    <button id="reset" name="reset" class="btn btn-default">Annuler</button>
  </div>
</div>

</fieldset>
</form>








	</body>
</html>



