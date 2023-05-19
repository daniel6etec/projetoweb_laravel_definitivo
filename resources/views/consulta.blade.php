<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Consultar</title>
        @vite([
                'resources/js/app.js',
                'resources/css/app.css', 
                'node_modules/bootstrap/dist/css/bootstrap.min.css',
                'node_modules/bootstrap/dist/js/bootstrp.bundle.js'
                ])

        <style>
            body{
                background-color:#DDDDDD;
            }

            .center{
                text-align: center;
            }

            .midii{
                width:50%;
                margin: auto;
            }


            .colorblack{
                color:black;
            }

            .lineblock{
                display: inline-block;
            }

        </style>

    

    </head>

    <body>
        <br>
        <div class="container">
        <div class="container">
		        <div class="row">
			        <nav class="navbar navbar-expand-lg navbar-dark bg-primary col-12">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><h3>Sistema Web</h3></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
       <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ url('/') }}"><h5>Cadastro</h5></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/consultar') }}"><h5>Consultar</h5></a>
            </li>             
        </ul>
    </div>
  </div>
</nav>
		</div>
		<div class="row center">
			<div class="card mb-3 col-12">
				<div class="card-body">
					<h4 class="card-title">Consultar - Contatos Agendados</h4><br>
                    

        <table class="table">
  <thead class="bg-primary">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Telefone</th>
      <th scope="col">Origem</th>
      <th scope="col">Contato</th>
      <th scope="col">Observação</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>

     @foreach ($agendas as $agendas)

    <tr>
      <th scope="row">{{$agendas['id']}}</th>
      <td>{{$agendas['nome']}}</th>
      <td>{{$agendas['telefone']}}</td>
      <td>{{$agendas['origem']}}</td>
      <td>{{$agendas['data_contato']}}</td>
      <td>{{$agendas['observacao']}}</td>
      <td><a type="button" class="btn btn-info" name="editar" value="editar" href="{{ url('/editar', $agendas->id)}}">editar</a> &nbsp;&nbsp;
        <form action="/excluir/{{ $agendas->id }}" method="POST" class="lineblock">
            @csrf
            @method('DELETE')
        <button type="submit" class="btn btn-danger" name="excluir" value="excluir">excluir</button></td>
    </tr>

     @endforeach
  </tbody>
</table>


    </body>
</html>