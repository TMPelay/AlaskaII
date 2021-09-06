var files = JSON.parse(_files);
var cycles = _cycles;

console.log(files);
console.log(cycles);

function checkExt() {
	var fileInput = document.getElementById('input');
	var filePath = fileInput.value;
	var exts = /(.pdf)$/i;

	if (!exts.exec(filePath)) {
		alert('El archivo no coincide con el formato permitido, deben subirse solo archivos de tipo PDF');
		fileInput.value = "";
		return(false);
	}
}

function addOptions() {
	let options = "<option value='null'>Ninguno</option>"

	for (var i = 0; i < cycles; i++) {
		const valor = files[i];
		options += "<option value='" + valor + "'>" + valor + "</option>"
	}

	document.getElementById('selector').innerHTML = options;
}