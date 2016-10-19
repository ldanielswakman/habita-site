<?php if(!defined('KIRBY')) exit ?>

title: Contact Form
pages: false
files: false
options: 
  preview: false
  status: false
  template: false
  url: false
  delete: false
icon: comment
fields:
  title:
    label: Title
    type:  text
    readonly: true
    help: This is the page where the contact form fields can be configured. This will propagate to all pages.</i>
  heading:
    label: Heading
    type:  text
    icon: font
  form_fields:
    label: Form Fields
    type: structure
    limit: 10
    modalsize: large
    entry: > 
      <b>{{label}}</b>: <span class="color: #ccc;">{{placeholder}}</span> <span style="float:right;">(Type: {{type}})</span><br />
    fields:
      type:
        label: Field type
        type: select
        required: true
        options:
          text: Text
          textarea: Textarea
          email: Email
          tel: Phone
          space_type: Space Type Selection
      label:
        label: Field Label
        type: text
        icon: text-width
        width: 1/2
        required: true
        help: Each field title must be unique
      placeholder:
        label: Field placeholder
        type: text
        width: 1/2
        required: true
        icon: italic
        help: e.g. 'Your phone number'
  followup_title:
    label: >
      <div style="margin-top: 5em;"></div>Follow-up title
    type:  textarea
    size: small
    buttons: false
    icon: font
  followup_text:
    label: Follow-up text
    type: textarea
