var janelaAberta = false

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

function fecharJanelas(){
	if (janelaAberta){
		document.getElementById('formPrincipal').style.display = 'none'
		document.getElementById('formExcluir').style.display = 'none'
		document.getElementById('divCliqueFora').style.display = 'none'
		janelaAberta = false
	}
}