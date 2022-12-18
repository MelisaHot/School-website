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
                                  <a href="ucenickiparlament.php" style="color: rgb(247, 150, 29); text-shadow: 2px 1px 3px rgb(1,1,1);">Učenički parlament </a>
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
<!---------------------UCENICKI PARLAMENT----------------------------------------------->

     <section class="qu">
        <ul class="breadcrumb">
            <li><a href="index.php">POČETNA</a></li>
            <li><a href="direktor.php">O NAMA</a></li>
            <li>UČENIČKI PARLAMENT</li>
          </ul>
        </section>
        <section class="new-qu">
            <h2 class="h2so">PLAN RADA UČENIČKOG PARLAMENTA</h2>
            <p class="psr">Zakon o osnovama sistema obrazovanja i vaspitanja reguliše ulogu Učeničkog parlamenta u članu 105. Učenički parlament daje mišljenje i predloge stručnim organima, Školskom odboru, Savetu roditelja i direktoru o :</p> 
            <ul class="ulsr">
                <li>
                    Pravilima ponašanja u Školi;
                </li>
                <li>
                    Merama bezbednosti učenika;
                </li>
                <li>
                    Godišnjem planu rada;
                </li>
                <li>
                    Školskom programu;
                </li>
                <li>
                    Načinu uređivanja školskog prostora;
                </li>
                <li>
                    Učešću na sportskim i drugim takmičenjima;
                </li>
                <li>
                    Slobodnim i vannastavnim aktivnostima.
                </li>

            </ul>
           <p class="psr"> Učenički parlament takođe razmatra odnose i sarađnju učenika i nastavnika, stručnih saradnika i atmosferu u Školi. Parlament obaveštava učenike o svojim aktivnostima i pitanjima od posebnog značaja za školovanje učenika. Clanove parlamenta biraju učenici, odeljenjske zajednice, svake školske godine. Clanovi parlamenta biraju predsednika. Učenički parlament ima pravo predlaganja učenika u Stručni aktiv za ravojno planiranje. Sednicama Školskog odbora prisustvuje predsednik, a po potrebi i ijoš jedan član učeničkog parlamenta. Plan rada učeničkog parlamenta i njegovo ostvarivanje bie sastavni deo godišnjeg izveštaja o radu škole.</p>

       
        <table class="new-table" style="padding: 10px; margin: 10px auto; font-size: 14px;">
            <tr>
                <th  >Sadržaj rada </th>
                <th  > Vreme realizacije</th>
            </tr>
            <tr  >
                <td > <p   >1. Konstituisanje parlamenta</p></td>
                <td> <p   >Septembar</p> </td>
            </tr>
            <tr>
                <td class="even"> <p >2. Obaveze, dužnosti i prava članova parlamenta</p></td>
                <td class="even"> <p >Septembar</p> </td>
            
            </tr>
            <tr>
                <td> <p >3. Razmatranje i usvajanje programa rada</p></td>
                <td> <p >Septembar</p> </td>
            
            </tr>
            <tr>
                <td class="even"> <p >4. Davanje mišljenja i predloga stručnim organima i direktoru </br> o godišnjem planu rada, školskom programu, razvojnom planu</p></td>
                <td class="even"> <p >Septembar</p> </td>
            
            </tr>
            <tr>
                <td> <p >5. Predlaganje članova parlamenta za stručni aktiv za razvojno planiranje</p></td>
                <td> <p >Septembar</p> </td>
            
            </tr>
            <tr>
                <td class="even"> <p >6. Predlaganje članova parlamenta za školski odbor</p></td>
                <td class="even"> <p >Septembar</p> </td>
            
            </tr>
            <tr>
                <td> <p >7. Davanje mišljenja o bezbednosti učenika</p></td>
                <td> <p >Novembar</p> </td>
            
            </tr>
            <tr>
                <td class="even"> <p >8. Razmatranje uspeha učenika i izostajanje sa nastave</p></td>
                <td class="even"> <p >Novembar-Februar-April</p> </td>
            
            </tr>
            <tr>
                <td> <p >9. Utvrđivanje predloga kriterijuma za pravdanje izostajanja sa nastave</p></td>
                <td> <p >Novembar</p> </td>
            
            </tr>
            <tr>
                <td class="even"> <p >10. Razmatranje pravila ponašanja u školi i utvrđivanje novih predloga</p></td>
                <td class="even"> <p >Novembar</p> </td>
            
            </tr>
            <tr>
                <td> <p >11. Razmatranje uključivanja učenikau proces samovrednovanjarada škole</p></td>
                <td> <p >Februar</p> </td>
            
            </tr>
            <tr>
                <td class="even"> <p >12. Predlozi za poboljšanje uslova rada učenika</p></td>
                <td class="even"> <p >Mart</p> </td>
            
            </tr>
            <tr>
                <td> <p >13. Izveštaji sa takmičenja učenika</p></td>
                <td> <p >Mart-April</p> </td>
            
            </tr>
            <tr>
                <td class="even"> <p >14. Organizacija školskih takmičenja i drugih manifestacija</p></td>
                <td class="even"> <p >April-Maj</p> </td>
            
            </tr>
            <tr>
                <td> <p >15. Rad sekcija u školi-slobodnih i vannastavnih aktivnosti</p></td>
                <td> <p >Tokom godine</p> </td>
            
            </tr>
            <tr>
                <td class="even"> <p >16. Uspešne aktivnosti i problemi rada odeljenjskih zajednica</p></td>
                <td class="even"> <p >Tokom godine</p> </td>
            
            </tr>
            <tr>
                <td> <p >17. Humanitarne aktivnosti (pomoć druga, davanje krvi, mat. pomoć)</p></td>
                <td> <p >Tokom godine</p> </td>
            
            </tr>
            <tr>
                <td class="even"> <p >18. Susreti sa članovima parlamenta drugih škola</p></td>
                <td class="even"> <p >Tokom godine</p> </td>
            
            </tr>


        </table>
 
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