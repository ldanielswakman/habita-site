<?php if(!defined('KIRBY')) exit ?>

title: Event
pages:
  template: member
icon: calendar
files: false
fields:
  title:
    label: Title
    type: text
  date:
    label: Event date
    type: date
  description:
    label: Description
    type: markdown
  facebook_link:
    label: Facebook link (if existing)
    type: url
    icon: facebook