## Kinabank Payment Gateway Magento 2.2.x plugin

Please follow the Magento install instructions mentioned here: <a href="https://docs.google.com/document/d/16zNhlXUQaLKryyJkcZ_ipCcf3q9I-k2uIWBGssbgE7M/edit?usp=sharing" target="_new">download magento documentation</a> or direct link: https://docs.google.com/document/d/16zNhlXUQaLKryyJkcZ_ipCcf3q9I-k2uIWBGssbgE7M/edit?usp=sharing

## Requirements

* Magento 2.2.*
* PHP >= 5.6.0
* Magento version as specified in composer.json of this project

## Installation

### Install the Kinabank Payment Gateway Magento 2 composer package

```composer require tkhconsult/kina-pg-magento```

### Enable the extension in Magento 2

```bin/magento module:enable TkhConsult_KinaPg --clear-static-content```

### Setup the extension and refresh cache

```bin/magento setup:upgrade```

```bin/magento cache:flush```

```bin/magento setup:di:compile```

```bin/magento setup:static-content:deploy```


## Configuration

Once installed, this module can be configured in the usual way by logging into the Magento admin area and navigating to:

Stores > Configuration > Sales > Payment Methods > Kinabank Payment Gateway International

More details are available in the Kinabank Payment Gateway:

https://docs.google.com/document/d/16zNhlXUQaLKryyJkcZ_ipCcf3q9I-k2uIWBGssbgE7M/edit?usp=sharing
