# Site

The following documentation contains DevOps procedures for the _WordPress_ custom theme "Country Theme" made by CP3402 Project Team 02. The document will walk through recommended development environment processes, tools and general project management to provide a simple, repeatable workflow.

### Table of Contents
1. [Local Development](#local-development)
   1. [Running the Site Locally](#running-the-site-locally)
   2. [Adding New Content](#adding-new-content)
   3. [Modifying Existing Content](#modifying-existing-content)
   4. [Updating the Live Site](#updating-the-live-site)

## Local Development

Local development systems that will be used include _Local_ by _Flywheel_ and _Git_. The workflow mainly consists of cloning this projects repository into the files of a locally hosted website, before making changes on a feature-specific branch. Testing in a live production environment is discouraged because making changes may irreversibly break the site, incurring costs and data loss. As such, it is recommended to limit test the local development environment before importing content to the live site.

If you have not yet set up a local development environment for your site, please view the sections on `Site Setup` and `Theme Setup` in [deployment.md](deployment.md).

### Running the Site Locally

1. Select the local site on _Local_ by _Flywheel_
2. Click the `Start Site` button in the top right corner of the window
3. Below that button, click both `WP Admin` and `Open Site` to open both the _WordPress_ dashboard and the local site respectively
    1. Any changes you make to the local site will not be displayed on the live site until you [Update the Live Site](#updating-the-live-site)
    2. Whenever you would like to view changes you have made to the site, make sure to reload the page to allow it to update.
4. On the _WordPress_ sidebar, under `Dashboard`, navigate to `Plugins`
    1. Check that the plugin [_Otter_](https://wordpress.org/plugins/otter-blocks/) is installed and activated as it allows for custom form blocks
5. Once you have finished editing the local site, go back to _Local_ by _Flywheel_ and click the `Stop Site` button

### Adding New Content

We will go over an example similar to one of the demonstrations in the Presentation- adding a new `Gallery Post`.

1. Select a photo or post to add to the site by right-clicking it and pressing `Save image as...` 
    1. For this example, go to the [_TTCMA Facebook page_](https://www.facebook.com/TownsvilleCountryMusic) and choose one of these images
2. On the _WordPress_ sidebar, under `Dashboard`, navigate to `Media -> Add New`, then click the `Select Files` button and open the image you saved
3. On the _WordPress_ sidebar, under `Dashboard`, navigate to `Posts -> Add New`
4. On the  right sidebar of this new post, under `Featured image`, click `Select featured image` and select the image you just uploaded
5. In the middle of the screen, type the title of the post in the `Add Title` field
    1. The title you add to the post will become its URL by default, you can change the URL on the right side of the page under `Summary`
6. Under this, in the `Type / to choose a block` field, choose an applicable block
    1. This block will become a paragraph block by default if you begin typing
7. Once you have filled in these key details, select the category of the post under `Categories` on the right sidebar
    1. This site is divided into categories for page and post styling, and organisation
    2. In this example we will select `Gallery` since this is a gallery post
8. Once you are done set the publish date of the post, and click the blue `Publish` button in the top right corner of the interface.
    1. If you set the publish date of the post to immediate or a date that has passed, it will appear on the site immediately.
    2. If you set the publish date of the post to a date in the future, the site will publish and display the post at the time and date you specify.
    3. Note that the default time zone for _WordPress_ is UTC.

These general instructions can be roughly applied to making both a new `Post` or new `Page` entirely, and should serve as a good example of how the site is organised and can be updated.

### Modifying Existing Content

1. On the _WordPress_ sidebar, under `Dashboard`, navigate to the `Posts` or `Pages` sections
2. Hover your cursor over the `Post` or `Page` you would like to modify and click `Edit`
    1. This will take you inside the `Post` or `Page`, to the same interface as when you were [Adding New Content](#adding-new-content)
3. Once you have finished modifying the content, click the blue `Update` button in the top right corner of the interface where the `Publish` button used to be

### Updating the Live Site

Any changes made to the local site will not be displayed on the live site until you update it. Please view steps `7` and `8` from the section `Site Setup` in [deployment.md](deployment.md/#site-setup) for further instruction.