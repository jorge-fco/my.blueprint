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

# ✉️ Contacto
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
    label: Domicilio
    type:  text
    width: 1/2
    
  cp:
    label: Código Postal
    type:  text
    width: 1/2

  colony:
    label: Colonia
    type:  text
    width: 1/2

  city:
    label: Ciudad
    type:  text
    width: 1/2
  
  state:
    label: Estado
    type:  text
    width: 1/2
 
  country:
    label: País
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

# 📈 Site
```
title: Site
pages: default

fields:
  tab1:
    label: Contenido
    type: tabs
    icon: align-left

  title:
    label: Title
    type:  text

  author:
    label: Author
    type:  text
    icon: font
    width: 1/2
    placeholder: WeLoveCorner
    help: Nombre del autor

  seoimage:
    label: Share imagen (Rede Sociales)
    type:  image
    width: 1/2
    help: Imagen que aparece al compartir la URL de tu sitio web

  seodescription:
    label: Descripción
    type:  textarea
    placeholder: ¿Quiénes somos?
    help: Breve descripción sobre <strong>¿Quiénes somos?</strong> (50–300 characters.)

  seotags:
    label: keywords
    type:  tags
    help: Agregar el nombre de cada palabra separado por una <strong>coma (,)</strong>

  tab2:
    label: Deploy
    type: tabs
    icon: plug

  info:
    label: Información
    type: info
    text: >
      Estos campos nos permiten actualizar la versión de nuestros archivos mediante valores numéricos de manera en incremento,
      para que se vean reflejados los cambios cada que se realizan ajustes.
      Solución para conflictos en la memoria cache de los navegadores.
      <i class="fa fa-chrome" aria-hidden="true"></i>
      <i class="fa fa-firefox" aria-hidden="true"></i>
      <i class="fa fa-internet-explorer" aria-hidden="true"></i>
      <i class="fa fa-safari" aria-hidden="true"></i>

  css:
    label: CSS
    type:  text
    icon: file
    width: 1/3
    placeholder: 0.01
    help: Numero de versión para el archivo <strong>main.min.css</strong>

  main:
    label: MAIN
    type:  text
    icon: file
    width: 1/3
    placeholder: 0.01
    help: Numero de versión para el archivo <strong>main.min.js</strong>

  plugins:
    label: PLUGINS
    type:  text
    icon: file
    width: 1/3
    placeholder: 0.01
    help: Numero de versión para el archivo <strong>plugins.min.js</strong>
```


