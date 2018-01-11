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
```
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
videocover:
  label: Video Cover
  icon: video-camera
  width: 1/2
  help: Select option video recommended format (.mp4)
  type: select
  options: video
```

### Contact
```
title: Page
pages: false
files: true
icon: envelope
fields:
  title:
    label: Title
    type:  text

  street:
    label: Street
    type:  text
    width: 1/2

  colony:
    label: Colony
    type:  text
    width: 1/2

  city:
    label: City
    type:  text
    width: 1/2
  
  state:
    label: State
    type:  text
    width: 1/2
 
  country:
    label: Country
    type:  text
    width: 1/2
    
  email:
    label: Correo
    type:  email
    icon: envelope
    width: 1/2
    help: correo@ejemplo.com

  phone:
    label: Teléfono
    type:  tel
    icon: phone
    width: 1/2
    help: Incluir numero LADA
    placeholder: (33) 1234 5678
  
  facebook:
    label: Facebook
    type:  url
    icon: facebook
    width: 1/2
    help: https://

  twitter:
    label: Twitter
    type:  url
    icon: twitter
    width: 1/2
    help: https://

  instagram:
    label: Instagram
    type:  url
    icon: instagram
    width: 1/2
    help: https://
```

