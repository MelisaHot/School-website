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
                                  <a href="nastavnikadar.php" style="color: rgb(247, 150, 29); text-shadow: 2px 1px 3px rgb(1,1,1);">Nastavni kadar</a>
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
<!---------------------NASTAVNI KADAR---------------------------------------------->

    <section class="qu">
        <ul class="breadcrumb">
            <li><a href="index.php">POČETNA</a></li>
            <li><a href="direktor.php">O NAMA</a></li>
            <li>NASTAVNI KADAR</li>
        </ul>
    </section>
        <section class="new-qu">

            <h2 class="h2so">NASTAVNI KADAR</h2>
         
               <div class="row-new">
                    <div class="column-new">
                    <h2> OPŠTI PREDMETI</h2>
                    <table class="new-table">
                        <tr>
                            <th>Oblast </th>
                            <th> Nastavni kadar</th>
                        </tr>
                        <tr>
                            <td rowspan="7"  class="even">
                                <p>Srpski jezik i književnost</p> 
                            </td>
                            <td>
                                <p>Marija Vukajlović</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="even">
                                <p>Mujo Taraniš</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Emina Muratović</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="even"> 
                                <p> Azemina Hadžić</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>  Šahim Džudžević</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="even">
                                <p> Edita Pepić</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p> Elzina Murić</p>
                            </td>
                        </tr>
                        <tr>
                            <td rowspan="5">
                                <p>Matematika</p>
                            </td>
                            <td class="even">
                                <p> Ramiz Jusufović</p> 
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Jasmina Dreković Numanović</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="even"> 
                                <p>Fidahija Bećković </p>
                            </td>
                        </tr>
                        <tr>
                            <td> 
                                <p>Sabina Dazdarević </p>
                            </td>
                        </tr>
                        <tr>
                            <td class="even"> 
                                <p>Džemail Džemić </p>
                            </td>
                        </tr>

                        <tr>
                            <td rowspan="4" class="even">
                                <p>Engleski jezik</p>
                            </td>
                            <td>
                                <p>Dijana Stevanović</p> 
                            </td>
                        </tr>
                        <tr>
                            <td class="even">
                                <p>Melida Ademović Škrijelj</p>
                            </td>
                        </tr>
                        <tr>
                            <td> 
                                <p>Elvedin  Gegić</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="even"> 
                                <p>Elena Fakić</p>
                            </td>
                        </tr>
                        <tr>
                            <td> <p>Istorija</p></td>
                            <td><p>Nemanja Perović</p></td>
                        </tr>
                        <tr>
                            <td class="even"> <p>Biologija</p></td>
                            <td class="even"><p>Ljiljana Zečević</p></td>
                        </tr>
                        <tr>
                            <td> <p>Ekologija i zaštita životne sredine</p></td>
                            <td><p>Melisa Curić</p></td>
                        </tr>

                        <tr>
                            <td rowspan="2" class="even"> <p>Geografija</p></td>
                            <td class="even"><p>Mesud Ramičević</p></td>
                        </tr>
                        <tr>
                            <td><p>Lejla Gegić</p></td>
                        </tr>
                        <tr>
                            <td > <p>Fizika</p></td>
                            <td class="even"><p>Magbula Džemić</p></td>
                        </tr>
                        <tr>
                            <td rowspan="2" class="even"> <p>Hemija</p></td>
                            <td><p>Raica Popović</p></td>
                        </tr>
                        <tr>
                            <td class="even"><p>Huso Hasić</p></td>
                        </tr>

                        <tr>
                            <td> <p>Psihologija</p></td>
                            <td><p>Iso Čuljević</p></td>
                        </tr>
                        <tr>
                            <td rowspan="2" class="even"> <p>Informatika</p></td>
                            <td class="even"><p>Damir Hadzić</p></td>
                        </tr>
                        <tr>
                            <td><p>Smajo Šaćirović</p></td>
                        </tr>

                        <tr>
                            <td rowspan="4"> <p>Fizičko vaspitanje</p></td>
                            <td class="even"><p>Admira Koničanin</p></td>
                        </tr>
                        <tr>
                            <td><p>Amil Bronja</p></td>
                        </tr>
                        <tr>
                            <td class="even"><p>Imer Ademović</p></td>
                        </tr>
                        <tr>
                            <td><p>Remzo Metović</p></td>
                        </tr>
                        <tr>
                            <td class="even"><p> Likovna Umetnost </p> </td>
                            <td class="even"><p>Dušan Popović </p> </td>
                        </tr>

                        <tr>
                            <td rowspan="2"> <p>Islamska veronauka</p></td>
                            <td><p>Edževid Hot</p></td>
                        </tr>
                        <tr>
                            <td class="even"><p>Senadija Bećirović</p></td>
                        </tr>

                        <tr>
                            <td class="even"> <p>Pravoslavna veronauka</p></td>
                            <td><p>Vlajko Godžević</p></td>
                        </tr>
                    </table>
                </div>
                     
                <div class="column-new">
                
                    <h2> STRUČNI PREDMETI</h2>
                        <table class="new-table">
                            <tr>
                                <th>Oblast </th>
                                <th> Nastavni kadar</th>
                            </tr>
                        <tr>
                            <td rowspan="7" >
                                <p> Stručni predmeti  u ekonomiji</p>
                            </td>
                            <td class="even">
                                <p>Anesa Derdemez</p> 
                            </td>
                        </tr>
                        <tr>
                            <td> 
                                <p>Nezrina Pepić</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="even">  <p>Alma Bajrović</p></td>
                        </tr>
                        <tr>
                            <td> <p>Edina Pepić</p></td>
                        </tr>
                        <tr>
                            <td class="even"> <p> Elvis Ćorović</p></td>
                        </tr>
                        <tr>
                            <td> <p> Senada Hamzagić</p></td>
                        </tr>
                        <tr>
                            <td class="even"> <p>Sabina Dreković</p></td>
                        </tr>


                        <tr>
                            <td rowspan="12" class="even">
                                <p> Stručni predmeti  u mašinstvu</p>
                            </td>
                            <td><p>Kevser Hot</p> </td>
                        </tr>
                        <tr>
                            <td class="even"> <p>Esad Zukorlić</p> </td>
                        </tr>
                        <tr>
                            <td> <p>Safet Ademović</p></td>
                        </tr>
                        <tr>
                            <td class="even"> <p>Zoran Mihajlović</p></td>
                        </tr>
                        <tr>
                            <td> <p> Radovan Stašević</p></td>
                        </tr>
                        <tr>
                            <td class="even"> <p> Hajriz Nezirović</p></td>
                        </tr>
                        <tr>
                            <td> <p> Ramo Bakić</p></td>
                        </tr>
                        <tr>
                            <td class="even"> <p>Šefkija Bronja</p></td>
                        </tr>
                        <tr>
                            <td> <p>Verica Savić</p></td>
                        </tr>
                        <tr>
                            <td class="even"> <p>Fadil Bronja</p></td>
                        </tr>
                        <tr>
                            <td> <p>Vladan Bubanja</p></td>
                        </tr>
                        <tr>
                            <td class="even"> <p>Izeta Tahirović</p></td>
                        </tr>
                        <tr>
                            <td rowspan="5"><p>Stručni predmeti u elektrotehnici</p></td>
                            <td><p>Selver Pepić</p> </td>
                        </tr>
                        <tr>
                            <td class="even"> <p>Ahmedin Bulić</p></td>
                        </tr>
                        <tr>
                            <td> <p> Zoran Zečević </p></td>
                        </tr>
                        <tr>
                            <td class="even"> <p> Salko Smailagić</p></td>
                        </tr>
                        <tr>
                            <td> <p> Velibor Savić </p></td>
                        </tr>

                        <tr>
                            <td rowspan="4" class="even"><p>Stručni predmeti u saobraćaju</p></td>
                            <td class="even"><p> Muamer Habibović</p> </td>
                        </tr>
                        <tr>
                            <td> <p> Dževad Jusufović</p></td>
                        </tr>
                        <tr>
                            <td class="even"> <p>Dženan Ličina</p></td>
                        </tr>
                        <tr>
                            <td> <p>Dženan Taraniš</p></td>
                        </tr>

                        <tr>
                            <td rowspan="6"><p>Stručni predmeti tekstilstva</p></td>
                            <td class="even"><p> Fatima Hajrizović</p> </td>
                        </tr>
                        <tr>
                            <td> <p> Sanela Prelić</p></td>
                        </tr>
                        <tr>
                            <td class="even"> <p>Halida Zećirović</p></td>
                        </tr>
                        <tr>
                            <td> <p>Senada Ademović</p></td>
                        </tr>
                        <tr>
                            <td class="even"> <p> Sadik Čaušević</p></td>
                        </tr>
                        <tr>
                            <td> <p>Ćamil Hajrizović</p></td>
                        </tr>
                        <tr>
                            <td rowspan="2" class="even"><p>Stručni predmeti u šumarstvu</p></td>
                            <td class="even"><p> Mihrija Alić</p> </td>
                        </tr>
                        <tr>
                            <td> <p>Harun Eminović</p></td>
                        </tr>

                        <tr>
                            <td rowspan="2"><p>Instruktor</p></td>
                            <td class="even"><p>Samir Fakić</p> </td>
                        </tr>
                        <tr>
                            <td> <p>Hajro Gegić</p></td>
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