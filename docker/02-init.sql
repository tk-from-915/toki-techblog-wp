-- WordPress URL をローカル環境用に更新
UPDATE wordpress.wp_options SET option_value = 'http://localhost:8080' WHERE option_name IN ('siteurl', 'home');

-- 投稿コンテンツ内の旧ドメインを置換
UPDATE wordpress.wp_posts SET post_content = REPLACE(post_content, 'https://tech.embodyer.com', 'http://localhost:8080');
UPDATE wordpress.wp_posts SET guid = REPLACE(guid, 'https://tech.embodyer.com', 'http://localhost:8080');
UPDATE wordpress.wp_postmeta SET meta_value = REPLACE(meta_value, 'https://tech.embodyer.com', 'http://localhost:8080');

-- テーマを TokiMemo に設定
UPDATE wordpress.wp_options SET option_value = 'TokiMemo' WHERE option_name IN ('template', 'stylesheet');

-- プラグインを全て無効化（古いプラグインによる Fatal Error を防ぐ）
UPDATE wordpress.wp_options SET option_value = 'a:0:{}' WHERE option_name = 'active_plugins';
