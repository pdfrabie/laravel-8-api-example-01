## About

This small project exposes 2 api's. A list and a search.
Internally through guzzle they point to [openbrewerydb](https://www.openbrewerydb.org/).


## Available Api's
...\routes\api.php

- /breweries
( list: http://localhost/api/breweries )

- /breweries/{brewery}
( search: http://localhost/api/breweries/101 )

Note: localhost could be replaced with a virtual host
( http://laravel-8-api-example/api/breweries/101 )

## Available Tests
...\tests\Feature\

- BreweriesListTest
- BreweriesSearchTest

( Run tests: php artisan test )