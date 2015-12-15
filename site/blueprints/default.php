<?php if(!defined('KIRBY')) exit ?>

# default blueprint

title: Page
pages: true
files: true
fields:
  title: 
    label: Title
    type:  text
  text: 
    label: Text
    type:  textarea
    size:  large
  hidegallery:
    label: Hide Gallery
    type: toggle
  hidefilelist:
    label: Hide File List
    type: toggle
