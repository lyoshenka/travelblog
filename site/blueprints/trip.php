<?php if(!defined('KIRBY')) exit ?>

title: Trip
pages: false
files: false
deletable: false
fields:
  title:
    label: Title
    type:  text
  start:
    label: Start Date
    type: date
    width: 1/2
  end:
    label: End Date
    type: date
    width: 1/2
  description:
    label: Description
    type: textarea
