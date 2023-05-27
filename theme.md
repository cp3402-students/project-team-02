# Theme

The following documentation contains useful information for new developers using the _Country Theme_ developed by CP3402 Project Team 02. Information includes feature information, files that may need editing, design decisions and more.

### Table of contents
1. [Overview of Theme](#overview-of-theme)
2. [Features](#features)
3. [File Structure](#file-structure)
4. [Design Decisions](#design-decisions)
5. [Development Guidelines](#development-guidelines)

## Overview of Theme
_Country Theme_ was developed for the Townsville and Thuringowa Country Music Association (TTCMA). Their target audience is anyone who is interested in country music, and believed that with a goal driven website, they could get more people to perform at club functions or on stage. (Need to talk about features) The theme comes unique typography creating a country / western architecture, with a tasteful colour palette to back it up. This theme is built off _Underscores_, and therefore adheres to it's best practices. 

## Features
_Country Theme_ has been created with a large variety of different features including:
* Custom header image
* Custom site logo
* Custom main navigation bar with social media icons
* Custom footer navigation with recent posts, social media icons and a search bar
* Custom webfonts that toggles for translator support
* Full bleed feature images and archive feature support



## Design Decisions

1. Color Scheme: The selected colour scheme incorporates a variety of oranges, blues, and beige cream colours. The resulting palette is warm and inviting, with the dark orange #df8d43 delivering the signature country motif. This colour palette is easy on the eyes and provides enough contrast to make text readable.
2. Typography: For body text, Rokkit has been used, a serif font with a sleek design to provide a drop of modernity. Headings keep in touch with their country roots by using either Rye or Caveat Brush depending on whether they are links to articles or not. Headings are clearly designed to be headings, with appropriate sizing and colouring to distinguish if they are links. Link headings are coloured blue and typed in Caveat Blue.

## Development Guidelines

As previously mentioned, this theme uses _Underscores_ as a starter theme, which has excellent comments put throughout the developed theme explaining functions, mixins and many other aspects of the theme. This style of comments should be continued by future developers to ensure clarity and ease of coding. Another point of note is that style.css should never be worked on directly, as it is the result of the compiled .scss files handled by file watchers and Gulp. 