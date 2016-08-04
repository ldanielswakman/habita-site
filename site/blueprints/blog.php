<?php if(!defined('KIRBY')) exit ?>

title: Blog
pages:
  template: blog-article
files: false
icon: pencil-square-o
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  markdown
    header1: h3
    header2: h4