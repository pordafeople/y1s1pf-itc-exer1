    
      PHP NOTES:
      timestamp 54 minutes
    
      sir is using php 5.4+ since $abc = [1, 2, 3]; syntax works
      but assume lower versions; $abc = array(1, 2, 3);
      foreach is allowed mf
      for ($i = 0; $i < count($abc); $i++) {
          print $abc[$i];
      }
      $abc[] = 4;
      $abc == array(1, 2, 3, 4)
    
      
      http://10.4.38.208/molero/index.html
      shows a product catalog. welcome to the store.
      5 categories, 20 products
    
      
      register.html
      name: Last, First, M.
      address: you decide, but should have blk subd etc
      password: must be strong
      etc
    
      
      login.html
      username: [email]
      password: [password]
      submit post request to login.php:
          invalid username OR invalid password => register.html
          valid => index.html
    
    <!-- EXER 2 -->
    
      make an excel file of all the products to sell, save as csv
      TABLE: id, category, 
    
    
      http://10.4.38.208/molero/index.php
      login/register should be after "welcome to the store"
      note the double equals, not triple
      if ($_COOKIE['name'] == '') {}
    
      one link to each category, deduplicate php href index.php?cat=CategoryName
      check $_REQUEST["cat"]
      use only print statements for dynamic html
    
      products.csv: ID, category, name, price, stock quantity
