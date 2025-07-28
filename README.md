# Default Payment Method Extension for Magento 1

This Extension for Magento 1 adds the possibility to configure a payment method
that is selected by default in the checkout if the customer hasn't chosen one yet.

---

## Overview

- **Version:** 2.0.0
- **Extension Key:** `Vianetz_DefaultPaymentMethod`

## Requirements

- **PHP:** >= 8.1
- **Magento:** >= 1.9.3.0 or OpenMage 19.x/20.x

## Installation Instructions

For the most up-to-date installation notes, please also see [the documentation](https://www.vianetz.com/en/install-magento-extension/).

1. Do a backup of your Magento installation for safety reasons.
2. Disable Magento compilation feature (if activated): _System > Tools > Compiler_
3. Unzip the setup package and copy the contents of the `src/` folder into the Magento root folder. (The folder structure
   is the same as in your Magento installation. No files will be overwritten.)
   Please assure that the files are uploaded with the same file user permissions as the Magento installation!
4. Clear the Magento cache (and related caches like APC if available)
5. Logout from the admin panel and then login again
6. Enable the Magento compilation feature (if it was activated before): _System > Tools > Compiler_

As an alternative, I recommend installing the Extension via composer:
```
composer require vianetz/default-payment-method-magento1
```

We also offer paid installation services, please [contact me](https://www.vianetz.com/en/contacts).

## Uninstallation

1. Remove the folder `app/code/community/Vianetz/DefaultPaymentMethod`
2. Remove the file `app/etc/modules/Vianetz_DefaultPaymentMethod.xml`

## Frequently Asked Questions

Please find the Frequently Asked Questions on [my website](https://www.vianetz.com/en/faq).

## Support

- Open an issue in the [GitHub Issues](https://github.com/vianetz/default-payment-method-magento1/issues) tracker
- For commercial support, [contact me](https://www.vianetz.com/en/contacts)

## Developer

Christoph Massmann  
[www.vianetz.com](https://www.vianetz.com)  
[@vianetz](https://twitter.com/vianetz)  

## License

Distributed under the [OSL 3.0 License](LICENSE.txt).  
Copyright (c) 2016 - 2025 vianetz - Dipl.-Ing. C. Massmann (https://www.vianetz.com)

This Magento Extension uses Semantic Versioning — please find more information at [semver.org](http://semver.org).
