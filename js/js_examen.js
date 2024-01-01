function validarForm(form2) {
    
    //validar nombre
    if(form2.nombre.value.length == 0){
        alert('Escribe tu nombre en el campo correspondiente...');
        form2.nombre.focus();
        return false;
        }
    //  TEXTO NUM CONTROL     ********************************
    //En caso de que la contraseña este vacia
    if (form2.control.value == null ||
        form2.control.value.length == 0 ||
        /^\s+$/.test(form2.control.value)) {
        alert('Inserta tu numero de control');
        form2.control.focus();
        return false;
        //Regresa alerta de Ingresa tu numero de control
    }
        //  VALIDAR MAIL   ***************************************
    // para validar que el correo electronico sea valido
    

    if (!(/^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i.test(form2.correo.value))) {
        alert('Verifica tu correo');
        form2.correo.focus();
        return false;
    }

    if(form2.num_tel.value.length==0){
            alert('Inserta tu numero de telefono');
            form2.num_tel.focus();
            return false;
        }else if(!(/^\d{10}$/.test(form2.num_tel.value))){
            alert('Tu numero de telefono solo puede tener numeros...');
            form2.num_tel.focus();
            return false;
        }
        
        if(form2.genero[0].checked == false){
            if(form2.genero[1].checked == false){
                alert('Marca tu genero...');
                form2.genero[0].focus();
                return false;
            }
        }

    if (form2.contraseña.value == null ||
        form2.contraseña.value.length == 0 ||
        /^\s+$/.test(form2.contraseña.value)) {
        alert('Inserta una contraseña');
        form2.contraseña.focus();
        return false;
        //devuelve alerta inserta contraseña
    }

    if(form2.contraseña.value != form2.confirmar.value){
        alert('Las contraseñas son distintas');
        return false;
    }else{
        alert('¡Registro exitoso!');
    }
    return true;
}

function validarFormAct(formAct) {
    
    //validar nombre
    if(formAct.nombre.value.length == 0){
        alert('Escribe tu nombre en el campo correspondiente...');
        formAct.nombre.focus();
        return false;
        }
    //  TEXTO NUM CONTROL     ********************************
    //En caso de que la contraseña este vacia
    if (formAct.control.value == null ||
        formAct.control.value.length == 0 ||
        /^\s+$/.test(formAct.control.value)) {
        alert('Inserta tu numero de control');
        formAct.control.focus();
        return false;
        //Regresa alerta de Ingresa tu numero de control
    }
        //  VALIDAR MAIL   ***************************************
    // para validar que el correo electronico sea valido
    

    if (!(/^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i.test(formAct.correo.value))) {
        alert('Verifica tu correo');
        formAct.correo.focus();
        return false;
    }

    if(formAct.num_tel.value.length==0){
            alert('Inserta tu numero de telefono');
            formAct.num_tel.focus();
            return false;
        }else if(!(/^\d{10}$/.test(formAct.num_tel.value))){
            alert('Tu numero de telefono solo puede tener numeros...');
            formAct.num_tel.focus();
            return false;
        }
        
        if(formAct.genero[0].checked == false){
            if(formAct.genero[1].checked == false){
                alert('Marca tu genero...');
                formAct.genero[0].focus();
                return false;
            }
        }


        if (formAct.contraseña.value == null ||
            formAct.contraseña.value.length == 0 ||
            /^\s+$/.test(formAct.contraseña.value)) {
            alert('Inserta una contraseña');
            formAct.contraseña.focus();
            return false;
            //devuelve alerta inserta contraseña
        }else{
            alert('Si jala');
        }

 
    
    return true;
}

function validarL(form5){
    var ape = form5.document.getElementById('list1');
    var beb = form5.document.getElementById('list2');
    var ca = form5.document.getElementById('cAperitivos');
    var cb = form5.document.getElementById('cBebidas');
    
    if(ape.value == 0 && beb.value == 0){
        alert('Seleccióna almenos un bebida o aperitivo');
        return false;
    }else if(ca.value == 0 && cb == 0){
        alert('Debes de escribir almenos una cantidad de algun menu o aperitivo');
        return false;
    }else if((ape.value == 0 && ca.value == 0) || (beb.value == 0 && cb.value == 0) ){
        alert('No puedes seleccionar un aperitivo o bebida y pedir la cantidad de 0');
        return false;
    }else if((ape.value == 0 && ca.value != 0)||(eb.value == 0 && cb.value != 0)){
        alert('No puedes pedir una cantidad de aperitivos o bebidas sin haber seleccionado');
        return false;
    }else{
        alert('Pedido llenado correctamente.')
        return true;
    }
}
