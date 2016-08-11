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
  cards:
    label: Membership options cards
    type: structure
    entry: >
      <b>{{title}}</b> <span style="color: #999">({{type}})</span><br>
      <i>{{text}}</i>
    modalsize: large
    fields:
      title:
        label: Title
        type: text
        width: 1/2
      type:
        label: Type
        type: select
        width: 1/2
        options:
          desk: Dedicated Desk
          office: Private Office
          flexible: Flexible Desk
          event: Event Space
      bgcolor:
        extends: background-color
        width: 1/2
      image:
        label: Image
        type: image
        width: 1/2
      icons: icons
      text:
        label: Description
        type: textarea
        rows: 3
      action:
        label: Action(s)
        type: textarea
        buttons: false
