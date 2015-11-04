Sistema de administración de transporte escolar
===============================================

El sistema de administración de transporte escolar, permite a los transportistas escolares gestionar la información
relacionada con sus pasajeros y sus respectivos apoderados, ademas del tipo de contrato y los montos cancelados y
adeudados por los apoderados.

1) Instalación
--------------

+ Al clonar desde GitHub, se deben agregar las siguientes carpetas, las cuales no han sido agregadas al repositorio, ya que se
  encuentran incluidos en.gitignore:

 - app/cache
 - app/log
 - vendor (crear la carpeta y luego ingresar en la consola "composer install" para bajar el contenido)

+ Luego se debe crear el archivo app/config/parameteres.yml con los datos de configuración de la base de datos

+ Con parameters.yml ya creado, se ejecuta en la consola "php app/console doctrine:schema:update --force" para crear la base de datos

+ Instalar Bower con npm install -g bower

+ Crear un archivo llamado .bowerrc en el directorio raiz del proyecto. En el archivo escribir:

	{
       "directory": "web/assets/vendor/"
    }

+ Instalar Bootstrap con Bower: bower install bootstrap --save