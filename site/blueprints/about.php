<?php if(!defined('KIRBY')) exit ?>

title: Page
pages: false
files: true
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  markdown
    header1: h3
    header2: h4
  carousel_images: carousel
  features:
    label: Features + icons
    type: structure
    style: table
    entry: >
      <b>{{title}}</b><br>
      <i>{{icon}}</i>
    modalsize: small
    fields:
      title:
        label: Title
        type: text
      icon:
        extends: icons
        type: select
      