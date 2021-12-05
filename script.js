//	comportamento da página index.php caso o usuário clique em cadastrar pessoa, editar ou excluir
function cadastrar(){
	let action = document.getElementById('action')
	let submit = document.getElementById('submit')

	let formnome = document.getElementById('nome')
    let formdataNasc = document.getElementById('dataNasc')
    let formtel = document.getElementById('tel')
    let formemail = document.getElementById('email')

	//	transforma todos os valores dos inputs do formulário em nada
    formnome.value = ""
    formdataNasc.value = ""
    formtel.value = ""
    formemail.value = ""

	action.value = 'cadastrar'
	submit.value = 'Enviar'
}

function editar(id){
	
    let idpessoa = document.getElementById('idpessoa') 
    let action = document.getElementById('action')
    let submit = document.getElementById('submit')

    //	campos de input do formulário
    let formnome = document.getElementById('nome')
    let formdataNasc = document.getElementById('dataNasc')
    let formtel = document.getElementById('tel')
    let formemail = document.getElementById('email')

    //	pegando o conteúdo da linha da tabela
    let tablePessoaId = document.getElementById('pessoa' + id)	//	linha que vai ser editada
    let pessoanome = tablePessoaId.getElementsByClassName('nome')[0].innerText
    let pessoadataNasc = tablePessoaId.getElementsByClassName('dataNasc')[0].innerText
    let pessoatel = tablePessoaId.getElementsByClassName('tel')[0].innerText
    let pessoaemail = tablePessoaId.getElementsByClassName('email')[0].innerText

    action.value = "editar"
    idpessoa.value = id
    submit.value = "Salvar"

    //	colocando o conteúdo como valor nos campos do formulário
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
