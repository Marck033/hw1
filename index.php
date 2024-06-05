<!DOCTYPE html>
<html>

<head>
  <title>jennyfer</title>
  <script src="index.js" defer></script>
  <link rel="stylesheet" type="text/css" href="index.css">
  <meta charset="utf.8">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <!--API mappa-->
  <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-core.js"></script>
  <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-service.js"></script>
  <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-ui.js"></script>
  <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-mapevents.js"></script>
  <!--API spotify-->
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Album musicali</title>
    <link rel="stylesheet" href="09_05_spotify.css">
    <script src="09_05_spotify.js" defer></script>
  


<meta name="viewport"
content="width=device-width, initial-scale=1">

</head>

<body>
<style></style>
  <!--navbar...-->
 
  <nav>

  

    <div class='trattini'>
      
    <a href=''>
      <div></div>
      <div></div>
      <div></div>
</a>
    </div> 

    <div class='logojenny'> 
      
    <a href=''> <img src="immagini sito\DCM-jennyfer.png"/> </a>
    </div>


  <!--box-search...-->

    <div class="details-search hidden-search">

      <div class="box-search">

        <input class='testo-search' type='text'/>

      </div>

      <button>cerca</button>

    </div>




    <div class='search'> 
    <a href=''> <img src='immagini sito\cerca.png'>  </a>
    </div>
          
    <div class='profilo'> 
    <a href=''> <img src='immagini sito\profilo.png'> </a>
    </div>
          
    <div class='carrello'> 
    <a href=''> <img src='immagini sito\carrello.png'> </a>
    </div>
          
  </nav>

  <!--...navbar-->


  <!--header...-->

  <header>

  
  <style>
  .box-menu{
    display: flex;
  position: absolute;
  border: 4px solid black;
  background-color: white;
  height: 690px;
  width: 350px;
  flex-direction: column;
  justify-content:space-between;
}

.box-menu div{
  border: 2px solid black;
  
}
.box-menu #linea-uno{
  border: 0.5px solid black;
}

.hidden-menu{
  display: none;
}

</style>


<div class='details-menu hidden-menu'>
<div class='box-menu'>
  <div id='linea-uno'></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
</div>
</div>


    <!--dentro questo div, inserisco il boxlogin per l'accesso al profilo, e questo div permette poi (quando verra' richiamato nel CSS) 
    di nascondere tutto cio che ce' al suo interno-->
    <div class='details-login hidden-login'>

      <!--dentro il box-login ho inserito tutto cio' che riguarda l'accesso al profilo, email, passw.-->
      <div class='modal-view' id='hidden'>
      <div class='box-login'>

      
         

        <button class='x'>X</button>

        <p><strong>Effetuare il login</strong></p>

        <div class='email'>
        <p><em>email</em></p>
        </div>

        <div class='passw'>
        <p><em>password</em></p>
        </div>

        <a href=''>

        <div id='flex'>

          <div class='login'>
          <p>ACCEDI</p>
          </div>
      
        </div>

        </a>

        <div class='linea1'></div>

        <div class='oppure'>
        <p><strong>oppure</strong></p>
        </div>

        <div class='linea2'></div>

        

        

        <!--riquadro registrazione-->
      

        <a href='pagina-registrazione.php'>
        <div id='flex-register'>
          

          <div class='register'>
          <p>REGISTRATI</p>
          </div>

  
        </div>
        </a>

       

      </div> 

      </div>

  
    </div>
    <!--fine boxlogin/hidden-->
    






    <!--foto di sfondo delle modelle-->
    <img  src='immagini sito\desk-it.jpg' />
          
    <div class='CLICCA-QUI'>
    <a href='#/'><strong>CLICCA QUI</strong></a>
    </div>

  </header>

<footer>

  <div class='fot0'></div>
        
  <div class='fot1'></div>
        
  <div class='fot2'>
          
    <img class='cuore' src='immagini sito\hand-logo.png' />
            
    <p class='par'><strong>NEWSLETTER</strong></p>
            
    <div id='rettangoli'>
            
      <div class='rett1'>
      <p>il mio indirizzo e-mail</p>
      </div>

      <div class='rett2'> <a href=''> 
      <p>></p> </a>
      </div>

    </div>
            
    <div id='social'>

      <a href=''>
      <img src='immagini sito\instagram.png'> 
      </a>

      <a href=''>
      <img src='immagini sito\facebook.png'> 
      </a>

      <a href=''>
      <img src='immagini sito\twitter.png'> 
      </a>

      <a href=''>
      <img src='immagini sito\tiktok.png'> 
      </a>

      <a href=''>
      <img src='immagini sito\spotify.png'> 
      </a>

    </div>
            
  </div>

  <div class='fot3'></div>

  
</footer>



    <!--mappa-->
    <div class='details-map hidden-map'>

      <div id='map'></div>

    </div>
       

    <!--spotify-->
    <h1>Album musicali</h1>
    <form>
      Inserisci il nome di un album 
      <input type='text' id='album'>
      <input type='submit' id='submit' value='Cerca'>
    </form>

    <section id="album-view">
    </section>
    
  


</body>


</html>





