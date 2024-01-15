<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/register">
                FashionablyLate
            </a>
            <form action="/logout" method="post">
                @csrf
                <div class="logout__button">
                    <button>logout</button>
                </div>
            </form>
        </div>
    </header>

    <main>
        <div class="admin-header">
            <div class="admin-header__inner">
                <h2>Admin</h2>
            </div>
        </div>

        <form class="search-form" action="/index/search" method="get">
            @csrf
            <div class="search-form__inner">
                <div class="search-form__item">
                    <div class="search-form__item-wrap">
                        <input class="search-form__item-input" type="text" name="keyword" value="{{ old('keyword') }}" placeholder="名前やメールアドレスを入力してください" />
                        <button class="search-form__item-input-button" type="submit">検索</button>
                    </div>
                    <select class="search-form__item-gender" name="gender">
                        <option value="0">全て</option>
                        <option value="1">男性</option>
                        <option value="2">女性</option>
                        <option value="3">その他</option>
                    </select>
                    <select class="search-form__item-category" name="category_id">
                        <option value="">お問い合わせの種類</option>
                        @foreach ($categories as $category)
                        <option value="{{ $category['id'] }}">{{ $category['content'] }}</option>
                        @endforeach
                    </select>
                    <label class="search-form__item-date">
                        <input type="date" min="1980-04-01" max="2050-04-01" value="{{ old('created_at') }}" name=" $contacts[created_at]"></input>
                    </label>
                </div>


                <div class="middle__content">
                    <div class="export__button">
                        <button class="export__button-submit" type="submit">エクスポート</button>
                    </div>
                    <div class="paginate">
                        {{ $contacts->links('vendor.pagination.bootstrap-4') }}
                    </div>
                </div>

                <div class="contact-table">
                    <table class="contact-table__inner">
                        <tr class="contact-table__row">
                            <th class="contact-table__header">
                                <span class="contact-table__header-span">お名前</span>
                                <span class="contact-table__header-span">性別</span>
                                <span class="contact-table__header-span">メールアドレス</span>
                                <span class="contact-table__header-span">お問い合わせの種類</span>
                                <span class="contact-table__header-span"> </span>
                            </th>
                        </tr>
                        @foreach ($contacts as $contact)
                        <!-- <form class="contact-form" action="" method="post"> -->
                        <!-- @method('PATCH') @csrf -->
                        <tr class="contact-table__row">
                            <td class="contact-table__item">
                                <div class="contact-form__item">
                                    <p class="contact-form__item-p contact-form__item-name">{{ $contact->getDetail() }}</p>
                                </div>
                                <div class="contact-form__item">
                                    <p class="contact-form__item-p contact-form__item-gender">{{ $contact->custom_column }}</p>
                                </div>
                                <div class="contact-form__item">
                                    <p class="contact-form__item-p contact-form__item-email">{{ $contact['email'] }}</p>
                                </div>
                                <div class="contact-form__item">
                                    <p class="contact-form__item-p contact-form__item-content">{{ $contact->category['content'] }}</p>
                                </div>
                                <div class="contact-form__button">
                                    <button class="contact-form__button-submit" type="submit">
                                        詳細
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <!-- </form> -->
                        @endforeach
                    </table>
                </div>
                <div class="contact-form__button">
                    <button class="contact-form__button-reset" type="reset">
                        リセット
                    </button>
                </div>
            </div>
        </form>
    </main>


</body>

</html>