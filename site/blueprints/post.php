<?php if(!defined('KIRBY')) exit ?>

title: Post
pages:false
files:
  sortable:true
fields:
  title:
    label: Title
    type:  text
  date:
    label: Date & Time
    type: datetime
    default: <?php echo date('Y-m-d') ?>
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
