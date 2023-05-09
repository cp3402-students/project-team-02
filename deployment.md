# Deployment

The following document contains the developer operations and deployment procedures for the WordPress custom theme _Country Theme_ made by CP3402 Project Team 02. The document will walk through the recommended development environment processes, developer tools/software and other managerial activities in an effort to provide a simple, repeatable workflow.

## Development Environments

### Local Development

`wip`

#### Setup

* Local by Flywheel
* Make a new local site (use default settings, set admin details)
* In Local site's public -> wp-content -> themes folder, git clone this repo
* In WordPress, install + activate this theme
* In WordPress, add content accordingly (see site.md)

#### Automation and Version Control

* In Local site's public -> wp-content -> themes folder, install gulp-dev (direct file) + packages
* In PHPStorm, open Local site's public folder and change terminal directory to gulp-dev
* (Windows users might need to disable file permissions)
* In cd gulp-dev, type gulp -> automates styling updates from .scss to .css
* Commit any changes made to site files using git, PHPStorm or GitHub Desktop (see theme.md)

#### Import and Export

* To retrieve WordPress content from a different environment, Tools -> Import -> .xml
* To transfer WordPress content to a different environment, Tools -> Export -> .xml

### Live Production

`wip`

#### Setup

* AWS lightsail
* Make a new instance (account creation, use default settings, set admin details)
* https://aws.amazon.com/getting-started/hands-on/launch-a-wordpress-website/

#### Import and Export

* To retrieve WordPress content from a different environment, Tools -> Import -> .xml
* To transfer WordPress content to a different environment, Tools -> Export -> .xml

### Staging

`wip`

#### Setup

* AWS lightsail
* Make a new instance again (use default settings, use different region)

#### Testing

* TESTING

#### Import and Export

* To retrieve WordPress content from a different environment, Tools -> Import -> .xml
* To transfer WordPress content to a different environment, Tools -> Export -> .xml

## Project Management

`wip`

### Collaboration

communicate
assign tasks/branches
trello members + deadlines

### Version Control

different dev branches, delete when finished
communicate when making big changes

### Additional Notes

notes