function editar(id){
    let form = document.getElementById('form') 
    let action = document.getElementById('action')
    let submit = document.getElementById('submit')
    let idtext = document.getElementById('idtext')
    action.value = "editar"
    submit.value = "Salvar"
    // form.innerHTML += `<input type="hidden" name="id" value="${id}">`
    alert(idtext.innerHTML)
    idtext.innerHTML = id
}