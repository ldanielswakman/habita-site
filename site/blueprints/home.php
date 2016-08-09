<?php if(!defined('KIRBY')) exit ?>

title: Home
pages:
  template: home-section
files: true
icon: home
fields:
  title:
    label: Title
    type: text
  text:
    label: Intro text
    type: textarea
  carousel_images: carousel
  content_boxes:
    label: Show/hide random content sections
    type: checkboxes
    default:
      - blog
      - event
      - member
    options:
      blog: Random blog post
      event: Random event
      member: Random member
