# Private packages bootstrap

## Overview

Private packages Bootstrap bootstraps local Packagist-like, using Satis to provide local repositories.


## Bootstrap the project

    composer create-project partageit/private-packages-bootstrap --keep-vcs

If `composer` is not global, start the `composer install` manually.

You may have to delete the remaining empty `private-packages-bootstrap` folder.

## Configuration

Edit `repositories.json` and change `name` and `homepage` values.

## Once installed, what can I do?

Take a look at [the boostrap readme file](skel/README.md).

## Requirements

- PHP 5.3+
- `php` access from command line


## [License](LICENSE)