Magento Cause Campaign Extension
================================

Magento extension to allow merchants to run campaigns to raise funds for specific causes.

This is just meant to be an experiment to help learn Magento extension development better, but perhaps it could
turn into something that someone might actually want to use.

The goal is to allow the merchant to run a campaign that would pledge X% of the revenue per order to a specific charity,
and provide some marketing materials to the consumer that lets them know what the merchant is doing, how much has
already been collected and how much a particular order is going to contribute.

Development
-----------

This repository only includes the artifacts in this package, not the entire Magento installation.  To install this extension,
you could copy this repo on top of your Magento 1.X installation, or you could manage this repo separately and just symlink
to it from the main install.

If you take this approach, you'll need to add the following symlinks:

ln -s ./etc/modules/Saleem_Causecampaign.xml MAGE_HOME/etc/modules/Saleem_Causecampaign.xml
ln -s ./app/code/community/Saleem MAGE_HOME/app/code/community/Saleem
ln -s ./design/frontend/base/default/template/causecampaign MAGE_HOME/design/frontend/base/default/template/causecampaign

You'll also need to enable template symlinks in your Magento configuration: System > Configuration > Developer > Allow Symlinks.


