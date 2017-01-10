
<html>
    <head>
        <title>Message</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <header>
        	<h1>Envoyez un mesage</h1>
            <h2>Vous pouvez nous envoyer un message : </h2>
        
	    	<form method="post" action="envoyer_message.php">

		    <section>
		        Nom :      <input type="text" name="nom" /></br>
		        Prénom :   <input type="text" name="prenom" /></br>
		        Sujet :    <input type="text" name="sujet" /></br>
		        email :    <input type="text" name="email" /></br>
		        Message :  <textarea name="message" row=8 cols=45> </textarea></br>
		        <input type="submit" value="Valider" />
		    </section>
		</form>
    </body>
</html>