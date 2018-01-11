function MostrarTodo(){
  var Ciudad="";
  var Tipo="";
  var precio="";
  Buscar(Ciudad,Tipo,precio);
}

function MostrarFiltro(){
  var Ciudad=$('form').find('select[name="ciudad"]').val();
  var Tipo=$('form').find('select[name="tipo"]').val();
  var precio=$('form').find('input[name="precio"]').val();
  Buscar(Ciudad,Tipo,precio);
}

function Buscar(Ciudad,Tipo,Precio){
  $.ajax({
    url:'buscador.php',
    type:'POST',
    data:{
      Ciudad:Ciudad,
      Tipo:Tipo,
      Precio:Precio
    }
  }).done (function (data){
    var ContenidoBusqueda=document.getElementById('Resultados');
   ContenidoBusqueda.innerHTML=data;
   alert(data);
  });
}
