wechelzeit = 10000;

var bildnamen = new Array("images/banner/VR-Banner-hoch.png"
  ),
  bildurl = new Array("https://www.meine-bank-no.de/homepage.html"
  ),
  bildsrc = new Array(bildnamen.length),
  bild = "sponsoren1",
  ankernr = 1,
  bildnr = 0,
  y;

for (y = 0; y < bildnamen.length; ++y) {
  bildsrc[y] = new Image();
  bildsrc[y].src = bildnamen[y];
}

var bildnr = 0;

function bildwechsel(relativePath) {
  bildnr = (bildnr >= bildnamen.length - 1) ? 0 : bildnr + 1;
  eval("document.images[\"" + bild + "\"].src=bildsrc[bildnr].src");
  document.getElementById("imagelink").href = bildurl[bildnr];
  window.setTimeout("bildwechsel('" + relativePath + "')", wechelzeit);
}
