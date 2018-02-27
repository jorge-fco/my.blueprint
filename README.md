# My blueprint

📌[List fields types.](https://getkirby.com/docs/cheatsheet/#panel-fields)

📌[Options panel fields.](https://getkirby.com/docs/panel/blueprints/form-fields)

📌[Anatomy of a blueprint.](https://getkirby.com/docs/panel/blueprints/anatomy-of-a-blueprint)

### Header titles
```
category:
  label: Categorías
  type: headline
```

### Tags
```
categories:
  label: Agregar tus categorías
  type: tags
  help: Agregar el nombre de cada categoría separado por una <strong>coma (,)</strong>
```

### Categories
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

### PDF & Documents
```
pdf:
  label: Archives
  type: selector
  mode: single
  types:
    - document
```

### Markdown
```
description:
  label: Description
  type:  markdown
  help: Learn format Markdown (https://daringfireball.net/projects/markdown/syntax)
```

### Images
```
cover:
  label: Image cover
  type: image
  width: 1/2
  help: Select an image for the content / size recommended (1920px for 1080px) / (Max size file 100KB)

```


### Video
```
video:
  label: Video (cover)
  width: 1/2
  icon: video-camera
  help: Seleccionar video en formato <strong>(.mp4)</strong>
  type: selector
  mode: single
  types:
      - video
```
