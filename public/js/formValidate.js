var formulario = document.querySelector('form');

var elements = formulario.elements

formulario.addEventListener('submit', function(e){
	[...elements].forEach(function(element){
		if (element.value.length === 0 && element.nodeName != 'BUTTON'){
			e.preventDefault();
			alert(`El campo ${element.getAttribute('data-info')} es obligatorio`);
		}
	});
});
