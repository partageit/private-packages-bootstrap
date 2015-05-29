# Private packages bootstrap

## Overview

Private packages is a local Packagist-like bootstrap, using Satis to provide local repositories.


## Bootstrap the project

    composer create-project partageit/private-packages-bootstrap --stability=dev --keep-vcs

If `composer` is not global, start the `composer install` manually

## Configuration

Edit `repositories.json` and change `name` and `homepage` values.

## Once installed, what can I do?

Take a look at [the boostrap readme file](skel/README.md).

## Requirements

- PHP 5.3+
- `php` access from command line


## [License](LICENSE)