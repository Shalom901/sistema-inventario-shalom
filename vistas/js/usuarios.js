$(document).ready(function(){
    $("#nuevaFoto").change(function () {
        var imagen = this.files[0];
        // Validar la imagen el formato de imagen jpg o png
        if (imagen.type != "image/jpeg" && imagen.type != "image/png") {
            $("#nuevaFoto").val(""); // Limpiar foto
            swal({
                title : "Error al subir imagen",
                text  : "¡La imagen debe estar en formato JPG o PNG!",
                type  : "error",
                confirmButtonText : "¡Cerrar!"
            });
        } else if (imagen.size > 2000000) { // Condición para validar si la imagen supera el peso
            $("#nuevaFoto").val("");
            swal({
                title : "Error al subir imagen",
                text  : "¡La imagen no debe pesar más de 2MB",
                type  : "error",
                confirmButtonText : "¡Cerrar!"
            });
        } else {
            var datosImagen = new FileReader();
            datosImagen.readAsDataURL(imagen);
            $(datosImagen).on("load", function(event) {
                var rutaImagen = event.target.result;
                $(".img-thumbnail").attr("src", rutaImagen); // Actualizar la vista previa de la imagen
            });
        }
    });
});