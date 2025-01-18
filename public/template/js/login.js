const urlbase = document.getElementById("urlbase").value;

const alert_message = document.getElementById('alert-message');

const wrapped = document.getElementById("wrapped");

wrapped.addEventListener("submit", (e) => {
    e.preventDefault();

    const formData = new FormData(wrapped);

    fetch(urlbase + "acceder", {
        method: "POST",
        body: formData,
    })
    .then((res) => res.json())
    .then((data) => {
        if(data.respuesta === 'error') {
            alert_message.innerHTML = `
            <div class="alert alert-danger" role="alert">
            ${data.mensaje}
            </div>
            `;
        } else {
            window.location.href = urlbase+"dashboard";

        }
    });
});
