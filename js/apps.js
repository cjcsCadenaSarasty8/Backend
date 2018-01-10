function mostrarResultado(){
  var ContenidoBusqueda=document.getElementById('Resultados');
  var resultado="";
  for(var i=0; i<5;i++){
  resultado+="<div class='card horizontal'>";
  resultado+="<div class='card-image'>";
  resultado+="<img src='img/home.jpg'>";
  resultado+="</div>";
  resultado+="<div class='card-stacked'>";
  resultado+="<div class='card-content'>";
  resultado+="<strong>Direccion:</strong><br>";
  resultado+="<strong>Ciudad:</strong><br>";
  resultado+="<strong>Codigo Postal:</strong><br>";
  resultado+="<strong>Tipo</strong><br>";
  resultado+="<strong>Precio:</strong><br>";
  resultado+="</div>";
  resultado+="<div class='card-action'>";
  resultado+="<a href='#'>VER MAS</a>";
  resultado+="</div>";
  resultado+="</div>";
  resultado+="</div>";
}
  ContenidoBusqueda.innerHTML=resultado;
}
