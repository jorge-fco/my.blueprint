# My blueprint

[List fields types](https://getkirby.com/docs/cheatsheet/#panel-fields)

[Anatomy of a blueprint](https://getkirby.com/docs/panel/blueprints/anatomy-of-a-blueprint)


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
  
  facebook:
    label: Facebook
    type:  text
    width: 1/2
  
  twitter:
    label: Twitter
    type:  text
    width: 1/2
```





