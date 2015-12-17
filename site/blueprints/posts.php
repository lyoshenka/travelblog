<?php if(!defined('KIRBY')) exit ?>

title: Posts
pages:
  template: post
  num:
    mode: date
    field: date
    format: YmdHi
  sort: flip
files: false
fields:
  title:
    label: Title
    type:  text
