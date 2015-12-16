<?php if(!defined('KIRBY')) exit ?>

title: Post
pages: false
files:
  sortable:true
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
  category:
    label: Trip
    required: true
    type: select
    width: 1/2
    options:
      none: none
      paris: Paris
      hawaii: Hawaii
      iceland: Iceland
      southeast-asia: Southeast Asia
      south-africa: South Africa
  tags:
    label: Tags
    type: tags
    lowercase: true
    width: 1/2
  text:
    label: Text
    type: textarea
  imagelayout:
    label: Photo Layout
    type: text
    help: How the images will be arranged. For example, "231" means the 1st row has 2 images, the 2nd row has 3 images, and the 3rd row has 1 image. Total of 6 images.
  captions:
    label: Image Captions
    type: structure
    style: table
    fields:
      filename:
        label: Filename
        type: text
      caption:
        label: Caption
        type: text
