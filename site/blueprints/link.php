<?php if(!defined('KIRBY')) exit ?>

title: Link
pages: true
files: true
fields:
  title:
    label: Title
    type: text
  linkfirst:
    label: Link to first subpage?
    type: toggle
    width: 1/2
    help: If yes, link below will be ignored
  link:
    label: Link
    type: text
