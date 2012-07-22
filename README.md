** Not stable **

# Twig Extensions used in Newism projects.

This bundle should be used in conjunction with Symfony2.

# Installation

## Step 1: Download NSMTwigExtensionsBundle using composer

Add NSMTwigExtensionsBundle in your composer.json:

```js
{
    "require": {
        "newism/nsm-twig-extensions-bundle": "*"
    }
}
```

Now tell composer to download the bundle by running the command:

``` bash
$ php composer.phar update newism/twig-extensions-bundle
```

Composer will install the bundle to your project's `vendor/bundles/NSM` directory.

## Add NSMTwigExtensionsBundle to your application kernel

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new NSM\Bundle\NSMTwigExtensionsBundle\NSMTwigExtensionsBundle()
    );
}
```

## Make the Twig extensions available by updating your configuration

``` yaml
# app/config/config.yml

nsm_twig_extensions: ~
```