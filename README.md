# Load Php Files Plugin

**This README.md file should be modified to describe the features, installation, configuration, and general usage of the plugin.**

The **Load Php Files** Plugin is an extension for [Grav CMS](http://github.com/getgrav/grav). This plugin provides an easy way for users to create pages and load arbitrary PHP files as the content for that page.

## Current Limitations and Issues

- I cannot get the `file` field in forms to upload PHP files. This seems to be disabled, as no options set for the `allow` config let's a PHP file be uploaded
- Likewise, I cannot get the `filepicker` field to show PHP files in a directory, these also seem to be ignored.

## Installation

Installing the Load Php Files plugin can be done in one of three ways: The GPM (Grav Package Manager) installation method lets you quickly install the plugin with a simple terminal command, the manual method lets you do so via a zip file, and the admin method lets you do so via the Admin Plugin.

### GPM Installation (Preferred)

To install the plugin via the [GPM](http://learn.getgrav.org/advanced/grav-gpm), through your system's terminal (also called the command line), navigate to the root of your Grav-installation, and enter:

    bin/gpm install load-php-files

This will install the Load Php Files plugin into your `/user/plugins`-directory within Grav. Its files can be found under `/your/site/grav/user/plugins/load-php-files`.

### Manual Installation

To install the plugin manually, download the zip-version of this repository and unzip it under `/your/site/grav/user/plugins`. Then rename the folder to `load-php-files`. You can find these files on [GitHub](https://github.com/alyx-moon/grav-plugin-load-php-files) or via [GetGrav.org](http://getgrav.org/downloads/plugins#extras).

You should now have all the plugin files under

    /your/site/grav/user/plugins/load-php-files
	
> NOTE: This plugin is a modular component for Grav which may require other plugins to operate, please see its [blueprints.yaml-file on GitHub](https://github.com/alyx-moon/grav-plugin-load-php-files/blob/master/blueprints.yaml).

### Admin Plugin

If you use the Admin Plugin, you can install the plugin directly by browsing the `Plugins`-menu and clicking on the `Add` button.

## Configuration

Before configuring this plugin, you should copy the `user/plugins/load-php-files/load-php-files.yaml` to `user/config/plugins/load-php-files.yaml` and only edit that copy.

Here is the default configuration and an explanation of available options:

```yaml
enabled: true
```

Note that if you use the Admin Plugin, a file with your configuration named load-php-files.yaml will be saved in the `user/config/plugins/`-folder once the configuration is saved in the Admin.

## Usage

**Describe how to use the plugin.**

## Credits

**Did you incorporate third-party code? Want to thank somebody?**

## To Do

- [ ] Future plans, if any

