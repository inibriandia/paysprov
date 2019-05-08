<!--
    Auteur  : Briand Ininahazwe
    Date    : Mai 2019
    But     : Obtenir la liste des pays et des provinces
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>

<head>

<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="Content-Type" content="charset=utf-8" />
<!--Insertion du code CSS pour JQuery UI -->
		<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css">
        
<title>Exercice: Dépendance de combo box</title>

<style type="text/css">

.hidden{
    display: none;
}

label{
    font-weight: bolder;
}

dl{
}

dt{
    width: 15%;
    float: left;
}

dd{
    margin-left: 0;
    margin-bottom: 10px;
}

ul.erreurs{
    font-weight: bolder;
    color: #cc0000;
    margin-left: 0;
    padding-left: 0;
    list-style-type: none;
}

#erreurs-globales{
    background: #cc0000;
    color: white;
    font-weight: bolder;
    width: 40%;
}

#erreurs-globales p{
    margin: 5px;
    padding-top: 5px;
}

#erreurs-globales ul#champs-erreurs{
    background: #f0f0f0;
    padding-top: 5px;
    padding-bottom: 5px;
    list-style-type: square;
    margin: 0;
    color: black;
    font-weight: normal;
}

#actions{
    margin-left: 15%;
}

#resultat{
    font-weight: bolder;
}


fieldset{
	border: 1px solid #781351;
	width: 60em;
	}

legend{
	color: #fff;
	background: #ffa20c;
	border: 1px solid #781351;
	padding: 2px 6px;
	}
</style>

        <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" />
        <script type="text/javascript" 
        src="//ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <script type="text/javascript" 
        src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script type="text/javascript">

            // Drop down list des pays
            var select = document.createElement('select');


            // Fonction pour aller chercher les pays et les mettre dans le drop down list
            function getPays()
            {
                
                var xhr = new XMLHttpRequest();
                xhr.open("GET", "getPays.php", true);

                var sectionPays = document.getElementById("liste-pays");

                xhr.onreadystatechange = function()
                {
                    if (xhr.readyState == 4){
                        var arrayPays = JSON.parse(xhr.responseText);

                        for(i=0; i<arrayPays.length; i++)
                        {
                            var option = document.createElement('option');
                            option.value = arrayPays[i].id;
                            var text = document.createTextNode(arrayPays[i].pays);
                            option.appendChild(text);
                            select.appendChild(option);
                        }
                    }
                    select.value = 1;
                };

                sectionPays.appendChild(select);
                select.addEventListener("change", function(){
                    getProv(select.value);
                });

                xhr.send(null);
            }

            // Fonction pour aller chercher les provinces et les mettre dans le drop down list
            function getProv(pays)
            {
                var sectionProvinces = document.getElementById("liste-provinces");

                if(sectionProvinces.firstChild !== null)
                    sectionProvinces.removeChild(sectionProvinces.lastChild);

                
                var xhr = new XMLHttpRequest();
                xhr.open("GET", "getProvince.php?pays=" + pays, true);

                
                var selectProv = document.createElement('select');
                

                xhr.onreadystatechange = function()
                {
                    if (xhr.readyState == 4){
                        var arrayProvinces = JSON.parse(xhr.responseText);

                        for(i=0; i<arrayProvinces.length; i++)
                        {
                            var option = document.createElement('option');
                            option.value = arrayProvinces[i].id;
                            var text = document.createTextNode(arrayProvinces[i].province);
                            option.appendChild(text);
                            selectProv.appendChild(option);
                        }
                    }

                };

                sectionProvinces.appendChild(selectProv);

                xhr.send(null);
            }

            function initialise(){
                getPays();
                getProv(1);
            }

            $( document ).ready( initialise );
        </script>
</head>

<body>
    
    <h1>Créer un compte utilisateur</h1>
<fieldset>
<legend>Entrer votre information</legend>
    <form name="creerCompteForm" action="creer_compte" method="POST">
    
        <dl>

            <dt>	<label>Code usager</label>:</dt>
            <dd><input type="text" name="alias" /></dd>

            <dt>	<label>Prénom</label>:</dt>
            <dd><input type="text" name="alias" /></dd>

            <dt>	<label>Nom</label>:</dt>
            <dd><input type="text" name="alias" /></dd>
            
            <dt>	<label>Pays de résidence</label>:</dt>
            <dd id="liste-pays">
				 <!-- insertion du select pour pays -->
				
			</dd>
            
            <dt><label>Province de résidence</label>:</dt>
            <dd id="liste-provinces">
                <!-- insertion du select pour provinces -->
            </dd>
           
        </dl>
        
        <div id="actions">
            	<input type="submit" value="Créer compte" />
        </div>         
	
    
	</fieldset>
	</form>

</body>

</html>
