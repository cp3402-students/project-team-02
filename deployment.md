# Deployment

The following document contains the developer operations and deployment procedures for the WordPress custom theme _Country Theme_ made by CP3402 Project Team 02. The document will walk through the recommended development environment processes, developer tools/software and other managerial activities in an effort to provide a simple, repeatable workflow.

## Development Environments

### Local Development

The chosen local development environment is _Local by Flywheel_, a free VM-based software designed for locally hosting WordPress sites. It has systems in place for administration, SSL and databasing that are simplified for beginners.

#### Site Setup

1. Download and install [_Local by Flywheel_](https://localwp.com/)
   1. See documentation [here](https://wpengine.com/resources/local-wordpress-development-environment-how-to/)
2. Open the _Local by Flywheel_ dashboard and add a new local site
   1. Take note of the local site's directory
   2. Take note of the WordPress admin details
3. Click `Trust` for the local site's SSL
4. Start the local site and open it in WP Admin

Proceed to [site.md]() for information about managing WordPress sites.

#### Theme Setup

1. Download and install git
   1. See documentation [here](https://git-scm.com/book/en/v2/Getting-Started-Installing-Git)
2. Navigate to the local site's root folder `public` in the command-line by clicking `Open site shell` in _Local by Flywheel_
3. Navigate to `public -> wp-content -> themes`
4. Make a new folder called `countrytheme` and navigate into it
5. Clone this repository by typing `git clone https://github.com/cp3402-students/project-team-02.git .`
6. In the WP Admin dashboard, navigate to `Appearance -> Themes`
7. Activate the theme _Country Theme_

Proceed to [theme.md]() for information about customising the theme.

#### Version Control

GitHub Desktop is the recommended version control software for this project. Its user interface visualises and adds safety nets to the Git workflow for developers to make less mistakes in the command-line. PHPStorm is a professional IDE that supports the PHP language, but other platforms may be compatible.

1. Download and install [_GitHub Desktop_](https://desktop.github.com/)
   1. See documentation [here](https://docs.github.com/en/desktop)
2. Download and install [_PHPStorm_](https://www.jetbrains.com/phpstorm/download/)
   1. See documentation [here](https://www.jetbrains.com/phpstorm/documentation/)
3. Add the existing `countrytheme` local repository to _GitHub Desktop_
4. Fetch the latest data from the remote repository in _GitHub Desktop_
5. Create a new branch based on `main` and checkout
   1. Name the branch based on the changes/feature to be made, e.g. `header-dev`
6. Open the local site's root folder `public` in _PHPStorm_
7. Make changes to the files from `countrytheme` in _PHPStorm_
8. Commit the changes in _GitHub Desktop_
9. Push the commits in _GitHub Desktop_
10. Merge commit the branch into `main` in _GitHub Desktop_ or remotely, deleting the branch
    1. Communicate with teammates to approve of the merge and resolve conflicts
11. Repeat steps 4-10 for every important change/feature

#### Testing and Automation

Task runners like Gulp allow for file observation and modification. By setting up WIP STYLING

1. Install [Gulp](https://gulpjs.com/)
   1. See documentation [here](https://gulpjs.com/docs/en/getting-started/quick-start)
2. Navigate to the local site's root folder `public` by clicking `Go to site folder` in _Local by Flywheel_
3. Navigate to `public -> wp-content -> themes`
4. Download and unzip the files from [here](https://github.com/AylaGunawan/Gulp-Setup), renaming the folder to `gulp-dev`
   1. Alternatively, set up a Gulp project directory from scratch
5. Copy-paste the URL of the live local site (e.g. `http://ttmca.local/`) and paste it in the proxy of the server function in `Gulpfile.js`
6. Install missing packages by hovering over warnings in `package.json` and/or running the command `npm install`
7. Navigate to the local site's root folder `public` in the command-line by clicking `Open site shell` in _Local by Flywheel_
   1. This can also be done in _PHPStorm_'s built-in terminal
8. Navigate to `public -> wp-content -> themes -> gulp-dev`
9. Type the command `gulp` and view the _PHPStorm_-hosted site
10. Perform testing by making changes in the browser and editing PHP and Sass files from `countrytheme` in _PHPStorm_
11. Type the command `Cmd/Ctrl + C` to terminate the Gulp session
12. Repeat steps 7-11 for any theme-related testing

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

### Communicating

communicate
assign tasks/branches
trello members + deadlines
stand-up meetings

### Additional Notes

notes