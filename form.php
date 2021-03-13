<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>akase`s portfolio</title>
        <link rel="stylesheet" href="stylesheet.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    </head>
    <body style="margin: 0px;">
        <header>
            <div class="header-background">
                <div class="header-container">
                    <a href="index.html" class="btn top">Top</a>
                    <a href="profile.html" class="btn profile">Profile</a>
                    <a href="contact.html" class="btn contact">Contact</a>
                </div>
            </div>
        </header>
        <div class="contact-page">
            <div class="contact-container">
                <h1>Contact</h1>
                <p class="contact-coments">コメントいただきありがとうございます。</p>
                <p class="contact-coments">入力内容</p>
                <div class="contact-box">
                    <p>お名前</p>
                    <div class="name form-text"> <?php echo $_POST["name"]; ?> </div>
                    <p>メールアドレス</p>
                    <div class="email form-text"> <?php echo $_POST["email"]; ?> </div>
                    <p>メッセージ</p>
                    <div class="message form-text"> <?php echo $_POST["message"]; ?> </div>
                </div>
            </div>
        </div>

    </body>
</html>