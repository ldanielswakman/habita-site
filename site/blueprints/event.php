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
    width: 1/3
  start_time:
    label: Start time
    type: time
    width: 1/3
    interval: 30
  end_time:
    label: End time
    type: time
    width: 1/3
    interval: 30
  info:
    type: info
    text: >
      <span style="color: #999;">Leave the start and end time empty to hide them in the actual page</span>
  description:
    label: Description
    type: markdown
  facebook_link:
    label: Facebook link (if existing)
    type: url
    icon: facebook