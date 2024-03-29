<?php if(!defined('KIRBY')) exit ?>

title: Post
pages: false
files:
  sortable: true
  fields:
   avgcolor:
      label: Average Color
      type: text
      readonly: true
   caption:
      label: Caption
      type: textarea
fields:
  title:
    label: Title
    type:  text
  date:
    label: Date & Time
    type: datetime
    default: now
    width: 1/2
    time:
      format: 24
      interval: 10
  author:
    label: Author
    type: user
    width: 1/2
  imagelayout:
    label: Photo Layout
    type: text
    help: How the images will be arranged. For example, "231" means the 1st row has 2 images, the 2nd row has 3 images, and the 3rd row has 1 image. Total of 6 images.
    width: 1/2
  tags:
    label: Tags
    type: tags
    lowercase: true
    width: 1/2
  text:
    label: Text
    type: textarea

