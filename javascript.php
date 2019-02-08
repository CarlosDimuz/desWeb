<?php include 'cabecera.inc'; ?>

<h1>JavaScript</h1>
<hr/>

<p class="text-justify">
JavaScript (abreviado comúnmente JS) es un lenguaje de programación interpretado, dialecto del estándar ECMAScript. Se define como orientado a objetos,3​ basado en 
prototipos, imperativo, débilmente tipado y dinámico.<br/><br/>
Se utiliza principalmente en su forma del lado del cliente (client-side), implementado como parte de un navegador web permitiendo mejoras en la interfaz de usuario y 
páginas web dinámicas4​ aunque existe una forma de JavaScript del lado del servidor (Server-side JavaScript o SSJS). Su uso en aplicaciones externas a la web, por ejemplo
en documentos PDF, aplicaciones de escritorio (mayoritariamente widgets) es también significativo.<br/><br/>
Desde el 2012, todos los navegadores modernos soportan completamente ECMAScript 5.1, una versión de javascript. Los navegadores más antiguos soportan por lo menos ECMAScript
3. La sexta edición se liberó en julio del 2015.5​<br/><br/>
JavaScript se diseñó con una sintaxis similar a C, aunque adopta nombres y convenciones del lenguaje de programación Java. Sin embargo, Java y JavaScript tienen 
semánticas y propósitos diferentes.<br/><br/>
Todos los navegadores modernos interpretan el código JavaScript integrado en las páginas web. Para interactuar con una página web se provee al lenguaje JavaScript de una
implementación del Document Object Model (DOM).<br/><br/>
Tradicionalmente se venía utilizando en páginas web HTML para realizar operaciones y únicamente en el marco de la aplicación cliente, sin acceso a funciones del servidor.
Actualmente es ampliamente utilizado para enviar y recibir información del servidor junto con ayuda de otras tecnologías como AJAX. JavaScript se interpreta en el 
agente de usuario al mismo tiempo que las sentencias van descargándose junto con el código HTML.
</p>

<img src="https://www.tutorialrepublic.com/lib/images/javascript-illustration.png" class="img-fluid" alt="Responsive image" width="100%">

<hr/>
<h1>Historia de JavaScript</h1>
<hr/>

<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/i18gWXhv5aA" allowfullscreen></iframe>
</div>

<hr/>
<h1>Características de JavaScript</h1>
<hr/>

<p class="text-justify">
Las siguientes características son comunes a todas las implementaciones que se ajustan al estándar ECMAScript, 
a menos que especifique explícitamente en caso contrario.<br/><br/>
<b>Imperativo y estructurado</b><br/><br/>
JavaScript es compatible con gran parte de la estructura de programación de C (por ejemplo, sentencias if, bucles for, sentencias switch, etc.). Con una salvedad, 
en parte: en C, el ámbito de las variables alcanza al bloque en el cual fueron definidas; sin embargo JavaScript no es compatible con esto, puesto que el ámbito de 
las variables es el de la función en la cual fueron declaradas. Esto cambia con la versión de ECMAScript 2015, ya que añade compatibilidad con block scoping por medio 
de la palabra clave let. Como en C, JavaScript hace distinción entre expresiones y sentencias. Una diferencia sintáctica con respecto a C es la inserción automática de 
punto y coma, es decir, en JavaScript los puntos y coma que finalizan una sentencia pueden ser omitidos.<br/><br/>
<b>Objetual</b><br/><br/>
JavaScript está formado casi en su totalidad por objetos. Los objetos en JavaScript son arrays asociativos, mejorados con la inclusión de prototipos (ver más adelante).
Los nombres de las propiedades de los objetos son claves de tipo cadena: obj.x = 10 y obj['x'] = 10 son equivalentes, siendo azúcar sintáctico la notación con punto. 
Las propiedades y sus valores pueden ser creados, cambiados o eliminados en tiempo de ejecución. La mayoría de propiedades de un objeto (y aquellas que son incluidas 
por la cadena de la herencia prototípica) pueden ser enumeradas a por medio de la instrucción de bucle for... in. JavaScript tiene un pequeño número de objetos 
predefinidos como son Function y Date.
</p>

<?php include 'pie.inc'; ?> 