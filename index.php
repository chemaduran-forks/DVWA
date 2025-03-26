<?php

define( 'DVWA_WEB_PAGE_TO_ROOT', '' );
require_once DVWA_WEB_PAGE_TO_ROOT . 'mmva/includes/dvwaPage.inc.php';

dvwaPageStartup( array( 'authenticated' ) );

$page = dvwaPageNewGrab();
$page[ 'title' ]   = 'Welcome' . $page[ 'title_separator' ].$page[ 'title' ];
$page[ 'page_id' ] = 'home';

$page[ 'body' ] .= "
<div class=\"body_padded\">
	<h1>¡Bienvenido a Martinez Montañés Vulnerable Application!</h1>
	<p>Martinez Montañés Vulnerable Application (MMVA) es una aplicación web en PHP/MySQL que es extremadamente vulnerable. Su objetivo principal es servir como una herramienta para que los profesionales de seguridad prueben sus habilidades y herramientas en un entorno legal, ayudar a los desarrolladores web a comprender mejor los procesos de seguridad en aplicaciones web y facilitar el aprendizaje sobre seguridad en aplicaciones web tanto a estudiantes como a profesores en un entorno controlado de aula.</p>
	<p>El propósito de MMVA es <em>practicar algunas de las vulnerabilidades web más comunes</em>, con <em>varios niveles de dificultad</em>, en una interfaz sencilla y fácil de usar.</p>
	<hr />
	<br />

	<h2>Instrucciones Generales</h2>
	<p>El usuario decide cómo abordar MMVA. Puede trabajar en cada módulo a un nivel fijo o seleccionar cualquier módulo e ir aumentando la dificultad hasta alcanzar el nivel más alto posible antes de pasar al siguiente. No hay un objetivo fijo para completar un módulo; sin embargo, los usuarios deben sentir que han explotado exitosamente el sistema lo mejor posible utilizando esa vulnerabilidad en particular.</p>
	<p>Ten en cuenta que este software contiene <em>tanto vulnerabilidades documentadas como no documentadas</em>. Esto es intencional. Se te anima a intentar descubrir la mayor cantidad posible de fallos de seguridad.</p>
	<p>En la parte inferior de cada página hay un botón de ayuda que proporciona pistas y consejos sobre la vulnerabilidad en cuestión. También hay enlaces adicionales para lecturas complementarias relacionadas con el problema de seguridad.</p>
	<hr />
	<br />

	<h2>¡ADVERTENCIA!</h2>
	<p>¡Martinez Montañés Vulnerable Application es extremadamente vulnerable! <em>No la subas a la carpeta pública HTML de tu proveedor de hosting ni a ningún servidor expuesto a Internet</em>, ya que será comprometida. Se recomienda usar una máquina virtual (como " . dvwaExternalLinkUrlGet( 'https://www.virtualbox.org/','VirtualBox' ) . " o " . dvwaExternalLinkUrlGet( 'https://www.vmware.com/','VMware' ) . "), configurada en modo de red NAT. Dentro de la máquina virtual, puedes descargar e instalar " . dvwaExternalLinkUrlGet( 'https://www.apachefriends.org/','XAMPP' ) . " para el servidor web y la base de datos.</p>
	<br />
	<h3>Descargo de responsabilidad</h3>
	<p>No nos hacemos responsables del uso que se le dé a esta aplicación (MMVA). Hemos dejado claro el propósito de la aplicación y no debe ser utilizada con fines maliciosos. Hemos advertido y tomado medidas para evitar que los usuarios instalen MMVA en servidores web en producción. Si tu servidor web es comprometido debido a una instalación de MMVA, <strong>no es nuestra responsabilidad, sino de la(s) persona(s) que lo subieron e instalaron.</strong></p>
	<hr />
	<br />

	<h2>Más Recursos de Entrenamiento</h2>
	<p>MMVA tiene como objetivo cubrir las vulnerabilidades más comunes en las aplicaciones web actuales. Sin embargo, existen muchas otras amenazas en el desarrollo web. Si deseas explorar otros vectores de ataque o buscas desafíos más difíciles, te recomendamos investigar los siguientes proyectos adicionales:</p>
	<ul>
		<li>" . dvwaExternalLinkUrlGet( 'https://github.com/webpwnized/mutillidae', 'Mutillidae') . "</li>
		<li>" . dvwaExternalLinkUrlGet( 'https://owasp.org/www-project-vulnerable-web-applications-directory', 'OWASP Vulnerable Web Applications Directory') . "</li>
	</ul>
	<hr />
	<br />
</div>
";

dvwaHtmlEcho( $page );

?>
