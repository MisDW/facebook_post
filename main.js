fetch('configuration.json')
      .then(response => response.json())
      .then(json => getValues(json))


      const getValues  = (json) => {
        console.log(json[0]);
            var { contactos, historias, post, usuario_perfil } = json[0]
            setNombrePefil(usuario_perfil)
      }


const setNombrePefil = (usuario_perfil) =>{
    const nombre_perfil_usuario = document.querySelectorAll(".nombre_perfil_usuario")
    nombre_perfil_usuario.forEach(element => {
        // element.innerHTML = usuario_perfil
        console.log(element);
    });
}