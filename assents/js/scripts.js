document.addEventListener("DOMContentLoaded", function(event) {    
    generatesCardsFromBrasil(requestByBrasil(), 'search-results');    
  });

  function buttonSearch() {
    let select = document.getElementById("state");
    searchByState(select)
  }

  var button = document.getElementById("search");
 
  button.addEventListener("click", buttonSearch);


  function searchByState(element) {
    
    let x = element.options[element.selectedIndex].value;
    console.log(x);
    if (x != "0") {
      generatesCardsFromState(requestByState(x),'search-results');  
    }    
  }

  function generatesCardsFromState(request, id) {
    let result;       
    let data = formatDateString(request['datetime']);
    result = `<div class="card">
    <div class="card-header state-title">
      ${request['state']}
    </div>
    <div class="card-body">
      <blockquote class="blockquote mb-0">                  
        <p>Casos: ${request['cases'].toLocaleString('pt-br')}</p>
        <p>Casos Suspeitos: ${request['suspects'].toLocaleString('pt-br')}</p>        
        <p>Mortes: ${request['deaths'].toLocaleString('pt-br')}</p>        
        <p>Data das informações: ${data}</p>
      </blockquote>
      </div>
    </div> `;        

    let element = document.getElementById(id);
    element.innerHTML = null;
    element.innerHTML = result;

    document.getElementById('title-search').innerHTML = "Covid 19 no estado de:";
  }

  function generatesCardsFromBrasil(request, id) {
    let result;   

    let data = formatDateString(request['data']['updated_at']);
    result = `<div class="card">
    <div class="card-header state-title">
      Brasil
    </div>
    <div class="card-body">
      <blockquote class="blockquote mb-0">                  
        <p>Casos: ${request['data']['cases'].toLocaleString('pt-br')}</p>
        <p>Casos Confirmados: ${request['data']['confirmed'].toLocaleString('pt-br')}</p>        
        <p>Mortes: ${request['data']['deaths'].toLocaleString('pt-br')}</p>
        <p>Recuperados: ${request['data']['recovered'].toLocaleString('pt-br')}</p>
        <p>Data das informações: ${data}</p>
      </blockquote>
      </div>
    </div> `;        
    document.getElementById(id).innerHTML = result;
    document.getElementById('title-search').innerHTML = "Covid 19 em todo o Brasil:";
  }

  function formatDateString(data) {
    let result = '';
    for (let index = 0; index < data.length; index++) {
      if (data[index] != 'T') {
        result += data[index];
      }
      else{
        break;
      }      
    }
    result = result.split('-').reverse().join('/');

    return result;
  }