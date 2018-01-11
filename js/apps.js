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
  var form_data=new FormData();
  form_data.append('Ciudad',Ciudad);
  form_data.append('Tipo',Tipo);
  form_data.append('Precio',Precio);
  $.ajax({
    url:'buscador.php',
    type:'POST',
    data:{Ciudad,Tipo,Precio}
  }).done (function (data){
    var ContenidoBusqueda=document.getElementById('Resultados');
   ContenidoBusqueda.innerHTML=data;
   alert(data);
  });
}
