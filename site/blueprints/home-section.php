<?php if(!defined('KIRBY')) exit ?>

title: Section
pages: false
preview: parent
icon: suitcase
files: true
fields:
  title:
    label: Title
    type: text
  text:
    label: Text
    type: markdown
  bgcolor:
    label: Background color
    type: select
    type: select
    default: white
    options:
      white: White
      greylightest: Grey Lightest
      greylight: Grey Light
      greymedium: Grey Medium
      grey: Grey
      orange: Orange
      orangedark: Orange Dark
      bluedarkfade: Blue Dark Faded