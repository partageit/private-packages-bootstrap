# Private packages

## Overview

Provide local repositories using Satis.

## Installation

In a Web folder, clone this git repository.

Then type:

    composer update

And build the packages list:

    composer build

## Access

The packages list can be accessed via `http://<host>/private-packages/web/`.

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

Edit `repositories.json` and add the Git repositories.

And then, update the packages list:

    composer build

Version this repository when required.

## When to build the packages list?

The packages list should be re-built when a repository is updated, i.e. when new tags are created.

### Automatic build

If your Web server is able to interpret PHP scripts, you can enable the rebuild function:

    composer enable-rebuild-hook

This command-line copies the `rebuild.php` file in the `web` folder, and makes it available at this address: `http://<host>/private-packages/web/rebuild.php`.

You can access it manually, or start it from the Git `post-receive` hook, for example:

```php
#!/usr/bin/env php

<?php
$rebuildResult = file_get_contents("http://uri/private-packages/rebuild.php");

$rebuildResult = explode("\n", $rebuildResult);

if ($rebuildResult[0] === "success") {
	echo "Private packages rebuilt!";
} else {
	echo "Private packages rebuild failed";
}

echo "\n";
```

## References

The Satis documentation: https://getcomposer.org/doc/articles/handling-private-packages-with-satis.md