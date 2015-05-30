# How to test changes

## Checkout and makes changes

As usually...

## Create a local private packages provider

    composer create-project partageit/private-packages-bootstrap --keep-vcs

Change `repositories.json` to add the local repository, with local path, such as `/home/...` or `c:/...`.

Build the repository:

    composer build

If it can't be accessed via HTTP, copy the `web` folder on a Web server.

## Test changes

Bootstrap from your new local repository:

    composer create-project partageit/private-packages-bootstrap --stability=dev --keep-vcs --repository-url=http://localhost/private-packages/