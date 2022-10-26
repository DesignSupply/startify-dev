# Startify-dev

Startify-devはウェブアプリケーションを作成するために必要なリソースがひととおり揃ったローカル開発環境です。Dockerを使った開発用サーバー環境の構築から、バックエンド開発のフレームワークLaravelのインストールからセットアップまでワンストップで、効率よく開発を進めることができます。

フロントエンド開発やデザイン制作からコーディング作業については下記を併用していただくことで、デザインからマークアップ、フロントエンド開発からバックエンドの実装まで一貫してスムーズなワークフローを実現できます。

- [Startify3](https://github.com/DesignSupply/startify3/)：React ＋ webpackベースのコーディング環境
- [Startify2](https://github.com/DesignSupply/startify2/)：Vue.js ＋ webpackベースのコーディング環境
- [Startify-styles](https://github.com/DesignSupply/startify-styles)：Sass（SCSS・SASS）ファイルライブラリとデザインデータテンプレート（Figma・Sketch・Adobe XD）
- [Startify](https://github.com/DesignSupply/startify/)：Vue.js ＋ Gulpベースのコーディング環境（現在、更新停止中）



## Features

Startify-devで主にできることは以下になります。

* Dockerを使ったローカル開発環境（PHP・nginx・MariaDB・phpMyAdmin・メーラー）
* Laravelのインストールとセットアップ
* バックエンド側で用意されたページテンプレートの使用
* Makefileを使ったコマンド操作



## Installation & Usage

### Docker環境構築・Laravel内のライブラリインストール
```bash
$ cd server
$ make build
$ make install
```

### マイグレーション・シーダー実行
```bash
$ cd server
$ make fresh
```

### Laravel新規プロジェクト作成
```bash
$ rm -r backend/laravel
$ cd server
$ make create
```

### Laravelインストール後のセットアップ
laravel/.envのファイルにデータベース情報を設定後下記コマンドを実行
```bash
$ make setup
```



## Note

* デフォルトではbackendディレクトリ直下がドキュメントルートになり、Laravelのアプリケーションファイルはlaravelディレクトリ配下にインストールされています。
* 初期設定では開発用ローカルサーバーのポート番号は8000、phpMyAdminのポート番号は8888、テスト用ウェブメーラーのポート番号は8025となっています。



## Author

Ogawa Shinya

info@designsupply-web.com



## License

Startify-dev is under [MIT license](https://en.wikipedia.org/wiki/MIT_License).