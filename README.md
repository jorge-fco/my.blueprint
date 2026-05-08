# My blueprint

📌 [Fields in the Panel](https://getkirby.com/docs/guide/content/fields)

📌 [Options panel fields. (Opciones para un campo)](https://getkirby.com/docs/panel/blueprints/form-fields)

📌 [Anatomy of a blueprint.](https://getkirby.com/docs/panel/blueprints/anatomy-of-a-blueprint)

### Fields
📌 https://github.com/brocessing/kirby-previewfiles/

📌 https://github.com/JonasDoebertin/kirby-visual-markdown

📌 https://github.com/medienbaecker/kirby-quickselect

### Pages.
```yml
…
title: Servicios
icon: briefcase
pages:
  template: project
…
```


### Header titles
```yml
category:
  label: Categorías
  type: headline
```

### Structure
```yml
slider:
    label: Slider principal
    type: structure
    modalsize: large
    entry: >
      {{name}}<br/>
      {{thumb}}<br/>
      {{description}}
    fields:
      name:
        label: Name
        type: text
        icon: font
      thumb:
        label: Imagen
        type: image
      description:
        label: Descripción
        type: markdown
```

### Tags
```yml
categories:
  label: Agregar tus categorías
  type: tags
  help: Agregar el nombre de cada categoría separado por una <strong>coma (,)</strong>
```

### Categories
Name page
```yml
category:
  label: Categoría
  type: select
  help: Selecciona la categoría del proyecto.
  width: 1/2
  options: field
  field:
    page: works
    name: categories
```

Move path
```yml
brand:
  label: Marca
  type: select
  width: 1/3
  help: Marca del producto.
  options: field
  field:
    page: ../
    name: brands
```

Find page
```yml
link:
    label: Link
    type: select
    options: query
    query:
      page: /
      fetch: pages
      value: '{{uri}}'
      text: '{{title}}'
```

### PDF & Documents
```yml
archivo:
    label: Archivo
    icon: file
    help: Seleccionar un archivo en formato <strong>(.PDF)</strong>
    type: select
    options: documents
```

### Checkbox
```yml
zoom:
    label: Activar zoom para este producto
    type: checkbox
    text: Dar click para activar
    help: Selecciona el checkbox <i class="fa fa-check-square" aria-hidden="true"></i>
```

### Markdown
```yml
description:
  label: Description
  type:  markdown
  help: Learn format Markdown (https://daringfireball.net/projects/markdown/syntax)
```

### Images
```yml
cover:
  label: Image cover
  type: image
  width: 1/2
  help: Selecciona la imagen / size recommended (1920px for 1080px) / (Max size file 1MB)

```

### 📷 Gallery
Install plugin `site/fiels/gallery`
```yml
gallery:
    label: Galería de imagenes
    type: gallery
```

### 🎥 Video
```yml
myvideo:
    label: Video
    icon: video-camera
    help: Seleccionar video en formato <strong>(.MP4)</strong> Tiempo máximo del video <strong>5-10 seconds</strong> Max size file 5MB
    type: select
    options: videos
```
