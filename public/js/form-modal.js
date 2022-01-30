var picker = new Pikaday({ 
    field: document.getElementById('datepicker'),
    format: 'D MMM YYYY'
});

let modal = document.querySelector("#modal")

function toggleModal() {
    modal.classList.toggle('hidden')
}