# Laravel My Diary

## Version

| PHP        | Laravel     | MySQL        | Docker       |  
|:----------:|:-----------:|:------------:|:------------:|  
| 7.2.20     | 6.0.4      | 5.7.26       | 19.03.2      |  


## 環境

- Laradock  
    - Workspace  
    - Apache  
    - MySQL  


### 環境構築手順

1. Laradockをクローンし、 `.env` を作成。  

```shell
git clone https://github.com/laradock/laradock.git
cd my_diary
cp env-example .env
```

2. Laradockの `.env` の設定を以下のように変更。(laradock/.env)  


```text
DATA_PATH_HOST=~/.laradock-diaryApp/data

# 中略

MYSQL_VERSION=5.7
```

3. `mysql/Dockerfile` の設定を `5.7` 用に変更。(laradock/mysql/Dockerfile)  


```text
ARG MYSQL_VERSION=5.7
```

4. Apacheの設定ファイルの記述を以下のように変更。(laradock/apache2/sites/default.apache.conf)  ​

```text
<VirtualHost *:80>
  ServerName localhost
  DocumentRoot /var/www/diaryApp/public/
  Options Indexes FollowSymLinks

  <Directory "/var/www/diaryApp/public">
    AllowOverride All
    <IfVersion < 2.4>
      Allow from all
    </IfVersion>
    <IfVersion >= 2.4>
      Require all granted
    </IfVersion>
  </Directory>

</VirtualHost>
```​

5. buildとup  

```shell
docker-compose up -d --build workspace mysql apache2
```

6. `my_diary/.env` のDBの設定を変更。  

7. Access URL (http://localhost)