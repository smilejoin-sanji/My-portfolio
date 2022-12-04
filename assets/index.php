<!-- <?php
session_start();
$error = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    // フォームの送信時にエラーをチェックする
    if ($post['name'] === '') {
        $error['name'] = 'blank';
    }
    if ($post['email'] === '') {
        $error['email'] = 'blank';
    } else if (!filter_var($post['email'], FILTER_VALIDATE_EMAIL)) {
        $error['email'] = 'email';
    }
    if ($post['message'] === '') {
        $error['message'] = 'blank';
    }

    if (count($error) === 0) {
        // 確認画面に移動
        $_SESSION['form'] = $post;
        header('Location: confirm.php');
        exit();
    }
} else {
    if (isset($_SESSION['form'])) {
        $post = $_SESSION['form'];
    }
}
?> -->
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
    <meta property="og:description" content="愛知県でWeb制作を行っているSmileJoinです。一度きりでなく、長い付き合いをしていけるよう心かけています、ご依頼は全力で..." />
    <meta property="og:type" content="website" />
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Klee+One&display=swap" rel="stylesheet">
</head>

<body>
    <header class="header">
        <div class="header__logo">
            <h1 class="header__logo__area"><a href="index.php">
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
                <li class="nav__list__items"><a href="" class="serviceLayout" data-id="service">service</a></li>
                <li class="nav__list__items"><a href="" class="worksLayout is-active" data-id="works">works</a></li>
                <li class="nav__list__items"><a href="" class="contactLayout" data-id="contact">contact</a></li>
                <li class="nav__list__items"><a href="" class="aboutLayout" data-id="about">about me</a></li>
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
            <article class="contents_container contents__is-active" id="works">
                <ul class="main__contents__works">
                    <li class="works_container works_is-active" id="works-top">
                        <div class="worksArea">
                            <div class="worksArea__direction">
                                Catworkクリニック（仮）
                                <p>Figma / HTML,Sass / JavaScript / Photoshop</p>
                                <br>
                                タブレットやスマートフォンのデザインを追加<br>
                                javascriptで滑らかな動きを心がけて制作しました。<br>
                                <br>
                                制作時間：<br>
                                コーディング 20時間<br>
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
                                <p>Figma / HTML,Sass / JavaScript / php /
                                    Photoshop 2021 / Illustrator2022 /</p>
                                <br>
                                制作目的：ポートフォリオの掲示<br>
                                <br>
                                制作ポイント：<br>
                                誰でも見やすく、ごく簡単なレイアウトにしています。<br>
                                今自分において一番大事にしている事をまとめ、タイトルの位置に配置。<br>
                                <br>
                                訓練校通って ３ヶ月目の時期に制作しました。<br>
                                JavaScriptやPHPはまだ学習中のため、コンタクトフォームもへのセキュリティー対策はまだ行っていません。<br>
                                <br>
                                モバイルデバイスとデスクトップデバイスに対応<br>
                                <br>
                                制作時間： 40時間
                            </div>
                            <div class="worksArea__img">
                                <a href="index.php" target=”_blank”>
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
                                制作時間： 60時間
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
                                制作時間： 60時間<br>
                            </div>
                            <div class="worksArea__img">
                                <a href="./works/recruit/assets/index.html" target=”_blank”>
                                    <img src="./images/works/recruit.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="worksNext" data-id="vlog">next<span></span></div>
                    </li>
                    <li class="works_container" id="vlog">
                        <div class="worksPrev" data-id="recruit">prev<span></span></div>
                        <div class="worksArea">
                            <div class="worksArea__direction">
                                個人ブログ（仮）<br>
                                HTML,css<br>
                                <br>
                                制作目的： 同じバイク乗りの繋がり増やし<br>
                                ターゲット：　30代〜50代まで幅広い年齢層<br>
                                <br>
                                訓練校でhtml習い終わったごろに制作しました。<br>
                                デスクトップのみ対応<br>
                                <br>
                                制作時間： 20時間<br>
                            </div>
                            <div class="worksArea__img">
                                <a href="./works/vlog/index.html" target=”_blank”>
                                    <img src="./images/works/vlog.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="worksNext" data-id="travel-blog">next<span></span></div>
                    </li>
                    <li class="works_container" id="travel-blog">
                        <div class="worksPrev" data-id="vlog">prev<span></span></div>
                        <div class="worksArea">
                            <div class="worksArea__direction">
                                Trabel Blog（仮）<br>
                                HTML,css<br>
                                <br>
                                制作目的： コーディングの練習<br>
                                <br>
                                訓練校でhtmlの学習中に練習として制作しました。<br>
                                デスクトップのみ対応<br>
                                <br>
                                制作時間： 30時間
                            </div>
                            <div class="worksArea__img">
                                <a href="./works/trabel-blog/index.html" target=”_blank”>
                                    <img src="./images/works/trabel-blog.png" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- <div class="worksNext">next<span></span></div> -->
                    </li>
                </ul>
            </article>
            <!-- --------------- contact -->
            <article class="contents_container" id="contact">
                <div class="main__contents__contact">
                    <div class="contactNotes">
                        制作の依頼・ご相談などお気軽にお問い合わせくださいませ。<br>
                        下記フォームよりわかる範囲でご記入ください。必須の項目は必ずご記入お願いします。
                        <br>
                    </div>
                    <div class="formArea">
                        <form class="contactForm" action="" method="POST">
                            <div class="contactForm__input">
                                <div class="contactForm__input__items">
                                    <label class="label" for="input-companyName">貴社名</label>
                                    <div class="inputArea">
                                        <input class="inputs" type="text" name="companyName" id="input-companyName"
                                            value="<?php echo htmlspecialchars($post['companyName']); ?>">
                                    </div>
                                </div>
                                <div class="contactForm__input__items">
                                    <label class="label" for="input-userName">お名前<span
                                            class="colorRed">*必須</span></label>
                                    <div class=inputArea>
                                        <input class="inputs" type="text" name="userName" id="input-userName"
                                            value="<?php echo htmlspecialchars($post['userName']); ?>" required>
                                        <?php if ($error['userName'] === 'blank'): ?>
                                            <p class="error_msg">＊お名前をご記入下さい。</p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="contactForm__input__items">
                                    <label class="label" for="input-email">メールアドレス<span
                                            class="colorRed">*必須</span></label>
                                    <div class="inputArea">
                                        <input class="inputs" type="email" name="email" id="input-email"
                                            value="<?php echo htmlspecialchars($post['email']); ?>" required>
                                        <?php if ($error['email'] === 'blank'): ?>
                                        <p class="error_msg">＊メールアドレスをご記入下さい。</p>
                                        <?php endif; ?>
                                        <?php if ($error['email'] === 'email'): ?>
                                        <p class="error_msg">＊メールアドレスを正しくご記入ください。</p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="contactForm__input__items">
                                    <label class="label" for="input-tel">電話番号</label>
                                    <div class="inputArea">
                                        <input class="inputs" type="tel" size="10" maxlength="20" name="tel" id="input-tel"
                                            value="<?php echo htmlspecialchars($post['tel']); ?>">
                                    </div>
                                </div>
                                <div class="contactForm__input__items">
                                    <label class="label" for="input-message">お問い合わせ内容<span
                                            class="colorRed">*必須</span></label>
                                    <div class="inputArea">
                                        <textarea required name="message"
                                            id="input-message"><?php echo htmlspecialchars($post['message']); ?></textarea>
                                        <?php if ($error['message'] === 'blank'): ?>
                                            <p class="error_msg">＊お問い合せ内容をご記入下さい。</p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="contactForm__send">
                                <input type="submit" value="send" class="submit">
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
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    </script>
    <script src="./js/main.js"></script>
</body>

</html>