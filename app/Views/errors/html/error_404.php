<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?= lang('Errors.pageNotFound') ?></title>

    <style>
        div.logo {
            height: 200px;
            width: 155px;
            display: inline-block;
            opacity: 0.08;
            position: absolute;
            top: 2rem;
            left: 50%;
            margin-left: -73px;
        }

        body {
            height: 100%;
            background-color: #2c0f29;
            font-family: "Montserrat", sans-serif;
            color: #777;
            font-weight: 300;
        }

        h1 {
            font-weight: lighter;
            letter-spacing: normal;
            font-size: 5rem;
            margin-top: 0;
            margin-bottom: 0;
            color: #FFFFFF;
        }

        .wrap {
            max-width: 1024px;
            margin: 5rem auto;
            padding: 2rem;
            background: #8f618f;
            text-align: center;
            border: 1px solid #efefef;
            border-radius: 0.5rem;
            position: relative;
        }

        pre {
            white-space: normal;
            margin-top: 1.5rem;
        }

        code {
            background: #fafafa;
            border: 1px solid #efefef;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            display: block;
        }

        p {
            margin-top: 1.5rem;
            color: #2c0f29;
        }

        .footer {
            margin-top: 2rem;
            border-top: 1px solid #efefef;
            padding: 1em 2em 0 2em;
            font-size: 85%;
            color: #999;
        }

        .btn-home {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 58px;
            width: 189px;
            border-radius: 71px !important;
            background-color: #e01a59;
            color: #fff !important;
            text-decoration: none;
            border-radius: 4px;
            font-weight: 500;
            transition: 0.2s ease;
            margin-inline: auto;
        }

        .btn-home:hover {
            background: #2c0f29
        }
    </style>
</head>

<body>
    <?= view('components/navbar') ?>
    <div class="wrap">
        <h1>404</h1>

        <p>
            <?php if (ENVIRONMENT !== 'production') : ?>
                <?php
                $msg = is_array($message) ? implode("\n", $message) : $message;
                ?>

                <?= nl2br(esc($msg)) ?>
            <?php else : ?>
                <?= lang('Errors.sorryCannotFind') ?>
            <?php endif; ?>
        </p>
        <p>
            <a href="/" class="btn-home">Go to Home</a>
        </p>
    </div>
</body>

</html>