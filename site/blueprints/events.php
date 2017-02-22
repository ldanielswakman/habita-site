<?php if(!defined('KIRBY')) exit ?>

title: Events
pages:
  template: event
options:
  template: false
icon: calendar
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type: markdown
    header1: h3
    header2: h4
  bgimage:
    label: Background Photo
    type: image
    help: Leave empty for a light grey background