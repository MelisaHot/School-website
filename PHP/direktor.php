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
                                  <a href="direktor.php" style="color: rgb(247, 150, 29); text-shadow: 2px 1px 3px rgb(1,1,1);">Direktor</a>
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
        
<!---------------------DIREKTOR----------------------------------------------->

     <section class="qu">
        <ul class="breadcrumb">
            <li><a href="index.php">POČETNA</a></li>
            <li><a href="direktor.php">O NAMA</a></li>
            <li>DIREKTOR</li>
          </ul>
        <div class="blockquote-wrapper">
            <div class="blockquote">
              <h1>
               Ne učimo <span style="color: #ccc">za školu već</span> za život. 
               </h1>
              <h4 style="color: #ccc;">&mdash;Lucij Anej Seneka</h4>
            </div>
          </div>
     </section>
     <section class="new-qu">
      
        <table style="table-layout: fixed; width: 100%; ">
            <tr>
                <td>
                    <p class="pq">
                        Dobro došli u školu u kojoj se misli i stvara, pita i analizira i u kojoj se razvijaju individualne i kolektivne sposobnosti i gde je nastava, i teorijska, i praktična, način istraživanja. Na ovom sajtu imaćete informacije o Tehničkoj školi Tutin, njenoj organizaciji nastave, područjima rada i obrazovnim profilima i njihovim nastavnim planovima, školskim projektima, kulturnoj i javnoj delatnisti škole.

                        Mi smo škola sa različitim obrazovnim profilima koja nudi sticanje kvalitetnog znanja kroz nastavne i vannastavne aktivnosti. Imperativ vremena je da škola postane podstičuća i zanimljiva za učenika i inspirativna za nastavnika.U školi pripremamo učenika za viši stepen obrzovnog procesa, podstičemo kreativnost i lični razvoj učenika i nastavnika i negujemo svest o pravima i odgovornostima.
                    </p>
                </td>
                <td>
                    <figure>
                        <img src="images/direktor.jpg" style="width: 100%;" > 
                        <figcaption> Direktor škole - Hot Hajruš</figcaption>
                    </figure>
                    
                   
                </td>
            </tr>
        </table>
        <p class="pq">
          Tehnička škola je nastala 1987. godine, izdvajanjem iz Centra za usmereno obrazovanje i vaspitanje „ Bratstvo i jedinstvo“. Osnivanje škole potiče iz realnih potreba opštine da dobije svoje proizvodne kadrove, kao i one koji će nastaviti školovanje na višim školama i fakultetima. 
          </br></br>
          Celokupna nastavno- pedagoška aktivnost škole u proteklom periodu bila je i ostala težnja da se razvije jedna savremena, stručna, materijalno i kadrovski organizovana vaspitno-obrazovna ustanova koja će biti sposobna da inventivnošću nastavnog procesa formira nove, mlade, savremeno obrazovane proizvođače. 
          </br></br>
          Težnja da se izgradi konstruktivna saradnja sa privredom, danas je postala realnost i budućnost škole, jer iz njenih klupa iz godine u godinu izlaze sve bolji stručnjaci, spremni da prihvate savremeni proces proizvodnje. 
          </br></br>
          Moderan prostor u solidna oprema sa kojom rapolaže škola su izazov, ali i obaveza za sve  nastavnike, učenike i roditelje, da ulože maksimum sebe kako bi vaspitno obrazovni proces bio sadržajniji i bogatiji za sva dostignuća koja traži savremena pedagoška nauka i pozitivne nastavne prakse. 
          </br></br>
          Dalje razvijanje saradnje sa roditeljima, radnim i društvenim organizacijama, SO-e, razvojnom iskustvu sa drugim školama u republici i zemlji, razvijanjem svestrane saradnje sa Ministarsvom doprineće da Tehnička škola dobije status jedne od uglednih vaspitno- obrazovnih ustanova koja je otvorila vrata novim procesima u pedagogiji, tehnilogiji nastave, koja je dala snažan podsticaj stvaralačkom žaru i enturijazmu mladih i zdravim ambicijama.
        
        </p>
      
             
     </section>
<!-------------------------POSETITE NAS---------------------------------------------------------------->

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