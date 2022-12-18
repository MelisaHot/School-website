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
                                  <a href="timovi.php" style="color: rgb(247, 150, 29); text-shadow: 2px 1px 3px rgb(1,1,1);"> Timovi </a>
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
<!---------------------TIMOVI----------------------------------------------->

    <section class="qu">
        <ul class="breadcrumb">
            <li><a href="index.php">POČETNA</a></li>
            <li><a href="direktor.php">O NAMA</a></li>
            <li>TIMOVI</li>
        </ul>
    </section>
    <section class="new-qu">
        <h2 class="h2so">STRUČNI AKTIVI I TIMOVI</h2>
            <div class="row-new">
                <div class="column-new">
                    <h2 class="h2so" style="text-align: left; color: rgb(247, 148, 29); padding: 20px;">Tim za izradu godišnjeg plan rada škole i školskog programa</h2>
                    <ul class="ulsr">
                        <li> Hajruš Hot, rukovodilac </li>
                        <li> Azemina Tutić </li>
                        <li> Enesa Vejselović </li>
                        <li> Damir Hadžić </li>
                        <li> Anesa Derdemez </li>
                        <li> Imer Ademović </li>
                    </ul>
                </div>
                <div class="column-new">
                    <h2 class="h2so" style="text-align: left; color: rgb(247, 148, 29); padding: 20px;">Tim za razvojni plan škole </h2>
                    <ul class="ulsr">
                        <li> Hajruš Hot, rukovodilac </li>
                        <li> Enesa Vejselović </li>
                        <li> Hurija Klimenta </li>
                        <li> Zoran Mihajlović </li>
                    </ul>
                </div>
            </div>
            <div class="row-new">
                <div class="column-new">
                    <h2 class="h2so" style="text-align: left; color: rgb(247, 148, 29); padding: 20px;">Tim za inkluziju</h2>
                    <ul class="ulsr">
                        <li> Azemina Tutić, rukovodilac </li>
                        <li> Enesa Vejselović </li>
                        <li> Hajriz Nezirović </li>
                        <li> Admira Koničanin </li>
                        <li> Članovi OV IV-3 i IV-6 </li>
                        <li> Mejrema Klimenta, roditelj </li>
                        <li> Hasima Muminović, roditelj </li>
                    </ul>
                </div>
                <div class="column-new">
                    <h2 class="h2so" style="text-align: left; color: rgb(247, 148, 29); padding: 20px;">Tim za samovrednovanje</h2>
                    <ul class="ulsr">
                        <li> Enesa Vejselović, rukovodilac </li>
                        <li> Zoran Zečević </li>
                        <li> Remzo Metović </li>
                        <li> Selver Pepić </li>
                        <li> Ljiljana Zečević </li>
                    </ul>
                </div>
            </div>
            <div class="row-new">
                <div class="column-new">
                    <h2 class="h2so" style="text-align: left; color: rgb(247, 148, 29); padding: 20px;">Tim za kulturnu i javnu delatnost škole</h2>
                    <ul class="ulsr">
                        <li>  Azemina Hadžić, rukovodilac </li>
                        <li> Emina Muratović </li>
                        <li> Fadil Prelić  </li>
                        <li> Edita Pepić </li>
                        <li> Dijana Stevanović </li>
                    </ul>
                </div>
                <div class="column-new">
                    <h2 class="h2so" style="text-align: left; color: rgb(247, 148, 29); padding: 20px;">Tim za prevenciju i zaštitu učenika od zlostavljanja i zanemarivanja</h2>
                    <ul class="ulsr">  
                        <li> Azemina Tutić, rukovodilac  </li>
                        <li> Hajruš Hot </li>
                        <li> Melida Škrijelj </li>
                        <li> Fidahija Bećković </li>
                        <li> Anes Numanović, školski policajac </li>
                        <li> Omer Hadžić, preds.saveta rod </li>
                        <li> Ismet Medović </li>
                    </ul>
                </div>
            </div>
            <div class="row-new">
                <div class="column-new">
                    <h2 class="h2so" style="text-align: left; color: rgb(247, 148, 29); padding: 20px;">Tim za standard učenika</h2>
                    <ul class="ulsr">
                        <li> Azemina Tutić, rukovodilac </li>
                        <li> Enesa Vejselović </li>
                        <li> Jadranka Zečević </li>
                        <li> Hurija Klimenta </li>
                        <li> Ramiz Jusufović </li>
                    </ul>
                </div>
                <div class="column-new">
                    <h2 class="h2so" style="text-align: left; color: rgb(247, 148, 29); padding: 20px;">Tim za zaštitu životne sredine</h2>
                    <ul class="ulsr">
                        <li> Zečević Ljiljana, rukovodilac </li>
                        <li> Dušan Popović </li>
                        <li> Elena Fakić </li>
                        <li> Dževad Jusufović </li>
                        <li> Melisa Curić </li>
                    </ul>
                </div>
            </div>
            <div class="row-new">
                <div class="column-new">
                    <h2 class="h2so" style="text-align: left; color: rgb(247, 148, 29); padding: 20px;">Tim za saradnju sa porodicom</h2>
                    <ul class="ulsr">
                        <li> Enesa Vejselović, rukovodilac </li>
                        <li> Anesa Derdemez </li>
                        <li> Hajruš Hot </li>
                        <li> Zoran Zečević </li>
                        <li> Ahmedin Bulić </li>
                    </ul>
                </div>
                <div class="column-new">
                    <h2 class="h2so" style="text-align: left; color: rgb(247, 148, 29); padding: 20px;">Tim za saradnju sa lokalnom samoupravom</h2>
                    <ul class="ulsr">
                        <li> Hajruš Hot, rukovodilac </li>
                        <li> Ahmedin Bulić </li>
                        <li> Šefkija Bronja </li>
                        <li> Nezrina Pepić </li>
                        <li> Kemal Hot, član saveta roditelja </li>
                    </ul>
                </div>
            </div>
            <div class="row-new">
                <div class="column-new">
                    <h2 class="h2so" style="text-align: left; color: rgb(247, 148, 29); padding: 20px;">Tim za humanitarne i sportske aktivnosti</h2>
                    <ul class="ulsr">
                        <li> Hajriz Nezirović, rukovodilac </li>
                        <li> Remzo Metović </li>
                        <li> Imer Ademović </li>
                        <li> Amil Bronja </li>
                        <li> Muamer Habibović </li>
                    </ul>
                </div>
                <div class="column-new">
                    <h2 class="h2so" style="text-align: left; color: rgb(247, 148, 29); padding: 20px;">Tim za stručno usavršavanje nastavnika i stručnih saradnika</h2>
                    <ul class="ulsr">
                        <li> Hajruš Hot, rukovodilac </li>
                        <li> Enesa Vejselović  </li>
                        <li> Damir Hadžić </li>
                        <li> Admira Koničanin </li>
                        <li> Esad Zukorlić </li>
                    </ul>
                </div>
            </div>
            <div class="row-new">
                <div class="column-new">
                    <h2 class="h2so" style="text-align: left; color: rgb(247, 148, 29); padding: 20px;">Tim za karijerno vođenje i savetovanje</h2>
                    <ul class="ulsr">
                        <li> Admira Koničanin, rukovodilac </li>
                        <li> Selver Pepić </li>
                        <li> Anesa Derdemez </li>
                        <li> Sanela Prelić </li>
                        <li> Alma Bajrović </li>
                    </ul>
                </div>
                <div class="column-new">
                    <h2 class="h2so" style="text-align: left; color: rgb(247, 148, 29); padding: 20px;">Rukovodioci stručnih veća </h2>
                    <ul class="ulsr">
                        <li> Marija Vukajlović - Stručno veće nastavnika srpskog jezika i književnosti, bosanskog jezika i stranih jezika </li>
                        <li> Hanefija Dedeić - Stručno veće društvenih nauka </li>
                        <li> Raica Popović - Stručno veće prirodnih nauka </li>
                        <li> Kevser Hot	- Stručno veće nastavnika stručnih predmeta mašinstva i obrade metala </li>
                        <li> Harun Eminović - Stručno veće nastavnika stručnih predmeta šumarstva i obrade drveta </li>
                        <li> Fatima Hajrizović - Stručno veće nastavnika stručnih predmeta tekstilstva i kožarstva </li>
                        <li> Alma Bajrović - Stručno veće nastavnika stručnih predmeta ekonomije </li>
                        <li> Muamer Habibović - Stručno veće nastavnika stručnih predmeta saobraćaja </li>
                        <li> Vahid  Pepić - Stručno veće nastavnika stručnih predmeta elektrotehnike </li>
                    </ul> 
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