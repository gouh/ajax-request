# ajax-request
Is an ajax request example

* Download or clone this repo  


* Edit file .env in .docker/.env  
```
DATA_PATH_HOST=C:/Users/set_ur_username/Documents/docker-persistent/mariadb_data/
```

* With docker-compose execute in .docker/.env  
```
docker-compose build
```

* In .docker/.env directory  
```
docker-compose run -d
```

* Your stack is ready, now you make database cars and table cars in mysql of the stack (the sql is in root of project)  


* Now you can check in http://localhost/search.php