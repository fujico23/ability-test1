<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/register">
                FashionablyLate
            </a>
            <div class="login__button">
                <button onclick="location.href='login'">login</button>
            </div>
        </div>
    </header>

    <main>
        <div class="register-form__content">
            <div class="register-form__heading">
                <h2>Register</h2>
            </div>
            <form class="form" action="/register" method="post" >
                @csrf
                <div class="form__inner">
                    <div class="form__group">
                        <div class="form__group-title">
                            <p class="form__label--item">お名前</p>
                        </div>
                        <div class="form__group-content">
                            <div class="form__group-content-name">
                                <div class="form__input--text">
                                    <input type="text" name="name" placeholder="例: 山田 太郎" value=" {{ old('name') }} " />
                                </div>
                                <div class="form__error">
                                    @error('name')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form__group">
                        <div class="form__group-title">
                            <p class="form__label--item">メールアドレス</p>
                        </div>
                        <div class="form__group-content">
                            <div class="form__input--text">
                                <input type="email" name="email" placeholder="例: test@example.com" value="{{ old('email') }}" />
                            </div>
                            <div class="form__error">
                                @error('email')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form__group">
                        <div class="form__group-title">
                            <p class="form__label--item">パスワード</p>
                        </div>
                        <div class="form__group-content">
                            <div class="form__input--text">
                                <input type="password" name="password" placeholder="例: coachtech1106" />
                                <input type="hidden" name="password_confirmation">
                            </div>
                            <div class="form__error">
                                @error('password')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form__button">
                    <button class="form__button-submit" type="submit">登録</button>
                </div>

            </form>
        </div>
    </main>
</body>

</html>