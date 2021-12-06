
var janelaAberta = false

//	comportamento da página index.php caso o usuário clique em cadastrar pessoa, editar ou excluir
function abrirJanela(id, display){

	let form = document.getElementById(id)
	let fora = document.getElementById('divCliqueFora')

	if (form.style.display == display){
		form.style.display = 'none'
	}else{
		form.style.display = display
	}
	fora.style.display = 'block'
	janelaAberta = true
}

function cadastrar(){


	abrirJanela("form", "block")

	//	transforma todos os valores dos inputs do formulário em nada
    formnome.value = ""
    formdataNasc.value = ""
    formtel.value = ""
    formemail.value = ""

	submit.value = 'Enviar'
	action.value = 'cadastrar'
}

function editar(id){
    abrirJanela("form", "block")

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
	abrirJanela('excluir', 'block')

	idpessoa = document.getElementById('idpessoaDel')
	let msg = document.getElementById('excluirMsg')

	idpessoa.value = id
	msg.innerHTML = 'Deseja mesmo excluir pessoa ' + id + '?'
}

function fecharJanelas(){
	if (janelaAberta){
		document.getElementById('form').style.display = 'none'
		document.getElementById('excluir').style.display = 'none'
		document.getElementById('divCliqueFora').style.display = 'none'
		janelaAberta = false
	}
}
