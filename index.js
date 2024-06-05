/* funzione menu */

function menu(event) {
  event.preventDefault();
  const tratt = document.querySelector('.details-menu');

  if (tratt.classList.contains('hidden-menu')) {
    tratt.classList.remove('hidden-menu');
  }
}

const aprimenu = document.querySelector('.trattini'); 
aprimenu.addEventListener('click', menu);







/*funzione search*/

function barradiricerca(event) {
    event.preventDefault();
    const cerca = document.querySelector('.details-search');
  
    if (cerca.classList.contains('hidden-search')) {
      cerca.classList.remove('hidden-search');
    }
  }
  
  const searchButton = document.querySelector('.search'); 
  searchButton.addEventListener('click', barradiricerca);
  
  
  
  
  /*funzione login */
  
  function profilo(event){
      event.preventDefault();
      const accedi=document.querySelector('.details-login');
  
      
      if(accedi.classList.contains('hidden-login'))
      {
          accedi.classList.remove('hidden-login');        
      }
      
  }
  
  const detailToggle = document.querySelector('.profilo');
  detailToggle.addEventListener('click', profilo);
  
  
  function chiudilogin(event){
      event.preventDefault();
      const accedi=document.querySelector('.details-login');
  
      if (!accedi.classList.contains('hidden-login'))
      {
          accedi.classList.add('hidden-login');
      }
      
  } 
      const chiudix = document.querySelector('.x');
      chiudix.addEventListener('click', chiudilogin);
      
  
  
  
  /*API mappa */
  
  fetch('https://js.api.here.com/v3/3.1/mapsjs-core.js')
    .then(response => response.text())
    .then(data => {
      //Step 1: initialize communication with the platform
          // Replace variable YOUR_API_KEY with your own apikey
          var platform = new H.service.Platform({
              apikey: 'Amoi27ykY8DdhQk1fjdm7L8yrSA0IgTtXky-QSNILPU'
          });
          var defaultLayers = platform.createDefaultLayers();
          //Step 2: initialize a map - this map is centered over Europe
          var map = new H.Map(document.getElementById('map'),
              defaultLayers.vector.normal.map,
              {
                  center: { lat: 50, lng: 5 },
                  zoom: 4,
                  pixelRatio: window.devicePixelRatio || 1
              }
          );
          // add a resize listener to make sure that the map occupies the whole container
          window.addEventListener('resize', () => map.getViewPort().resize());
          //Step 3: make the map interactive
          // MapEvents enables the event system
          // Behavior implements default interactions for pan/zoom (also on mobile touch environments)
          var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));
  
          // Create the default UI components
          var ui = H.ui.UI.createDefault(map, defaultLayers);
  
          // Marker code goes here
          var LocationOfMarker = { lat: 37.5526396601395, lng: 15.069488949197773}; 
          var LocationOfMarker1 = { lat: 37.56169078362664, lng: 15.06860732430613};
          var LocationOfMarker2 = { lat: 37.481635418989136, lng: 15.050067895961865};
          // optionally - resize a larger PNG image to a specific size
          var pngIcon = new H.map.Icon("https://cdn0.iconfinder.com/data/icons/gpsmapicons/red/gpsmapicons01.png", { size: { w: 56, h: 56 } });
  
          // Create a marker using the previously instantiated icon:
          var marker = new H.map.Marker(LocationOfMarker, { icon: pngIcon });
          var marker1 = new H.map.Marker(LocationOfMarker1, { icon: pngIcon });
          var marker2 = new H.map.Marker(LocationOfMarker2, { icon: pngIcon });
          // Add the marker to the map:
          map.addObject(marker);
          map.addObject(marker1);
          map.addObject(marker2);
          
          // Optionally, 
          //Show the marker in the center of the map
          map.setCenter(LocationOfMarker)
          map.setCenter(LocationOfMarker1)
          map.setCenter(LocationOfMarker2)
          
  
          //Zooming so that the marker can be clearly visible
          map.setZoom(11)
    })
    .catch(error => {
      console.error('Si è verificato un problema con l\'operazione di fetch:', error);
    });
  
  /*funzione mappa*/
  
    function cliccaquimap(event){
      event.preventDefault();
      const mappa=document.querySelector('.details-map');
  
      
      if(mappa.classList.contains('hidden-map'))
      {
          mappa.classList.remove('hidden-map');        
      }
      else
      {
          mappa.classList.add('hidden-map');      
      }
  }
  
  const detailToggle1 = document.querySelector('.CLICCA-QUI');
  detailToggle1.addEventListener('click', cliccaquimap);
  
  
  /*api spotify */
  
  function onJson(json) {
      console.log('JSON ricevuto');
      console.log(json);
      // Svuotiamo la libreria
      const library = document.querySelector('#album-view');
      library.innerHTML = '';
      // Leggi il numero di risultati
      const results = json.albums.items;
      let num_results = results.length;
      if(num_results > 5)
        num_results = 5;
      // Processa ciascun risultato
      for(let i=0; i<num_results; i++)
      {
        // Leggi il documento
        const album_data = results[i]
        // Leggiamo info
        const title = album_data.name;
        const selected_image = album_data.images[0].url;
        // Creiamo il div che conterrà immagine e didascalia
        const album = document.createElement('div');
        album.classList.add('album');
        // Creiamo l'immagine
        const img = document.createElement('img');
        img.src = selected_image;
        // Creiamo la didascalia
        const caption = document.createElement('span');
        caption.textContent = title;
        // Aggiungiamo immagine e didascalia al div
        album.appendChild(img);
        album.appendChild(caption);
        // Aggiungiamo il div alla libreria
        library.appendChild(album);
      }
    }
    
    function onResponse(response) {
      console.log('Risposta ricevuta');
      return response.json();
    }
    
    function search(event)
    {
      // Impedisci il submit del form
      event.preventDefault();
      // Leggi valore del campo di testo
      const album_input = document.querySelector('#album');
      const album_value = encodeURIComponent(album_input.value);
      console.log('Eseguo ricerca: ' + album_value);
      // Esegui la richiesta
      if(token){
          fetch("https://api.spotify.com/v1/search?type=album&q=" + album_value,
        {
          headers:
          {
            'Authorization': 'Bearer ' + token
          }
        }
      ).then(onResponse).then(onJson);
    }else{
      console.log('Token non disponibile');
    }}
    
    function onTokenJson(json)
    {
      console.log(json);
      // Imposta il token global
      token = json.access_token;
    }
    
    function onTokenResponse(response)
    {
      return response.json();
    }
    
    // OAuth credentials --- NON SICURO!
    const client_id = '5cb1c15358614c9c8e0f97e0d88298cf';
    const client_secret = '6affbb2659444870b812b033871e4659';
    // Dichiara variabile token
    let token;
    // All'apertura della pagina, richiediamo il token
    fetch("https://accounts.spotify.com/api/token",
        {
       method: "post",
       body: 'grant_type=client_credentials',
       headers:
       {
        'Content-Type': 'application/x-www-form-urlencoded',
        'Authorization': 'Basic ' + btoa(client_id + ':' + client_secret)
       }
      }
    ).then(onTokenResponse).then(onTokenJson);
    // Aggiungi event listener al form
    const form = document.querySelector('form');
    form.addEventListener('submit', search);