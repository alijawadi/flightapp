
## Flight App
    
### How to set up on your local machine

1. Clone the repository
2. Run `cp .env.example .env` in the root directory
3. Run `docker compose up` in the root directory
4. Run `docker compose exec php composer install` in the root directory
5. Run `docker compose exec php php artisan key:generate` in the root directory
6. Run `docker compose exec php php artisan migrate` in the root directory
7. then you can visit http://localhost:9899/docs/api/ to check the api docs and test. You can also export the json from here: http://localhost:9899/docs/api.json and import it in any platform that support open api specs such as postman etc.
