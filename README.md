# Laravel Package

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

