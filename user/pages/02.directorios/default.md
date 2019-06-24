---
title: 'Directorios Grav'
---

###   Assets
*  Es la carpeta donde se guarda  las hojas de estilo CSS, los archivos JavaScript y las imágenes que se utilizan en el frontend de las aplicaciones para que tengan un buen aspecto.
### Backers
*  Para cualquier persona que haga un sitio web siempre es recomendable hacer copias de seguridad o backups por cualquier problema que se presente como, ataque de hackers o crackers, caídas del servidor, o cualquier tipo de error que pueda suceder, hay formas de hacer copias de seguridad a través de PHPAdmin pero para algunos sería muy complicado o tendrían temor en manipular esas herramientas.
### Bin
*  Es un directorio estático y es donde se almacenan todos los binarios necesarios para garantizar las funciones básicas a nivel de usuario. Solo almacena los ejecutables de usuario, ya que los binarios necesarios para tareas administrativas gestionadas por el usuario root.
### Cache 
* Es la carpeta que almacena los archivos del sitio web como páginas, entradas, artículos entre otros con el objetivo de mostrarlos más rápido a los usuarios que la visitan. Cuando alguien accede a una página de la web, esta página se almacena en la caché. Si la misma u otra persona más tarde visita esa misma página, al estar almacenada en la caché se cargará mucho más rápido y el usuario tendrá que esperar menos tiempo para verla. Esto evidentemente es una gran ventaja tanto para el usuario que no tiene que esperar para navegar por tu web, como para ti.
### Logs
*  Es la carpeta que contiene los archivos de registros que se generan en la web se puede estar vaciando su contenido, pero se recomienda siempre mantener la carpeta o en el caso de borrarse al momento que se genere un archivo xml automática mente se creara otra vez la carpeta.
### System
*  Esta carpeta alberga todos los puntos de restauración del sistema Esto quiere decir que cada vez que hacemos un punto de restauración nos lo guardará ahí con el consiguiente gasto de memoria en el disco duro. es una carpeta imprescindible del sistema que no debemos tocar sino queremos causar problemas a nuestro sistema.
###  User 
*  Son las que guardan las carpetas y archivos más importantes de todos los usuarios (Mis Documentos, Escritorio, Descargas, Mis imágenes, entre otros). No están ocultas en el sentido exacto de la palabra, pero solo accesibles, en un principio, para sus propios usuarios.
### Config
*  Archivos básicos de configuración para toda aplicación asp.net. En él, mediante un etiquetado XML, se configura todo lo referente a seguridad, sesiones, compilación, variables de sistema, etc... También puede ser usado para almacenar parámetros de la aplicación, como cadenas de conexión o variables globales.
### Languages
 *  Está carpeta contiene los archivos de configuración de cada uno de los lenguajes por lo que grav es un cms multilingües.
### Src
*  Contiene todo documento y archivo referente al código fuente.
### Robots.txt 
*   Es un archivo de texto con extensión .txt, que creamos y subimos a nuestro sitio Web y que utilizamos para impedir que los robots de ciertos buscadores rastreen contenido que no deseamos que indexen ni muestren en sus resultados. Es un archivo público que usamos para indicar a esos rastreadores o arañas qué parte o partes no deben entrar a rastrear e indexar de nuestra página web.
### README.md
*  Estos son archivos de texto que se utilizan como Markdown Documentación Archivos través dialectos Markdown. Archivos de MD se suelen guardar en formato    de texto plano que incluye los símbolos de texto en línea, la definición de cómo se formatea un texto como las muescas, su formato de tabla, las fuentes y       cabeceras.
### Composer.json 
*  Es un manejador de dependencias también es capaz de instalar las librerías que requiere tu proyecto con las versiones que necesiten.
### Composer.lock
   Es importante porque hará que cualquier persona que configure el proyecto use las mismas versiones exactas de las dependencias que está usando.
### Index.php 
*  Es el esqueleto del sitio web materializada con una selección de contenidos insertados desde la base de datos,contiene una mezcla de código, que será entregada como tal, y el código php, será modificado antes de la entrega.
### .htaccess 
* Es una solución mucho más barata en comparación con la plataforma IIS en Windows. Apache es bien conocido por su capacidad para usar .htaccess, donde podemos controlar determinados aspectos de nuestro sitio web, incluyendo el rendimiento.
### .travis.yml
*  Permite a los desarrolladores testear por completo sus aplicaciones para luego realizar exitosamente el deploy sin sorpresas.
### Vendor
*  Es un directorio que se crea despues de la instalacion de composer se debe saber que no se puede tocar nada de lo que este contenido en vendor sin tener idea de lo puede causar debe ser manejado únicamente por el manejador de dependencias. Ya que puede suceder el caso que necesitemos utilizar composer update lo que actualizaría cada una de las dependencias de nuestro proyectos y todos sus archivos.