<?php
	//starta a sess�o
    session_start();
	ob_start();
	//resgata os valores das session em variaveis
	$id_users = isset($_SESSION['id_users']) ? $_SESSION['id_users']: "";	
	$nome_user = isset($_SESSION['nome']) ? $_SESSION['nome']: "";	
	$email_users = isset($_SESSION['email']) ? $_SESSION['email']: "";	
	$pass_users = isset($_SESSION['pass']) ? $_SESSION['pass']: "";	
	$logado = isset($_SESSION['logado']) ? $_SESSION['logado']: "N";	
	//varificamos e a var logado cont�m o valos (S) OU (N), se conter N quer dizer que a pessoa n�o fez o login corretamente
	//que no caso satisfar� nossa condi��o no if e a pessoa sera redirecionada para a tela de login novamente
	if ($logado == "N" && $id_users == ""){	    
		echo  "<script type='text/javascript'>
					location.href='index.php'
				</script>";	
		exit();
	}
?>
<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8"/>
	<title>Sistema Login</title>
</head>
<body>
<!DOCTYPE html>
<html lang="pt-br">
<head> 

<div class="container">
  <h1 class="mt-4"></p>
</div>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="shortcut icon" type="imagex/png" href="img/eeep-logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <br>
  <h5 class="text-center">Projeto Professor Diretor De Turma - PPDT</h5>
  
  <br>
      <div class="container">
          <div class="row">
      
            <div class="col">
              <input type="text" class="form-control" placeholder="Escola" >
            </div>
          </div>
        </div>
      
  <BR>
<center><h4>FICHA BIOGRAFICA</h4></center>

  <div class="container">
    <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Nome completo" aria-label="Nome">
        </div>
        <div class="col">
          <input type="text" class="form-control" placeholder="Número" aria-label="Número">
        </div>
        <div class="col">
          <input type="text" class="form-control" placeholder="Ano/Série" aria-label="Ano/Série">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Turma" aria-label="Turma">
          </div>
          <div class="col">
            <input type="text" class="form-control" placeholder="Ano Letivo" aria-label="Ano Letivo">
          </div>
      </div>
    </div>
      <br>
      <div class="container">
      <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Idade" aria-label="Idade">
        </div>
        <div class="col">
          <input type="date" class="form-control" placeholder="Data de Nascimento" aria-label="Data de Nascimento">
        </div>
        <div class="col">
          <input type="text" class="form-control" placeholder="Naturalidade" aria-label="Naturalidade">
        </div>
      </div>
    </div>
      <br>
      <div class="container">
      <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Endereço" aria-label="Endereço">
        </div>
        <div class="col">
          <input type="text" class="form-control" placeholder="Telefone" aria-label="Telefone">
        </div>    
      </div>
    </div>
      <br>
      <div class="container">
      <div class="row ">
        <div class="col">
          <input type="text" class="form-control" placeholder="Municipio" aria-label="Municipio">
        </div>
        <div class="col">
          <input type="text" class="form-control" placeholder="CEP" aria-label="CEP">
        </div>    
      </div>
    </div>
      <br>
      <div class="container">
      <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Responsável pelo(a) Aluno(A)" aria-label="Responsável pelo(a) Aluno(A)">
        </div>
        <div class="col">
          <input type="text" class="form-control" placeholder="Paretesco" aria-label="Paretesco">
        </div>      
      </div>
    </div>
      <br>
      <div class="container">
      <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Endereço" aria-label="Endereço">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Tel(resídencia)" aria-label="Paretesco">
          </div>      
        <div class="col">
            <input type="text" class="form-control" placeholder="Municipio" aria-label="Municipio">
          </div>      
          <div class="col">
            <input type="text" class="form-control" placeholder="CEP" aria-label="CEP">
          </div> 
          <div class="col">
          <input type="text" class="form-control" placeholder="Tel(emprego)" aria-label="emprego">
        </div>     
      </div>
    </div>
      <br>
      <div class="container">
      <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Profissão">
        </div>
        <div class="col">
        <select class="form-select" aria-label="Disabled select example">
            <option selected>Atualmente</option>
            <option value="1">Efetivo</option>
            <option value="2">Contratado</option>
            <option value="3">Aposentado</option>
            <option value="3">Doméstico</option>
            <option value="3">Desempregado</option>
          </select>
        </div>
      </div>
    </div>
<br>
  <br>
  <div class="container">
    <div class="row">
        <div class="col">
  <table class="table">
    <thead>
      <tr>
       <th scope="col"> Parentesco</th>
        <th scope="col">Idade</th>
        <th scope="col">Habilid.Escolar</th>
        <th scope="col">Profissão</th>
        <th scope="col">Situação Profissional</th>
        <th scope="col">Parentesco</th>
        <th scope="col">Idade</th>
        <th scope="col">Habilid.Escolar</th>
        <th scope="col">Profissão</th>
        <th scope="col">Situação Profissional</th>
      </tr>
    </thead>
    <tbody>
    <tr> 
      <td><input type="text" class="form-control"></td>
      <td><input type="text" class="form-control"></td>
      <td><input type="text" class="form-control"></td>
      <td><input type="text" class="form-control"></td>
      <td><input type="text" class="form-control"></td>
      <td><input type="text" class="form-control"></td>
      <td><input type="text" class="form-control"></td>
      <td><input type="text" class="form-control"></td>
      <td><input type="text" class="form-control"></td>
      <td><input type="text" class="form-control"></td>
</tr>

<tr> 
      <td><input type="text" class="form-control"></td>
      <td><input type="text" class="form-control"></td>
      <td><input type="text" class="form-control"></td>
      <td><input type="text" class="form-control"></td>
      <td><input type="text" class="form-control"></td>
      <td><input type="text" class="form-control"></td>
      <td><input type="text" class="form-control"></td>
      <td><input type="text" class="form-control"></td>
      <td><input type="text" class="form-control"></td>
      <td><input type="text" class="form-control"></td>
</tr>

<tr> 
      <td><input type="text" class="form-control"></td>
      <td><input type="text" class="form-control"></td>
      <td><input type="text" class="form-control"></td>
      <td><input type="text" class="form-control"></td>
      <td><input type="text" class="form-control"></td>
      <td><input type="text" class="form-control"></td>
      <td><input type="text" class="form-control"></td>
      <td><input type="text" class="form-control"></td>
      <td><input type="text" class="form-control"></td>
      <td><input type="text" class="form-control"></td>
</tr>

<tr> 
      <td><input type="text" class="form-control"></td>
      <td><input type="text" class="form-control"></td>
      <td><input type="text" class="form-control"></td>
      <td><input type="text" class="form-control"></td>
      <td><input type="text" class="form-control"></td>
      <td><input type="text" class="form-control"></td>
      <td><input type="text" class="form-control"></td>
      <td><input type="text" class="form-control"></td>
      <td><input type="text" class="form-control"></td>
      <td><input type="text" class="form-control"></td>
</tr>
    </tbody>
  </table>
        </div>
        <p>Efetivo(a); Contratado(a); Aposentado(a); Doméstico(a) Desempregado(a); Estudante/ informar qual a profissão <input type="text" class="form-control" size="3"></p>
        <br>
        <center><a class="btn btn-primary" href="escolar.html" role="button">Proximo</a></center>
        <br>

    </div>
  </div>
</body>
</html>
</body>
</html>