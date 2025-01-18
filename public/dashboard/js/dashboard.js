const urlbase = document.getElementById('urlbase').value;

const preguntas = document.getElementById('preguntas');
const lista_mejorar = document.getElementById('lista_mejorar');
const salir = document.getElementById('salir');
const descargar_excel = document.getElementById('descargar_excel');

function verEncuesta(id) {
    $("#modalEncuesta").modal('show');

    fetch(urlbase+"getEncuesta/"+id)
    .then(res => res.json())
    .then(data => {
        let html_p = "";

        const pre = data.calificaciones;
        const areas = data.mejorar;

        pre.forEach((p, index) => {
            html_p += `
            <div class="mb-3">
                <h5>${index + 1}. ${p.pregunta}</h5>
                <p>Respuesta: ${p.calificacion}</p>
            </div>
            `;
        });

        preguntas.innerHTML = html_p;

        let listamejorar = "";

        areas.forEach(a => {
            listamejorar += `<li>${a.area}</li>`;
        });

        lista_mejorar.innerHTML = listamejorar;
        
    })
}

salir.addEventListener('click', (e) => {
    e.preventDefault();

    fetch(urlbase+"logout")
    .then(res => res.json())
    .then(data => {
        window.location.href = urlbase+"login";
        
    })
})

descargar_excel.addEventListener('click', (e) => {
    e.preventDefault();

    window.open(urlbase+"/descargar-excel");
})