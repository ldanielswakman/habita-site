<?php if(!defined('KIRBY')) exit ?>

title: Page
pages: false
files: true
  fields:
    caption:
      label: Caption
      type: textarea
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  markdown
    header1: h3
    header2: h4