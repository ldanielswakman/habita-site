<?php if(!defined('KIRBY')) exit ?>

title: Site
pages: true
  template:
    - default
    - landing
    - redirect
fields:
  title:
    label: Title
    type:  text
  author:
    label: Author
    type:  text
  description:
    label: Description
    type:  textarea
  keywords:
    label: Keywords
    type: tags
  footertext:
    label: Footer contact text
    type: textarea
  copyright:
    label: Copyright
    type:  textarea