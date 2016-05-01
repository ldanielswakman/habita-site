<?php if(!defined('KIRBY')) exit ?>

title: Update
pages: false
files:
  type: 
    - image
    - video
  width: 1200
  height: 1200
preview: parent
fields:
  title:
    label: Title
    type:  text
  date:
    label: Publish date
    type:  date
  text:
    label: Text
    type:  markdown
  tags:
    label: Tags
    type:  tags