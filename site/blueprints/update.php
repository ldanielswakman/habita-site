<?php if(!defined('KIRBY')) exit ?>

title: Update
pages: false
files:
  sortable: true
fields:
  title:
    label: Title
    type:  text
  date:
    label: Publish date
    type:  date
  text:
    label: Text
    type:  textarea
  tags:
    label: Tags
    type:  tags