$(document).ready(function(){
	$("#barras").click(desplegar);
	$("#lista").append("<li><a href='dibujos.php' class='lista-li'>Dibujos</a></li>")
	
});
function desplegar(){
	$("#lista").toggle()	
	$("#lista").toggleClass("desplegar");
}