Default Payment Method Extension for Magento 1
====================================================

Facts
-----
- version: 2.0.0
- extension key: `Vianetz_DefaultPaymentMethod`

Description
-----------
This module for the Magento 1 online shop software adds the possibility to configure a payment method
that is selected by default in the checkout if the customer hasn't chosen one yet.

Requirements
------------
- PHP >= 8.1
- Magento >= 1.9.3.0 or OpenMage 19.x/20.x

Installation Instructions
-------------------------
For installation notes please see also [my documentation](https://www.vianetz.com/en/install-magento-extension/).

1. Do a backup of your Magento installation for safety reasons.
2. Disable Magento compilation feature (if activated): System->Tools->Compiler
3. Unzip the setup package and copy the contents of the src/ folder into the Magento root folder. (The folder structure
   is the same as in your Magento installation. No files will be overwritten.)
   Please assure that the files are uploaded with the same file user permissions as the Magento installation!
4. Clear the Magento cache (and related caches like APC if available)
5. Logout from the admin panel and then login again
6. Enable the Magento compilation feature (if it was activated before): System->Tools->Compiler

As an alternative you can install the module via modman.
Please find more information about that installation method at [github.com/colinmollenhour/modman](https://github.com/colinmollenhour/modman)
(Thanks @colinmollenhour)

We also offer paid installation services. If you are interested please contact me at [support@vianetz.com](mailto:support@vianetz.com).

Uninstallation
--------------
1. Remove the folder `app/code/community/Vianetz/DefaultPaymentMethod`
2. Remove the file `app/etc/modules/Vianetz_DefaultPaymentMethod.xml`

Frequently Asked Questions
--------------------------
Please find the Frequently Asked Questions on our website [vianetz.com/en/faq](https://www.vianetz.com/en/faq).

Support
-------
If you have any issues or suggestions with this extension, please do not hesitate to
contact me at [vianetz.com/en/contacts](https://www.vianetz.com/en/contacts) or [support@vianetz.com](mailto:support@vianetz.com).

Developer
---------
Christoph Massmann
[www.vianetz.com](https://www.vianetz.com)
[@vianetz](https://twitter.com/vianetz)

Licence
-------
[GNU GENERAL PUBLIC LICENSE](http://www.gnu.org/licenses/gpl-2.0.txt)

Copyright
---------
(c) since 2008 vianetz

This Magento Extension uses Semantic Versioning - please find more information at [semver.org](http://semver.org).
