// Script de ejemplo para animaciones o funcionalidades adicionales
$(document).ready(function () {
    // Ejemplo de animación al hacer clic en un enlace
    $('a').click(function (e) {
        e.preventDefault();
        $(this).fadeOut(300).fadeIn(300);
    });
});
