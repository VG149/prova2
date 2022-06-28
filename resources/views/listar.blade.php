<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

<table class="table" border="1">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Valor</th>
      <th scope="col">Estoque</th>
    </tr>
    @foreach($produto as $produtos)
    <tr>
      <td>{{$produtos['id']}}</td>
      <td>{{$produtos['nome']}}</td>
      <td>R${{$produtos['especie']}}</td>
      <td><button>Editar</button></td>
      <td><button>Deletar</button></td>
    </tr>
    @endforeach
  </thead>
  
</table>

