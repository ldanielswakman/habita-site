<?php if(!defined('KIRBY')) exit ?>

title: Member
pages: false
icon: user
files:
  type: 
    - image
  width: 1200
  height: 1200
fields:
  title:
    label: Name
    type: text
    translate: false
  job_title:
    label: Job Title
    type: text
    width: 1/2
  profile_image:
    label: Profile image
    type: image
    width: 1/2
    translate: false
  bio:
    label: Bio
    type: textarea
    validate:
      max: 1000
  linkedin_url:
    label: Linkedin URL
    type: url
    icon: linkedin
    translate: false
  twitter_url:
    label: Twitter URL
    type: url
    icon: twitter
    translate: false
  facebook_url:
    label: Facebook URL
    type: url
    icon: facebook-square
    translate: false
  instagram_url:
    label: Instagram URL
    type: url
    icon: instagram
    translate: false
  website_url:
    label: Website URL
    type: url
    icon: link
    translate: false