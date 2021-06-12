# riderRssgit

instal Symfony 5.0.*
---------
1. composer create-project symfony/website-skeleton="5.0.*" name_project

create BD DATABASE_URL=mysql://db_user:db_password@127.0.0.1:3306/db_name?serverVersion=5.7
---------
3. php bin/console doctrine:database:create
 
create BD User
---------
5. php bin/console doctrine:schema:update --force
