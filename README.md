# toki-techblog-wp

## Overview&Background / 概要と背景
Around 2016, when the concept of "professional blogging" was beginning to trend, I first discovered WordPress. As I explored various blogs, I realized that rather than writing articles, my true passion lay in creating the beautiful, high-quality designs of the blogs themselves—despite having no prior programming knowledge at the time.

Phase 1: Design & Theme Development
I started by sketching my visual concepts on paper and began designing with HTML/CSS textbooks in hand. I install XAMPP on my PC and spent approximately two and a half months building a custom WordPress theme from scratch.

Phase 2: Infrastructure & Server Operations
Once the theme was complete, I wanted to share it with the world. I transitioned from a pre-configured Shared Hosting service to a VPS for greater flexibility. Starting from a clean Linux installation, I spent about a month manually building a LEMP stack (Nginx, MySQL, PHP) from scratch. Although I initially experimented with Apache, I eventually migrated to Nginx for its performance benefits. I completed everything from server configuration to DNS setup, successfully launching my custom theme online.

Note: While the blog theme itself was originally developed around 2016, it was officially uploaded to GitHub in 2020.


2016年ごろ、ブロガーという職業が流行り始めた時期にwordpressを知りました。当時全くプログラミングを知らなかった私ですが、色々なブログを見ていて、自分は文章を書くより素敵なデザインのブログ自体を作りたいと思うようになりました。

フェーズ1：デザインとテーマ開発
まずは頭の中にあるイメージを紙に書き起こすことから始め、HTML/CSSの本を片手に設計を進めました。自分のPC内にXAMPPでローカル環境にインストールし、約2ヶ月半かけてWordPressテーマをフルスクラッチで制作しました。

フェーズ2：インフラ構築とサーバー運用
完成したテーマを公開するため、当初は設定済みのレンタルサーバー（Xserver等）を利用していましたが、より自由度の高い環境を求めて VPS（さくらVPS等） での運用に挑戦しました。OS（Linux）のみがインストールされた状態から、約1ヶ月かけて LEMP環境（Nginx, MySQL, PHP）を自力で構築。当初はApacheで構築を試みたものの、最終的にはパフォーマンスを重視して Nginx を採用しました。ドメインの紐付け（DNS設定）までを完結させ、自作テーマの公開に至りました。

※このブログテーマ自体は2016年ごろに作成したものですが、GitHubにアップロードしたのは2020年ごろになります。


## Theme Structure / テーマ構成

The custom WordPress theme **TokiMemo** is located in `wp-content/themes/TokiMemo/`. (`images/` directory is omitted)

自作WordPressテーマ **TokiMemo** は `wp-content/themes/TokiMemo/` に格納されています。（`images/` ディレクトリは省略）

```
TokiMemo/
├── style.css                       # Theme stylesheet & metadata / テーマのスタイルとメタ情報
├── functions.php                   # Theme functions, custom post types, widgets / テーマ関数・カスタム投稿タイプ・ウィジェット登録
├── header.php                      # Global header / 共通ヘッダー
├── header-index.php                # Header for top page / トップページ用ヘッダー
├── footer.php                      # Global footer / 共通フッター
├── sidebar.php                     # Sidebar / サイドバー
├── index.php                       # Category archive / カテゴリーアーカイブ
├── single.php                      # Single post / 個別記事
├── page.php                        # Fixed page / 固定ページ
├── archive.php                     # Archive / アーカイブ
├── tag.php                         # Tag archive / タグアーカイブ
├── top.php                         # Top page / トップページ
├── sitemap.php                     # Sitemap page / サイトマップ
├── searchform.php                  # Search form / 検索フォーム
├── taxonomy-framework-product.php  # Custom taxonomy template / カスタムタクソノミーテンプレート
├── screenshot.png                  # Theme preview image / テーマプレビュー画像
└── wingpen.ico                     # Favicon / ファビコン
```

---

## Getting Started / 起動方法

### Requirements / 必要なもの

- [Docker Desktop](https://www.docker.com/products/docker-desktop/)

### Steps / 手順

**1. Clone the repository / リポジトリをクローン**

```bash
git clone https://github.com/tk-from-915/toki-techblog-wp.git
cd toki-techblog-wp
```

**2. Start containers / コンテナを起動**

```bash
docker compose up -d
```

On first launch, the database is automatically initialized (importing `dump.sql` and configuring URLs).
This may take **30–60 seconds** to complete.

初回起動時はデータベースの初期化（`dump.sql` のインポートと URL 設定）が自動で行われます。
完了まで **30〜60秒** ほどかかります。

**3. Open in browser / ブラウザで確認**

| URL | Description / 説明 |
|-----|--------------------|
| http://localhost:8080 | Blog / ブログ本体 |
| http://localhost:8080/wp-admin | WordPress Admin / 管理画面 |
| http://localhost:8081 | phpMyAdmin |

Admin credentials / 管理画面のログイン情報：

| | Value / 値 |
|--|-----------|
| Username / ユーザー名 | `tokico` |
| Password / パスワード | `admin1234` |

### Stop / 停止

```bash
docker compose down
```

### Restart / 再起動（2回目以降）

```bash
docker compose up -d
```

### Reset database / DB を初期化してやり直す場合

```bash
docker compose down -v
docker compose up -d
```

> **Note**
> Adding `-v` removes the DB volume and re-imports from `dump.sql`.
>
> `-v` オプションを付けると DB のボリュームが削除され、`dump.sql` から再インポートされます。
