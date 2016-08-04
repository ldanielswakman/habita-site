<?php if(!defined('KIRBY')) exit ?>

title: Home
pages:
  template: home-section
files: true
fields:
  title:
    label: Title
    type: text
  text:
    label: Intro text
    type: textarea
  carousel_images:
    label: Carousel images
    type: structure
    modalsize: small
    style: table
    fields:
      carousel_image:
        label: Image
        type: image
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
