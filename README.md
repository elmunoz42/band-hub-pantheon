# Description

A web app for band members, band managers and their fans. This site leverages PushTape modules to allow for music uploads and image galleries. This site was built with Drupal using Dev, Test and Live environments in Pantheon.

## Planning

|Status | Objective                          |
|---------|-----------------------------------|
|SOMEWHAT| Gig tools with contact info and rehearsal scheduling feature |
|SOMEWHAT| A news/events page | - like the tips and tricks https://smittenkitchen.com/tips/
|SOMEWHAT| A music uploads page |
|TODO| A page for each band |
|TODO| Scrolling lyrics with autoscroll|
|SOMEWHAT| A blog post page http://joythebaker.com/
Allow for comments and rsvp ?|
|SOMEWHAT| Links to social media. |
|TODO| A merch store page |
|TODO| A page for each band-member |
|WishList| Custom Theming - Create a more appealing theme. |
|WishList| A carpool feature |

## Testing

* HelloWorld Test and Module to experiment with testing.

## Setup
1. Clone repository from https://github.com/elmunoz42/cipher.git
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
* Click 'Privileges' tab for `cipher`
* Add user
 - Name: `cipher`
 - Password: `cipher`
 - Host: Local
 - All privileges for `cipher`


## Technologies Used

* MySQL
* Drupal
* Pantheon

## Drupal 7 Modules Used
* Cipher (custom module)

## Known Bugs

_No known bugs._

## Support

_Please contact elmunoz42@gmail.com with questions or concerns._

### License

*MIT License*

Copyright (c) 2017 _**Sean Petterson and Carlos Muñoz Kampff**_
