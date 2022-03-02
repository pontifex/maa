```
git clone git@github.com:pontifex/maa.git
cd maa
cp .env_example .env
docker-compose up -d
docker exec -it container_phpfpm_maa bash
composer install
cd database && php create_user_table.php && cd ..
```

Website should be available on http://localhost/index.php
