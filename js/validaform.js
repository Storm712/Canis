function valida_envia() {
  const form = document.fvalida;

  if (form.nombre.value.trim() === "") {
    alert("TIENES QUE ESCRIBIR TU NOMBRE");
    form.nombre.focus();
    return;
  }

  let edad = parseInt(form.edad.value);
  if (isNaN(edad)) {
    alert("TIENES QUE INTRODUCIR UN NÚMERO EN LA EDAD");
    form.edad.focus();
    return;
  }

  if (edad < 18) {
    alert("DEBES SER MAYOR DE 18 AÑOS PARA RESPONDER");
    form.edad.focus();
    return;
  }

  if (form.adoptar.value === "") {
    alert("DEBES SELECCIONAR UNA OPCIÓN DE ADOPCIÓN");
    form.adoptar.focus();
    return;
  }
 if (form.Perros.value.trim() === "") {
    alert("TIENES QUE ESCRIBIR TU NOMBRE");
    form.nombre.focus();
    return;
  }
     if (form.por.value.trim() === "") {
    alert("TIENES QUE ESCRIBIR TU NOMBRE");
    form.nombre.focus();
    return;
  }

  alert("MUCHAS GRACIAS POR ENVIAR EL FORMULARIO");
  form.submit();
}
