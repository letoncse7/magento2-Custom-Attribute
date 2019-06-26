-- This extension for create a custom field "Mobile Number" in registration form 
Installation Steps

Please follow these steps to install the Custom Attribute in registration form.

Step 1: Download module from https://github.com/letoncse7/magento2-Custom-Attribute.git

Step 2: Log in to your server using FTP or Cpanel.

Step 3: Upload Fastbazzar  inside of app/code dirrectory.

Step 4: Now Run the command line and go to your project root directory.

Step 5: Run The following command into command line: -

	5.1: php bin/magento setup:upgrade
	5.2: php bin/magento setup:di:compile
	5.2: php bin/magento setup:static-content:deploy -f
	5.3: php bin/magento cache:clean
	5.4: php bin/magento cache:flush
	5.5: php bin/magento index:reindex