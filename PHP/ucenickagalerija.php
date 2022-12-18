<?php session_start(); 
?>
<html lang="en-US">
    <head>
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <title>Tehnicka skola Tutin</title>
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
        <script type="text/javascript" src="script.js"></script>
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    </head>
    
    <body>
    <section class="header">
            <nav >
                <a  href="index.php"><img src="images/logo1.png" ></a>
                <div class="nav-links" id="navLinks">
                    <i class="fa fa-times" onclick="hideMenu()"></i>
                    <ul>
                        <li class="act"><a href="index.php" >POČETNA</a></li>
                        <li >
                            <div class="dropdown">
                                <a class="dropbtn" href="direktor.php">O NAMA <i class="fa fa-caret-down"></i></a>
                                <div class="dropdown-content">
                                  <a href="direktor.php">Direktor</a>
                                  <a href="nastavnikadar.php">Nastavni kadar</a>
                                  <a href="skolskiodbor.php">Školski odbor</a>
                                  <a href="savetroditelja.php"> Savet roditelja </a>
                                  <a href="ucenickiparlament.php">Učenički parlament </a>
                                  <a href="timovi.php"> Timovi </a>
                                  <a href="galerija.php">Galerija </a>
                                  <a href="kontakt.php"> Kontakt </a>
                                </div>
                              </div> 
                        </li>
                        <li>
                            <div class="dropdown">
                                <a class="dropbtn" href="odeljenjskestaresine.php">NASTAVA <i class="fa fa-caret-down"></i></a>
                                <div class="dropdown-content">
                                  <a  href="odeljenjskestaresine.php">Odeljenjske starešine</a>
                                  <a  href="prakticnanastava.php">Praktična nastava</a>
                                  <a  href="rasporedzvonjenja.php">Raspored zvonjenja</a>
                                  <a  href="skolskikalendar.php"> Školski kalendar </a>
                                </div>
                              </div> 
                            </li>
                        <li>
                            <div class="dropdown">
                                <a class="dropbtn" href="vanrednikandidati.php">VANREDNI KANDIDATI <i class="fa fa-caret-down"></i></a>
                                <div class="dropdown-content">
                                  <a  href="vanrednikandidati.php">Obaveštenja</a>
                                  <a  href="upisvanrednih.php">Upis vanrednih učenika</a>
                                  <a  href="ispitnirokovi.php">Ispitni rokovi</a>                                
                                </div>
                              </div> 
                        </li>
                        <li >
                            <div class="dropdown">
                                <a class="dropbtn" href="sekcije.php" style="color: rgb(247, 150, 29); text-shadow: 2px 1px 3px rgb(1,1,1);">UČENIČKI KUTAK
                                  <i class="fa fa-caret-down"></i>
                                </a>
                                <div class="dropdown-content">
                                  <a  href="sekcije.php">Sekcije</a>
                                  <a  href="ucenickagalerija.php" style="color: rgb(247, 150, 29); text-shadow: 2px 1px 3px rgb(1,1,1);">Učenička galerija</a>                              
                                </div>
                              </div> 
                        </li>
                        <li >
                            <div class="dropdown">
                                <a class="dropbtn" href="nastavnimaterijal.php">UČENJE NA DALJINU <i class="fa fa-caret-down"></i></a>
                                <div class="dropdown-content">
                                  <a href="nastavnimaterijal.php">Nastavni materijal</a>
                                  <?php
                                        if(isset($_SESSION['user'])&&(($_SESSION['tip']=='1') || $_SESSION['tip']=='2')){
                                        echo "   
                                        <a href='nastavnajedinica.php'>Nova nastavna jedinica</a>
                                            ";
                                        }
                                    ?>                           
                                </div>
                              </div> 
                        </li>
                        <li >
                            <div class="dropdown">
                                <a class="dropbtn" href="dokumenti.php">DOKUMENTI <i class="fa fa-caret-down"></i></a>
                                <div class="dropdown-content">
                                  <a href="dokumenti.php">Dokumenti škole</a>                              
                                </div>
                              </div> 
                        </li>
                        <li ><a href=" registracija.php">REGISTRUJ SE</a></li>
                        <?php
                            if(isset($_SESSION['user'])){
                            echo "   
                            <li ><a href='odjava.php'>ODJAVI SE</a></li>
                                ";
                            }else{
                            echo "   
                                    <li ><a href=' prijava.php'>PRIJAVI SE</a></li>
                                ";
                            } 
                        ?>
                        
                        <?php
                            if(isset($_SESSION['user'])&&($_SESSION['tip']=='1')){
                            echo '
                            <li >
                            <div class="dropdown">
                                <a class="dropbtn" href="novaobavestenja.php">ADMIN OPCIJE <i class="fa fa-caret-down"></i></a>
                                <div class="dropdown-content">
                                  <a  href="novaobavestenja.php">Nova obaveštenja</a>
                                  <a  href="korisnici.php">Upravljanje korisnicima</a>
                                  <a  href="novadokumenta.php">Nova dokumenta </a>
                                </div>
                            </div> 
                        </li>
                            ';
                            }
                        
                        ?>
                    </ul>
                    </div>
                <i class="fa fa-bars" onclick="showMenu()"></i>
               
            </nav>

            <div class="text-box">
                <h1>TEHNIČKA ŠKOLA TUTIN</h1>
                <p> Kvalitetno obrazovanje i napredak naših učenika najveća je i najbolja potvrda našeg uspeha. </div>

        </section>
