const toggleMenu = () => {
    const menuButton = document.querySelector('.lg:hidden'); // Selector del botón del menú móvil
    const menuContainer = document.querySelector('.hidden lg:hidden'); // Selector del contenedor del menú móvil
  
    menuContainer.classList.toggle('hidden'); // Alternar la clase 'hidden' para mostrar/ocultar el menú
  }
  
  menuButton.addEventListener('click', toggleMenu); // Asociar el evento de clic al botón
  