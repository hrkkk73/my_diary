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

1. laradock直下にて、下記コマンド実行  
    - ` docker-compose build workspace mysql apache2 `  
    - ` docker-compose up workspace apache2 mysql `

2. DBの作成  
    

### Laravelの初期設定

1. diaryApp直下にて、下記コマンドの実行  
    - ` composer install `

2. .envの編集  
    ```
    DB_CONNECTION=mysql
    DB_HOST=mysql
    DB_PORT=3306
    DB_DATABASE=diary_app
    DB_USERNAME=root
    DB_PASSWORD=root
    ```

3. key:generate  
    以下を実行  

    ```shell
    php artisan key:generate
    ```

4. migrateとseed  
    以下を実行  

    ```shell
    php artisan migrate --seed
    ```

5. Access URL (http://localhost)
