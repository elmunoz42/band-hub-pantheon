# Description

A web app for band members, band managers and their fans. This site leverages PushTape modules to allow for music uploads and image galleries. This site was built with Drupal using Dev, Test and Live environments in Pantheon.

## Hosting

Site is live on Pantheon: http://live-band-hub.pantheonsite.io/releases
## Planning

|Status | Objective                          |
|---------|-----------------------------------|
|DONE | Create Unit Test |
|SOMEWHAT| A news/events page - like the tips and tricks https://smittenkitchen.com/tips/ |
|SOMEWHAT| A music uploads page |
|SOMEWHAT| Gig tools with contact info and rehearsal scheduling feature |
|SOMEWHAT| A page for each band |
|TODO| Scrolling lyrics with autoscroll|
|SOMEWHAT| A blog post page http://joythebaker.com/
Allow for comments and rsvp ?|
|SOMEWHAT| Links to social media. |
|TODO| A merch store page |
|TODO| A page for each band-member |
|WishList| Custom Theming - Create a more appealing theme. |



## Testing

* HelloWorld Test and Module to experiment with functional testing.
* Encryption Test and Module to experiment with unit testing.

## Ajax Experimentation

* Ajax Test link > click on CLICK ON ME button.

## Setup
1. Clone repository from https://github.com/elmunoz42/band-hub-pantheon.git
2. Set up connection to database system in MAMP (see bellow)
3. Import database from repo in phpMyAdmin (see bellow)
4. Create database admin in phpMyAdmin (see bellow)
5. Include settings.php with database access info

### Database connection
1. In MAMP > Preferences:
 - Apache Port: `8888`
 - MySQL Port: `8889`
 - Document root: **`<repo_pathname>`**
2. Click 'Start servers'

### Import database
* Visit **`localhost:8888/phpMyAdmin`** in browser
* Click 'Import' tab
 - Character set: utf-8
 - File: **`<repo_pathname>/sites/db-backup/<backup_filename>`**

### Create database admin
* Visit **`localhost:8888/phpMyAdmin`** in browser
* Click 'Privileges' tab for `band-hub`
* Add user
 - Name: `band-hub`
 - Password: `band-hub`
 - Host: Local
 - All privileges for `band-hub`


## Technologies Used

* MySQL
* Drupal
* Pantheon

## Contrib Modules Used
* advpoll
* date_popup_timepicker
* devel
* entity
* follow
* sweaver
* votingapi

## Custom Modules - Mostly for research purposes :-)
* ajax_link
* ajax_reader
* appointment - in development ...
* contact_support
* encryption
* helloworld
* greeting
* follow_support

## Themes
* Hertz - User interface.
* Flux - Admin interface.

## Known Bugs

_No known bugs._

## Support

_Please contact elmunoz42@gmail.com dmlauby@gmail.com with questions or concerns._

### License

*MIT License*

Copyright (c) 2017 _**Dan Lauby and Carlos Muñoz Kampff**_
