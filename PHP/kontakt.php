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
                                <a class="dropbtn" href="direktor.php" style="color: rgb(247, 150, 29); text-shadow: 2px 1px 3px rgb(1,1,1);">O NAMA <i class="fa fa-caret-down"></i></a>
                                <div class="dropdown-content">
                                  <a href="direktor.php">Direktor</a>
                                  <a href="nastavnikadar.php">Nastavni kadar</a>
                                  <a href="skolskiodbor.php">Školski odbor</a>
                                  <a href="savetroditelja.php"> Savet roditelja </a>
                                  <a href="ucenickiparlament.php">Učenički parlament </a>
                                  <a href="timovi.php"> Timovi </a>
                                  <a href="galerija.php">Galerija </a>
                                  <a href="kontakt.php" style="color: rgb(247, 150, 29); text-shadow: 2px 1px 3px rgb(1,1,1);"> Kontakt </a>
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
                                <a class="dropbtn" href="sekcije.php">UČENIČKI KUTAK
                                  <i class="fa fa-caret-down"></i>
                                </a>
                                <div class="dropdown-content">
                                  <a  href="sekcije.php">Sekcije</a>
                                  <a  href="ucenickagalerija.php">Učenička galerija</a>                              
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
<!---------------------KONTAKT----------------------------------------------->
    <section class="qu">
        <ul class="breadcrumb">
            <li><a href="index.php">POČETNA</a></li>
            <li><a href="direktor.php">O NAMA</a></li>
            <li>KONTAKT</li>
        </ul>
    </section>
    <section class="location">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5836.498775354908!2d20.332639!3d42.994083!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x135327f5c6b250d5%3A0x780bcacb2562037d!2z0KHRgNC10LTRmtCwINGC0LXRhdC90LjRh9C60LAg0YjQutC-0LvQsCDQotGD0YLQuNC9!5e0!3m2!1sen!2srs!4v1631223797432!5m2!1sen!2srs" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>
    <section class="contact-us">
        <div class="row">
            <div class="contact-col">
                <div>
                    <i class="fa fa-home"></i>
                    <span>
                        <h5>
                            7. jul 18 </br>
                            36320 Tutin
                        </h5>
                        
                    </span>
                </div>
                <div>
                    <i class="fa fa-phone"></i>
                    <span>
                        <h5>
                            Tel: 020/811-160 </br>
                            Fax: 020/510-0252 
                        </h5>
                    </span>
                </div>
                <div>
                    <i class="fa fa-envelope-o"></i>
                    <span>
                        <h5>
                            tehtutin1@gmail.com
                        </h5>
                    </span>
                </div>
            </div>
            <div class="contact-col">
                <form action="contact-handler.php" method="POST">
                    <input type="text" name="name" placeholder="Unesite svoje ime" required >
                    <input type="email" name="email" placeholder="Unesite email adresu" required >
                    <input type="text" name="subject" placeholder="Unesite naslov" required >
                    <textarea rows="8" name="message" placeholder="Poruka"></textarea>
                    <button type="submit" class="red-btn">Pošalji poruku</button>
                </form>
            </div>
        </div>
        <h2 class="h2so"> Službe škole</h2>
        <div class="ro" style="color: #000; ">
            <div class="column" style="width: 33.33%;" >
                <h3>Pedagog</h3>
                <h3>Enesa Vejselović, dipl. pedagog</h3>
                
                </div>
                <div class="column" style="width: 33.33%;">
                    <h3>Pravna služba</h3>
                    <h3>Hurija Klimenta, dipl. pravnik </h3>
                    <h3>+ Tel: +381/63-891 3505 </h3>

                </div>
                <div class="column" style="width: 33.33%;" >
                    <h3> Računovodstvo</h3>
                    <h3>Jasmin Dreković, dipl. ekonomista</h3>
                    <h3>+ Tel: +381/69-777 332</h3>
                </div>
        </div>
        <div class="ro" style="color: #000;">
            <div class="column" style="width: 33.33%;" >
                <h3> Psiholog</h3>
                <h3>Azemina Tutić, dipl. psiholog</h3>
            </div>
            <div class="column" style="width: 33.33%;">
                <h3>Bibliotekar</h3>
                <h3>Fadil Prelic, dipl. inž. tekstilstva</h3> 
            </div>
            <div class="column" style="width: 33.33%;" >
                <h3>Referent za rad sa vanrednim kandidatima</h3>
                <h3>Samir Fakić</h3>   
                <h3>+ Tel: +381/63-466 000</h3>
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







    </body>

</html>