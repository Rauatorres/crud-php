function editar(id){
	
    let idpessoa = document.getElementById('idpessoa') 
    let action = document.getElementById('action')
    let submit = document.getElementById('submit')

    let formnome = document.getElementById('nome')
    let formdataNasc = document.getElementById('dataNasc')
    let formtel = document.getElementById('tel')
    let formemail = document.getElementById('email')

    let tablePessoaId = document.getElementById('pessoa' + id)
    let pessoanome = tablePessoaId.getElementsByClassName('nome')[0].innerText
    let pessoasexo = tablePessoaId.getElementsByClassName('sexo')[0].innerText
    let pessoadataNasc = tablePessoaId.getElementsByClassName('dataNasc')[0].innerText
    let pessoatel = tablePessoaId.getElementsByClassName('tel')[0].innerText
    let pessoaemail = tablePessoaId.getElementsByClassName('email')[0].innerText

    action.value = "editar"
    idpessoa.value = id
    submit.value = "Salvar"

    formnome.value = pessoanome
    formdataNasc.value = pessoadataNasc
    formtel.value = pessoatel
    formemail.value = pessoaemail
}

function excluir(id){
	let idpessoa = document.getElementById('idpessoaDel')
	let msg = document.getElementById('excluirMsg')

	idpessoa.value = id
	msg.innerHTML = 'Deseja mesmo excluir pessoa ' + id
}
