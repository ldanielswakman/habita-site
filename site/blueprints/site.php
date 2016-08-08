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
  socialmedia:
    label: Social media links
    type: structure
    style: table
    modalsize: small
    fields:
      type:
        type: select
        options:
          social-facebook: Facebook
          social-instagram: Instagram
          social-twitter: Twitter
          android-mail: Email
          link: other
      text:
        label: Link text
        type: text
      link:
        label: URL
        type: text
  footertext:
    label: Footer contact text
    type: textarea
  copyright:
    label: Copyright
    type:  textarea