# Estancias-y-Estadias
Repositorio de la pagina estancias y estadias del departamento de vinculacion para la gestion de documentacion referente a los procesos de estancias y estadias que los alumnado y el departamento llevan acabo


# Requerimientos para instalacion del proyecto de forma local
 <h3> SOFTWARE NECESARIO </h3>
  <ul>
  <li>Visual Studio Code</li>
  <li>Git</li>
  <li>XAMPP</li>
  <li>Laravel</li>
  </ul>
 <h3> DATOS NECESARIOS </h3>
 <ul>
  <li>Base de datos del proyecto</li>
  <li>Acceso al repositorio (consultar con owner)</li>
 </ul>

# Reglas de repositorio
 <h3> Reglas de commits y pull request </h3>
 los commits deben de ser realizados en las ramas correspondientes y a las cuales les es asignada, procurar que los mensajes de los commit sean descriptivos de  las modificaciones que se realizaron, ademas de añadir imagenes para una mejor visualizacion.
los pull request y merges ser realizaran con la aprobacion del owner del repositorio y la revision de un miembro.
 <h3> Reglas para documentacion </h3>
 dependiendo de que modificacion se realice se llevara un documento de control de cambios en donde especificaran que cambio hicieron y con que objetivo, si realizar un modulo nuevo se debera realizar los documentos necesarios (diagrama de clase, flujo, actividad, etc)
 <h3> Reglas para cambios </h3>
 solo podran trabajar en archivos que se les haya asignado, en caso de necesitar modificacion en otros archivos se debera de consultar al owner para la   verificacion de estos, ademas se contactara con la persona que esta de los otros documentos
# Pasos para instalar el proyecto de manera local
1.-Copiar el repositorio en una carpeta local con git clone
    1.1-modificar .env.example para que sea .env
    1.2-entrar a .env y modificar las credenciales de base de datos
2.-abrir la terminal de comando de windows o terminal en la carpeta
3.-encender apache y mysql en xampp
4.-ejecutar el comando php artisan serve
5.-ingresar al localhost:8000 para visualizar la pagina
si en algun momento da error verificar las dependencias del projecto
