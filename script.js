function cadastrar(){
	let form = document.getElementById('formPrincipal')
	if (form.style.display == 'block'){
		form.style.display = 'none'
	}else{
		form.style.display = 'block'
	}
}
function excluir(){
	let form = document.getElementById('formExcluir')
	if (form.style.display == 'flex'){
		form.style.display = 'none'
	}else{
		form.style.display = 'flex'
	}
}
function fecharExcluir(){
	document.getElementById('formExcluir').style.display = 'none'
}