var selectPaises = document.querySelector('#paises');

var selectProvincias = document.querySelector('#provincias');

selectProvincias.style.display = 'block';

var urlPaises = 'http://pilote.techo.org/?do=api.getPaises';
var urlProvincias = 'http://pilote.techo.org/?do=api.getRegiones?idPais=';

pedidoAjax(urlPaises, cargarPaises);

function pedidoAjax (url, laFuncion) {
	fetch(url)
	.then(function (response) {
		return response.json();
	})
	.then(function (data) {
		var loQueDeseo = data.contenido;
		laFuncion(loQueDeseo);
	})
	.catch(function (error) {
		console.error(`ERROR: ${error}`);
	});
}

function cargarPaises (paises) {
	for (var n in paises) {
		var option = `<option value="${paises[n]}"> ${n} </option>`;
		selectPaises.innerHTML += option;
	}

	selectPaises.onchange = function () {
		var idPais = this.value;

		if (!idPais) {
			selectProvincias.style.display = 'none';

		} else {
			selectProvincias.style.display = 'block';
		}

		if (selectProvincias.hasChildNodes()) selectProvincias.innerHTML = '';

		pedidoAjax(urlProvincias + idPais, cargarProvincias);
	};
	function cargarProvincias (provincias) {
		for (var n in provincias) {
			var option = `<option value="${provincias[n]}"> ${n} </option>`;
			selectProvincias.innerHTML += option;
		}
	};
}
