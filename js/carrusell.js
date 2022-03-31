const carrusel = document.querySelector(".carrusel-items");

// maxScrollLeft, variable que guarda maximo scroll o 
//movimiento a la derecha. 
//Element.scrollWidth retorna la anchura en pixeles del contenido
//de un elemento
//Element.scrollWidth es mayor que Element.clientWidth
let maxScrollLeft = (carrusel.scrollWidth - carrusel.clientWidth);
let intervalo = null;

//número de pasos 
let step = 1;

//función para iniciar el movimiento  
const start = () => {
  //con setInterval la función se repite cada tantos milisegundos
  intervalo = setInterval(function () {
    //con scrollLeft puedes moverte cierta cantidad de pixeles o
    //determinar la cantidad de pixeles desplazados (el objeto a desplazar
    //en este caso es, carrusel)
    carrusel.scrollLeft = carrusel.scrollLeft + step;

    //El condicional indica que cuando el dezplazamiento se igual al maximo 
    //desplazamiento hacia la izquierda, entonces la variable step se 
    //multiplica por -1 entonces invierte la dirección del movimiento
    if (carrusel.scrollLeft === maxScrollLeft) {
      step = step * -1;
    //cuando el desplazamiento llegue a cero vuelve a invertir el movimiento
    } else if (carrusel.scrollLeft === 0) {
      step = step * -1;
    }
  }, 10);
};

//función para detener el movimiento 
const stop = () => {
  clearInterval(intervalo);//borra la función interval y así ya no se 
};                         //ejecuta el movimiento repetidamente 

carrusel.addEventListener("mouseover", () => {//cuando se posa el mouse
  stop();                 //sobre el elemento, se ejecuta la función stop()
});

carrusel.addEventListener("mouseout", () => {//cuando se quita el mouse
  start();                 //del elemento, se ejecuta la función stop()
});

start(); //Comienza el movimiento 