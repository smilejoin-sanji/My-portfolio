<?php
session_start();

// 入力画面からのアクセスでない場合、戻す
if (!isset($_SESSION['form'])) {
    header('Location: index.php');
    exit();
} else {
    $post = $_SESSION['form'];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // メールを送信する
    $to = 'info@smilejoin.design';
    $from = $post['email'];
    $subject = 'お問い合わせが届きました';
    $body = <<<EOT
会社名： {$post['companyName']}
名前： {$post['userName']}
メールアドレス： {$post['email']}
電話番号： {$post['tel']}
お問い合わせ内容：
{$post['message']}
EOT;

    mb_send_mail($to, $subject, $body, "From: {$from}");

    unset($_SESSION['form']);
    header('Location: thanks.html');
    exit();
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmileJoin 愛知県でWeb制作を行なっています</title>
    <meta property="og:title" content="SmileJoin 愛知県でWeb制作を行なっています。" />
    <meta property="og:title" content="SmileJoin" />
    <meta property="og:site_name" content="SmileJoin" />
    <meta property="og:description" content="愛知県でWeb制作を行っているSmileJoinです。一度きりとならず、長い付き合いをしていけるよう心かけています、ご依頼は全力で..." />
    <meta property="og:type" content="website" />
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/confirm.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Klee+One&display=swap" rel="stylesheet">
</head>

<body>
    <header class="header">
        <div class="header__logo">
            <h1 class="header__logo__area"><a href="index.html">
                    <img src="./images/logo_while.svg" alt="">
                </a></h1>
        </div>
        <div class="header__copyright">
            <div class="header__copyright__topText">全ては繋がりから始まる物語</div>
            <div class="header__copyright__centerText">繋がりから感動が生じ、誇りが生まれ</div>
            <div class="header__copyright__bottomText">その繋がりこそは僕の全てだ</div>
        </div>
    </header>
    <main class="main">
        <nav class="nav" id="nav">
            <ul class="nav__list">
                <li class="nav__list__items"><a href="index.php#service" class="serviceLayout">service</a></li>
                <li class="nav__list__items"><a href="index.php#works" class="worksLayout">works</a></li>
                <li class="nav__list__items"><a href="index.php#contact" class="contactLayout is-active">contact</a></li>
                <li class="nav__list__items"><a href="index.php#about" class="aboutLayout">about me</a></li>
            </ul>
            <div class="nav__copyright">
                © smilejoin All rights reserved.
            </div>
        </nav>
        <div class="main__contents">
            <div class="mobile_menu" data-id="nav"></div>
            <!-- --------------- top -->
            <article class="contents_container" id="topPage">
                <div class="main__contents__top">Top page<br>Under Construction...</div>
            </article>
            <!-- --------------- service -->
            <article class="contents_container" id="service">
                <div class="main__contents__service">
                    <ul class="serviceList">
                        <li class="serviceList__items">
                            <div class="serviceList__items__title">
                                <div class="serviceList__items__title__en">Derection</div>
                                <div class="serviceList__items__title__ja">ディレクション</div>
                            </div>
                            <div class="serviceList__items__img">
                                <img src="./images/derction.png" alt="">
                            </div>
                            <div class="serviceList__items__direction">
                                お客様の要望をヒアリングし、現状の問題点を洗い出し、効果的なプランを作成いたします。制作ではデザインに入る前の事前の準備が特に重要になります。何が必要で何が必要でないのかを判断し、費用対効果の高いWebサイトを作るための土台を作ります。
                            </div>
                        </li>
                        <li class="serviceList__items">
                            <div class="serviceList__items__title">
                                <div class="serviceList__items__title__en">Design</div>
                                <div class="serviceList__items__title__ja">デザイン</div>
                            </div>
                            <div class="serviceList__items__img">
                                <img src="./images/design.png" alt="">
                            </div>
                            <div class="serviceList__items__direction">
                                ヒアリングに基づいたプランに沿って、デザインを作成いたします。人の使うものであることを常に意識して、使う人が迷わない、目的を達成できるデザインを心がけています。インターフェースの重要性が増す中でデザインの役割を理解し、そのプランに最適な提案をさせていただきます。
                            </div>
                        </li>
                        <li class="serviceList__items">
                            <div class="serviceList__items__title">
                                <div class="serviceList__items__title__en">Coding</div>
                                <div class="serviceList__items__title__ja">コーディング</div>
                            </div>
                            <div class="serviceList__items__img">
                                <img src="./images/coding.png" alt="">
                            </div>
                            <div class="serviceList__items__direction">
                                デザインの意図を理解し、動きや効果を適切に使用することでWebサイトの仕上がりは大きく変わります。スマートフォンサイト、ワードプレスを使用した更新性の高いサイト、Javascriptを使用した動きのあるサイトなど、様々なサイトのコーディングを行っております。
                            </div>
                        </li>
                    </ul>
                    <div class="serviceScroll">scroll<span></span></div>
                </div>
            </article>
            <!-- --------------- works -->
            <article class="contents_container" id="works">
                <ul class="main__contents__works">
                    <li class="works_container works_is-active" id="works-top">
                        <div class="worksArea">
                            <div class="worksArea__direction">
                                Catworkクリニック（仮）
                                <p>Figma / HTML,Sass / JavaScript / Photoshop</p>
                                <br>
                                制作ポイント：<br>
                                タブレットやスマートフォンのデザインを追加<br>
                                javascriptで滑らかな動きを心がけて制作しました。<br>
                                <br>
                                制作時間：<br>
                                コーディング 15時間<br>
                                モバイルデザインの追加 35時間
                            </div>
                            <div class="worksArea__img">
                                <a href="./works/catwork/assets/index.html" target=”_blank”>
                                    <img src="./images/works/catwork.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="worksNext" data-id="portfolio">next<span></span></div>
                    </li>
                    <li class="works_container" id="portfolio">
                        <div class="worksPrev" data-id="works-top">prev<span></span></div>
                        <div class="worksArea">
                            <div class="worksArea__direction">
                                SmileJoin Web Design（仮）<br>
                                <p>Figma / HTML,Sass / JavaScript /
                                    Photoshop 2021 / Illustrator2022 /</p>
                                <br>
                                制作目的：ポートフォリオの掲示<br>
                                <br>
                                制作ポイント：<br>
                                とにかくシンプルなサイトは欲しかったため、極簡単なレイアウトにしています。<br>
                                今自分において一番大事にしている事をまとめ、タイトルの位置に配置。<br>
                                <br>
                                訓練校通って ３ヶ月目の時期に制作しました。<br>
                                <br>
                                モバイルデバイスからデスクトップデバイスまで全て対応<br>
                                <br>
                                制作時間： 14時間
                            </div>
                            <div class="worksArea__img">
                                <a href="index.html" target=”_blank”>
                                    <img src="./images/works/contact.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="worksNext" data-id="sj-nagoya">next<span></span></div>
                    </li>
                    <li class="works_container" id="sj-nagoya">
                        <div class="worksPrev" data-id="portfolio">prev<span></span></div>
                        <div class="worksArea">
                            <div class="worksArea__direction">
                                SJ名古屋整体院（仮）<br>
                                <p>Adobe XD / HTML,Sass / JavaScript /</p>
                                <br>
                                制作目的：新規患者獲得<br>
                                ターゲット： ３０代〜５０代男女患者様<br>
                                デザインイメージ：<br>
                                モダン 優しい 知性的 清潔<br>
                                <br>
                                制作ポイント：<br>
                                メインカラーを信頼感のある青系に設定<br>
                                重要情報はアクセントカラーのオレンジ系に設定。<br>
                                <br>
                                ナビーゲーションバーを固定し、いつでも問い合わせや予約が可能、またターゲット層は広く、見ずらい方もいらっしゃる可能性があるため、マウスを合わせた際にフォントサイズを見やすく大きめに設定。<br>
                                <br>
                                現段階でデスクトップバージョンとモバイルバージョンに対応。<br>
                                <br>
                                制作時間： 80時間
                            </div>
                            <div class="worksArea__img">
                                <a href="./works/sj-nagoya/assets/index.html" target=”_blank”>
                                    <img src="./images/works/sj-nagoya.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="worksNext" data-id="recruit">next<span></span></div>
                    </li>
                    <li class="works_container" id="recruit">
                        <div class="worksPrev" data-id="sj-nagoya">prev<span></span></div>
                        <div class="worksArea">
                            <div class="worksArea__direction">
                                リクルートエージェント（仮）<br>
                                <p>
                                    Adobe XD / HTML,css / JavaScript /
                                    Illustrator / Photoshop
                                </p>

                                制作目的：新規ユーザ獲得<br>
                                ターゲット： ２０代後半〜３０代女性<br>
                                <br>
                                制作ポイント：<br>
                                メインカラーは大人女性の華やかさを演出しやすい<br>
                                濃い目の赤に設定。<br>
                                <br>
                                アピールポイントの『子育てと転職』両立できる事をわかりやすく伝えるため真ん中に大きく配置。<br>
                                <br>
                                訓練校通って 2ヶ月突入の時期に制作しました。<br>
                                <br>
                                現段階でデスクトップバージョンとモバイルバージョンに対応<br>
                                制作時間： 80時間<br>
                            </div>
                            <div class="worksArea__img">
                                <a href="./works/recruit/assets/index.html" target=”_blank”>
                                    <img src="./images/works/recruit.png" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- <div class="worksNext">next<span></span></div> -->
                    </li>
                </ul>
            </article>
            <!-- --------------- contact -->
            <article class="contents_container  contents__is-active" id="contact">
                <div class="main__contents__contact">
                    <div class="contactNotes">
                        下記の内容でお間違いがなければ、送信ボタンを押して送信してください。
                    </div>
                    <div class="formArea">
                        <form class="contactForm" action="" method="POST">
                            <div class="contactForm__input">
                                <div class="contactForm__input__items">
                                    <label class="label" for="input-companyName">貴社名</label>
                                    <div class="inputArea">
                                        <p><?php echo htmlspecialchars($post['companyName']); ?></p>
                                    </div>
                                </div>
                                <div class="contactForm__input__items">
                                    <label class="label" for="input-userName">お名前<span
                                            class="colorRed">*必須</span></label>
                                    <div class=inputArea>
                                        <p><?php echo htmlspecialchars($post['userName']); ?></p>
                                    </div>
                                </div>
                                <div class="contactForm__input__items">
                                    <label class="label" for="input-email">メールアドレス<span
                                            class="colorRed">*必須</span></label>
                                    <div class="inputArea">
                                        <p><?php echo htmlspecialchars($post['email']); ?></p>
                                    </div>
                                </div>
                                <div class="contactForm__input__items">
                                    <label class="label" for="input-tel">電話番号</label>
                                    <div class="inputArea">
                                        <p><?php echo htmlspecialchars($post['tel']); ?></p>
                                    </div>
                                </div>
                                <div class="contactForm__input__items">
                                    <label class="label" for="input-contact">お問い合わせ内容<span
                                            class="colorRed">*必須</span></label>
                                    <div class="inputArea">
                                        <p><?php echo nl2br(htmlspecialchars($post['message'])); ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="contactForm__sendArea">
                                <!-- <input type="submit" value="send"> -->
                                <div class="send">
                                    <input type="submit" value="send" class="submit">
                                </div>
                                <div class="back">
                                    <a href="index.php#contact">back</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </article>
            <!-- --------------- about -->
            <article class="contents_container" id="about">
                <div class="main__contents__about">Under Construction...</div>
            </article>
        </div>
    </main>
</body>

</html>