# wp-theme-minimal

![stack: WordPress](https://img.shields.io/badge/stack--WordPress-0d9488?style=flat-square) ![stack: PHP](https://img.shields.io/badge/stack--PHP-0d9488?style=flat-square)
![IA: asistido](https://img.shields.io/badge/IA--asistido-6366f1?style=flat-square)

Tema WordPress minimo: soportes del tema, menu, plantillas y encolado de estilos.

> **Transparencia sobre IA:** este proyecto se desarrollo con asistencia de inteligencia artificial (generacion de codigo, revision y documentacion). El codigo fue leido, ejecutado y probado manualmente antes de publicarse. No declara clientes, metricas ni resultados que no puedan verificarse.

## Problema que resuelve

Entender el ciclo de un tema de WordPress sin la capa de un tema comercial o de un constructor visual.

## Solucion implementada

Tema clasico con functions.php (soportes, menus y encolado de estilos), plantillas header/index/footer y estilos base.

### Funcionalidades principales

- Soportes del tema (title-tag, thumbnails, html5)
- Menu registrado
- Encolado de estilos con version del tema
- Plantillas separadas

## Stack

- WordPress
- PHP

## Estructura

```
style.css      # cabecera del tema + estilos
functions.php  # setup y assets
index.php      # listado
header.php / footer.php
```

## Puesta en marcha

```bash
# Copiar la carpeta en wp-content/themes/ y activar el tema desde el panel
```

## Complejidad del proyecto

**Nivel: Intermedio** — Requiere conocer hooks, plantillas y el ciclo de WordPress; el despliegue necesita un hosting con PHP y MySQL.

El nivel describe la complejidad tecnica del proyecto, no el grado de dominio de quien lo escribio.

## Despliegue

Requiere WordPress (PHP + base de datos); no es un sitio estatico.  
El codigo fuente si esta disponible en este repositorio.

## Autor

**Luis Felipe Zuniga Leon** — Desarrollador de software asistido por IA

- GitHub: <https://github.com/Luisf2020>
- Correo: developerluis2@gmail.com
- WhatsApp: +504 3237 0056

---

_Proyecto de portafolio. El desarrollo se apoyo en herramientas de IA bajo revision tecnica humana._
