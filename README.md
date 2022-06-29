### Getting started

```bash
docker-compose build --pull --no-cache
docker-compose up -d
```

```
# URL
http://127.0.0.1

# Env DB
DATABASE_URL="postgresql://postgres:password@db:5432/db?serverVersion=13&charset=utf8"

# Launch
docker compose up -d
```
```
# Make Controller
docker compose exec php bin/console make:controller
```
```
# Création d'entité

```
```
# Commandes DB
bin/console doctrine:database:create
bin/console make:migrate
bin/console doctrine:migration:migrate

    # pour les personnes avec docker sous mac, ajouter avant les commandes 
    docker compose exec php 
    # et pour ceux avec docker sous windows
    docker compose exec php php
```
```
# Faire From
bin/console make:form
```
```
# Rendu 
- 3 entité jointe 
    5 champs sur 2/3
- 2 rôles 
- Régles d'accés 

- Désigné 
- Sujet libre 
- Full Sf
```
```
# Faire une partie User
docker compose exec php bin/console make:user
docker compose exec php bin/console make:auth
docker compose exec php bin/console s:hash# api
# api
# api
