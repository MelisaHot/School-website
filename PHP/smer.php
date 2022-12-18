<?php 
session_start();
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
                        <li class="act"><a href="index.php" style="color: rgb(247, 150, 29); text-shadow: 2px 1px 3px rgb(1,1,1);">POČETNA</a></li>
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
                                <a class="dropbtn" href="nastavnimaterijal.php" style="color: rgb(247, 150, 29); text-shadow: 2px 1px 3px rgb(1,1,1);">UČENJE NA DALJINU <i class="fa fa-caret-down"></i></a>
                                <div class="dropdown-content">
                                  <a href="nastavnimaterijal.php" style="color: rgb(247, 150, 29); text-shadow: 2px 1px 3px rgb(1,1,1);">Nastavni materijal</a>
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
            <li><a href="nastavnimaterijal.php"> UČENJE NA DALJINU</a></li>
            <li>NASTAVNI MATERIJAL</li>
          </ul>
        </section>
        <section class="notice">
            <h2 class="h2so">NASTAVNI MATERIJAL</h2>
           <ol>
               <?php
                if($_GET['smer']=='kategorija-1'){
                    echo"
                    <li class=''>
                    <a  href='smer.php?smer=category-1&godina=1'> I godina Ekonomski tehničar</a>
                    <a  href='smer.php?smer=category-1&godina=2'> II godina Ekonomski tehničar</a>
                    <a  href='smer.php?smer=category-1&godina=3'> III godina Ekonomski tehničar</a>
                    <a  href='smer.php?smer=category-1&godina=4'> IV godina Ekonomski tehničar</a>
                    
                     </li>
                    ";
                    
                }
                else if($_GET['smer']=='kategorija-2'){
                  echo"
                  <li class=''>
                  <a  href='smer.php?smer=category-2&godina=1'> I godina Tehničar drumskog saobraćaja </a>
                  <a  href='smer.php?smer=category-2&godina=2'> II godina Tehničar drumskog saobraćaja </a>
                  <a  href='smer.php?smer=category-2&godina=3'> III godina Tehničar drumskog saobraćaja </a>
                  <a  href='smer.php?smer=category-2&godina=4'> IV godina Tehničar drumskog saobraćaja </a>
                  
                   </li>
                  ";
                }
                else if($_GET['smer']=='kategorija-3'){
                  echo"
                  <li class=''>
                  <a  href='smer.php?smer=category-3&godina=1'> I godina Mašinski tehničar za kompjutersko konstruisanje  </a>
                  <a  href='smer.php?smer=category-3&godina=2'> II godina Mašinski tehničar za kompjutersko konstruisanje </a>
                  <a  href='smer.php?smer=category-3&godina=3'> III godina Mašinski tehničar za kompjutersko konstruisanje </a>
                  <a  href='smer.php?smer=category-3&godina=4'> IV godina Mašinski tehničar za kompjutersko konstruisanje </a>
                  
                   </li>
                  ";
                }

                else if($_GET['smer']=='kategorija-4'){
                  echo"
                  <li class=''>
                  <a  href='smer.php?smer=category-4&godina=1'> I godina Tehničar za komjutersko upravljanje ( CNC) mašina  </a>
                  <a  href='smer.php?smer=category-4&godina=2'> II godina Tehničar za komjutersko upravljanje ( CNC) mašina </a>
                  <a  href='smer.php?smer=category-4&godina=3'> III godina Tehničar za komjutersko upravljanje ( CNC) mašina </a>
                  <a  href='smer.php?smer=category-4&godina=4'> IV godina Tehničar za komjutersko upravljanje ( CNC) mašina </a>
                  
                   </li>
                  ";
                }
                else if($_GET['smer']=='kategorija-5'){
                  echo"
                  <li class=''>
                  <a  href='smer.php?smer=category-5&godina=1'> I godina Mašinski tehničar motornih vozila   </a>
                  <a  href='smer.php?smer=category-5&godina=2'> II godina Mašinski tehničar motornih vozila  </a>
                  <a  href='smer.php?smer=category-5&godina=3'> III godina Mašinski tehničar motornih vozila  </a>
                  <a  href='smer.php?smer=category-5&godina=4'> IV godina Mašinski tehničar motornih vozila  </a>
                  
                   </li>
                  ";
                }

                else if($_GET['smer']=='kategorija-6'){
                  echo"
                  <li class=''>
                  <a  href='smer.php?smer=category-6&godina=1'> I godina Automehaničar  </a>
                  <a  href='smer.php?smer=category-6&godina=2'> II godina Automehaničar </a>
                  <a  href='smer.php?smer=category-6&godina=3'> III godina Automehaničar </a>
                  
                  
                   </li>
                  ";
                }
                else if($_GET['smer']=='kategorija-7'){
                  echo"
                  <li class=''>
                  <a  href='smer.php?smer=category-7&godina=1'> I godina Modelar odeće  </a>
                  <a  href='smer.php?smer=category-7&godina=2'> II godina Modelar odeće </a>
                  <a  href='smer.php?smer=category-7&godina=3'> III godina Modelar odeće </a>
                  <a  href='smer.php?smer=category-7&godina=4'> IV godina Modelar odeće </a>
                  
                   </li>
                  ";
                }
                else if($_GET['smer']=='kategorija-8'){
                  echo"
                  <li class=''>
                  <a  href='smer.php?smer=category-8&godina=1'> I godina Modni krojač  </a>
                  <a  href='smer.php?smer=category-8&godina=2'> II godina Modni krojač </a>
                  <a  href='smer.php?smer=category-8&godina=3'> III godina Modni krojač </a>
                 
                  
                   </li>
                  ";
                }
                else if($_GET['smer']=='kategorija-9'){
                  echo"
                  <li class=''>
                  <a  href='smer.php?smer=category-9&godina=1'> I godina Elektromehaničar za termičke i rashladne uređaje  </a>
                  <a  href='smer.php?smer=category-9&godina=2'> II godina Elektromehaničar za termičke i rashladne uređaje</a>
                  <a  href='smer.php?smer=category-9&godina=3'> III godina Elektromehaničar za termičke i rashladne uređaje</a>
                 
                   </li>
                  ";
                }
                else if($_GET['smer']=='kategorija-10'){
                  echo"
                  <li class=''>
                  <a  href='smer.php?smer=category-10&godina=1'> I godina Elektroinstalater  </a>
                  <a  href='smer.php?smer=category-10&godina=2'> II godina Elektroinstalater </a>
                  <a  href='smer.php?smer=category-10&godina=3'> III godina Elektroinstalater </a>
                  
                   </li>
                  ";
                }
                /**********************ekonomska prva ************************* */
                else if($_GET['smer']=='category-1' && $_GET['godina']=='1' ){
                    echo"
                    <li class=''>
                  <a  href='smer.php?smer=cat-1&godina=p&predmet=srpski'>Srpski jezik i književnost   </a>
                  <a  href='smer.php?smer=cat-1&godina=p&predmet=matematika'>Matematika</a>
                  <a  href='smer.php?smer=cat-1&godina=p&predmet=engleski'>Engleski jezik</a>
                  <a  href='smer.php?smer=cat-1&godina=p&predmet=istorija'>Istorija</a>
                  <a  href='smer.php?smer=cat-1&godina=p&predmet=fizicko'>Fizičko vaspitanje</a>
                  <a  href='smer.php?smer=cat-1&godina=p&predmet=informatika'>Računarstvo i informatika</a>
                  <a  href='smer.php?smer=cat-1&godina=p&predmet=hemija'>Hemija</a>
                  <a  href='smer.php?smer=cat-1&godina=p&predmet=ekologija'>Ekologija i zaštita živ. sred.</a>
                  <a  href='smer.php?smer=cat-1&godina=p&predmet=osnoviekonomije'>Osnovi ekonomije</a>
                  <a  href='smer.php?smer=cat-1&godina=p&predmet=poslovnaekonomija'>Poslovna ekonomija</a>
                  <a  href='smer.php?smer=cat-1&godina=p&predmet=racunovodstvo'>Računovodstvo</a>
                  <a  href='smer.php?smer=cat-1&godina=p&predmet=korespondencija'>Savremena poslovna korespondencija</a>               
                  </li>
                    ";
                }

                else if($_GET['smer']=='cat-1' && $_GET['godina']=='p' && $_GET['predmet']=='srpski'){
                  require 'Connection.php';
                      $query = "SELECT * FROM nastavnimaterijal WHERE kategorija1='1' AND prvi='1' AND predmet='srpski' ORDER BY id DESC";  
                      $result = mysqli_query($conn, $query);  
                      while($row = mysqli_fetch_array($result))  
                      {   
                          echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";
                      } 
                }
                else if($_GET['smer']=='cat-1' && $_GET['godina']=='p' && $_GET['predmet']=='matematika'){
                  require 'Connection.php';
                      $query = "SELECT * FROM nastavnimaterijal WHERE kategorija1='1' AND prvi='1' AND predmet='matematika' ORDER BY id DESC";  
                      $result = mysqli_query($conn, $query);  
                      while($row = mysqli_fetch_array($result))  
                      {   
                        echo " 
                        <li class=''>
                        <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                        </li>";
                      }   
                }
                else if($_GET['smer']=='cat-1' && $_GET['godina']=='p' && $_GET['predmet']=='engleski'){
                  require 'Connection.php';
                      $query = "SELECT * FROM nastavnimaterijal WHERE kategorija1='1' AND prvi='1' AND predmet='engleski' ORDER BY id DESC";  
                      $result = mysqli_query($conn, $query);  
                      while($row = mysqli_fetch_array($result))  
                      {   
                        echo " 
                        <li class=''>
                        <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                        </li>";
                      }
                      
                }
                else if($_GET['smer']=='cat-1' && $_GET['godina']=='p' && $_GET['predmet']=='istorija'){
                  require 'Connection.php';
                      $query = "SELECT * FROM nastavnimaterijal WHERE kategorija1='1' AND prvi='1' AND predmet='istorija' ORDER BY id DESC";  
                      $result = mysqli_query($conn, $query);  
                      while($row = mysqli_fetch_array($result))  
                      {   
                        echo " 
                        <li class=''>
                        <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                        </li>";  
                      }
                      
                }
                else if($_GET['smer']=='cat-1' && $_GET['godina']=='p' && $_GET['predmet']=='fizicko'){
                  require 'Connection.php';
                      $query = "SELECT * FROM nastavnimaterijal WHERE kategorija1='1' AND prvi='1' AND predmet='fizicko' ORDER BY id DESC";  
                      $result = mysqli_query($conn, $query);  
                      while($row = mysqli_fetch_array($result))  
                      {   
                        echo " 
                        <li class=''>
                        <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                        </li>";   
                      }    
                }
                else if($_GET['smer']=='cat-1' && $_GET['godina']=='p' && $_GET['predmet']=='informatika'){
                  require 'Connection.php';
                      $query = "SELECT * FROM nastavnimaterijal WHERE kategorija1='1' AND prvi='1' AND predmet='informatika' ORDER BY id DESC";  
                      $result = mysqli_query($conn, $query);  
                      while($row = mysqli_fetch_array($result))  
                      {   
                        echo " 
                        <li class=''>
                        <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                        </li>";   
                      }     
                }
                else if($_GET['smer']=='cat-1' && $_GET['godina']=='p' && $_GET['predmet']=='hemija'){
                  require 'Connection.php';
                      $query = "SELECT * FROM nastavnimaterijal WHERE kategorija1='1' AND prvi='1' AND predmet='hemija' ORDER BY id DESC";  
                      $result = mysqli_query($conn, $query);  
                      while($row = mysqli_fetch_array($result))  
                      {   
                        echo " 
                        <li class=''>
                        <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                        </li>";  
                      }    
                }
                else if($_GET['smer']=='cat-1' && $_GET['godina']=='p' && $_GET['predmet']=='ekologija'){
                  require 'Connection.php';
                      $query = "SELECT * FROM nastavnimaterijal WHERE kategorija1='1' AND prvi='1' AND predmet='ekologija' ORDER BY id DESC";  
                      $result = mysqli_query($conn, $query);  
                      while($row = mysqli_fetch_array($result))  
                      {   
                        echo " 
                        <li class=''>
                        <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                        </li>";    
                      }   
                }
                else if($_GET['smer']=='cat-1' && $_GET['godina']=='p' && $_GET['predmet']=='osnoviekonomije'){
                  require 'Connection.php';
                      $query = "SELECT * FROM nastavnimaterijal WHERE kategorija1='1' AND prvi='1' AND predmet='osnoviekonomije' ORDER BY id DESC";  
                      $result = mysqli_query($conn, $query);  
                      while($row = mysqli_fetch_array($result))  
                      {   
                        echo " 
                        <li class=''>
                        <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                        </li>";  
                      }   
                }
                else if($_GET['smer']=='cat-1' && $_GET['godina']=='p' && $_GET['predmet']=='poslovnaekonomija'){
                  require 'Connection.php';
                      $query = "SELECT * FROM nastavnimaterijal WHERE kategorija1='1' AND prvi='1' AND predmet='poslovnaekonomija' ORDER BY id DESC";  
                      $result = mysqli_query($conn, $query);  
                      while($row = mysqli_fetch_array($result))  
                      {   
                        echo " 
                        <li class=''>
                        <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                        </li>";   
                      }    
                }
                else if($_GET['smer']=='cat-1' && $_GET['godina']=='p' && $_GET['predmet']=='racunovodstvo'){
                  require 'Connection.php';
                      $query = "SELECT * FROM nastavnimaterijal WHERE kategorija1='1' AND prvi='1' AND predmet='racunovodstvo' ORDER BY id DESC";  
                      $result = mysqli_query($conn, $query);  
                      while($row = mysqli_fetch_array($result))  
                      {   
                        echo " 
                        <li class=''>
                        <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                        </li>";
                      }                      
                }
                else if($_GET['smer']=='cat-1' && $_GET['godina']=='p' && $_GET['predmet']=='korespondencija'){
                  require 'Connection.php';
                      $query = "SELECT * FROM nastavnimaterijal WHERE kategorija1='1' AND prvi='1' AND predmet='korespondencija' ORDER BY id DESC";  
                      $result = mysqli_query($conn, $query);  
                      while($row = mysqli_fetch_array($result))  
                      {   
                        echo " 
                        <li class=''>
                        <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                        </li>";
                      }        
                }
                /********************ekonomska druga godina******************** */
                else if($_GET['smer']=='category-1' && $_GET['godina']=='2' ){
                  echo"
                  <li class=''>
                <a  href='smer.php?smer=cat-1&godina=d&predmet=srpski'>Srpski jezik i književnost   </a>
                <a  href='smer.php?smer=cat-1&godina=d&predmet=matematika'>Matematika</a>
                <a  href='smer.php?smer=cat-1&godina=d&predmet=engleski'>Engleski jezik</a>
                <a  href='smer.php?smer=cat-1&godina=d&predmet=istorija'>Istorija</a>
                <a  href='smer.php?smer=cat-1&godina=d&predmet=fizicko'>Fizičko vaspitanje</a>
                <a  href='smer.php?smer=cat-1&godina=d&predmet=komercijalno'>Komercijalno poznavanje robe</a>
                <a  href='smer.php?smer=cat-1&godina=d&predmet=geografija'>Geografija</a>
                <a  href='smer.php?smer=cat-1&godina=d&predmet=osnoviekonomije'>Osnovi ekonomije</a>
                <a  href='smer.php?smer=cat-1&godina=d&predmet=poslovnaekonomija'>Poslovna ekonomija</a>
                <a  href='smer.php?smer=cat-1&godina=d&predmet=racunovodstvo'>Računovodstvo</a>
                <a  href='smer.php?smer=cat-1&godina=d&predmet=korespondencija'>Savremena poslovna korespondencija</a>               
                </li>
                  ";
              }

              else if($_GET['smer']=='cat-1' && $_GET['godina']=='d' && $_GET['predmet']=='srpski'){
                require 'Connection.php';
                    $query = "SELECT * FROM nastavnimaterijal WHERE kategorija1='1' AND drugi='1' AND predmet='srpski' ORDER BY id DESC";  
                    $result = mysqli_query($conn, $query);  
                    while($row = mysqli_fetch_array($result))  
                    {   
                        echo " 
                        <li class=''>
                        <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                        </li>";
                    } 
              }
              else if($_GET['smer']=='cat-1' && $_GET['godina']=='d' && $_GET['predmet']=='matematika'){
                require 'Connection.php';
                    $query = "SELECT * FROM nastavnimaterijal WHERE kategorija1='1' AND drugi='1' AND predmet='matematika' ORDER BY id DESC";  
                    $result = mysqli_query($conn, $query);  
                    while($row = mysqli_fetch_array($result))  
                    {   
                        echo " 
                        <li class=''>
                        <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                        </li>";
                    }   
              }
              else if($_GET['smer']=='cat-1' && $_GET['godina']=='d' && $_GET['predmet']=='engleski'){
                require 'Connection.php';
                    $query = "SELECT * FROM nastavnimaterijal WHERE kategorija1='1' AND drugi='1' AND predmet='engleski' ORDER BY id DESC";  
                    $result = mysqli_query($conn, $query);  
                    while($row = mysqli_fetch_array($result))  
                    {   
                        echo " 
                        <li class=''>
                        <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                        </li>";  
                    }
                    
              }
              else if($_GET['smer']=='cat-1' && $_GET['godina']=='d' && $_GET['predmet']=='istorija'){
                require 'Connection.php';
                    $query = "SELECT * FROM nastavnimaterijal WHERE kategorija1='1' AND drugi='1' AND predmet='istorija' ORDER BY id DESC";  
                    $result = mysqli_query($conn, $query);  
                    while($row = mysqli_fetch_array($result))  
                    {   
                        echo " 
                        <li class=''>
                        <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                        </li>";  
                    }
                    
              }
              else if($_GET['smer']=='cat-1' && $_GET['godina']=='d' && $_GET['predmet']=='fizicko'){
                require 'Connection.php';
                    $query = "SELECT * FROM nastavnimaterijal WHERE kategorija1='1' AND drugi='1' AND predmet='fizicko' ORDER BY id DESC";  
                    $result = mysqli_query($conn, $query);  
                    while($row = mysqli_fetch_array($result))  
                    {   
                        echo " 
                        <li class=''>
                        <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                        </li>";    
                    }    
              }
              else if($_GET['smer']=='cat-1' && $_GET['godina']=='d' && $_GET['predmet']=='komercijalno'){
                require 'Connection.php';
                    $query = "SELECT * FROM nastavnimaterijal WHERE kategorija1='1' AND drugi='1' AND predmet='komercijalno' ORDER BY id DESC";  
                    $result = mysqli_query($conn, $query);  
                    while($row = mysqli_fetch_array($result))  
                    {   
                        echo " 
                        <li class=''>
                        <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                        </li>";    
                    }     
              }
              else if($_GET['smer']=='cat-1' && $_GET['godina']=='d' && $_GET['predmet']=='geografija'){
                require 'Connection.php';
                    $query = "SELECT * FROM nastavnimaterijal WHERE kategorija1='1' AND dugi='1' AND predmet='geografija' ORDER BY id DESC";  
                    $result = mysqli_query($conn, $query);  
                    while($row = mysqli_fetch_array($result))  
                    {   
                        echo " 
                        <li class=''>
                        <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                        </li>";  
                    }    
              }
              
              else if($_GET['smer']=='cat-1' && $_GET['godina']=='d' && $_GET['predmet']=='osnoviekonomije'){
                require 'Connection.php';
                    $query = "SELECT * FROM nastavnimaterijal WHERE kategorija1='1' AND drugi='1' AND predmet='osnoviekonomije' ORDER BY id DESC";  
                    $result = mysqli_query($conn, $query);  
                    while($row = mysqli_fetch_array($result))  
                    {   
                        echo " 
                        <li class=''>
                        <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                        </li>";   
                    }   
              }
              else if($_GET['smer']=='cat-1' && $_GET['godina']=='d' && $_GET['predmet']=='poslovnaekonomija'){
                require 'Connection.php';
                    $query = "SELECT * FROM nastavnimaterijal WHERE kategorija1='1' AND drugi='1' AND predmet='poslovnaekonomija' ORDER BY id DESC";  
                    $result = mysqli_query($conn, $query);  
                    while($row = mysqli_fetch_array($result))  
                    {   
                        echo " 
                        <li class=''>
                        <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                        </li>";    
                    }    
              }
              else if($_GET['smer']=='cat-1' && $_GET['godina']=='d' && $_GET['predmet']=='racunovodstvo'){
                require 'Connection.php';
                    $query = "SELECT * FROM nastavnimaterijal WHERE kategorija1='1' AND drugi='1' AND predmet='racunovodstvo' ORDER BY id DESC";  
                    $result = mysqli_query($conn, $query);  
                    while($row = mysqli_fetch_array($result))  
                    {   
                        echo " 
                        <li class=''>
                        <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                        </li>";
                    }                      
              }
              else if($_GET['smer']=='cat-1' && $_GET['godina']=='d' && $_GET['predmet']=='korespondencija'){
                require 'Connection.php';
                    $query = "SELECT * FROM nastavnimaterijal WHERE kategorija1='1' AND drugi='1' AND predmet='korespondencija' ORDER BY id DESC";  
                    $result = mysqli_query($conn, $query);  
                    while($row = mysqli_fetch_array($result))  
                    {   
                        echo " 
                        <li class=''>
                        <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                        </li>";
                    }        
              }
              /***********************ekonomska treca**************** */

              else if($_GET['smer']=='category-1' && $_GET['godina']=='3' ){
                echo"
                <li class=''>
              <a  href='smer.php?smer=cat-1&godina=t&predmet=srpski'>Srpski jezik i književnost   </a>
              <a  href='smer.php?smer=cat-1&godina=t&predmet=matematika'>Matematika</a>
              <a  href='smer.php?smer=cat-1&godina=t&predmet=engleski'>Engleski jezik</a>
              <a  href='smer.php?smer=cat-1&godina=t&predmet=sociologija'>Sociologija</a>
              <a  href='smer.php?smer=cat-1&godina=t&predmet=fizicko'>Fizičko vaspitanje</a>
              <a  href='smer.php?smer=cat-1&godina=t&predmet=pravo'>Ustavno i privredno pravo</a>
              <a  href='smer.php?smer=cat-1&godina=t&predmet=monetarna'>Monetarna ekonomija i bankarstvo</a>
              <a  href='smer.php?smer=cat-1&godina=t&predmet=osnoviekonomije'>Osnovi ekonomije</a>
              <a  href='smer.php?smer=cat-1&godina=t&predmet=poslovnaekonomija'>Poslovna ekonomija</a>
              <a  href='smer.php?smer=cat-1&godina=t&predmet=racunovodstvo'>Računovodstvo</a>
              <a  href='smer.php?smer=cat-1&godina=t&predmet=statistika'>Statistika</a> 
              <a  href='smer.php?smer=cat-1&godina=t&predmet=poslovnainformatika'>Poslovna informatika</a>               

              </li>
                ";
            }

            else if($_GET['smer']=='cat-1' && $_GET['godina']=='t' && $_GET['predmet']=='srpski'){
              require 'Connection.php';
                  $query = "SELECT * FROM nastavnimaterijal WHERE kategorija1='1' AND treci='1' AND predmet='srpski' ORDER BY id DESC";  
                  $result = mysqli_query($conn, $query);  
                  while($row = mysqli_fetch_array($result))  
                  {   
                    echo " 
                    <li class=''>
                    <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                    </li>";
                  } 
            }
            else if($_GET['smer']=='cat-1' && $_GET['godina']=='t' && $_GET['predmet']=='matematika'){
              require 'Connection.php';
                  $query = "SELECT * FROM nastavnimaterijal WHERE kategorija1='1' AND treci='1' AND predmet='matematika' ORDER BY id DESC";  
                  $result = mysqli_query($conn, $query);  
                  while($row = mysqli_fetch_array($result))  
                  {   
                    echo " 
                    <li class=''>
                    <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                    </li>"; 
                  }   
            }
            else if($_GET['smer']=='cat-1' && $_GET['godina']=='t' && $_GET['predmet']=='engleski'){
              require 'Connection.php';
                  $query = "SELECT * FROM nastavnimaterijal WHERE kategorija1='1' AND treci='1' AND predmet='engleski' ORDER BY id DESC";  
                  $result = mysqli_query($conn, $query);  
                  while($row = mysqli_fetch_array($result))  
                  {   
                    echo " 
                    <li class=''>
                    <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                    </li>";  
                  }
                  
            }

            else if($_GET['smer']=='cat-1' && $_GET['godina']=='t' && $_GET['predmet']=='fizicko'){
              require 'Connection.php';
                  $query = "SELECT * FROM nastavnimaterijal WHERE kategorija1='1' AND treci='1' AND predmet='fizicko' ORDER BY id DESC";  
                  $result = mysqli_query($conn, $query);  
                  while($row = mysqli_fetch_array($result))  
                  {   
                    echo " 
                    <li class=''>
                    <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                    </li>";    
                  }    
            }
            else if($_GET['smer']=='cat-1' && $_GET['godina']=='t' && $_GET['predmet']=='sociologija'){
              require 'Connection.php';
                  $query = "SELECT * FROM nastavnimaterijal WHERE kategorija1='1' AND treci='1' AND predmet='sociologija' ORDER BY id DESC";  
                  $result = mysqli_query($conn, $query);  
                  while($row = mysqli_fetch_array($result))  
                  {   
                    echo " 
                    <li class=''>
                    <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                    </li>";     
                  }     
            }
            else if($_GET['smer']=='cat-1' && $_GET['godina']=='t' && $_GET['predmet']=='monetarna'){
              require 'Connection.php';
                  $query = "SELECT * FROM nastavnimaterijal WHERE kategorija1='1' AND treci='1' AND predmet='monetarna' ORDER BY id DESC";  
                  $result = mysqli_query($conn, $query);  
                  while($row = mysqli_fetch_array($result))  
                  {   
                    echo " 
                    <li class=''>
                    <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                    </li>";   
                  }    
            }
            
            else if($_GET['smer']=='cat-1' && $_GET['godina']=='t' && $_GET['predmet']=='osnoviekonomije'){
              require 'Connection.php';
                  $query = "SELECT * FROM nastavnimaterijal WHERE kategorija1='1' AND treci='1' AND predmet='osnoviekonomije' ORDER BY id DESC";  
                  $result = mysqli_query($conn, $query);  
                  while($row = mysqli_fetch_array($result))  
                  {   
                    echo " 
                    <li class=''>
                    <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                    </li>";   
                  }   
            }
            else if($_GET['smer']=='cat-1' && $_GET['godina']=='t' && $_GET['predmet']=='poslovnaekonomija'){
              require 'Connection.php';
                  $query = "SELECT * FROM nastavnimaterijal WHERE kategorija1='1' AND treci='1' AND predmet='poslovnaekonomija' ORDER BY id DESC";  
                  $result = mysqli_query($conn, $query);  
                  while($row = mysqli_fetch_array($result))  
                  {   
                    echo " 
                    <li class=''>
                    <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                    </li>";   
                  }    
            }
            else if($_GET['smer']=='cat-1' && $_GET['godina']=='t' && $_GET['predmet']=='racunovodstvo'){
              require 'Connection.php';
                  $query = "SELECT * FROM nastavnimaterijal WHERE kategorija1='1' AND treci='1' AND predmet='racunovodstvo' ORDER BY id DESC";  
                  $result = mysqli_query($conn, $query);  
                  while($row = mysqli_fetch_array($result))  
                  {   
                    echo " 
                    <li class=''>
                    <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                    </li>";
                  }                      
            }
            else if($_GET['smer']=='cat-1' && $_GET['godina']=='t' && $_GET['predmet']=='statistika'){
              require 'Connection.php';
                  $query = "SELECT * FROM nastavnimaterijal WHERE kategorija1='1' AND treci='1' AND predmet='statistika' ORDER BY id DESC";  
                  $result = mysqli_query($conn, $query);  
                  while($row = mysqli_fetch_array($result))  
                  {   
                    echo " 
                    <li class=''>
                    <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                    </li>";
                  }        
            }
            else if($_GET['smer']=='cat-1' && $_GET['godina']=='t' && $_GET['predmet']=='poslovnainformatika'){
              require 'Connection.php';
                  $query = "SELECT * FROM nastavnimaterijal WHERE kategorija1='1' AND treci='1' AND predmet='poslovnainformatika' ORDER BY id DESC";  
                  $result = mysqli_query($conn, $query);  
                  while($row = mysqli_fetch_array($result))  
                  {   
                    echo " 
                    <li class=''>
                    <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                    </li>";
                  }        
            }

            /*********************ekonomska cetvrta******************* */
            else if($_GET['smer']=='category-1' && $_GET['godina']=='4' ){
              echo"
              <li class=''>
            <a  href='smer.php?smer=cat-1&godina=c&predmet=srpski'>Srpski jezik i književnost   </a>
            <a  href='smer.php?smer=cat-1&godina=c&predmet=matematika'>Matematika</a>
            <a  href='smer.php?smer=cat-1&godina=c&predmet=engleski'>Engleski jezik</a>
            <a  href='smer.php?smer=cat-1&godina=c&predmet=marketing'>Marketing</a>
            <a  href='smer.php?smer=cat-1&godina=c&predmet=fizicko'>Fizičko vaspitanje</a>
            <a  href='smer.php?smer=cat-1&godina=c&predmet=pravo'>Ustavno i privredno pravo</a>
            <a  href='smer.php?smer=cat-1&godina=c&predmet=monetarna'>Monetarna ekonomija i bankarstvo</a>
            <a  href='smer.php?smer=cat-1&godina=c&predmet=osnoviekonomije'>Osnovi ekonomije</a>
            <a  href='smer.php?smer=cat-1&godina=c&predmet=poslovnaekonomija'>Poslovna ekonomija</a>
            <a  href='smer.php?smer=cat-1&godina=c&predmet=racunovodstvo'>Računovodstvo</a>
            <a  href='smer.php?smer=cat-1&godina=c&predmet=statistika'>Statistika</a> 
            <a  href='smer.php?smer=cat-1&godina=c&predmet=poslovnainformatika'>Poslovna informatika</a>               
            </li>
              ";
          }
          else if($_GET['smer']=='cat-1' && $_GET['godina']=='c' && $_GET['predmet']=='srpski'){
            require 'Connection.php';
                $query = "SELECT * FROM nastavnimaterijal WHERE kategorija1='1' AND cetvrti='1' AND predmet='srpski' ORDER BY id DESC";  
                $result = mysqli_query($conn, $query);  
                while($row = mysqli_fetch_array($result))  
                {   
                    echo " 
                    <li class=''>
                    <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                    </li>";
                } 
          }
          else if($_GET['smer']=='cat-1' && $_GET['godina']=='c' && $_GET['predmet']=='matematika'){
            require 'Connection.php';
                $query = "SELECT * FROM nastavnimaterijal WHERE kategorija1='1' AND cetvrti='1' AND predmet='matematika' ORDER BY id DESC";  
                $result = mysqli_query($conn, $query);  
                while($row = mysqli_fetch_array($result))  
                {   
                    echo " 
                    <li class=''>
                    <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                    </li>";
                }   
          }
          else if($_GET['smer']=='cat-1' && $_GET['godina']=='c' && $_GET['predmet']=='engleski'){
            require 'Connection.php';
                $query = "SELECT * FROM nastavnimaterijal WHERE kategorija1='1' AND cetvrti='1' AND predmet='engleski' ORDER BY id DESC";  
                $result = mysqli_query($conn, $query);  
                while($row = mysqli_fetch_array($result))  
                {   
                    echo " 
                    <li class=''>
                    <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                    </li>"; 
                }
                
          }

          else if($_GET['smer']=='cat-1' && $_GET['godina']=='c' && $_GET['predmet']=='fizicko'){
            require 'Connection.php';
                $query = "SELECT * FROM nastavnimaterijal WHERE kategorija1='1' AND cetvrti='1' AND predmet='fizicko' ORDER BY id DESC";  
                $result = mysqli_query($conn, $query);  
                while($row = mysqli_fetch_array($result))  
                {   
                    echo " 
                    <li class=''>
                    <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                    </li>";  
                }    
          }
          else if($_GET['smer']=='cat-1' && $_GET['godina']=='c' && $_GET['predmet']=='sociologija'){
            require 'Connection.php';
                $query = "SELECT * FROM nastavnimaterijal WHERE kategorija1='1' AND cetvrti='1' AND predmet='sociologija' ORDER BY id DESC";  
                $result = mysqli_query($conn, $query);  
                while($row = mysqli_fetch_array($result))  
                {   
                    echo " 
                    <li class=''>
                    <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                    </li>";    
                }     
          }
          else if($_GET['smer']=='cat-1' && $_GET['godina']=='c' && $_GET['predmet']=='monetarna'){
            require 'Connection.php';
                $query = "SELECT * FROM nastavnimaterijal WHERE kategorija1='1' AND cetvrti='1' AND predmet='monetarna' ORDER BY id DESC";  
                $result = mysqli_query($conn, $query);  
                while($row = mysqli_fetch_array($result))  
                {   
                    echo " 
                    <li class=''>
                    <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                    </li>"; 
                }    
          }
          
          else if($_GET['smer']=='cat-1' && $_GET['godina']=='c' && $_GET['predmet']=='osnoviekonomije'){
            require 'Connection.php';
                $query = "SELECT * FROM nastavnimaterijal WHERE kategorija1='1' AND cetvrti='1' AND predmet='osnoviekonomije' ORDER BY id DESC";  
                $result = mysqli_query($conn, $query);  
                while($row = mysqli_fetch_array($result))  
                {   
                    echo " 
                    <li class=''>
                    <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                    </li>";  
                }   
          }
          else if($_GET['smer']=='cat-1' && $_GET['godina']=='c' && $_GET['predmet']=='poslovnaekonomija'){
            require 'Connection.php';
                $query = "SELECT * FROM nastavnimaterijal WHERE kategorija1='1' AND cetvrti='1' AND predmet='poslovnaekonomija' ORDER BY id DESC";  
                $result = mysqli_query($conn, $query);  
                while($row = mysqli_fetch_array($result))  
                {   
                    echo " 
                    <li class=''>
                    <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                    </li>";    
                }    
          }
          else if($_GET['smer']=='cat-1' && $_GET['godina']=='c' && $_GET['predmet']=='racunovodstvo'){
            require 'Connection.php';
                $query = "SELECT * FROM nastavnimaterijal WHERE kategorija1='1' AND cetvrti='1' AND predmet='racunovodstvo' ORDER BY id DESC";  
                $result = mysqli_query($conn, $query);  
                while($row = mysqli_fetch_array($result))  
                {   
                    echo " 
                    <li class=''>
                    <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                    </li>";
                }                      
          }
          else if($_GET['smer']=='cat-1' && $_GET['godina']=='c' && $_GET['predmet']=='statistika'){
            require 'Connection.php';
                $query = "SELECT * FROM nastavnimaterijal WHERE kategorija1='1' AND cetvrti='1' AND predmet='statistika' ORDER BY id DESC";  
                $result = mysqli_query($conn, $query);  
                while($row = mysqli_fetch_array($result))  
                {   
                    echo " 
                    <li class=''>
                    <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                    </li>";
                }        
          }
          else if($_GET['smer']=='cat-1' && $_GET['godina']=='c' && $_GET['predmet']=='poslovnainformatika'){
            require 'Connection.php';
                $query = "SELECT * FROM nastavnimaterijal WHERE kategorija1='1' AND cetvrti='1' AND predmet='poslovnainformatika' ORDER BY id DESC";  
                $result = mysqli_query($conn, $query);  
                while($row = mysqli_fetch_array($result))  
                {   
                    echo " 
                    <li class=''>
                    <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                    </li>";
                }        
          }
          /********************************saobracajna prva********************** */

          else if($_GET['smer']=='category-2' && $_GET['godina']=='1' ){
            echo"
            <li class=''>
          <a  href='smer.php?smer=cat-2&godina=p&predmet=srpski'>Srpski jezik i književnost   </a>
          <a  href='smer.php?smer=cat-2&godina=p&predmet=matematika'>Matematika</a>
          <a  href='smer.php?smer=cat-2&godina=p&predmet=engleski'>Engleski jezik</a>
          <a  href='smer.php?smer=cat-2&godina=p&predmet=fizicko'>Fizičko vaspitanje</a>
          <a  href='smer.php?smer=cat-2&godina=p&predmet=istorija'>Istorija</a>
          <a  href='smer.php?smer=cat-2&godina=p&predmet=informatika'>Računarstvo i informatika</a>
          <a  href='smer.php?smer=cat-2&godina=p&predmet=hemija'>Hemija</a>
          <a  href='smer.php?smer=cat-2&godina=p&predmet=fizika'>Fizika</a>
          <a  href='smer.php?smer=cat-2&godina=p&predmet=biologija'>Biologija</a>
          <a  href='smer.php?smer=cat-2&godina=p&predmet=geografija'>Geografija</a>
          <a  href='smer.php?smer=cat-2&godina=p&predmet=likovno'>Likovna kultura</a>
          <a  href='smer.php?smer=cat-2&godina=p&predmet=tehnickocrtanje'>Tehničko crtanje</a>
          <a  href='smer.php?smer=cat-2&godina=p&predmet=saobracajnisistemi'>Saobraćajni sistemi</a>  
          <a  href='smer.php?smer=cat-2&godina=p&predmet=tehnologijamaterijala'>Tehnologija materijala</a>             
          </li>
            ";
        }

        else if($_GET['smer']=='cat-2' && $_GET['godina']=='p' && $_GET['predmet']=='srpski'){
          require 'Connection.php';
              $query = "SELECT * FROM nastavnimaterijal WHERE kategorija2='1' AND prvi='1' AND predmet='srpski' ORDER BY id DESC";  
              $result = mysqli_query($conn, $query);  
              while($row = mysqli_fetch_array($result))  
              {   
                echo " 
                <li class=''>
                <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                </li>";
              } 
        }
        else if($_GET['smer']=='cat-2' && $_GET['godina']=='p' && $_GET['predmet']=='matematika'){
          require 'Connection.php';
              $query = "SELECT * FROM nastavnimaterijal WHERE kategorija2='1' AND prvi='1' AND predmet='matematika' ORDER BY id DESC";  
              $result = mysqli_query($conn, $query);  
              while($row = mysqli_fetch_array($result))  
              {   
                echo " 
                <li class=''>
                <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                </li>";
              }   
        }
        else if($_GET['smer']=='cat-2' && $_GET['godina']=='p' && $_GET['predmet']=='engleski'){
          require 'Connection.php';
              $query = "SELECT * FROM nastavnimaterijal WHERE kategorija2='1' AND prvi='1' AND predmet='engleski' ORDER BY id DESC";  
              $result = mysqli_query($conn, $query);  
              while($row = mysqli_fetch_array($result))  
              {   
                echo " 
                <li class=''>
                <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                </li>";  
              }
              
        }
        else if($_GET['smer']=='cat-2' && $_GET['godina']=='p' && $_GET['predmet']=='istorija'){
          require 'Connection.php';
              $query = "SELECT * FROM nastavnimaterijal WHERE kategorija2='1' AND prvi='1' AND predmet='istorija' ORDER BY id DESC";  
              $result = mysqli_query($conn, $query);  
              while($row = mysqli_fetch_array($result))  
              {   
                echo " 
                <li class=''>
                <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                </li>";  
              }
              
        }
        else if($_GET['smer']=='cat-2' && $_GET['godina']=='p' && $_GET['predmet']=='fizicko'){
          require 'Connection.php';
              $query = "SELECT * FROM nastavnimaterijal WHERE kategorija2='1' AND prvi='1' AND predmet='fizicko' ORDER BY id DESC";  
              $result = mysqli_query($conn, $query);  
              while($row = mysqli_fetch_array($result))  
              {   
                echo " 
                <li class=''>
                <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                </li>";    
              }    
        }
        else if($_GET['smer']=='cat-2' && $_GET['godina']=='p' && $_GET['predmet']=='informatika'){
          require 'Connection.php';
              $query = "SELECT * FROM nastavnimaterijal WHERE kategorija2='1' AND prvi='1' AND predmet='informatika' ORDER BY id DESC";  
              $result = mysqli_query($conn, $query);  
              while($row = mysqli_fetch_array($result))  
              {   
                echo " 
                <li class=''>
                <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                </li>";    
              }     
        }
        else if($_GET['smer']=='cat-2' && $_GET['godina']=='p' && $_GET['predmet']=='hemija'){
          require 'Connection.php';
              $query = "SELECT * FROM nastavnimaterijal WHERE kategorija2='1' AND prvi='1' AND predmet='hemija' ORDER BY id DESC";  
              $result = mysqli_query($conn, $query);  
              while($row = mysqli_fetch_array($result))  
              {   
                echo " 
                <li class=''>
                <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                </li>"; 
              }    
        }
        else if($_GET['smer']=='cat-2' && $_GET['godina']=='p' && $_GET['predmet']=='fizika'){
          require 'Connection.php';
              $query = "SELECT * FROM nastavnimaterijal WHERE kategorija2='1' AND prvi='1' AND predmet='fizika' ORDER BY id DESC";  
              $result = mysqli_query($conn, $query);  
              while($row = mysqli_fetch_array($result))  
              {   
                   echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";    
              }   
        }
        else if($_GET['smer']=='cat-2' && $_GET['godina']=='p' && $_GET['predmet']=='biologija'){
          require 'Connection.php';
              $query = "SELECT * FROM nastavnimaterijal WHERE kategorija2='1' AND prvi='1' AND predmet='biologija' ORDER BY id DESC";  
              $result = mysqli_query($conn, $query);  
              while($row = mysqli_fetch_array($result))  
              {   
                   echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";   
              }   
        }
        else if($_GET['smer']=='cat-2' && $_GET['godina']=='p' && $_GET['predmet']=='geografija'){
          require 'Connection.php';
              $query = "SELECT * FROM nastavnimaterijal WHERE kategorija2='1' AND prvi='1' AND predmet='geografija' ORDER BY id DESC";  
              $result = mysqli_query($conn, $query);  
              while($row = mysqli_fetch_array($result))  
              {   
                   echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";    
              }    
        }
        else if($_GET['smer']=='cat-2' && $_GET['godina']=='p' && $_GET['predmet']=='likovno'){
          require 'Connection.php';
              $query = "SELECT * FROM nastavnimaterijal WHERE kategorija2='1' AND prvi='1' AND predmet='likovno' ORDER BY id DESC";  
              $result = mysqli_query($conn, $query);  
              while($row = mysqli_fetch_array($result))  
              {   
                   echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";
              }                      
        }
        else if($_GET['smer']=='cat-2' && $_GET['godina']=='p' && $_GET['predmet']=='tehnickocrtanje'){
          require 'Connection.php';
              $query = "SELECT * FROM nastavnimaterijal WHERE kategorija2='1' AND prvi='1' AND predmet='tehnickocrtanje' ORDER BY id DESC";  
              $result = mysqli_query($conn, $query);  
              while($row = mysqli_fetch_array($result))  
              {   
                   echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";
              }        
        }
        else if($_GET['smer']=='cat-2' && $_GET['godina']=='p' && $_GET['predmet']=='saobracajnisistemi'){
          require 'Connection.php';
              $query = "SELECT * FROM nastavnimaterijal WHERE kategorija2='1' AND prvi='1' AND predmet='saobracajnisistemi' ORDER BY id DESC";  
              $result = mysqli_query($conn, $query);  
              while($row = mysqli_fetch_array($result))  
              {   
                   echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";
              }        
        }
        else if($_GET['smer']=='cat-2' && $_GET['godina']=='p' && $_GET['predmet']=='tehnologijamaterijala'){
          require 'Connection.php';
              $query = "SELECT * FROM nastavnimaterijal WHERE kategorija2='1' AND prvi='1' AND predmet='tehnologijamaterijala' ORDER BY id DESC";  
              $result = mysqli_query($conn, $query);  
              while($row = mysqli_fetch_array($result))  
              {   
                   echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";
              }        
        }
        /************************************saobracajna druga************************** */
        else if($_GET['smer']=='category-2' && $_GET['godina']=='2' ){
          echo"
          <li class=''>
        <a  href='smer.php?smer=cat-2&godina=d&predmet=srpski'>Srpski jezik i književnost   </a>
        <a  href='smer.php?smer=cat-2&godina=d&predmet=matematika'>Matematika</a>
        <a  href='smer.php?smer=cat-2&godina=d&predmet=engleski'>Engleski jezik</a>
        <a  href='smer.php?smer=cat-2&godina=d&predmet=fizicko'>Fizičko vaspitanje</a>
        <a  href='smer.php?smer=cat-2&godina=d&predmet=mehanika'>Mehanika</a>
        <a  href='smer.php?smer=cat-2&godina=d&predmet=psihologija'>Psihologija</a>
        <a  href='smer.php?smer=cat-2&godina=d&predmet=masinskielementi'>Mašinski elementi</a>
        <a  href='smer.php?smer=cat-2&godina=d&predmet=teretutransportu'>Teret u transportu</a>
        <a  href='smer.php?smer=cat-2&godina=d&predmet=bezbednostsaobracaja'>Regulisanje i bezbednost saobraćaja</a>
        <a  href='smer.php?smer=cat-2&godina=d&predmet=motornavozila'>Motorna vozila</a>
        <a  href='smer.php?smer=cat-2&godina=d&predmet=saobracajnainfrastruktura'>Saobraćajna infrastruktura</a>         
        </li>
          ";
      }

      else if($_GET['smer']=='cat-2' && $_GET['godina']=='d' && $_GET['predmet']=='srpski'){
        require 'Connection.php';
            $query = "SELECT * FROM nastavnimaterijal WHERE kategorija2='1' AND drugi='1' AND predmet='srpski' ORDER BY id DESC";  
            $result = mysqli_query($conn, $query);  
            while($row = mysqli_fetch_array($result))  
            {   
                 echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";
            } 
      }
      else if($_GET['smer']=='cat-2' && $_GET['godina']=='d' && $_GET['predmet']=='matematika'){
        require 'Connection.php';
            $query = "SELECT * FROM nastavnimaterijal WHERE kategorija2='1' AND drugi='1' AND predmet='matematika' ORDER BY id DESC";  
            $result = mysqli_query($conn, $query);  
            while($row = mysqli_fetch_array($result))  
            {   
                 echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>"; 
            }   
      }
      else if($_GET['smer']=='cat-2' && $_GET['godina']=='d' && $_GET['predmet']=='engleski'){
        require 'Connection.php';
            $query = "SELECT * FROM nastavnimaterijal WHERE kategorija2='1' AND drugi='1' AND predmet='engleski' ORDER BY id DESC";  
            $result = mysqli_query($conn, $query);  
            while($row = mysqli_fetch_array($result))  
            {   
                 echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";  
            }
            
      }
      
      else if($_GET['smer']=='cat-2' && $_GET['godina']=='d' && $_GET['predmet']=='fizicko'){
        require 'Connection.php';
            $query = "SELECT * FROM nastavnimaterijal WHERE kategorija2='1' AND drugi='1' AND predmet='fizicko' ORDER BY id DESC";  
            $result = mysqli_query($conn, $query);  
            while($row = mysqli_fetch_array($result))  
            {   
                 echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";    
            }    
      }

      else if($_GET['smer']=='cat-2' && $_GET['godina']=='d' && $_GET['predmet']=='mehanika'){
        require 'Connection.php';
            $query = "SELECT * FROM nastavnimaterijal WHERE kategorija2='1' AND drugi='1' AND predmet='mehanika' ORDER BY id DESC";  
            $result = mysqli_query($conn, $query);  
            while($row = mysqli_fetch_array($result))  
            {   
                 echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";
            } 
      }
      else if($_GET['smer']=='cat-2' && $_GET['godina']=='d' && $_GET['predmet']=='psihologija'){
        require 'Connection.php';
            $query = "SELECT * FROM nastavnimaterijal WHERE kategorija2='1' AND drugi='1' AND predmet='psihologija' ORDER BY id DESC";  
            $result = mysqli_query($conn, $query);  
            while($row = mysqli_fetch_array($result))  
            {   
                 echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>"; 
            }   
      }
      else if($_GET['smer']=='cat-2' && $_GET['godina']=='d' && $_GET['predmet']=='masinskielementi'){
        require 'Connection.php';
            $query = "SELECT * FROM nastavnimaterijal WHERE kategorija2='1' AND drugi='1' AND predmet='masinskielementi' ORDER BY id DESC";  
            $result = mysqli_query($conn, $query);  
            while($row = mysqli_fetch_array($result))  
            {   
                 echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";  
            }
            
      }
      
      else if($_GET['smer']=='cat-2' && $_GET['godina']=='d' && $_GET['predmet']=='masinskielementi'){
        require 'Connection.php';
            $query = "SELECT * FROM nastavnimaterijal WHERE kategorija2='1' AND drugi='1' AND predmet='masinskielementi' ORDER BY id DESC";  
            $result = mysqli_query($conn, $query);  
            while($row = mysqli_fetch_array($result))  
            {   
                 echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";    
            }    
      }

      else if($_GET['smer']=='cat-2' && $_GET['godina']=='d' && $_GET['predmet']=='bezbednostsaobracaja'){
        require 'Connection.php';
            $query = "SELECT * FROM nastavnimaterijal WHERE kategorija2='1' AND drugi='1' AND predmet='bezbednostsaobracaja' ORDER BY id DESC";  
            $result = mysqli_query($conn, $query);  
            while($row = mysqli_fetch_array($result))  
            {   
                 echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";    
            }    
      }

      else if($_GET['smer']=='cat-2' && $_GET['godina']=='d' && $_GET['predmet']=='motornavozila'){
        require 'Connection.php';
            $query = "SELECT * FROM nastavnimaterijal WHERE kategorija2='1' AND drugi='1' AND predmet='motornavozila' ORDER BY id DESC";  
            $result = mysqli_query($conn, $query);  
            while($row = mysqli_fetch_array($result))  
            {   
                 echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";    
            }    
      }

      else if($_GET['smer']=='cat-2' && $_GET['godina']=='d' && $_GET['predmet']=='saobracajnainfrastruktura'){
        require 'Connection.php';
            $query = "SELECT * FROM nastavnimaterijal WHERE kategorija2='1' AND drugi='1' AND predmet='saobracajnainfrastruktura' ORDER BY id DESC";  
            $result = mysqli_query($conn, $query);  
            while($row = mysqli_fetch_array($result))  
            {   
                 echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";    
            }    
      }
      /***********************saobracajna treca*********************** */
      else if($_GET['smer']=='category-2' && $_GET['godina']=='3' ){
        echo"
        <li class=''>
      <a  href='smer.php?smer=cat-2&godina=t&predmet=srpski'>Srpski jezik i književnost   </a>
      <a  href='smer.php?smer=cat-2&godina=t&predmet=matematika'>Matematika</a>
      <a  href='smer.php?smer=cat-2&godina=t&predmet=engleski'>Engleski jezik</a>
      <a  href='smer.php?smer=cat-2&godina=t&predmet=fizicko'>Fizičko vaspitanje</a>
      <a  href='smer.php?smer=cat-2&godina=t&predmet=bezbednostsaobracaja'>Regulisanje i bezbednost saobraćaja</a>
      <a  href='smer.php?smer=cat-2&godina=t&predmet=motornavozila'>Motorna vozila</a>
      <a  href='smer.php?smer=cat-2&godina=t&predmet=saobracajnainfrastruktura'>Saobraćajna infrastruktura</a>  
      <a  href='smer.php?smer=cat-2&godina=t&predmet=organizacijaprevoza'>Organizacija prevoza</a>      
      <a  href='smer.php?smer=cat-2&godina=t&predmet=sociologija'>Sociologija sa pravima građana</a> 
      </li>
        ";
    }

    else if($_GET['smer']=='cat-2' && $_GET['godina']=='t' && $_GET['predmet']=='srpski'){
      require 'Connection.php';
          $query = "SELECT * FROM nastavnimaterijal WHERE kategorija2='1' AND treci='1' AND predmet='srpski' ORDER BY id DESC";  
          $result = mysqli_query($conn, $query);  
          while($row = mysqli_fetch_array($result))  
          {   
               echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";
          } 
    }
    else if($_GET['smer']=='cat-2' && $_GET['godina']=='t' && $_GET['predmet']=='matematika'){
      require 'Connection.php';
          $query = "SELECT * FROM nastavnimaterijal WHERE kategorija2='1' AND treci='1' AND predmet='matematika' ORDER BY id DESC";  
          $result = mysqli_query($conn, $query);  
          while($row = mysqli_fetch_array($result))  
          {   
               echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>"; 
          }   
    }
    else if($_GET['smer']=='cat-2' && $_GET['godina']=='t' && $_GET['predmet']=='engleski'){
      require 'Connection.php';
          $query = "SELECT * FROM nastavnimaterijal WHERE kategorija2='1' AND treci='1' AND predmet='engleski' ORDER BY id DESC";  
          $result = mysqli_query($conn, $query);  
          while($row = mysqli_fetch_array($result))  
          {   
               echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";  
          }
          
    }
    
    else if($_GET['smer']=='cat-2' && $_GET['godina']=='t' && $_GET['predmet']=='fizicko'){
      require 'Connection.php';
          $query = "SELECT * FROM nastavnimaterijal WHERE kategorija2='1' AND treci='1' AND predmet='fizicko' ORDER BY id DESC";  
          $result = mysqli_query($conn, $query);  
          while($row = mysqli_fetch_array($result))  
          {   
               echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";    
          }    
    }

    else if($_GET['smer']=='cat-2' && $_GET['godina']=='t' && $_GET['predmet']=='bezbednostsaobracaja'){
      require 'Connection.php';
          $query = "SELECT * FROM nastavnimaterijal WHERE kategorija2='1' AND treci='1' AND predmet='bezbednostsaobracaja' ORDER BY id DESC";  
          $result = mysqli_query($conn, $query);  
          while($row = mysqli_fetch_array($result))  
          {   
               echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";    
          }    
    }

    else if($_GET['smer']=='cat-2' && $_GET['godina']=='t' && $_GET['predmet']=='motornavozila'){
      require 'Connection.php';
          $query = "SELECT * FROM nastavnimaterijal WHERE kategorija2='1' AND treci='1' AND predmet='motornavozila' ORDER BY id DESC";  
          $result = mysqli_query($conn, $query);  
          while($row = mysqli_fetch_array($result))  
          {   
               echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";    
          }    
    }

    else if($_GET['smer']=='cat-2' && $_GET['godina']=='t' && $_GET['predmet']=='saobracajnainfrastruktura'){
      require 'Connection.php';
          $query = "SELECT * FROM nastavnimaterijal WHERE kategorija2='1' AND treci='1' AND predmet='saobracajnainfrastruktura' ORDER BY id DESC";  
          $result = mysqli_query($conn, $query);  
          while($row = mysqli_fetch_array($result))  
          {   
               echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";    
          }    
    }

    else if($_GET['smer']=='cat-2' && $_GET['godina']=='t' && $_GET['predmet']=='organizacijaprevoza'){
      require 'Connection.php';
          $query = "SELECT * FROM nastavnimaterijal WHERE kategorija2='1' AND treci='1' AND predmet='organizacijaprevoza' ORDER BY id DESC";  
          $result = mysqli_query($conn, $query);  
          while($row = mysqli_fetch_array($result))  
          {   
               echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";    
          }    
    }

    else if($_GET['smer']=='cat-2' && $_GET['godina']=='t' && $_GET['predmet']=='sociologija'){
      require 'Connection.php';
          $query = "SELECT * FROM nastavnimaterijal WHERE kategorija2='1' AND treci='1' AND predmet='sociologija' ORDER BY id DESC";  
          $result = mysqli_query($conn, $query);  
          while($row = mysqli_fetch_array($result))  
          {   
               echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";    
          }    
    }

    /******************************sapbracajna cetvrta*************************** */

    else if($_GET['smer']=='category-2' && $_GET['godina']=='4' ){
      echo"
      <li class=''>
    <a  href='smer.php?smer=cat-2&godina=c&predmet=srpski'>Srpski jezik i književnost   </a>
    <a  href='smer.php?smer=cat-2&godina=c&predmet=matematika'>Matematika</a>
    <a  href='smer.php?smer=cat-2&godina=c&predmet=engleski'>Engleski jezik</a>
    <a  href='smer.php?smer=cat-2&godina=c&predmet=fizicko'>Fizičko vaspitanje</a>
    <a  href='smer.php?smer=cat-2&godina=c&predmet=bezbednostsaobracaja'>Regulisanje i bezbednost saobraćaja</a>
    <a  href='smer.php?smer=cat-2&godina=c&predmet=motornavozila'>Motorna vozila</a>
    <a  href='smer.php?smer=cat-2&godina=c&predmet=saobracajnainfrastruktura'>Saobraćajna infrastruktura</a>  
    <a  href='smer.php?smer=cat-2&godina=c&predmet=organizacijaprevoza'>Organizacija prevoza</a>      
    <a  href='smer.php?smer=cat-2&godina=c&predmet=inteligentnisistemi'>Inteligentni transportni sistemi</a> 
    <a  href='smer.php?smer=cat-2&godina=c&predmet=preduzetnistvo'>Preduzetništvo</a> 
    </li>
      ";
  }

  else if($_GET['smer']=='cat-2' && $_GET['godina']=='c' && $_GET['predmet']=='srpski'){
    require 'Connection.php';
        $query = "SELECT * FROM nastavnimaterijal WHERE kategorija2='1' AND cetvrti='1' AND predmet='srpski' ORDER BY id DESC";  
        $result = mysqli_query($conn, $query);  
        while($row = mysqli_fetch_array($result))  
        {   
            echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";
        } 
  }
  else if($_GET['smer']=='cat-2' && $_GET['godina']=='c' && $_GET['predmet']=='matematika'){
    require 'Connection.php';
        $query = "SELECT * FROM nastavnimaterijal WHERE kategorija2='1' AND cetvrti='1' AND predmet='matematika' ORDER BY id DESC";  
        $result = mysqli_query($conn, $query);  
        while($row = mysqli_fetch_array($result))  
        {   
            echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>"; 
        }   
  }
  else if($_GET['smer']=='cat-2' && $_GET['godina']=='c' && $_GET['predmet']=='engleski'){
    require 'Connection.php';
        $query = "SELECT * FROM nastavnimaterijal WHERE kategorija2='1' AND cetvrti='1' AND predmet='engleski' ORDER BY id DESC";  
        $result = mysqli_query($conn, $query);  
        while($row = mysqli_fetch_array($result))  
        {   
            echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";  
        }
        
  }
  
  else if($_GET['smer']=='cat-2' && $_GET['godina']=='c' && $_GET['predmet']=='fizicko'){
    require 'Connection.php';
        $query = "SELECT * FROM nastavnimaterijal WHERE kategorija2='1' AND cetvrti='1' AND predmet='fizicko' ORDER BY id DESC";  
        $result = mysqli_query($conn, $query);  
        while($row = mysqli_fetch_array($result))  
        {   
            echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";    
        }    
  }

  else if($_GET['smer']=='cat-2' && $_GET['godina']=='c' && $_GET['predmet']=='bezbednostsaobracaja'){
    require 'Connection.php';
        $query = "SELECT * FROM nastavnimaterijal WHERE kategorija2='1' AND cetvrti='1' AND predmet='bezbednostsaobracaja' ORDER BY id DESC";  
        $result = mysqli_query($conn, $query);  
        while($row = mysqli_fetch_array($result))  
        {   
            echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";    
        }    
  }

  else if($_GET['smer']=='cat-2' && $_GET['godina']=='c' && $_GET['predmet']=='motornavozila'){
    require 'Connection.php';
        $query = "SELECT * FROM nastavnimaterijal WHERE kategorija2='1' AND cetvrti='1' AND predmet='motornavozila' ORDER BY id DESC";  
        $result = mysqli_query($conn, $query);  
        while($row = mysqli_fetch_array($result))  
        {   
            echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";    
        }    
  }

  else if($_GET['smer']=='cat-2' && $_GET['godina']=='c' && $_GET['predmet']=='saobracajnainfrastruktura'){
    require 'Connection.php';
        $query = "SELECT * FROM nastavnimaterijal WHERE kategorija2='1' AND cetvrti='1' AND predmet='saobracajnainfrastruktura' ORDER BY id DESC";  
        $result = mysqli_query($conn, $query);  
        while($row = mysqli_fetch_array($result))  
        {   
            echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";    
        }    
  }

  else if($_GET['smer']=='cat-2' && $_GET['godina']=='c' && $_GET['predmet']=='organizacijaprevoza'){
    require 'Connection.php';
        $query = "SELECT * FROM nastavnimaterijal WHERE kategorija2='1' AND cetvrti='1' AND predmet='organizacijaprevoza' ORDER BY id DESC";  
        $result = mysqli_query($conn, $query);  
        while($row = mysqli_fetch_array($result))  
        {   
            echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";    
        }    
  }

  else if($_GET['smer']=='cat-2' && $_GET['godina']=='c' && $_GET['predmet']=='inteligentnisistemi'){
    require 'Connection.php';
        $query = "SELECT * FROM nastavnimaterijal WHERE kategorija2='1' AND cetvrti='1' AND predmet='inteligentnisistemi' ORDER BY id DESC";  
        $result = mysqli_query($conn, $query);  
        while($row = mysqli_fetch_array($result))  
        {   
            echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";    
        }    
  }
  else if($_GET['smer']=='cat-2' && $_GET['godina']=='c' && $_GET['predmet']=='preduzetnistvo'){
    require 'Connection.php';
        $query = "SELECT * FROM nastavnimaterijal WHERE kategorija2='1' AND cetvrti='1' AND predmet='preduzetnistvo' ORDER BY id DESC";  
        $result = mysqli_query($conn, $query);  
        while($row = mysqli_fetch_array($result))  
        {   
            echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";    
        }    
  }
      /**********************mas tehnica za komp. konstruisanje I****************** */
      else if($_GET['smer']=='category-3' && $_GET['godina']=='1' ){
        echo"
        <li class=''>
      <a  href='smer.php?smer=cat-3&godina=p&predmet=srpski'>Srpski jezik i književnost   </a>
      <a  href='smer.php?smer=cat-3&godina=p&predmet=matematika'>Matematika</a>
      <a  href='smer.php?smer=cat-3&godina=p&predmet=engleski'>Engleski jezik</a>
      <a  href='smer.php?smer=cat-3&godina=p&predmet=fizicko'>Fizičko vaspitanje</a>
      <a  href='smer.php?smer=cat-3&godina=p&predmet=istorija'>Istorija</a>
      <a  href='smer.php?smer=cat-3&godina=p&predmet=hemija'>Hemija</a>
      <a  href='smer.php?smer=cat-3&godina=p&predmet=fizika'>Fizika</a>
      <a  href='smer.php?smer=cat-3&godina=p&predmet=programiranje'>Računari i programiranje</a>    
      <a  href='smer.php?smer=cat-3&godina=p&predmet=masinskimaterijali'>Mašinski materijali</a>  
      <a  href='smer.php?smer=cat-3&godina=p&predmet=nacrtnageometrija'>Tehničko crtanje sa nacrtnom geometrijom</a> 
      <a  href='smer.php?smer=cat-3&godina=p&predmet=mehanika'>Mehanika</a>         
      </li>
        ";
    }
    else if($_GET['smer']=='cat-3' && $_GET['godina']=='p' && $_GET['predmet']=='srpski'){
      require 'Connection.php';
          $query = "SELECT * FROM nastavnimaterijal WHERE kategorija3='1' AND prvi='1' AND predmet='srpski' ORDER BY id DESC";  
          $result = mysqli_query($conn, $query);  
          while($row = mysqli_fetch_array($result))  
          {   
               echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";
          } 
    }
    else if($_GET['smer']=='cat-3' && $_GET['godina']=='p' && $_GET['predmet']=='matematika'){
      require 'Connection.php';
          $query = "SELECT * FROM nastavnimaterijal WHERE kategorija3='1' AND prvi='1' AND predmet='matematika' ORDER BY id DESC";  
          $result = mysqli_query($conn, $query);  
          while($row = mysqli_fetch_array($result))  
          {   
               echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>"; 
          }   
    }
    else if($_GET['smer']=='cat-3' && $_GET['godina']=='p' && $_GET['predmet']=='engleski'){
      require 'Connection.php';
          $query = "SELECT * FROM nastavnimaterijal WHERE kategorija3='1' AND prvi='1' AND predmet='engleski' ORDER BY id DESC";  
          $result = mysqli_query($conn, $query);  
          while($row = mysqli_fetch_array($result))  
          {   
               echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";  
          }
          
    }
    else if($_GET['smer']=='cat-3' && $_GET['godina']=='p' && $_GET['predmet']=='istorija'){
      require 'Connection.php';
          $query = "SELECT * FROM nastavnimaterijal WHERE kategorija3='1' AND prvi='1' AND predmet='istorija' ORDER BY id DESC";  
          $result = mysqli_query($conn, $query);  
          while($row = mysqli_fetch_array($result))  
          {   
               echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";   
          }
          
    }
    else if($_GET['smer']=='cat-3' && $_GET['godina']=='p' && $_GET['predmet']=='fizicko'){
      require 'Connection.php';
          $query = "SELECT * FROM nastavnimaterijal WHERE kategorija3='1' AND prvi='1' AND predmet='fizicko' ORDER BY id DESC";  
          $result = mysqli_query($conn, $query);  
          while($row = mysqli_fetch_array($result))  
          {   
               echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";    
          }    
    }

    else if($_GET['smer']=='cat-3' && $_GET['godina']=='p' && $_GET['predmet']=='hemija'){
      require 'Connection.php';
          $query = "SELECT * FROM nastavnimaterijal WHERE kategorija3='1' AND prvi='1' AND predmet='hemija' ORDER BY id DESC";  
          $result = mysqli_query($conn, $query);  
          while($row = mysqli_fetch_array($result))  
          {   
               echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";
          } 
    }
    else if($_GET['smer']=='cat-3' && $_GET['godina']=='p' && $_GET['predmet']=='fizika'){
      require 'Connection.php';
          $query = "SELECT * FROM nastavnimaterijal WHERE kategorija3='1' AND prvi='1' AND predmet='fizika' ORDER BY id DESC";  
          $result = mysqli_query($conn, $query);  
          while($row = mysqli_fetch_array($result))  
          {   
               echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>"; 
          }   
    }
    else if($_GET['smer']=='cat-3' && $_GET['godina']=='p' && $_GET['predmet']=='programiranje'){
      require 'Connection.php';
          $query = "SELECT * FROM nastavnimaterijal WHERE kategorija3='1' AND prvi='1' AND predmet='programiranje' ORDER BY id DESC";  
          $result = mysqli_query($conn, $query);  
          while($row = mysqli_fetch_array($result))  
          {   
               echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";  
          }
          
    }
    else if($_GET['smer']=='cat-3' && $_GET['godina']=='p' && $_GET['predmet']=='masinskimaterijali'){
      require 'Connection.php';
          $query = "SELECT * FROM nastavnimaterijal WHERE kategorija3='1' AND prvi='1' AND predmet='masinskimaterijali' ORDER BY id DESC";  
          $result = mysqli_query($conn, $query);  
          while($row = mysqli_fetch_array($result))  
          {   
               echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";   
          }
          
    }
    else if($_GET['smer']=='cat-3' && $_GET['godina']=='p' && $_GET['predmet']=='nacrtnageometrija'){
      require 'Connection.php';
          $query = "SELECT * FROM nastavnimaterijal WHERE kategorija3='1' AND prvi='1' AND predmet='nacrtnageometrija' ORDER BY id DESC";  
          $result = mysqli_query($conn, $query);  
          while($row = mysqli_fetch_array($result))  
          {   
               echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";    
          }    
    }
    else if($_GET['smer']=='cat-3' && $_GET['godina']=='p' && $_GET['predmet']=='mehanika'){
      require 'Connection.php';
          $query = "SELECT * FROM nastavnimaterijal WHERE kategorija3='1' AND prvi='1' AND predmet='mehanika' ORDER BY id DESC";  
          $result = mysqli_query($conn, $query);  
          while($row = mysqli_fetch_array($result))  
          {   
               echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";    
          }    
    }


      /**********************mas tehnica za komp. konstruisanje II***************** */
      else if($_GET['smer']=='category-3' && $_GET['godina']=='2' ){
        echo"
        <li class=''>
      <a  href='smer.php?smer=cat-3&godina=d&predmet=srpski'>Srpski jezik i književnost   </a>
      <a  href='smer.php?smer=cat-3&godina=d&predmet=matematika'>Matematika</a>
      <a  href='smer.php?smer=cat-3&godina=d&predmet=engleski'>Engleski jezik</a>
      <a  href='smer.php?smer=cat-3&godina=d&predmet=fizicko'>Fizičko vaspitanje</a>
      <a  href='smer.php?smer=cat-3&godina=d&predmet=istorija'>Istorija</a>
      <a  href='smer.php?smer=cat-3&godina=d&predmet=geografija'>Geografija</a>
      <a  href='smer.php?smer=cat-3&godina=d&predmet=fizika'>Fizika</a>
      <a  href='smer.php?smer=cat-3&godina=d&predmet=biologija'>Biologija</a>    
      <a  href='smer.php?smer=cat-3&godina=d&predmet=otpornostmaterijala'>Otpornost materijala</a>  
      <a  href='smer.php?smer=cat-3&godina=d&predmet=grafika'>Kompjuterska grafika</a> 
      <a  href='smer.php?smer=cat-3&godina=d&predmet=mehanika'>Mehanika</a>  
      <a  href='smer.php?smer=cat-3&godina=d&predmet=elektrotehnika'>Osnovi elektrotehnike i elektronike</a>
      <a  href='smer.php?smer=cat-3&godina=d&predmet=masinskielementi'>Mašinski elementi</a>       
      </li>
        ";
    }
    else if($_GET['smer']=='cat-3' && $_GET['godina']=='d' && $_GET['predmet']=='srpski'){
      require 'Connection.php';
          $query = "SELECT * FROM nastavnimaterijal WHERE kategorija3='1' AND drugi='1' AND predmet='srpski' ORDER BY id DESC";  
          $result = mysqli_query($conn, $query);  
          while($row = mysqli_fetch_array($result))  
          {   
               echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";
          } 
    }
    else if($_GET['smer']=='cat-3' && $_GET['godina']=='d' && $_GET['predmet']=='matematika'){
      require 'Connection.php';
          $query = "SELECT * FROM nastavnimaterijal WHERE kategorija3='1' AND drugi='1' AND predmet='matematika' ORDER BY id DESC";  
          $result = mysqli_query($conn, $query);  
          while($row = mysqli_fetch_array($result))  
          {   
               echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>"; 
          }   
    }
    else if($_GET['smer']=='cat-3' && $_GET['godina']=='d' && $_GET['predmet']=='engleski'){
      require 'Connection.php';
          $query = "SELECT * FROM nastavnimaterijal WHERE kategorija3='1' AND drugi='1' AND predmet='engleski' ORDER BY id DESC";  
          $result = mysqli_query($conn, $query);  
          while($row = mysqli_fetch_array($result))  
          {   
               echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";  
          }
          
    }
    else if($_GET['smer']=='cat-3' && $_GET['godina']=='d' && $_GET['predmet']=='istorija'){
      require 'Connection.php';
          $query = "SELECT * FROM nastavnimaterijal WHERE kategorija3='1' AND drugi='1' AND predmet='istorija' ORDER BY id DESC";  
          $result = mysqli_query($conn, $query);  
          while($row = mysqli_fetch_array($result))  
          {   
               echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";   
          }
          
    }
    else if($_GET['smer']=='cat-3' && $_GET['godina']=='d' && $_GET['predmet']=='fizicko'){
      require 'Connection.php';
          $query = "SELECT * FROM nastavnimaterijal WHERE kategorija3='1' AND drugi='1' AND predmet='fizicko' ORDER BY id DESC";  
          $result = mysqli_query($conn, $query);  
          while($row = mysqli_fetch_array($result))  
          {   
               echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";    
          }    
    }

    else if($_GET['smer']=='cat-3' && $_GET['godina']=='d' && $_GET['predmet']=='geografija'){
      require 'Connection.php';
          $query = "SELECT * FROM nastavnimaterijal WHERE kategorija3='1' AND drugi='1' AND predmet='geografija' ORDER BY id DESC";  
          $result = mysqli_query($conn, $query);  
          while($row = mysqli_fetch_array($result))  
          {   
               echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";
          } 
    }
    else if($_GET['smer']=='cat-3' && $_GET['godina']=='d' && $_GET['predmet']=='fizika'){
      require 'Connection.php';
          $query = "SELECT * FROM nastavnimaterijal WHERE kategorija3='1' AND drugi='1' AND predmet='fizika' ORDER BY id DESC";  
          $result = mysqli_query($conn, $query);  
          while($row = mysqli_fetch_array($result))  
          {   
               echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>"; 
          }   
    }
    else if($_GET['smer']=='cat-3' && $_GET['godina']=='d' && $_GET['predmet']=='biologija'){
      require 'Connection.php';
          $query = "SELECT * FROM nastavnimaterijal WHERE kategorija3='1' AND drugi='1' AND predmet='biologija' ORDER BY id DESC";  
          $result = mysqli_query($conn, $query);  
          while($row = mysqli_fetch_array($result))  
          {   
               echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";  
          }
          
    }
    else if($_GET['smer']=='cat-3' && $_GET['godina']=='d' && $_GET['predmet']=='otpornostmaterijala'){
      require 'Connection.php';
          $query = "SELECT * FROM nastavnimaterijal WHERE kategorija3='1' AND drugi='1' AND predmet='otpornostmaterijala' ORDER BY id DESC";  
          $result = mysqli_query($conn, $query);  
          while($row = mysqli_fetch_array($result))  
          {   
               echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";   
          }
          
    }
    else if($_GET['smer']=='cat-3' && $_GET['godina']=='d' && $_GET['predmet']=='grafika'){
      require 'Connection.php';
          $query = "SELECT * FROM nastavnimaterijal WHERE kategorija3='1' AND drugi='1' AND predmet='grafika' ORDER BY id DESC";  
          $result = mysqli_query($conn, $query);  
          while($row = mysqli_fetch_array($result))  
          {   
               echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";    
          }    
    }
    else if($_GET['smer']=='cat-3' && $_GET['godina']=='d' && $_GET['predmet']=='mehanika'){
      require 'Connection.php';
          $query = "SELECT * FROM nastavnimaterijal WHERE kategorija3='1' AND drugi='1' AND predmet='mehanika' ORDER BY id DESC";  
          $result = mysqli_query($conn, $query);  
          while($row = mysqli_fetch_array($result))  
          {   
               echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";    
          }    
    }

    else if($_GET['smer']=='cat-3' && $_GET['godina']=='d' && $_GET['predmet']=='elektrotehnika'){
      require 'Connection.php';
          $query = "SELECT * FROM nastavnimaterijal WHERE kategorija3='1' AND drugi='1' AND predmet='elektrotehnika' ORDER BY id DESC";  
          $result = mysqli_query($conn, $query);  
          while($row = mysqli_fetch_array($result))  
          {   
               echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";    
          }    
    }
    else if($_GET['smer']=='cat-3' && $_GET['godina']=='d' && $_GET['predmet']=='masinskielementi'){
      require 'Connection.php';
          $query = "SELECT * FROM nastavnimaterijal WHERE kategorija3='1' AND drugi='1' AND predmet='masinskielementi' ORDER BY id DESC";  
          $result = mysqli_query($conn, $query);  
          while($row = mysqli_fetch_array($result))  
          {   
               echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";    
          }    
    }

       /**********************mas tehnica za komp. konstruisanje III***************** */
       else if($_GET['smer']=='category-3' && $_GET['godina']=='3' ){
        echo"
        <li class=''>
      <a  href='smer.php?smer=cat-3&godina=t&predmet=srpski'>Srpski jezik i književnost   </a>
      <a  href='smer.php?smer=cat-3&godina=t&predmet=matematika'>Matematika</a>
      <a  href='smer.php?smer=cat-3&godina=t&predmet=engleski'>Engleski jezik</a>
      <a  href='smer.php?smer=cat-3&godina=t&predmet=fizicko'>Fizičko vaspitanje</a>
      <a  href='smer.php?smer=cat-3&godina=t&predmet=sociologija'>Sociologija</a>
      <a  href='smer.php?smer=cat-3&godina=t&predmet=masinskielementi'>Mašinski elementi</a>  
      <a  href='smer.php?smer=cat-3&godina=t&predmet=tehnologijaobrade'>Tehnologija obrade</a>
      <a  href='smer.php?smer=cat-3&godina=t&predmet=hidraulika'>Hidraulika i pneumatika</a>
      <a  href='smer.php?smer=cat-3&godina=t&predmet=termodinamika'>Termodinamika</a>
      <a  href='smer.php?smer=cat-3&godina=t&predmet=modeliranje'>Modeliranje mašinskih elemenata i konstrukcija</a>     
      </li>
        ";
    }

    else if($_GET['smer']=='cat-3' && $_GET['godina']=='t' && $_GET['predmet']=='srpski'){
      require 'Connection.php';
          $query = "SELECT * FROM nastavnimaterijal WHERE kategorija3='1' AND treci='1' AND predmet='srpski' ORDER BY id DESC";  
          $result = mysqli_query($conn, $query);  
          while($row = mysqli_fetch_array($result))  
          {   
               echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";
          } 
    }
    else if($_GET['smer']=='cat-3' && $_GET['godina']=='t' && $_GET['predmet']=='matematika'){
      require 'Connection.php';
          $query = "SELECT * FROM nastavnimaterijal WHERE kategorija3='1' AND treci='1' AND predmet='matematika' ORDER BY id DESC";  
          $result = mysqli_query($conn, $query);  
          while($row = mysqli_fetch_array($result))  
          {   
               echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>"; 
          }   
    }
    else if($_GET['smer']=='cat-3' && $_GET['godina']=='t' && $_GET['predmet']=='engleski'){
      require 'Connection.php';
          $query = "SELECT * FROM nastavnimaterijal WHERE kategorija3='1' AND treci='1' AND predmet='engleski' ORDER BY id DESC";  
          $result = mysqli_query($conn, $query);  
          while($row = mysqli_fetch_array($result))  
          {   
               echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";  
          }
          
    }
    else if($_GET['smer']=='cat-3' && $_GET['godina']=='t' && $_GET['predmet']=='sociologija'){
      require 'Connection.php';
          $query = "SELECT * FROM nastavnimaterijal WHERE kategorija3='1' AND treci='1' AND predmet='sociologija' ORDER BY id DESC";  
          $result = mysqli_query($conn, $query);  
          while($row = mysqli_fetch_array($result))  
          {   
               echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";   
          }
          
    }
    else if($_GET['smer']=='cat-3' && $_GET['godina']=='t' && $_GET['predmet']=='fizicko'){
      require 'Connection.php';
          $query = "SELECT * FROM nastavnimaterijal WHERE kategorija3='1' AND treci='1' AND predmet='fizicko' ORDER BY id DESC";  
          $result = mysqli_query($conn, $query);  
          while($row = mysqli_fetch_array($result))  
          {   
               echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";    
          }    
    }
    else if($_GET['smer']=='cat-3' && $_GET['godina']=='t' && $_GET['predmet']=='masinskielementi'){
      require 'Connection.php';
          $query = "SELECT * FROM nastavnimaterijal WHERE kategorija3='1' AND treci='1' AND predmet='msinskielementi' ORDER BY id DESC";  
          $result = mysqli_query($conn, $query);  
          while($row = mysqli_fetch_array($result))  
          {   
               echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";    
          }    
    }
    else if($_GET['smer']=='cat-3' && $_GET['godina']=='t' && $_GET['predmet']=='tehnologijaobrade'){
      require 'Connection.php';
          $query = "SELECT * FROM nastavnimaterijal WHERE kategorija3='1' AND treci='1' AND predmet='tehnologijaobrade' ORDER BY id DESC";  
          $result = mysqli_query($conn, $query);  
          while($row = mysqli_fetch_array($result))  
          {   
               echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";    
          }    
    }

    else if($_GET['smer']=='cat-3' && $_GET['godina']=='t' && $_GET['predmet']=='hidraulika'){
      require 'Connection.php';
          $query = "SELECT * FROM nastavnimaterijal WHERE kategorija3='1' AND treci='1' AND predmet='hidraulika' ORDER BY id DESC";  
          $result = mysqli_query($conn, $query);  
          while($row = mysqli_fetch_array($result))  
          {   
               echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";    
          }    
    }

    else if($_GET['smer']=='cat-3' && $_GET['godina']=='t' && $_GET['predmet']=='termodinamika'){
      require 'Connection.php';
          $query = "SELECT * FROM nastavnimaterijal WHERE kategorija3='1' AND treci='1' AND predmet='termodinamika' ORDER BY id DESC";  
          $result = mysqli_query($conn, $query);  
          while($row = mysqli_fetch_array($result))  
          {   
               echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";    
          }    
    }

    else if($_GET['smer']=='cat-3' && $_GET['godina']=='t' && $_GET['predmet']=='modeliranje'){
      require 'Connection.php';
          $query = "SELECT * FROM nastavnimaterijal WHERE kategorija3='1' AND treci='1' AND predmet='modeliranje' ORDER BY id DESC";  
          $result = mysqli_query($conn, $query);  
          while($row = mysqli_fetch_array($result))  
          {   
               echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";    
          }    
    }


     /**********************mas tehnica za komp. konstruisanje IV***************** */
     else if($_GET['smer']=='category-3' && $_GET['godina']=='4' ){
      echo"
      <li class=''>
    <a  href='smer.php?smer=cat-3&godina=c&predmet=srpski'>Srpski jezik i književnost   </a>
    <a  href='smer.php?smer=cat-3&godina=c&predmet=matematika'>Matematika</a>
    <a  href='smer.php?smer=cat-3&godina=c&predmet=engleski'>Engleski jezik</a>
    <a  href='smer.php?smer=cat-3&godina=c&predmet=fizicko'>Fizičko vaspitanje</a>
    <a  href='smer.php?smer=cat-3&godina=ct&predmet=filozofija'>Filozofija</a>
    <a  href='smer.php?smer=cat-3&godina=c&predmet=pravo'>Ustav i pravo građana</a> 
    <a  href='smer.php?smer=cat-3&godina=c&predmet=organizacijarada'>Organizacija rada</a>
    <a  href='smer.php?smer=cat-3&godina=c&predmet=termodinamika'>Termodinamika</a>
    <a  href='smer.php?smer=cat-3&godina=c&predmet=robotika'>Automatizacija i robotika</a>
    <a  href='smer.php?smer=cat-3&godina=c&predmet=konstruisanje'>Konstruisanje</a>
    <a  href='smer.php?smer=cat-3&godina=c&predmet=masinskekonstrukcije'>Ispitivanje mašinskih konstrukcija</a> 
    <a  href='smer.php?smer=cat-3&godina=c&predmet=modeliranje'>Modeliranje mašinskih elemenata i konstrukcija</a> 
    </li>
      ";
  }

  else if($_GET['smer']=='cat-3' && $_GET['godina']=='c' && $_GET['predmet']=='srpski'){
    require 'Connection.php';
        $query = "SELECT * FROM nastavnimaterijal WHERE kategorija3='1' AND cetvrti='1' AND predmet='srpski' ORDER BY id DESC";  
        $result = mysqli_query($conn, $query);  
        while($row = mysqli_fetch_array($result))  
        {   
            echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";
        } 
  }
  else if($_GET['smer']=='cat-3' && $_GET['godina']=='c' && $_GET['predmet']=='matematika'){
    require 'Connection.php';
        $query = "SELECT * FROM nastavnimaterijal WHERE kategorija3='1' AND cetvrti='1' AND predmet='matematika' ORDER BY id DESC";  
        $result = mysqli_query($conn, $query);  
        while($row = mysqli_fetch_array($result))  
        {   
            echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>"; 
        }   
  }
  else if($_GET['smer']=='cat-3' && $_GET['godina']=='c' && $_GET['predmet']=='engleski'){
    require 'Connection.php';
        $query = "SELECT * FROM nastavnimaterijal WHERE kategorija3='1' AND cetvrti='1' AND predmet='engleski' ORDER BY id DESC";  
        $result = mysqli_query($conn, $query);  
        while($row = mysqli_fetch_array($result))  
        {   
            echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";  
        }
        
  }
  else if($_GET['smer']=='cat-3' && $_GET['godina']=='c' && $_GET['predmet']=='filozofija'){
    require 'Connection.php';
        $query = "SELECT * FROM nastavnimaterijal WHERE kategorija3='1' AND cetvrti='1' AND predmet='filozofija' ORDER BY id DESC";  
        $result = mysqli_query($conn, $query);  
        while($row = mysqli_fetch_array($result))  
        {   
            echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";   
        }
        
  }
  else if($_GET['smer']=='cat-3' && $_GET['godina']=='c' && $_GET['predmet']=='fizicko'){
    require 'Connection.php';
        $query = "SELECT * FROM nastavnimaterijal WHERE kategorija3='1' AND cetvrti='1' AND predmet='fizicko' ORDER BY id DESC";  
        $result = mysqli_query($conn, $query);  
        while($row = mysqli_fetch_array($result))  
        {   
            echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";    
        }    
  }
  else if($_GET['smer']=='cat-3' && $_GET['godina']=='c' && $_GET['predmet']=='pravo'){
    require 'Connection.php';
        $query = "SELECT * FROM nastavnimaterijal WHERE kategorija3='1' AND cetvrti='1' AND predmet='pravo' ORDER BY id DESC";  
        $result = mysqli_query($conn, $query);  
        while($row = mysqli_fetch_array($result))  
        {   
            echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";    
        }    
  }
  else if($_GET['smer']=='cat-3' && $_GET['godina']=='c' && $_GET['predmet']=='organizacijarada'){
    require 'Connection.php';
        $query = "SELECT * FROM nastavnimaterijal WHERE kategorija3='1' AND cetvrti='1' AND predmet='organizacijarada' ORDER BY id DESC";  
        $result = mysqli_query($conn, $query);  
        while($row = mysqli_fetch_array($result))  
        {   
            echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";    
        }    
  }
    
  else if($_GET['smer']=='cat-3' && $_GET['godina']=='c' && $_GET['predmet']=='termodinamika'){
    require 'Connection.php';
        $query = "SELECT * FROM nastavnimaterijal WHERE kategorija3='1' AND cetvrti='1' AND predmet='termodinamika' ORDER BY id DESC";  
        $result = mysqli_query($conn, $query);  
        while($row = mysqli_fetch_array($result))  
        {   
            echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";    
        }    
  }
  else if($_GET['smer']=='cat-3' && $_GET['godina']=='c' && $_GET['predmet']=='robotika'){
    require 'Connection.php';
        $query = "SELECT * FROM nastavnimaterijal WHERE kategorija3='1' AND cetvrti='1' AND predmet='robotika' ORDER BY id DESC";  
        $result = mysqli_query($conn, $query);  
        while($row = mysqli_fetch_array($result))  
        {   
            echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";    
        }    
  }
  else if($_GET['smer']=='cat-3' && $_GET['godina']=='c' && $_GET['predmet']=='konstruisanje'){
    require 'Connection.php';
        $query = "SELECT * FROM nastavnimaterijal WHERE kategorija3='1' AND cetvrti='1' AND predmet='konstruisanje' ORDER BY id DESC";  
        $result = mysqli_query($conn, $query);  
        while($row = mysqli_fetch_array($result))  
        {   
            echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";    
        }    
  }
    
  else if($_GET['smer']=='cat-3' && $_GET['godina']=='c' && $_GET['predmet']=='masinskekonstrukcije'){
    require 'Connection.php';
        $query = "SELECT * FROM nastavnimaterijal WHERE kategorija3='1' AND cetvrti='1' AND predmet='masinskekonstrukcije' ORDER BY id DESC";  
        $result = mysqli_query($conn, $query);  
        while($row = mysqli_fetch_array($result))  
        {   
            echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";    
        }    
  }

  else if($_GET['smer']=='cat-3' && $_GET['godina']=='c' && $_GET['predmet']=='modeliranje'){
    require 'Connection.php';
        $query = "SELECT * FROM nastavnimaterijal WHERE kategorija3='1' AND cetvrti='1' AND predmet='modeliranje' ORDER BY id DESC";  
        $result = mysqli_query($conn, $query);  
        while($row = mysqli_fetch_array($result))  
        {   
            echo " 
                          <li class=''>
                          <a target='_blank' href='view.php?id=".$row['id']."'>".$row['ime']. "</a>
                          </li>";    
        }    
  }
    
    
    
               ?>
               
           </ol>
           
           
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