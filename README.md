# PhpUni repo is a collection of DimoNika's labs

## To run projcet ##

Build image from Dockerfile
```
docker compose build
```

Run contailers
```
docker compose up -d
```

Enter PHP container
```
docker exec -it my_php bash
```

Run webserver
```
cd labs
php -S 0.0.0.0:8000 router.php
```

---

Access in browser with
[http://localhost:8000/](http://localhost:8000/)

---

Stop contailers
```
docker compose up -d
```