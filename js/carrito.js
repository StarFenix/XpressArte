class Carrito{
	//Añadir el producto al Carrito
	comprarPrenda(e){
		e.preventDefault();
		if(e.target.classList.contains('agregar-carrito')){
		const prenda = e.target.parentelement.perentElement;
		this.leerDatosPrenda(prenda);
		}
	} 
}