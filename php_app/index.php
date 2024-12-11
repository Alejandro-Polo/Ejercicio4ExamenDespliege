<?php

// Clases
class Noticia {
    private $titulo;
    private $contenido;
    private $fecha;

    /**
     * The function is a PHP constructor that initializes the properties of an object with provided
     * values for title, content, and date.
     * 
     * @param titulo The parameter `` in the constructor function is typically used to set the
     * title of an object or entity. It seems to represent the title of a blog post, article, or
     * similar content.
     * @param contenido The parameter `` in the constructor function is typically used to
     * store the content or body of the object being created. In the context of a blog post, for
     * example, `` could represent the text of the blog post.
     * @param fecha The parameter `fecha` in the constructor function is typically used to store the
     * date associated with the object being created. It could represent the date when the object was
     * created, modified, or any other relevant date related to the object.
     */
    public function __construct($titulo, $contenido, $fecha) {
        $this->titulo = $titulo;
        $this->contenido = $contenido;
        $this->fecha = $fecha;
    }

    /**
     * The getTitulo function in PHP returns the value of the "titulo" property.
     * 
     * @return The `titulo` property of the object is being returned.
     */
    public function getTitulo() {
        return $this->titulo;
    }

    /**
     * This PHP function named getContenido() returns the value of the "contenido" property of the
     * object.
     * 
     * @return The `contenido` property is being returned by the `getContenido` method.
     */
    public function getContenido() {
        return $this->contenido;
    }

   /**
    * The function getFecha() returns the value of the fecha property.
    * 
    * @return The `getFecha()` function is returning the value of the `fecha` property of the object.
    */
    public function getFecha() {
        return $this->fecha;
    }
}

/* The class `NoticiaManager` manages a collection of news articles with titles, descriptions, and
publication dates. */
class NoticiaManager {
    private $noticias = [];

    public function __construct() {
        $this->noticias = [
            new Noticia("El cambio climático y sus efectos", "El cambio climático está alterando ecosistemas y aumentando los desastres naturales.", "2024-12-01"),
            new Noticia("Iniciativa para reforestación global", "Organizaciones han plantado millones de árboles para combatir la deforestación.", "2024-11-28"),
            new Noticia("Energías renovables en aumento", "La energía solar y eólica lideran la transición hacia fuentes limpias.", "2024-11-15")
        ];
    }

    /**
     * The function getNoticias() returns the noticias property of the object.
     * 
     * @return The function `getNoticias()` is returning the value of the property ``.
     */
    public function getNoticias() {
        return $this->noticias;
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Medio Ambiente</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="header">
        <div class="logo">🌍 Proyecto Medio Ambiente</div>
        <nav class="nav">
            <ul>
                <li><a href="#about">Sobre Nosotros</a></li>
                <li><a href="#noticias">Noticias</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <!-- Hero Section -->
        <section id="hero" class="hero">
            <h1>Bienvenidos a Proyecto Medio Ambiente</h1>
            <p>Comprometidos con un futuro sostenible</p>
        </section>

        <!-- Sobre Nosotros -->
        <section id="about" class="about">
            <h2>Sobre Nosotros</h2>
            <p>Somos una organización dedicada a la protección del medio ambiente. Promovemos la sostenibilidad y el uso responsable de los recursos naturales.</p>
        </section>

        <!-- Noticias -->
        <section id="noticias" class="noticias">
            <h2>Últimas Noticias</h2>
            <div class="noticias-list">
                <?php
                $noticiaManager = new NoticiaManager();
                $noticias = $noticiaManager->getNoticias();
                foreach ($noticias as $noticia): ?>
                    <div class="noticia">
                        <h3><?= htmlspecialchars($noticia->getTitulo()); ?></h3>
                        <p><?= htmlspecialchars($noticia->getContenido()); ?></p>
                        <small>Fecha: <?= htmlspecialchars($noticia->getFecha()); ?></small>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Contacto -->
        <section id="contacto" class="contacto">
            <h2>Contáctanos</h2>
            <form action="procesar_contacto.php" method="POST">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
                
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="mensaje">Mensaje:</label>
                <textarea id="mensaje" name="mensaje" rows="4" required></textarea>
                
                <button type="submit">Enviar</button>
            </form>
        </section>
    </main>

    <footer class="footer">
        <p>&copy; 2024 Proyecto Medio Ambiente. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
