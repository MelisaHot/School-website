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
                                <a class="dropbtn" href="odeljenjskestaresine.php" style="color: rgb(247, 150, 29); text-shadow: 2px 1px 3px rgb(1,1,1);">NASTAVA <i class="fa fa-caret-down"></i></a>
                                <div class="dropdown-content">
                                  <a  href="odeljenjskestaresine.php" style="color: rgb(247, 150, 29); text-shadow: 2px 1px 3px rgb(1,1,1);">Odeljenjske starešine</a>
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
<!-----------------------ODELJENJSKE STAREŠINE-------------------------------------------->

     <section class="qu">
        <ul class="breadcrumb">
            <li><a href="index.php">POČETNA</a></li>
            <li><a href="odeljenjskestaresine.php">NASTAVA</a></li>
            <li>ODELJENJSKE STAREŠINE</li>
          </ul>
    </section>
    <section class="new-qu">
        <h2 class="h2so"> ODELJENJSKE STAREŠINE</h2>
        <div class="ro" style="padding: 10px; padding-left: 10px;">
            <div class="column" >
                <table class="new-table">
                    <tr>
                        <th> Odeljenje</th>
                        <th> Odeljenjske starešine</th>
                    </tr>
                    <tr>
                        <td> I-1 </td>
                        <td> Azemina Hadžić </td>
                    </tr>
                    <tr>
                        <td class="even"> I-2 </td>
                        <td class="even"> Imer Ademović  </td>
                    </tr>
                    <tr>
                        <td> I-3 </td>
                        <td> Hajriz Nezirović</td>
                    </tr>
                    <tr>
                        <td class="even"> I-4 </td>
                        <td class="even">Marija Vukajlović </td>
                    </tr>
                    <tr>
                        <td> I-5 </td>
                        <td> Jasmina Numanović Dreković</td>
                    </tr>
                    <tr>
                        <td class="even"> I-6 </td>
                        <td class="even"> Fatima Hajrizović</td>
                    </tr>
                    <tr>
                        <td> I-7 </td>
                        <td>Muzafer Mujević </td>
                    </tr> 
                    <tr>
                        <td colspan="2">Predsednik odeljenjskog veća prvog razreda: Imer Ademović</td>
                    </tr> 
                </table>
            </div>
            <div class="column" >
                <table class="new-table">
                    <tr>
                        <th> Odeljenje </th>
                        <th> Odeljenjske starešine</th>
                    </tr>
                    <tr>
                        <td> II-1 </td>
                        <td >Anesa Derdemez </td>
                    </tr>
                    <tr>
                        <td class="even"> II-2</td>
                        <td class="even"> Edita Pepić</td>
                    </tr>
                    <tr>
                        <td> II-3</td>
                        <td> Esad Zukorlić</td>
                    </tr>
                    <tr>
                        <td class="even"> II-4</td>
                        <td class="even"> Zoran Mihajlović </td>
                    </tr>
                    <tr>
                        <td> II-5</td>
                        <td> Fadil Bronja </td>
                    </tr>
                    <tr>
                        <td class="even"> II-6</td>
                        <td class="even"> Sanela Prelić </td>
                    </tr>
                    <tr>
                        <td> II-7</td>
                        <td> Zoran Zečević </td>
                    </tr>
                    <tr>
                        <td colspan="2">Predsednik odeljenjskog veća drugog razreda: Anesa Derdemez</td>
                    </tr>
        
                </table>
            </div>
            <div class="column" >
                <table class="new-table">
                    <tr>
                        <th> Odeljenje </th>
                        <th> Odeljenjske starešine </th>
                    </tr>
                    <tr>
                        <td> III-1 </td>
                        <td> Alma Bajrović </td>
                    </tr>
                    <tr>
                        <td class="even"> III-2 </td>
                        <td class="even"> Dijana Stevanović </td>
                    </tr>
                    <tr>
                        <td> III-3 </td>
                        <td> Emina Muratović</td>
                    </tr>
                    <tr>
                        <td class="even"> III-4 </td>
                        <td class="even"> Safet Ademović </td>
                    </tr>
                    <tr>
                        <td> III-5 </td>
                        <td> Verica Savić</td>
                    </tr>
                    <tr>
                        <td class="even"> III-6 </td>
                        <td class="even"> Harun Eminović </td>
                    </tr>
                    <tr>
                        <td> III-7 </td>
                        <td> Senada Ademović </td>
                    </tr>
                    <tr>
                        <td class="even"> III-8 </td>
                        <td class="even"> Vahid Pepić </td>
                    </tr>
                    <tr>
                        <td colspan="2">Predsednik odeljenjskog veća trećeg razreda: Vahid Pepić </td>
                    </tr>
                </table>
            </div>
                <div class="column" >
                    <table class="new-table">
                        <tr>
                            <th> Odeljenje </th>
                            <th> Odeljenjske starešine </th>
                        </tr>
                        <tr>
                            <td> IV-1 </td>
                            <td> Nezrina Pepić </td>
                        </tr>
                        <tr>
                            <td class="even"> IV-2 </td>
                            <td class="even"> Mujo Taraniš </td>
                        </tr>
                        <tr>
                            <td> IV-3 </td>
                            <td> Kevser Hot</td>
                        </tr>
                        <tr>
                            <td class="even"> IV-4 </td>
                            <td class="even"> Ramiz Jusufović</td>
                        </tr>
                        <tr>
                            <td> IV-5 </td>
                            <td>Damir Hadžić </td>
                        </tr>
                            <td colspan="2">Predsednik odeljenjskog veća četvrtog razreda: Ramiz Jusufović </td>
                          </tr>
                    </table>
                </div>
            </div>
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