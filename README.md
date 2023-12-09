# Contrast Color for Kirby CMS 4.0

Adds `toContrastColor()` to calculate wether using a white or a black color for a given image color in Kirby.

## 1 Installation
Download and copy this repository to `site/plugins/colorcontrast` or use compose:
```
compose require xu-chris/colorcontrast
```

## 2 Blueprint for image files
For images, you can create a blueprint that adds a color field:
```
title: Image
accept:
  mime: image/jpeg, image/png
fields:
  color:
    label: Dominant color
    type: color
    format: hex
```

## 3 Use this plugin

Given an image with a color, you can use it like this:

```
$image->color()->toContrastColor()
```

Currently, it's limited for HEX color values automatically calculated 