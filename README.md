# ⏱ PHP Reading Time

[![Build Status](https://travis-ci.org/DivineOmega/php-reading-time.svg?branch=master)](https://travis-ci.org/DivineOmega/php-reading-time)
[![Coverage Status](https://coveralls.io/repos/github/DivineOmega/php-reading-time/badge.svg?branch=master)](https://coveralls.io/github/DivineOmega/php-reading-time?branch=master)
[![StyleCI](https://styleci.io/repos/128542116/shield?branch=master)](https://styleci.io/repos/128542116)

This PHP library lets you easily calculate the reading time for a piece of text.

## Installation

You can install PHP Reading Time using Composer, as follows.

```
composer require divineomega/php-reading-time
```

## Usage

The following examples show how you can use PHP Reading Time to calculate the reading time in minutes
or seconds. You can also set a reading speed in words per minute (default: 200 wpm).

```php
$readingTime = new ReadingTime($text);

$readingTime->seconds();
$readingTime->minutes();

$readingTime->setWordsPerMinute(240)->minutes();
```
