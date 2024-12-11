<?php

use PHPUnit\Framework\TestCase;
use App\Noticia; // Ajusta el namespace si lo has configurado

/* The NoticiaTest class contains a test method to verify the functionality of a Noticia object with
specific title, content, and date. */
class NoticiaTest extends TestCase {
    public function testNoticia() {
        $noticia = new Noticia("Título de prueba", "Contenido de prueba", "2024-01-01");

        $this->assertEquals("Título de prueba", $noticia->getTitulo());
        $this->assertEquals("Contenido de prueba", $noticia->getContenido());
        $this->assertEquals("2024-01-01", $noticia->getFecha());
    }
}
