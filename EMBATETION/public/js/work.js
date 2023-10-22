function toggleTexto(titulo) {
    const contenido = titulo.nextElementSibling;
    const otrosContenidos = titulo.parentElement.querySelectorAll(".contenido");
    
    otrosContenidos.forEach(cont => {
     
    if (cont !== contenido) {
      cont.style.display = "none";
      cont.style.maxHeight = "0";
      cont.style.opacity = "0";
    }
    });
  
    if (contenido.style.display === "block") {
        contenido.style.display = "none";
        
    } else {
        contenido.style.display = "block";
    
    }

    if (contenido.style.maxHeight === "0px" || contenido.style.maxHeight === "") {
        contenido.style.maxHeight = contenido.scrollHeight + "px";
        contenido.style.opacity = "1";
      } else {
        contenido.style.maxHeight = "0";
        contenido.style.opacity = "0";
    }
    
    const otrosTitulos = titulo.parentElement.querySelectorAll(".titulo");
    
      otrosTitulos.forEach(tit => {
        if (tit !== titulo) {
          tit.classList.remove("seleccionado");
        }
      });
      
      if (!titulo.classList.contains("seleccionado")) {
        titulo.classList.add("seleccionado");
      } else {
        titulo.classList.remove("seleccionado");
      }

  }

const titulo = document.querySelectorAll('.titulo');

const contenido = document.querySelectorAll('.contenido');


    titulo.forEach((item, index) => {
    item.addEventListener('click', () => {

        titulo.forEach((el) => {
            el.classList.remove('active');
        });

        item.classList.add('active');

        contenido.forEach((el) => {
            el.classList.remove('active');
        });

        item.classList.add('active');
    });
  });