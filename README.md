# Laravel Package

### Configuration

1. In ./composer.json add:
```
"autoload": {
    "psr-4": {
        ...
        "Recruitment\\Products\\": "vendor/recruitment/products/src"
        ...
    }
}
```
and
```
"extra": {
    "laravel": {
        "dont-discover": [
            ...
            "Recruitment\\Products\\ProductsServiceProvider"
            ...
        ]
    }
},
```
2. In ./config/app.php add:
```
'providers' => [
    ...
    Recruitment\Products\ProductsServiceProvider::class,
    ...
],
```
3. Download from this repository file ProductsTableSeeder.php and place it in ./database/seeders

4. In ./database/seeders/DatabaseSeeder.php edit:
```
public function run()
{
    ...
    $this->call(ProductsTableSeeder::class);
    ...
}
```
5. Create empty file database.sqlite in ./database

6. In ./.env set:
```
DB_CONNECTION=sqlite
```
and delete line:
```
DB_database=laravel
```
### Installation

7. In main project directory: (can be in the different order -> I've checked yet)
```
$ composer require recruitment/products
$ php artisan migrate
$ php artisan db:seed   //command to fill database with initial records
$ composer update
```
### CURL usage examples

##### Show available products:

    curl -X GET app-url/products/available 
  
##### Show unavailable products:
  
    curl -X GET  app-url/products/unavailable 

##### Show products of which there are more than 5:

    curl -X GET  app-url/products/more-than-five

##### Add product:

    curl -d '{"name":"Produkt 6", "amount":"15"}' -H "Content-Type: application/json" -X POST  app-url/products/add

##### Update product with example id = 6:

    curl -d '{"name":"Produkt 9", "amount":"12"}' -H "Content-Type: application/json" -X PATCH  app-url/products/6

##### Delete product with example id = 6:

    curl -X DELETE  app-url/products/6

