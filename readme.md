# ¿Qué Proponen?

_"¿Qué proponen?"_ is an open source project for improve the information for the voters.

##Server Requirements

The Laravel framework has a few system requirements. All of these requirements are satisfied by the Laravel Homestead virtual machine, so it's highly recommended that you use Homestead as your local Laravel development environment.

However, if you are not using Homestead, you will need to make sure your server meets the following requirements:

    PHP >= 7.1.3
    BCMath PHP Extension
    Ctype PHP Extension
    JSON PHP Extension
    Mbstring PHP Extension
    OpenSSL PHP Extension
    PDO PHP Extension
    Tokenizer PHP Extension
    XML PHP Extension
    Node.js





## Installation

1.**Install dependencies**

If you don't have composer installed, type:

```sh
php composer.phar install
npm install

```

or if you have composer

```sh
composer install
npm install
```

3. **Config**

create an `.env` file. Add the custom configuration

3. **Database**

```sh
php artisan migrate
```

4. **Run App**

```sh
npm build
php artisan serve
```

## Features

  - [X] Multiple election
  - [X] Proposals per Political Partys.
  ###To Do
  
  - [ ] Half Orange
  - [ ] Proposal comparison
  - [ ] Political Record
  - [ ] Improve design
  - [ ] Improve Readme