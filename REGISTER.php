<!DOCTYPE html>
<html>
   <head>     

    	<meta charset="UTF-8">
    	<title>Inscription ASIMOV</title>
    	<link href="monstyle.css" rel="stylesheet" media="all">
      <script src="gen_validatorv4.js" type="text/javascript"></script>
   </head>

   <body>
   				<header><div class="headlog"><p><a href="LOGIN.php">Se connecter</a> </div></header>
				<form id='Register' method="post" action="action.php">
   				<legend><center>S'inscrire sur l'espace membre ASIMOV</center></legend>
   				
   				<div class="form-group">
   					<label class="col-lg-2 control-label">Adresse e-mail</label>
   					<div class="col-lg-10">
   						<input type="text" class="form-control" name="adresse" 
   						placeholder="Adresse e-mail">
   					</div>
   				</div><br/><br/><br/>
   				
   				<div class="form-group">
   					<label class="col-lg-2 control-label">Mot de passe</label>
   					<div class="col-lg-10">
   						<input type="password" class="form-control" name="mdp" 
   						placeholder="Mot de passe">
   					</div><br/><br/><br/>
   				</div>
				<div class="form-group">
   					<label class="col-lg-2 control-label">Nom de famille</label>
   					<div class="col-lg-10">
   						<input type="text" class="form-control" name="nom" 
   						placeholder="Nom de famille">
   					</div><br/><br/><br/>
   				</div>
				<div class="form-group">
   					<label class="col-lg-2 control-label">Prénom</label>
   					<div class="col-lg-10">
   						<input type="text" class="form-control" name="prenom" 
   						placeholder="Prenom">
   					</div><br/><br/><br/>
   				</div>
				

            <p>

                  Veuillez indiquer votre promotion :<br />

                  <input type="radio" name="promotion" value="L1" id="L1" /> <label for="L1">L1</label><br />

                  <input type="radio" name="promotion" value="L2" id="L2" /> <label for="L2">L2</label><br />

                  <input type="radio" name="promotion" value="L3" id="L3" /> <label for="L3">L3</label><br />

                  <input type="radio" name="promotion" value="Master 1" id="Master 1" /> <label for="Master 1">Master 1</label>

                  <input type="radio" name="promotion" value="Master 2" id="Master 2" /> <label for="Master 2">Master 2</label>


               </p>
            <br><br>
            <p>Charte de l'association :</p>
            <br>
            
             <object data="STATUTS.pdf" type="application/pdf" width="600" height="800">
               
             </object>

              <div>
                  <input type="checkbox" id="charte" name="CharteChk" value="charte">
                  <label for="subscribeNews">J'ai pris connaissance de la charte</label>
             </div>

   			
   			<br/><br/><center><button type="submit" name="submit" class="btn btn-primary">
   			S'inscrire </button></center>	
   			</form>
            
	    
            <script type="text/javascript">
               var frmvalidator = new Validator("Register");
               //E-mail validator
               frmvalidator.addValidation("adresse","req","Vous devez entrer votre e-mail");
               frmvalidator.addValidation("adresse","email","E-mail non valide");

               //Pass validator
               frmvalidator.addValidation("mdp","req","Vous devez entrer un mot de passe");

               //Fname validator
               frmvalidator.addValidation("nom","req","Vous devez entrer votre Nom de famille");

               //Name validator
               frmvalidator.addValidation("prenom","req","Vous devez entrer votre prénom");

               //Promo validator
               frmvalidator.addValidation("promotion","selone","Vous devez indiquer votre promotion");
               //Charte
               frmvalidator.addValidation("charte","shouldselchk=charte","Vous devez valider la charte");

            </script>

            <footer><p><a href="INDEX.php"> Cliquez ici</a> pour revenir à la page principale.</p></footer>

			
			<br/><br/><br/>
			
			
			


   		
   </body>