# Tutorial de Mantenimiento Preventivo CCTV

🌍 **Demo en vivo:** [https://tutorial-cctv.is-great.org/](https://tutorial-cctv.is-great.org/)

Este repositorio contiene el código fuente de un tutorial web interactivo diseñado para documentar y enseñar, paso a paso, el proceso técnico de mantenimiento preventivo a un sistema de Circuito Cerrado de Televisión (CCTV). 

Este proyecto fue desarrollado como evidencia práctica para el programa de Análisis y Desarrollo de Software (SENA), aplicando conocimientos técnicos reales de campo sobre hardware, cableado y redes, trasladados a una interfaz web limpia y accesible.

## 🚀 Características Principales

* **Estructura Semántica:** Código HTML5 construido bajo los estándares de jerarquía de etiquetas (`<main>`, `<section>`, `<figure>`, `<nav>`), garantizando un flujo de lectura lógico.
* **Navegación Fija (Sticky):** Implementación de un índice lateral fijo (desarrollado con Flexbox y utilidades de Bootstrap) que permite hacer scroll por el contenido principal sin perder de vista la estructura del tutorial mediante anclajes de red interna (`href="#id"`).
* **Accesibilidad Web:** Fuerte enfoque en la inclusión a través de atributos `alt` altamente descriptivos en todas las imágenes, facilitando la lectura para tecnologías de asistencia.
* **Diseño UI/UX Técnico:** Uso del sistema de grillas para organizar el contenido (fotografías de antes y después, diagramas topológicos) limitando las proporciones visuales y protegiendo la legibilidad sin saturar la pantalla.
* **Apertura de Planos:** Solución para la visualización de diagramas topológicos en tamaño completo mediante redirección en nueva pestaña, optimizando el rendimiento sin depender de modales o scripts de terceros.

## 🛠️ Tecnologías y Herramientas

* **HTML5 / CSS3:** Maquetación base y estilos personalizados.
* **PHP:** Entorno de ejecución base del proyecto (index.php).
* **Bootstrap 5:** Framework CSS integrado de manera local (carpeta `vendor/`) para el manejo del sistema de grillas y utilidades visuales de forma ágil.
* **NetBeans IDE / AppServ:** Entorno de desarrollo y servidor local.
* **Git:** Control de versiones con historial atómico bajo el estándar Conventional Commits.

## 📂 Estructura del Proyecto

```text
sena-tutorial-cctv/
├── assets/
│   ├── css/
│   │   └── index.css           # Estilos personalizados (Grid, Flexbox, espaciados)
│   └── img/                    # Fotografías reales y planos utilizados en el tutorial
├── index.php                   # Vista principal y estructura semántica del tutorial
├── nbproject/                  # Archivos de configuración del entorno NetBeans (Ignorados por Git)
└── vendor/
    └── bootstrap/              # Dependencias locales de Bootstrap 5
```

## ⚙️ Instalación y Ejecución

Al ser un proyecto estático renderizado a través de PHP, la ejecución es sumamente sencilla en un entorno local:

1. Clona este repositorio en el directorio raíz de tu servidor web local (por ejemplo, la carpeta `www` de AppServ o `htdocs` de XAMPP/WAMP):
   ```bash
   git clone [https://github.com/johnalexf/sena-tutorial-cctv.git](https://github.com/johnalexf/sena-tutorial-cctv.git)
   ```
2. Asegúrate de que el servicio de Apache esté corriendo.
3. Abre tu navegador web de preferencia y accede a la ruta local:
   ```text
   http://localhost/sena-tutorial-cctv/
   ```

## 📋 Contenido del Tutorial

El tutorial abarca los siguientes 8 pasos técnicos de un mantenimiento preventivo real:
1. Documentación visual del estado del DVR.
2. Organización del gabinete de grabadores.
3. Limpieza interna de los DVR.
4. Levantamiento topológico y revisión de planos.
5. Desmonte y limpieza física de cámaras.
6. Revisión y aislamiento de empalmes del cableado.
7. Corrección de ángulo y enfoque de la lente.
8. Generación del informe técnico final.