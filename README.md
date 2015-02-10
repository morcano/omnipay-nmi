# Omnipay: NMI

**NMI driver for the Omnipay PHP payment processing library**

[![Build Status](https://travis-ci.org/mfauveau/omnipay-nmi.png?branch=master)](https://travis-ci.org/mfauveau/omnipay-nmi)
[![Latest Stable Version](https://poser.pugx.org/mfauveau/omnipay-nmi/version.png)](https://packagist.org/packages/mfauveau/omnipay-nmi)
[![Total Downloads](https://poser.pugx.org/mfauveau/omnipay-nmi/d/total.png)](https://packagist.org/packages/mfauveau/omnipay-nmi)

[Omnipay](https://github.com/thephpleague/omnipay) is a framework agnostic, multi-gateway payment
processing library for PHP 5.3+. This package implements [NMI](https://www.nmi.com/) support for Omnipay.

## Installation

Omnipay is installed via [Composer](http://getcomposer.org/). To install, simply add it
to your `composer.json` file:

```json
{
    "require": {
        "mfauveau/omnipay-nmi": "~1.0"
    }
}
```

And run composer to update your dependencies:

$ curl -s http://getcomposer.org/installer | php
$ php composer.phar update

## Basic Usage

The following gateways are provided by this package:

* NMI

For general usage instructions, please see the main [Omnipay](https://github.com/thephpleague/omnipay)
repository.

## Support

If you are having general issues with Omnipay, we suggest posting on
[Stack Overflow](http://stackoverflow.com/). Be sure to add the
[omnipay tag](http://stackoverflow.com/questions/tagged/omnipay) so it can be easily found.

If you want to keep up to date with release anouncements, discuss ideas for the project,
or ask more detailed questions, there is also a [mailing list](https://groups.google.com/forum/#!forum/omnipay) which
you can subscribe to.

If you believe you have found a bug, please report it using the [GitHub issue tracker](https://github.com/mfauveau/omnipay-nmi/issues),
or better yet, fork the library and submit a pull request.