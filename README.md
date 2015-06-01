# Private packages bootstrap

## Overview

Private packages Bootstrap bootstraps local Packagist-like, using Satis to provide local repositories.

It provides:

- sample files, easy to update and to version
- simple command to regenerate the Satis repository (`composer build`)
- a rebuild script, to add to your Git hook, in order to automatically regenerate the Satis repository

## Bootstrap the project

    composer create-project partageit/private-packages-bootstrap --keep-vcs

If `composer` is not global, start the `composer install` manually.

You may have to delete the remaining empty `private-packages-bootstrap` folder.

## Configuration

Edit `repositories.json` and change `name` and `homepage` values.

## Once installed, what can I do?

Take a look at [the boostrap readme file](skel/README.md).

## Customization

Once installed, you are free to change the `composer.json` and `rebuild.php`, for example to change the `web` folder path, or the way to rebuild the Satis repository.

## Requirements

- PHP 5.3+
- `php` access from command line


## [License](LICENSE)