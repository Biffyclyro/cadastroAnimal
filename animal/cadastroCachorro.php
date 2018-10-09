<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<title>Cadastrar Cachorro</title>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    
		<a class="navbar-brand" href="cadastroCachorro.php">Cadastro Cachorro</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            
    </button>
		
		   
		
		<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
		    <ul class="navbar-nav ">


			   
			    <li class="nav-item active btn-info ">
			        <a class="nav-link" href="cadastroCachorro.php">Cadastrar Cachorros</a>
			    </li>
		        
			    

			    
		    </ul>
		  </div>

	</nav>
	<br/>
	

		<section>

      <div class="container">
        <form method="post" action="controleCachorro.php">
          <div class="form-group">
            <label for="nome">Cadastrar Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Entre com o nome">
            
          </div>
          <div class="form-group">
            <label for="tamanho">CC:</label>
            <input type="text" class="form-control" id="cc" name="cc" placeholder="999-9.9">
          </div>          
          <button type="submit" class="btn btn-primary" name="opcao" value="Cadastrar">Cadastrar</button>
        </form>
      </div>

			<article>
				<h2></h2>
				<p></p>
			</article>

			<article>
				<h2></h2>
				<p></p>
			</article>

			<article>
				<h2></h2>
				<p></p>
			</article>
		</section>

		<footer></footer>
		
	</div>
	
	 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="jquery.maskedinput.js" type="text/javascript"></script>
  <script src="mascara.js" type="text/javascript"></script>

</body>
</html>