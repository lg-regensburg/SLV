// ------------------------------------------------------------- //,

  wechelzeit = 10000;

var bildnamen = new Array("../images/banner/Kaernten_Laeuft.png",
						  "../images/banner/VR-Banner-hoch.png"
						  ),
      bildurl   = new Array("http://www.kaerntenlaeuft.at/",
							"https://www.meine-bank-no.de/homepage.html"
              ),
      bildsrc   = new Array(bildnamen.length),
      bild      = "sponsoren1",
      ankernr   = 1,
      bildnr    = 0,
      y;

   for(y=0; y<bildnamen.length; ++y) {
    bildsrc[y]     = new Image();
    bildsrc[y].src = bildnamen[y];
  }


  var bildnr = 0;


  function bildwechsel(relativePath) {
//	bildsrc[bildnr].src = relativePath+bildsrc[bildnr].src;
    bildnr = (bildnr>=bildnamen.length-1) ? 0 : bildnr+1;
    eval("document.images[\""+bild+"\"].src=bildsrc[bildnr].src");
    document.links[ankernr].href=bildurl[bildnr];
    window.setTimeout("bildwechsel('"+relativePath+"')", wechelzeit);
  }
