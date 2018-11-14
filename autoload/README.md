# autoload

Installation Guide
-------------------

create a composer file and add:
{
  "minimum-stability": "dev",

  "require": {
    "php": ">=5.6.4",
    "objective/autoload": "*"
},

  "autoload": {
    "psr-4": {
      "Obinna\\":"src/"
    }
  }
}

Install package:
sudo composer require "objective/autoload":dev-master 

Prepare project:
copy the index.php file from package to your project directory

Generate optimised autoload file:
composer dumpautoload -o

