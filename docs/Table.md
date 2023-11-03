## usersテーブル定義書

| カラム名   | データ型        | 説明           |
|------------|-----------------|----------------|
| id         | autoincrement   | 自動増分ID     |
| name       | string          | ユーザー名     |
| email      | string          | メールアドレス |
| password   | string          | パスワード     |
| timestamp  | timestamp       | タイムスタンプ |

## jobsテーブル定義書

| カラム名       | データ型      | 説明           |
|----------------|---------------|----------------|
| id             | autoincrement | 自動増分ID     |
| title          | string        | ジョブタイトル |
| description    | text          | 説明           |
| start_at       | string        | 開始時刻       |
| delete_flg     | boolean       | 削除フラグ     |
| timestamp      | timestamp     | タイムスタンプ |

## likesテーブル定義書

| カラム名   | データ型      | 説明           |
|------------|---------------|----------------|
| id         | autoincrement | 自動増分ID     |
| job_id     | int           | ジョブID       |
| user_id    | int           | ユーザーID     |
| timestamp  | timestamp     | タイムスタンプ |

## job_skillsテーブル定義書

| カラム名   | データ型      | 説明           |
|------------|---------------|----------------|
| id         | autoincrement | 自動増分ID     |
| job_id     | int           | ジョブID       |
| skill_id   | int           | スキルID       |

## job_occupationsテーブル定義書

| カラム名       | データ型    | 説明           |
|----------------|-------------|----------------|
| id             | autoincrement | 自動増分ID   |
| job_id         | int           | ジョブID     |
| occupation_id  | int           | 職種ID       |

## user_skillsテーブル定義書

| カラム名   | データ型      | 説明           |
|------------|---------------|----------------|
| id         | autoincrement | 自動増分ID     |
| user_id    | int           | ユーザーID     |
| skill_id   | int           | スキルID       |

## user_occupationsテーブル定義書

| カラム名       | データ型    | 説明           |
|----------------|-------------|----------------|
| id             | autoincrement | 自動増分ID   |
| user_id        | int           | ユーザーID   |
| occupation_id  | int           | 職種ID       |

## skillsテーブル定義書

| カラム名   | データ型      | 説明           |
|------------|---------------|----------------|
| id         | autoincrement | 自動増分ID     |
| name       | string        | スキル名       |

## occupationsテーブル定義書

| カラム名   | データ型      | 説明           |
|------------|---------------|----------------|
| id         | autoincrement | 自動増分ID     |
| name       | string        | 職種名         |
