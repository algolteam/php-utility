# PHP-UTILITY

This is php utilities.

Requirements
---------

* PHP >= 7.4
* Curl extension for PHP7 must be enabled.

Download
---------

#### Using Composer

From your project directory, run:
```
composer require algolteam/library
```
or
```
php composer.phar require algolteam/library
```
Note: If you don't have Composer you can download it [HERE](https://getcomposer.org/download/).

#### Using release archives

https://github.com/algolteam/php-utility/releases

#### Using Git

From a project directory, run:
```
git clone https://github.com/algolteam/php-utility.git
```

Installation
---------

#### Via Composer's autoloader

After downloading by using Composer, you can include Composer's autoloader:
```php
include (__DIR__ . '/vendor/autoload.php');

ALGOL::DefaultOf()->PrintFormat($AValue);
ALGOL::StrOf()->Length($AValue);
ALGOL::ValueOf()->Distance($ALatFrom,$ALonFrom,$ALatTo,$ALonTo);
ALGOL::ArrayOf()->Length($AValue);
ALGOL::DateTimeOf()->TimeAgo($ADate);
ALGOL::SystemOf()->FileInfo($AFileName);

ALGOL::LanguageOf($AFileName)->Execute();
ALGOL::MysqlDbOf()->ConnectOf();
ALGOL::TelegramOf()->ChatIDOf();
ALGOL::EmbedOf()->get($url);
ALGOL::FtpOf()->FileDownload($ARemoteFile,$ALocalFile);
ALGOL::Html5Of()->Count($ASource,$ASearch);
ALGOL::FakerOf()->Faker;
```
License
------------

This open-source software is distributed under the MIT License. See LICENSE.md

Contributing
------------

All kinds of contributions are welcome - code, tests, documentation, bug reports, new features, etc...

* Send feedbacks.
* Submit bug reports.
* Write/Edit the documents.
* Fix bugs or add new features.

Contact me
------------

You can contact me [via Telegram](https://telegram.me/algolteam) but if you have an issue please [open](https://github.com/algolteam) one.

Support me
------------

You can support me using via LiberaPay [![Donate using Liberapay](https://liberapay.com/assets/widgets/donate.svg)](https://liberapay.com/algolteam/donate)

or buy me a beer or two using [Paypal](https://paypal.me/algolteam).