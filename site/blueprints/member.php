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
  job_title:
    label: Job Title
    type: text
    width: 1/2
  profile_image:
    label: Profile image
    type: image
    width: 1/2
  bio:
    label: Bio
    type: textarea
    validate:
      max: 1000
  linkedin_url:
    label: Linkedin URL
    type: url
    icon: linkedin
  twitter_url:
    label: Twitter URL
    type: url
    icon: twitter
  facebook_url:
    label: Facebook URL
    type: url
    icon: facebook-square
  instagram_url:
    label: Instagram URL
    type: url
    icon: instagram
  website_url:
    label: Website URL
    type: url
    icon: link