# Private packages bootstrap

## Overview

Private packages is a local Packagist bootstrap, using Satis to provide local repositories.

## Installation

In a Web folder, clone this git repository.

Then type:

    composer update

And build the packages list:

    composer build

## Access

The packages list/documentation can be accessed via `http://<host>/private-packages/web/`.

## Usage

In other projects' composer.json:

```json
	"repositories": [
		{
			"type": "composer",
			"url": "http://<host>/private-packages/web/"
		}
	]
```

## Packages list update

Edit `repositories.json` and add the Git repository.

And then, update the packages list:

    composer build

Version this repository when required.

## When to build the packages list?

The packages list should be re-built when a repository is updated, i.e. when changes are pushed.

## References

The Satis documentation: https://getcomposer.org/doc/articles/handling-private-packages-with-satis.md