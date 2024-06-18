<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <title>悩み解決のヒントとなった本の登録</title>
        <style>
            body{
                text-align: center;
            }
            .container {
                max-width: 600px;
                margin: 0 auto;
                font-size: 22px;
            }
            textarea {
                width:100%;
                height:100px;
            }
            textarea::placeholder {
                font-size: 16px;
            }
            input::placeholder {
                font-size: 14px;
            }
            .bookName{
                line-height: 2;
                padding: 5px 0 0 0;
            }
        </style>
    </head>
    <body>
        <section class="container">    
    
            <h1 class="fw-medium">悩み解決のヒントとなった本の登録</h1>
                                    
            <form action="write.php" method="get">
                <textarea name="worry" placeholder="ここに悩みを入力してください"></textarea><br><br>
                悩み解決のヒントとなった本:<input type="text" name="bookName" size="40" placeholder="書籍名を入力してください" class="bookName"><br><br>
                <textarea name="reason" placeholder="どのような点がヒントとなったのか入力してください"></textarea>
                <input type="submit" value="送信">           
            </form>

        </section>        
    </body>
</html>
