#Laravel Gulp Boilerplate

This project is merely a quick and simple way to get setup using Laravel with Gulp and a few others to improve the front-end development workflow.

##Setup

1. Create a new host. This can easily be done by using the Homestead setup by Laravel.
2. Clone or download the repository.
3. Run `composer install` within the project root to install the Laravel dependencies.
4. Run `npm install` to install tge Node JS modules.
5. Update the proxy host within the config `builder/json/config.json`.

##Run

The front-end build process can be started in one of two ways.

###Run with Gulp

`gulp`

###Run with Node JS

`npm run build` or `npm run watch`

##Packages

The following packages and items are setup automatically after installation.

- Laravel
- Gulp (naturally)
- Webpack
- Babel
- Browser Sync
- jQuery
- Vue JS
- Foundation
- Gulp SASS