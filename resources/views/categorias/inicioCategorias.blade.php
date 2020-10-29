@extends('layout.layoutAdmin')
@section('content')
<div class="container-sm">
  <h5>Categorias/ Listar</h5>
  <a class="btn btn-primary btn-lg btn-block" href="{{ url('crearCategoria') }}">Agregar categoria</a>

  <div class="table-responsive">
  <table class="table" style="text-align: center;">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Producto</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Electrica</td>
      <td>3</td>
      <td>
        <button class="btn btn-success">Editar</button>
        <button class="btn btn-outline-info">Mostrar</button>
        <button class="btn btn-outline-danger" onclick=clickaction(this) id="Eliminar">Eliminar</button>
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Electronica</td>
      <td>3</td>
      <td>
        <button class="btn btn-success">Editar</button>
        <button class="btn btn-outline-info">Mostrar</button>
        <button class="btn btn-outline-danger">Eliminar</button>
      </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Electroddomesticos</td>
      <td>2</td>
      <td>
        <button class="btn btn-success">Editar</button>
        <button class="btn btn-outline-info">Mostrar</button>
        <button class="btn btn-outline-danger">Eliminar</button>
      </td>
    </tr>
  </tbody>
</table>
</div>

</div>
<script type="text/javascript">
  

  function clickaction( b ){
  
  if(b.id == "Eliminar"){
    alert("Estas seguro de Eliminar este elemento");
  }else{
    alert("Nada para Eliminar");
  }
}
  
</script>
@endsection