<!doctype html>

<!-----------------------------------------------------------------------------------
Web developer: Nicola Pes;
Utilizzo di: Html, css, php, ajax, jquery, mysql, javascript
Progetto completato in data: 25/04/2015.
Titolo: Formaggi Pes (è un minicaseificio familiare con un vecchio sito su: www.formaggipes.it)
Si ringrazia il WEB.

Nicola Pes
------------------------------------------------------------------------------------>

<!-- Connessione al DB su PhpMyadmin -->
<?php
$conn = mysql_connect("localhost","pesNicola","scimmia742");

if(!$conn){ 
    die ("connessione FALLITA".mysql_error());
}

$db = mysql_select_db("amm14_pesNicola", $conn);
#ora e' connesso!
?>

<html>
<!----------------------------------------------------------------------------------- 
Vado a includere il database che si trova su phpMyAdmin per:
- gestire le sessioni; (compresa quella dell'amministratore con funzionalità dedicate)
- gestire i formaggi;
------------------------------------------------------------------------------------->

<html xmlns="http://www.w3.org/1999/xhtml" lang="it">
<head role="banner">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <LINK REL="SHORTCUT ICON" HREF= "ico.ico">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
    <link rel="stylesheet" href="css/styles.css"> <!-- Resource style -->
    <title>Formaggi Pes - Home</title>
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="script.js"></script>
    <link href="http://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet" type="text/css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
</head>

    <header> <a href="home.php"><img id="logo" src="logo.gif" alt="" /></a>
        <a href="index.php" title="Vai alla home di Formaggi Pes"><h1 id="FP">Formaggi Pes</h1></a>
        <h2 id="secondo">Formaggi secondo natura</h2>
            <nav class="main-nav">
                <ul id="menu">
		<li><a class="cd-signin" href="#0" text="Effettua il login">Login</a></li>
		<li><a class="cd-signup" href="#0" text="Registrati per acquistare i nostri prodotti">Registrati</a></li>
            </ul></nav>
        </header>

    
            


    
    <body>
        <?php
            if(session_status() == 0) {
            session_start();
            }
        ?>
        <div id="sinistra">        
<div id='cssmenu'>
<ul>
   <li><a href='#' method="get" name="menu">Home</a></li>
   <li class='active has-sub' method="get" name="menu"><a href='#'>Prodotti</a>
      <ul>
         <li class='has-sub' method="get" name="menu"><a href='#'>Freschi</a>
            <ul>
               <li><a href='#' method="get" name="menu">Giovane</a></li>
            </ul>
         </li>
         <li class='has-sub'><a href='#' method="post" name="menu">Semistagionati</a>
            <ul>
               <li><a href='#' method="get" name="menu">Bonaera</a></li>
               <li><a href='#' method="get" name="menu">Campizzolu</a></li>
            </ul>
         </li>
          
         <li class='has-sub'><a href='#'>Stagionati</a>
            <ul>
               <li><a href='#' method="post" name="get">Lochele</a></li>
               <li><a href='#' method="post" name="get">Sedilese</a></li>
            </ul>
         </li>
         <li class='has-sub'><a href='#'>Ricotta</a>
            <ul>
               <li class='has-sub2'><a href='#' method="get" name="menu">Ricotta</a></li>
               <li class='has-sub2'><a href='#' method="get" name="menu">Ricotta al basilico</a></li>
               <li class='has-sub2'><a href='#' method="get" name="menu">Ricotta al peperoncino</a></li>
               <li class='has-sub2'><a href='#' method="get" name="menu">Ricotta al limone</a></li>
            </ul>
         </li>
          <li class='has-sub'><a href='#'>Spalmabili</a>
            <ul>
               <li class='has-sub2'><a href='#' method="get" name="menu">Bonì Verde</a></li>
               <li class='has-sub2'><a href='#' method="get" name="menu">Bonì Arancione</a></li>
               <li class='has-sub2'><a href='#' method="get" name="menu">Bonì Rosso</a></li>
            </ul>
         </li></a></li>
      </ul>
   </li>
   <li class='has-sub2'><a href='#' method="get" name="menu">Chi siamo</a></li>
   <li class='has-sub2'><a href='#' method="get" name="menu">Dove siamo</a></li>
   <li class='has-sub2'><a href='#' method="get" name="menu">Contatti</a></li>
</ul>
</div></div>
            
            
            <div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
		<div class="cd-user-modal-container"> <!-- this is the container wrapper -->
			<ul class="cd-switcher">
				<li><a href="#0">Login</a></li>
				<li><a href="#0">Registrati</a></li>
			</ul>

			<div id="cd-login"> <!-- log in form -->
                            <form class="cd-form" action="" method="post">
					<p class="fieldset">	
						<label class="image-replace cd-username" for="signup-username">Username</label>
                                                <input class="full-width has-padding has-border" method="post" name="username" id="signup-username" type="text" placeholder="Username">
						<span class="cd-error-message">"C'è un messaggio di errore!"</span>
                                        </p>

					<p class="fieldset">
						<label class="image-replace cd-password" for="signin-password">Password</label>
                                                <input class="full-width has-padding has-border" method="post" name="password" id="signin-password" type="text"  placeholder="Password">
						<a href="#0" class="hide-password">Nascondi</a>
						<span class="cd-error-message">"C'è un messaggio di errore!"</span>
					</p>

					<p class="fieldset">
						<input type="checkbox" id="remember-me" checked>
						<label for="remember-me">Ricordami</label>
					</p>

					<p class="fieldset">
						<input class="full-width" type="submit" method="post" value="Login">
					</p>
				</form>
				
				<p class="cd-form-bottom-message"><a href="#0">Hai dimenticato la password?</a></p>
				<!-- <a href="#0" class="cd-close-form">Close</a> -->
			</div> <!-- cd-login -->

			<div id="cd-signup"> <!-- sign up form -->
				<form class="cd-form">
					<p class="fieldset">
						<label class="image-replace cd-username" for="signup-username">Username</label>
                                                <input class="full-width has-padding has-border" id="signup-username"
                                                       method="post"
                                                       name="signup-username" type="signup-username" type="text" placeholder="Username">
						<span class="cd-error-message">"C'è un messaggio di errore!"</span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-email" for="signup-email">E-mail</label>
						<input class="full-width has-padding has-border" id="signup-email"
                                                       method="post"
                                                       name="signup-email" type="email" placeholder="E-mail">
						<span class="cd-error-message">"C'è un messaggio di errore!"</span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-password" for="signup-password">Password</label>
                                                <input class="full-width has-padding has-border" id="signup-password"
                                                       method="post"
                                                       name="signup-password" type="text" name="l_password"  placeholder="Password">
						<a href="#0" class="hide-password">Nascondi</a>
						<span class="cd-error-message">"C'è un messaggio di errore!"</span>
					</p>

                                        <p class="fieldset">
						<label class="image-replace cd-username" for="signup-username">Nome</label>
						<input class="full-width has-padding has-border" id="signup-username"
                                                       method="post"
                                                       name="signup-username" type="text" placeholder="Nome">
						<span class="cd-error-message">"C'è un messaggio di errore!"</span>
					</p>

                                    
                                        <p class="fieldset">
						<label class="image-replace cd-username" for="signup-username">Cognome</label>
						<input class="full-width has-padding has-border" id="signup-cognome"
                                                       method="post"
                                                       name="signup-cognome" type="text" placeholder="Cognome">
						<span class="cd-error-message">"C'è un messaggio di errore!"</span>
					</p>
                                    
                                        <p class="fieldset">
						<label class="image-replace cd-username" for="signup-username">Indirizzo</label>
						<input class="full-width has-padding has-border" id="signup-indirizzo"
                                                       method="post"
                                                       name="signup-indirizzo" type="text" placeholder="Indirizzo">
						<span class="cd-error-message">"C'è un messaggio di errore!"</span>
					</p>
                                    
                                        <p class="fieldset">
						<label class="image-replace cd-username" for="signup-username">Città</label>
						<input class="full-width has-padding has-border" id="signup-citta"
                                                       method="post"
                                                       name="signup-citta" type="text" placeholder="Città">
						<span class="cd-error-message">"C'è un messaggio di errore!"</span>
					</p>
                                    
                                        <p class="fieldset">
						<label class="image-replace cd-username" for="signup-username">CAP</label>
                                                <input class="full-width has-padding has-border" id="signup-cap"
                                                       metod="post"
                                                       name="signup-cap" type="number" placeholder="CAP">
						<span class="cd-error-message">"C'è un messaggio di errore!"</span>
					</p>
                                    
                                        <p class="fieldset">
						<label class="image-replace cd-username" for="signup-username">Cell/Telefono</label>
                                                <input class="full-width has-padding has-border" id="signup-username"
                                                       method="post"
                                                       name="signup-username" type="number" placeholder="Cell/Telefono">
						<span class="cd-error-message">"C'è un messaggio di errore!"</span>
					</p>
                                    
					<p class="fieldset">
                                            <input type="checkbox" id="accept-terms" name="accept-terms">
						<label for="accept-terms">Accetto i <a href="../descrizione.html">Termini</a></label>
					</p>

					<p class="fieldset">
                                            <input class="full-width has-padding" type="submit"
                                                   method="post" name="l_submit" value="Crea Account">
					</p>
				</form>

				<!-- <a href="#0" class="cd-close-form">Close</a> -->
			</div> <!-- cd-signup -->

			<div id="cd-reset-password"> <!-- reset password form -->
                            <p class="cd-form-message">Inserisci qui il tuo recapito e-mail. <br>Riceverai un email contenente un link per creare una nuova password.</p>

				<form class="cd-form">
					<p class="fieldset">
						<label class="image-replace cd-email" for="reset-email">E-mail</label>
						<input class="full-width has-padding has-border" id="reset-email"
                                                       name="reset-email" type="email" placeholder="E-mail">
						<span class="cd-error-message">"C'è un messaggio di errore!"</span>
					</p>

					<p class="fieldset">
						<input class="full-width has-padding"
                                                       name="reset "type="submit" value="Reset password">
					</p>
				</form>

				<p class="cd-form-bottom-message"><a href="#0">Torna al login</a></p>
			</div> <!-- cd-reset-password -->
			<a href="#0" class="cd-close-form">Chiudi</a>
		</div> <!-- cd-user-modal-container -->
	</div> <!-- cd-user-modal -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/main.js"></script> <!-- Gem jQuery -->

<?php if($_GET['home'])?>

<div id="immagine">
    <img alt="colline" src="Cattura.jpg"/>
</div>
<div id="contenuto">
    <p>Dal 1975 in una incantevole e silenziosa vallata nel cuore della Sardegna,<br>
            l’azienda Formaggi Pes produce formaggi biologici e tradizionali di altissima qualità.<br><br>

            Il latte prodotto viene lavorato artigianalmente secondo le antiche regole dettate dalla migliore<br>
                tradizione casearia sarda.</p><br><br>
                        <u>Accedi per acquistare!</u></div>
    </body>
	
        
<div id="down">
        <footer>
            <div id="foot_sx">
            <p>Formaggi Pes di Pes Antonio e Salvatore</p>
            <p>tel/fax +39078559687</p>
            <a><h3>email: info@formaggipes.it</h3></a>
             </div>
            <p id="pp">Seguici su:</p>
        <div class="icone">
            <div class = "cambioImmagine">
        <a href="https://www.facebook.com/formaggipes?fref=ts"><img class="visible" src="face.png" onmouseout="this.src='face.png'" onmouseover="this.src='face1.png'" title="facebook"></a>
        <a href="https://twitter.com"> <img class="visible2" src="twi.png" onmouseout="this.src='twi.png'" onmouseover="this.src='twi1.png'" title="twitter"></a>
        <a href="https://googleplus.com"><img class="visible4" src="go.png" onmouseout="this.src='go.png'" onmouseover="this.src='go1.png'" title="google+"></a>
            </div></div>
            <p class="copyright">La descrizione si trova <a href="descrizione.html">Qui</a><br><br> © Formaggi Pes</p></footer>
</div>
</html>