<!---------------------GALERIJA-------------------------------------------->

    <section class="qu">
            <ul class="breadcrumb">
                <li><a href="index.php">POČETNA</a></li>
                <li><a href="sekcije.php">UČENIČKI KUTAK</a></li>
                <li>SEKCIJE</li>
            </ul>
    </section>
    <section class="new-qu">
        <h2 class="h2so">GALERIJA </h2>
            <div class="container">
	<div class="top">
    

    	<ul>
        <li><a href="#img_1"><img src="images/1slika.jpg"></a></li>
        <li><a href="#img_2"><img src="images/2slika.jpg"></a></li>
        <li><a href="#img_3"><img src="images/3slika.jpg"></a></li>
        <li><a href="#img_4"><img src="images/4slika.jpg"></a></li>
        <li><a href="#img_5"><img src="images/5slika.jpg"></a></li>
        <li><a href="#img_6"><img src="images/6slika.jpg"></a></li>
        <li><a href="#img_7"><img src="images/7slika.jpg"></a></li>
        <li><a href="#img_8"><img src="images/8slika.jpg"></a></li>
        <li><a href="#img_9"><img src="images/9slika.jfif"></a></li>
        <li><a href="#img_10"><img src="images/10slika.jpg"></a></li>
        <li><a href="#img_11"><img src="images/11slika.jpg"></a></li>
        <li><a href="#img_12"><img src="images/12slika.jpg"></a></li>
        <li><a href="#img_13"><img src="images/13slika.jpg"></a></li>
        <li><a href="#img_14"><img src="images/14slika.jpg"></a></li>
        <li><a href="#img_15"><img src="images/15slika.jfif"></a></li>
        <li><a href="#img_16"><img src="images/16slika.jpg"></a></li>
            
        </ul>
        <a href="#_1" class="lightbox trans" id="img_1"><img src="images/1slika.jpg"></a>
        <a href="#_2" class="lightbox trans" id="img_2"><img src="images/2slika.jpg"></a>
        <a href="#_3" class="lightbox trans" id="img_3"><img src="images/3slika.jpg"></a>
        <a href="#_4" class="lightbox trans" id="img_4"><img src="images/4slika.jpg"></a>
        <a href="#_5" class="lightbox trans" id="img_5"><img src="images/5slika.jpg"></a>
        <a href="#_6" class="lightbox trans" id="img_6"><img src="images/6slika.jpg"></a>
        <a href="#_7" class="lightbox trans" id="img_7"><img src="images/7slika.jpg"></a>
        <a href="#_8" class="lightbox trans" id="img_8"><img src="images/8slika.jpg"></a> 
        <a href="#_9" class="lightbox trans" id="img_9"><img src="images/9slika.jfif"></a>
        <a href="#_10" class="lightbox trans" id="img_10"><img src="images/10slika.jpg"></a>
        <a href="#_11" class="lightbox trans" id="img_11"><img src="images/11slika.jpg"></a>
        <a href="#_12" class="lightbox trans" id="img_12"><img src="images/12slika.jpg"></a>
        <a href="#_13" class="lightbox trans" id="img_13"><img src="images/13slika.jpg"></a>
        <a href="#_14" class="lightbox trans" id="img_14"><img src="images/14slika.jpg"></a>
        <a href="#_15" class="lightbox trans" id="img_15"><img src="images/15slika.jfif"></a>
        <a href="#_16" class="lightbox trans" id="img_16"><img src="images/16slika.jpg"></a> 
       </div>
</div>
   
    </section>


<!---------------------------FOOTER------------------------------------------>
<section class="footer">
    <div class="ro">
        <div class="column" >
            <img src="images/tel.png" class="imgg">
            <h3>Tel: 020/811-160</h3>
            <h3>Fax: 020/510-0252</h3>
        </div>
        <div class="column" >
            <img src="images/address.png" class="imgg">
            <h3>Adresa: 7. jul 18</h3>
            <h3>36320 TUTIN</h3>

        </div>
        <div class="column" >
            <img src="images/email.png" class="imgg">
            <h3>E-mail: tehtutin1@gmail.com</h3>
        </div>
        <div class="column" >
            <img src="images/social.png" class="imgg">
           
            <div class="icons">
                <h3> Ostani konektovan</h3>
                <a href="https://www.facebook.com/"> <i class="fa fa-facebook" ></i></a>
                <a href="https://www.twitter.com/"> <i class="fa fa-twitter" ></i></a>
                <a href="https://www.instagram.com/"> <i class="fa fa-instagram" ></i></a>
                <a href="https://www.pinterest.com/"> <i class="fa fa-pinterest" ></i></a>
                <a href="https://www.youtube.com/"> <i class="fa fa-youtube" ></i></a>
            </div>
        </div>
      </div>
    <p class="p-footer"> Žiro račun: 840-893666-16 | PIB: 102021423 | Matični broj: 07350767 
    <p class="p-footer">&copy 2021. Tehnička škola Tutin - Sva prava zadržana </p>
    <p class="p-footer"> Made with <i class="fa fa-heart" ></i> Tehnička škola Tutin </p>

</section>



