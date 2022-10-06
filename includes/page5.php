<!-- Définition du type de document (pour HTML5 écrire DOCTYPE en majuscules pour compatibilité XTML5)	-->
<!DOCTYPE html>


<!-- Le HTML commence ici;
	
	avec éventuellement l'attribut lang
	pour préciser la langue utilisée pour le contenu de la page,
	et pour être utile aux synthèses vocales, pour adopter le bon accent;
	ex: <html lang="fr">

	avec éventuellement l'attribut dir
	pour préciser la direction du texte (rendu bidirectionnel du texte);
	ex : <html lang="fr-fr" dir="ltr">
	ltr pour left to right.		 																		-->


<html lang="fr-fr" dir="ltr">


	<head>

		<!-- Encodage presque universel 																-->
		<meta charset="utf-8" />
		
		<!-- ????????????????????												
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">									-->
		
		<!-- RWD, media-queries																			-->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--
		<meta name="viewport" content="width=device-width" >											-->
		
		<!-- URL de base, permet de raccourcir les autres URL de la page					
		<base href="http://mysSite.com/" />																-->

		<!-- Mots clés																					-->
		<meta name="keywords" content="keyword1, keyword2" />
		
		<!-- Auteur																						-->
		<meta name="author" content="auteur" />
		
		<!-- Description de la page																		-->
		<meta name="description" content="description" />
		
		<!-- Logiciel(s) utilisé(s) pour la création du site											-->
		<meta name="generator" content="logiciel générateur" />

		<!-- Appel fichier CSS																			-->
		<link rel="stylesheet" type="text/css" href="../css/style5.css" />

		<!-- Titre de la page dans l'onglet																-->
      	<title>Display - p.5</title>
    
    </head>
  

    <body>

    	<h1>body | h1 | #EEF2F2 | margin 15px 15px 15px 15px | border 5px solid red | font-family playfair_displayregular</h1>
        
        <div id="wrapper">
        	
        	<h2>wrapper | h2 | #23498B | padding 10px 10px 10px 10px | border 5px solid black</h2>    
            
            <header>

                <h3>header | h3 | #BE794C |  | </h3>
                
                <div id="mainTitleWithLogo">
                	<h4>mainTitleWithLogo | h4 | #999666 | padding 10px 10px 10px 10px | border 5px solid black | <span style="color: blue;">p.5 - inline and/or block (nav inline and footersubcase3.1/3.2 block)</span></h4>	
                    <div class="floating-box">
                    	<h5>withLogo | h5 | #999666 | padding 10px 10px 10px 10px | border 5px solid green | float left | width 750px | height 300px</h5>	
                    </div>
                    <div class="floating-box">
                    	<h5>mainTitle | h5 | #999666 | padding 10px 10px 10px 10px | border 5px solid green | float left | width 750px | height 300px</h5>	
                    </div>
                </div>
                


                <nav>
                <?php
                    //Insertion du fichier menu
                    include("nav.php"); 
                ?>
                </nav>

            

            </header>
            
            <div id="bannerImage">
            	<h3>bannerImage | h3 | #BE3623 | padding 10px 10px 10px 10px | border 5px solid red</h3>
                <div id="bannerDescription">
                	<h4>bannerDescription | h4 | #BE7218 | padding 10px 10px 10px 10px | border 5px solid blue</h4>
                </div>
            </div>
            

            <section>

            	<h3>section | h3 | #9EC8F2 | padding 10px 10px 10px 10px | border 5px solid orange</h3>

                <article>

                    <h4>article | h4 | #EEF2F2 | padding 10px 10px 10px 10px | border 5px solid blue</h4>

                    <p>article</p>
                    <p>article</p>
                    <p>article</p>
                    <p>article</p>
                    <p>article</p>
                    <p>article</p>
                    <p>article</p>
                    <p>article</p>
                    <p>article</p>
                    <p>article</p>
                    <p>article</p>
                    <p>article</p>
                    <p>article</p>
                    <p>article</p>
                    <p>article</p>
               
                </article>
                
                <aside>

                    <h4>aside | h4 | #CAF343 | padding 10px 10px 10px 10px | border 5px solid red</h4>
                	
                	<p>aside</p>
                    <p>aside</p>
                    <p>aside</p>
                    <p>aside</p>
                    <p>aside</p>
                
                </aside>
            
            </section>
            
            <footer>
            	
            	<h3>footer | h3 | #1C4174 | padding 10px 10px 10px 10px | border 5px solid red</h3>

                <div id="footercase1">
                
                    <h4>FOOTERCASE 1 | h4 | #1C4174 | padding 10px 10px 10px 10px | border 5px solid orange</h4>
                    <p>footercase 1</p>
                    <p>footercase 1</p>
                    <p>footercase 1</p>
                    <p>footercase 1</p>
                    <p>footercase 1</p>
                
                </div>
                
                <div id="footercase2">

                    <h4>FOOTERCASE 2 | h4 | #1C4174 | padding 10px 10px 10px 10px | border 5px solid green</h4>
                    <p>footercase 2</p>
                    <p>footercase 2</p>
                    <p>footercase 2</p>
                    <p>footercase 2</p>
                    <p>footercase 2</p>
                
                </div>
                
                <div id="footercase3">
                    
                    <h4>FOOTERCASE 3 | h4 | #1C4174 | padding 10px 10px 10px 10px | border 5px solid orange</h4>

                    <p>footercase 3</p>
                    <p>footercase 3</p>
                    <p>footercase 3</p>

                    <div id="footercase31" class="floating-box" >
                   
                    	<h5>FOOTERSUBCASE 3.1 | h5 | #1C4174</h5>
                        <ul>
                            <li><a href="#">footersubcase 3.1</a></li>
                            <li><a href="#">footersubcase 3.1</a></li>
                            <li><a href="#">footersubcase 3.1</a></li>
                            <li><a href="#">footersubcase 3.1</a></li>
                        </ul>

                    </div>

                    <div id="footercase32" class="floating-box">
                     
                        <h5>FOOTERSUBCASE 3.2 | h5 | #1C4174</h5>
                        <ul>
                            <li><a href="#">footersubcase 3.2</a></li>
                            <li><a href="#">footersubcase 3.2</a></li>
                            <li><a href="#">footersubcase 3.2</a></li>
                            <li><a href="#">footersubcase 3.2</a></li>
                        </ul>

                    </div>

                     <div id="footercase33" class="floating-box">
                     
                        <h5>FOOTERSUBCASE 3.3 | h5 | #1C4174</h5>
                        <ul>
                            <li><a href="#">footersubcase 3.3</a></li>
                            <li><a href="#">footersubcase 3.3</a></li>
                            <li><a href="#">footersubcase 3.3</a></li>
                            <li><a href="#">footersubcase 3.3</a></li>
                        </ul>

                    </div>
                
                </div>
            
            </footer>
        
        </div>

    </body>

</html>