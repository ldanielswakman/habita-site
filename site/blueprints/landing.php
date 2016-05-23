<?php if(!defined('KIRBY')) exit ?>

title: Landing Page
pages: false
files: true
  sortable: true
fields:
  title:
    label: Title
    type:  text


  intro_headline:
    label: Intro
    type: headline

  intro_1_text:
    label: Intro text (first block)
    type:  text
    size:  small
    icon: text-width
  intro_2_text:
    label: Intro text (second block)
    type:  text
    icon: text-width
  intro_3_text:
    label: Intro 3 text (test)
    type: text
    icon: text-width

  greatness:
    label: Greatness
    type: text



  features_headline:
    label: Features
    type: headline
    
  features_title:
    label: Features title
    type: text
    icon: font
  features_text:
    label: Features text
    type: textarea
    icon: text-width
  features:
    label: Features
    type: structure
    style: table
    modalsize: small
    fields:
      title:
        label: Title
        type: text
      icon:
        label: Icon
        type: select
        options:
          food: food
          wifi: wifi
          time: time
          drink: drink
          envelope: envelope
          presentation: presentation
          coffee: coffee
          printer: printer
          boiler: boiler



  membership_headline:
    label: Membership
    type: headline

  membership_title:
    label: Membership title
    type: text
    icon: font
  membership_text:
    label: Membership text
    type: textarea
    icon: text-width
  membership_options:
    label: Membership options
    type: structure
    style: table
    modalsize: small
    fields:
      title:
        label: Title
        type: text
      icon:
        label: Icon
        type: select
        options:
          desk: desk
          office: office
          flexible: flexible



  events_headline:
    label: Events
    type: headline

  events_title:
    label: Events title
    type: text
    icon: font
  events_text:
    label: Events text
    type: textarea
    icon: text-width
