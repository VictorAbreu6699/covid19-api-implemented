
function request(filter) {
    var result = false;
    var url = `https://covid19-brazil-api.now.sh/api/report/v1/brazil${filter}`;
        
    var xhttp = new XMLHttpRequest();
    xhttp.open("GET", url, false);
    xhttp.send();    
    
    result = JSON.parse(xhttp.responseText);   

    return result;
}

function requestByState(state) {
    let endpoint = `/uf/${state}`;
    let result = request(endpoint);        
    return result;
}

function requestByBrasil() {
    let result = request('');    
    return result;
}


