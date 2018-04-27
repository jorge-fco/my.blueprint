# My blueprint

📌[List fields types.](https://getkirby.com/docs/cheatsheet/#panel-fields)

📌[Options panel fields.](https://getkirby.com/docs/panel/blueprints/form-fields)

📌[Anatomy of a blueprint.](https://getkirby.com/docs/panel/blueprints/anatomy-of-a-blueprint)


### Contact
Telephone
```php
<?= page('contacto')->telephone()->html() ?>
```

Phone
```
<?= page('contacto')->phone()->html() ?>
```

Whatsapp
```
<?= page('contacto')->whatsapp()->html() ?>
```


### Header titles
```
category:
  label: Categorías
  type: headline
```

### Structure
```yml
addresses:
    label: Addresses
    type: structure
    modalsize: large
    entry: >
      {{street}}<br/>
      {{zip}}<br/>
      {{city}}
    fields:
      street:
        label: Street
        type: text
        icon:
      zip:
        label: ZIP
        type: text
        icon:
      city:
        label: City
        type: text
        icon:
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
