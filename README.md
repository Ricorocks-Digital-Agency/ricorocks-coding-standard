# Ricorocks Coding Standard

This project contains sniffers for coding standards that are expected to be met on Ricorocks projects.

## Installation

```bash
composer require --dev ricorocks-digital-agency/ricorocks-coding-standard
```

## Usage

To use this package, you'll need to have PHP Code Sniffer installed in you project:

```bash
composer require --dev squizlabs/php_codesniffer
```

Now run the code sniffer, pointing the Code Sniffer command to our installed coding standard:

```bash
./vendor/bin/phpcs --standard=./vendor/ricorocks-digital-agency/ricorocks-coding-standard/RicorocksStandard ./src
```

> Note: When working in a Laravel project, you should change `./src` for `./app ./config ./database ./routes`. It usually
> makes more sense to alias this command to a composer script.
