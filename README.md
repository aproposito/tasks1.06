# Tasca S1.06 — PHP Avanzado (Sprint 1)

## Descripción
Repositorio con la resolución de la **Tasca S1.06 (PHP Avanzado)** del curso *Full Stack PHP 2025–2026*, Sprint 1 (*Maquetació i PHP*).

El objetivo es practicar funcionalidades específicas de PHP:
- uso de **superglobals** y **sesiones**
- **constantes mágicas**
- **métodos mágicos** (sin usar `__construct`)
- **enums** (tema y tipo de recurso)
- **traits**
- uso de **Composer** y una librería instalada (**FakerPHP / Faker**)

## Requisitos
- **PHP 8.2.4**
- **Composer 2.9.5**

## Instalación y ejecución
Este repositorio contiene varios ejercicios en carpetas separadas, normalmente con un `index.php` como punto de entrada.

Formas genéricas de ejecutarlo:
- Abrir el `index.php` del ejercicio con un servidor local que ejecute PHP.
- Alternativamente, levantar un servidor local desde la carpeta del ejercicio.


> Nota: en el ejercicio de formularios se usan **sesiones**, así que solo se guardarán las sesiones si se usa un servidor web.

## Estructura del proyecto

06_taskS1_06/
├─ TaskS1_06_L1_PHP_1/
│  ├─ check.php
│  ├─ index.php
│  └─ process.php
├─ TaskS1_06_L1_PHP_2/
│  ├─ src/
│  │  ├─ Conferences.php
│  │  ├─ Talks.php
│  │  └─ Workshops.php
│  └─ index.php
├─ TaskS1_06_L1_PHP_3/
│  ├─ src/
│  │  ├─ Conferences.php
│  │  ├─ Events.php
│  │  ├─ Talks.php
│  │  └─ Workshops.php
│  └─ index.php
├─ TaskS1_06_L2_PHP_1/
│  ├─ DidacticResources.php
│  └─ index.php
├─ TaskS1_06_L2_PHP_2/
│  ├─ Car.php
│  └─ index.php
└─ TaskS1_06_L3_PHP_1/
   ├─ src/
   ├─ vendor/
   ├─ autoload.php
   ├─ composer.json
   ├─ composer.lock
   └─ index.php


## Ejercicios (resumen)
### Nivel 1
**Ejercicio 1** (`TaskS1_06_L1_PHP_1/`)
- Formulario HTML con campos a elección (mínimo nombre/username).
- El `action` apunta a un documento PHP que muestra los valores mediante **superglobals**.
- Se guardan algunos valores en **variables de sesión**.

**Ejercicio 2** (`TaskS1_06_L1_PHP_2/`)
- Programa que utiliza al menos un par de **constantes mágicas**.
- Cualquier parecido con el Talent Arena es pura coincidencia.

**Ejercicio 3** (`TaskS1_06_L1_PHP_3/`)
- Sobrescritura de la lógica de algún **método mágico** (distinto de `__construct`).
- Cualquier parecido con el Talent Arena es pura coincidencia.
  
### Nivel 2
**Ejercicio 1** (`TaskS1_06_L2_PHP_1/`)
- Clase que representa un **recurso didáctico** con:
  - nombre, tema (PHP, CSS, HTML, SQL, Laravel), URL y tipo de recurso (Fichero, Artículo web, Vídeo)
- Tema y tipo implementados mediante **enums**.

**Ejercicio 2** (`TaskS1_06_L2_PHP_2/`)
- Clase `Car` con información de un coche (marca, matrícula, tipo de combustible, velocidad máxima).
- Trait `Turbo` con el método `boost()` que muestra: “S’ha iniciat el turbo”.
- Uso del trait desde la clase `Car`.

### Nivel 3
**Ejercicios 1 y 2** (`TaskS1_06_L3_PHP_1/`)
- Instalación de una librería mediante **Composer**.
- Programa que hace uso de la librería instalada.

En este caso, la librería utilizada es **FakerPHP (Faker)**: según el desarrollador:  
> Faker is a PHP library that generates fake data for you. Whether you need to bootstrap your database, create good-looking XML documents, fill-in your persistence to stress test it, or anonymize data taken from a production service, Faker is for you.


## Notas