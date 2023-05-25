# Deployment

The following documentation contains DevOps procedures for the _WordPress_ custom theme "Country Theme" made by CP3402 Project Team 02. The document will walk through recommended development environment processes, tools and general project management to provide a simple, repeatable workflow.

### Table of Contents
1. [Local Development](#local-development)
   1. [Site Setup](#site-setup)
   2. [Theme Setup](#theme-setup)
   3. [Version Control](#version-control)
   4. [Testing and Automation](#testing-and-automation)
2. [Live Production](#live-production)
   1. [Site Setup](#site-setup-1)
   2. [Theme Setup](#theme-setup-1)
   3. [Testing and Automation](#testing-and-automation-1)
3. [Staging](#staging)
   1. [Site Setup](#site-setup-2)
   2. [Theme Setup](#theme-setup-2)
   3. [Testing and Automation](#testing-and-automation-2)
4. [Project Management](#project-management)
   1. [Communication](#communication)
   2. [Task Allocation](#task-allocation)
   3. [Version Control](#version-control-1)
   4. [Workflow](#workflow)

## Local Development

Local development systems that will be used include _Local_ by _Flywheel_ and _Git_. The workflow mainly consists of cloning this project's repository into the files of a locally hosted website, before making changes on a feature-specific branch. _GitHub Desktop_ and _PHPStorm_ simplifies coding and version control while the task runner _Gulp_ automates styling updates in the browser for efficient testing.

### Site Setup

1. Download and install [_Local_](https://localwp.com/)
   1. See documentation [here](https://wpengine.com/resources/local-wordpress-development-environment-how-to/)
2. Add a new local site in _Local_
   1. Take note of the local site's directory
   2. Take note of the _WordPress Admin_ details
3. Click `Trust` for the local site's SSL
4. Start and visit the local site
5. Open _WordPress Admin_ by adding `/wp-admin/` to the URL or clicking `WP Admin` in _Local_
6. Log in with the _WordPress Admin_ details
7. Install and activate the plugins [_Debug Bar_](https://wordpress.org/plugins/debug-bar/), [_Regenerate Thumbnails_](https://en-au.wordpress.org/plugins/regenerate-thumbnails/), [_Show Current Template_](https://wordpress.org/plugins/show-current-template/) and [_Theme Check_](https://wordpress.org/plugins/theme-check/) for testing
8. If migrating from another site, import the XML in `Tools -> Import`
   1. See documentation [here](https://wpengine.com/support/sync-new-post-and-pages/)
9. If migrating to another site, export the XML in `Tools -> Export`
   1. See documentation [here](https://wpengine.com/support/sync-new-post-and-pages/)

Proceed to [site.md](site.md) for information about managing _WordPress_ sites.

### Theme Setup

1. Download and install _Git_
   1. See documentation [here](https://git-scm.com/book/en/v2/Getting-Started-Installing-Git)
2. Navigate to the local site's root folder `public` in the command-line by clicking `Open site shell` in _Local_
3. Navigate to `public -> wp-content -> themes`
4. Clone this repository by typing `git clone https://github.com/cp3402-students/project-team-02.git countrytheme`
   1. If using this theme for another purpose, clone a fork of this repository
5. Navigate to `Appearance -> Themes` in _WordPress Admin_
6. Activate the theme "Country Theme"
7. If migrating to another site, zip the `countrytheme` folder

Proceed to [theme.md](theme.md) for information about customising the theme.

### Version Control

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
8. Commit the changes and push in _GitHub Desktop_
9. Merge commit the branch into `main` remotely
10. Delete the branch remotely
11. Repeat steps 4-10 for every important change/feature

### Testing and Automation

1. Install [Gulp](https://gulpjs.com/)
   1. See documentation [here](https://gulpjs.com/docs/en/getting-started/quick-start)
2. Navigate to the local site's root folder `public` by clicking `Go to site folder` in _Local_
3. Navigate to `public -> wp-content -> themes`
4. Download and unzip the files from [here](https://github.com/AylaGunawan/Gulp-Setup), renaming the folder to `gulp-dev`
   1. Alternatively, set up a Gulp project directory from scratch
5. Copy-paste the URL of the live local site (e.g. `http://ttmca.local/`) and paste it in the proxy of the server function in `Gulpfile.js`
6. Install missing packages by hovering over warnings in `package.json` and/or running the command `npm install`
7. Navigate to the local site's root folder `public` in the command-line by clicking `Open site shell` in _Local_
   1. This can also be done in _PHPStorm_'s built-in terminal
8. Navigate to `public -> wp-content -> themes -> gulp-dev`
9. Type the command `gulp` and view the _PHPStorm_-hosted site
10. Perform testing by making changes in the browser and editing `countrytheme` files in _PHPStorm_
11. Type the command `Cmd/Ctrl + C` to terminate the Gulp session
12. Repeat steps 7-11 for any theme-related testing

## Live Production

The recommended live hosting for this project is _Amazon Lightsail_. The workflow mainly consists of importing both the theme and site content from other locations/development environments, only exporting when migrating to staging for the client.

### Site Setup

1. Make an account for [_Lightsail_](https://aws.amazon.com/free/compute/lightsail/https://aws.amazon.com/free/compute/lightsail/)
2. Launch a _WordPress_ instance in _Lightsail_
   1. See documentation [here](https://aws.amazon.com/getting-started/hands-on/launch-a-wordpress-website/)
   2. Take note of the _WordPress Admin_ (Bitnami) details
   3. Take note of the instance's Availability Zone
3. Visit the live site
4. Open WordPress Admin by adding `/wp-admin/` to the URL
5. Log in with the _WordPress Admin_ details
6. Install and activate the plugins [_Otter_](https://wordpress.org/plugins/otter-blocks/) for custom form blocks and [_Really Simple SSL_](https://en-au.wordpress.org/plugins/really-simple-ssl/) for SSL verification
7. If migrating from another site, import the XML in `Tools -> Import`
   1. See documentation [here](https://wpengine.com/support/sync-new-post-and-pages/)
8. If migrating to another site, export the XML in `Tools -> Export`
   1. See documentation [here](https://wpengine.com/support/sync-new-post-and-pages/)
9. If the instance is not in active use, `Stop` the instance in _Lightsail_
10. If the instance is no longer needed, `Delete` the instance in _Lightsail_

### Theme Setup

1. Navigate to `Appearance -> Themes` in _WordPress Admin_
2. Upload and install a local zip of the `countrytheme` folder as a new theme
   1. See step 7 of [Local Development: Theme Setup](#theme-setup)
   2. Alternatively, download this repository as a zip
3. Activate the theme "Country Theme"

### Testing and Automation

Testing in a live production environment is discouraged because making changes may irreversibly break the site, incurring costs and data loss. As such, limit testing to the local development environment before importing content to the live site.

Automation can be achieved as follows:

1. Toggle `Automatic Snapshots` from an instance's `Snapshots` tab in _Lightsail_ to save backups automatically
   1. This can be RAM-intensive and may require larger plans
2. Activate WordPress plugins provided by _Lightsail_ that automate security, analysis and performance
   1. e.g. [_Akismet Anti-Spam: Spam Protection_](https://wordpress.org/plugins/akismet/), [_Google Analytics for WordPress by MonsterInsights_](https://wordpress.org/plugins/google-analytics-for-wordpress/), [_W3 Total Cache_](https://wordpress.org/plugins/w3-total-cache/)

## Staging

Like live production, staging will be performed on _Amazon Lightsail_. The workflow mainly consists of importing both the theme and site content from other locations/development environments before exporting back into the live site. The client should have access to this environment with their respective admin account.

### Site Setup

1. Follow steps 1-6 of [Live Production: Site Setup](#site-setup-1)
   1. Launch a new _WordPress_ instance separate from the live production, in a different Availability Zone
2. Navigate to `Users -> Add New` in _WordPress Admin_
3. Add user details according to the client's needs
4. Share the client admin details with the client in a secure fashion
   1. e.g. Using a password manager, encrypted messaging or word-of-mouth
5. If migrating from another site, import the XML in `Tools -> Import`
   1. See documentation [here](https://wpengine.com/support/sync-new-post-and-pages/)
6. If migrating to another site, export the XML in `Tools -> Export`
   1. See documentation [here](https://wpengine.com/support/sync-new-post-and-pages/)
7. If the instance is not in active use, `Stop` the instance in _Lightsail_
8. If the instance is no longer needed, `Delete` the instance in _Lightsail_

### Theme Setup

1. Navigate to `Appearance -> Themes` in _WordPress Admin_
2. Upload and install a local zip of the `countrytheme` folder as a new theme
   1. See step 7 of [Local Development: Theme Setup](#theme-setup)
   2. Alternatively, download this repository as a zip
3. Activate the theme "Country Theme"

### Testing and Automation

The staging environment is designed for testing on the client's end without affecting the live site. This lets the client direct interact with the project (i.e. adding real-world data/content) but also sets up a backup in case of non-expert liabilities.

Automation can be achieved as follows:

1. Toggle `Automatic Snapshots` from an instance's `Snapshots` tab in _Lightsail_ to save backups automatically
   1. This can be RAM-intensive and may require larger plans
2. Activate WordPress plugins provided by _Lightsail_ that automate security, analysis and performance
   1. e.g. [_Akismet Anti-Spam: Spam Protection_](https://wordpress.org/plugins/akismet/), [_Google Analytics for WordPress by MonsterInsights_](https://wordpress.org/plugins/google-analytics-for-wordpress/), [_W3 Total Cache_](https://wordpress.org/plugins/w3-total-cache/)

## Project Management

### Communication
For this project, the team is encouraged to communicate face-to-face in weekly stand-up meetings or use an online meeting platform like _Discord_. These meet-up sessions are held to monitor the progress of each member, highlight roadblocks and make group decisions.

### Task Allocation
The allocation and organisation of tasks is supported by _Trello_. In a meeting, a task is assigned to a team member in the board, categorised by type, set with a deadline and placed in a list depending on its status. When complete, that member can tick it and be reassigned. This system keeps everyone accountable and visualises the project's progression and priorities.

### Version Control

_GitHub_ is the primary means of remote source control management. Centralising the custom theme in a repository allows teammates to contribute features and fixes in parallel. When a new feature is to be developed, the teammate must make a new branch so that any changes are isolated and only integrated after approval. Clear communication of who is doing what and at what time is important for maintaining a smooth pipeline.

### Workflow

1. Download and install [_Discord_](https://discord.com/)
   1. See documentation [here](https://discord.com/developers/docs/intro)
   2. Alternatively, open it in browser
2. Have a stand-up meeting in-person or on _Discord_ to assign tasks
   1. Organise the date, time and place of the next meeting
3. Set up a respective task on _Trello_
   1. Take note of the deadline (often the date of the next meeting)
4. Create a new feature branch on this GitHub repository
   1. See steps 5-10 of [Local Development: Version Control](#version-control)
   2. Branches can be made locally or remotely
5. Make appropriate changes for the task before the deadline
6. Commit and push to the feature branch
7. Pull request a merge the feature branch into main
   1. Ensure the pull request message clearly outlines what has been changed
8. Communicate with the team on _Discord_ to resolve conflicts and approve the merge
9. Set the task as complete on _Trello_
10. Repeat steps 3-9 for every task
11. Attend the next meeting
12. If changes need to be made directly to main, announce it on _Discord_ for other team members to re-fetch
