const enlaces = document.querySelectorAll('.enlace');
const contenedor = document.getElementById ('content');

document.querySelectorAll('enlace').forEach(val,id=> {
    
});

function cargarPagina(urlDestino) {
    var url = urlDestino;
    
    
    fetch(url)
        .then(function(response) {
            if (response.ok) {
                return response.text();
            }
            throw new Error ('Error en la solicitud HTTP');
        })
        .then(function(data) {
            contenedor.innerHTML = '';

            let html = new DOMParser().parseFromString(data, 'text/html');
            let js = document.createElement('script');
            if(html.head.children.length > 0) {
                js.src = html.head.children[0].src;
                js.defer;
                document.body.appendChild(js);
            }
            contenedor.append(...html.body.children);
        })
        .catch(function(error) {
            console.log('Error:'+error.message);
        });

};