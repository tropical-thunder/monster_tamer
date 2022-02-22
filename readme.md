こちらはLaravelで作ったアプリケーションです。<br>

本アプリケーションはモンスターを捕まえていき
図鑑の完成をさせるというものです。


実際のアプリ操作画面は、操作画面を動画で撮ったので、
<a href="https://tropical-thunder.github.io/portfolio/#portfolio1">コチラ</a>
でご確認ください。


ソースコードに１クリックで飛べるように主要なファイルへのリンクを
以下に貼っておきます。<br><br>

<p>
    <a href="https://github.com/tropical-thunder/monster_tamer/blob/master/app/Http/Controllers/MonsterDataController.php">コントローラー関連ファイルはこちらです</a>
</p>
<p>
    <a href="https://github.com/tropical-thunder/monster_tamer/blob/master/routes/web.php">ルーティング関連ファイルはこちらです</a>
</p>
<p>
    <a href="https://github.com/tropical-thunder/monster_tamer/tree/master/resources/views">ビュー関連ファイルはこちらです</a>
</p>
<br><br>
本アプリケーションで実装した機能は、<br>

<ul>
    <li>DBに捕まえたモンスターを書き込む</li><br>
    <li>DBからモンスター情報を引き出しランダムで出現させる(戦闘画面において)</li><br>
    <li>捕まえたモンスターの名前を変更してDBに保存する</li><br>
    <li>捕まえたモンスターを逃す(DBからの削除)</li><br>
    <li>捕まえたモンスターが重複していたらDBに保存しない機能</li><br>
</ul>
になります。



