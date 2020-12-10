
function despliegaHora() {
	var fecha = new Date();
	var cadena= fecha.getHours()+':'+
				fecha.getMinutes()+':'+
				fecha.getSeconds();
	return cadena;
}
