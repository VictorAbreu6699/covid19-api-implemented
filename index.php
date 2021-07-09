<?php

    include 'app/config/config.php';    

?>

<!doctype html>
<html lang="pt-br">
  <head>
    <title>Informações Covid-19 por Estado</title>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./assents/css/style.css">    
  </head>  
  <body>
  <?php include "./layout/header/header.php" ?>
  <main>      
    <article>      
      <section class="container">
        <div class="row">        
        <div class="col-sm-12 col-md-6">
          <h2 class="page-subtitle">Como funciona o site?</h2>
          <p>Ao selecionar um estado e confirmar, é realizado uma busca sobre o efeito do covid 19 na região escolhida.</p>
          <p>Essa busca é realizada com o suporte da API "<a href="https://covid19-brazil-api-docs.vercel.app" target="_blank">Covid19 Brazil API</a>".</p>
          <p>Todas as requisições HTTP são realizadas via JavaScript, ou seja, caso o JavaScript esteja desabilitado em seu navegador, a busca não irá funcionar.</p>
          <p>O código fonte do site se encontra no <a href="https://github.com/VictorAbreu6699/covid19-api-implemented" target="_blank">GitHub</a></p>
        </div>
        <div class="section-form col-sm-12 col-md-6">
          <form class="box-form" action="" method="get">
            <select id="state" class='form-select' aria-label='State'>
            <option selected value="0">Escolha um estado</option>            
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option> 
                <option value="AM">Amazonas</option> 
                <option value="AP">Amapá</option> 
                <option value="BA">Bahia</option> 
                <option value="CE">Ceará</option> 
                <option value="DF">Distrito Federal</option> 
                <option value="ES">Espírito Santo</option> 
                <option value="GO">Goiás</option> 
                <option value="MA">Maranhão</option> 
                <option value="MG">Minas Gerais</option> 
                <option value="MS">Mato Grosso do Sul</option> 
                <option value="MT">Mato Grosso</option> 
                <option value="PA">Pará</option> 
                <option value="PB">Paraíba</option> 
                <option value="PE">Pernambuco</option> 
                <option value="PI">Piauí</option> 
                <option value="PR">Paraná</option> 
                <option value="RJ">Rio de Janeiro</option> 
                <option value="RN">Rio Grande do Norte</option> 
                <option value="RO">Rondônia</option> 
                <option value="RR">Roraima</option> 
                <option value="RS">Rio Grande do Sul</option> 
                <option value="SC">Santa Catarina</option> 
                <option value="SE">Sergipe</option> 
                <option value="SP">São Paulo</option> 
                <option value="TO">Tocantins</option> 
            </select>
            <br>
            <input id="search" type="button" value="Realizar Busca">
          </form>          
        </div>
        </div>
      </section>

      <section class="container">
        <div class="row">
        <h2 id="title-search" class="page-subtitle text-center col-12">Covid 19 em todo o Brasil: </h2>
          <div id="search-results" class="col-12 text-center">            
            <div class="card">
              <div class="card-header state-title">
                Brasil
              </div>
              <div class="card-body">
                <blockquote class="blockquote mb-0">                  
                  <p>Carregando...</p>                  
                </blockquote>
              </div>
            </div>            
          </div>
        </div>
      </section>
    </article>
  </main>
      
    <?php include "./layout/footer/footer.php" ?>
    
    <script src="./assents/js/covid_api.js"></script>
    <script src="./assents/js/scripts.js"></script>        
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
  </body>  
</html>