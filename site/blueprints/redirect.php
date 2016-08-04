<?php if(!defined('KIRBY')) exit ?>

title: Redirect
pages: false
files: false
preview: false
options:
  status: false
  template: false
icon: hand-o-right
fields:
  info:
    type: info
    text: >
      <i style="color: #999;">This is not an actual page, but a redirect: when users go to this page's URL, the will get redirected to the page listed below</i>
  title:
    label: Title
    type:  text
  link:
    label: Page to redirect to
    type: page