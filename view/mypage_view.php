<?php
    require('./view/html_head.php');
?>

<body>
    <?php
        require('./view/header.php');
    ?>
    <div id="contents">
        <div id="left">
            <h4 id="green-title">マイページ</h4>
            <div class="card horizontal grey lighten-3 hoverable">
                <div class="card-image">
                    <img src="https://lh3.googleusercontent.com/9OeU3wRuKenumwu2N5o72Y6b40Q2LS-tHmXGPOhN042Pmg-IcCMb9W-e97CoB06UeQ=w200-h200-rwa">
                </div>
                <div class="card-stacked">
                    <div class="card-title" style="padding-left: 0.5em;">
                        UserName
                    </div>
                    <div class="card-content">
                        <p>309999 / 会員の名前 / 会長</p>
                    </div>
                    <div class="card-action">
                        <a href="" class="waves-effect waves btn-flat" ><span  class="light-blue-text text-darken-4"><i class="fas fa-user-edit fa-fw"></i> プロフィールを変更する</span></a>
                    </div>
                </div>
            </div>

            <h5 id="orange-title">サークルWiki投稿記事</h4>
            <div class="collection hoverable">
                <a href="#!" class="collection-item">
                    投稿記事2<BR>
                    <span class="top-news-info">2077/12/31 12345View</span>
                </a>
                <a href="#!" class="collection-item">
                    投稿記事3<BR>
                    <span class="top-news-info">2088/12/31 1234View</span>
                </a>
                <a href="#!" class="collection-item">
                    投稿記事4<BR>
                    <span class="top-news-info">2099/12/31 345View</span>
                </a>
                <a href="#!" class="collection-item">
                    投稿記事1<BR>
                    <span class="top-news-info">2066/12/31 128View</span>
                </a>
            </div>
        </div>
    </div>
</body>