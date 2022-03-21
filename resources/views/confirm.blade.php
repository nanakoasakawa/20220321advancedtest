<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>お問い合わせ - 確認</title>
    <link rel="stylesheet" href="/css/reset.css" />
    <link rel="stylesheet" href="/css/style.css" />
</head>
<body>
    <h1 class="title2">内容確認</h1>
    <div class="container">
        {!! Form::open(['route' => 'process', 'method' => 'POST']) !!}
            {{ csrf_field() }}
            <div class="form1">
                <p class="form1_label">お名前</p>
                <div class="form1_name">
                    {{ $inputs['fullname'] }}
                </div>
            </div>
            <input type="hidden" name="fullname" value="{{ $inputs['fullname'] }}">

            <div class="form2">
                <p class="form2_label">性別</p>
                <div class="form2_gender">
                    {{ $inputs['gender'] }}
                </div>
            </div>
            <input type="hidden" name="gender" value="{{ $inputs['gender'] }}">

            <div class="form3">
                <p class="form3_label">メールアドレス</p>
                <div class="form3_email">
                    {{ $inputs['email'] }}
                </div>
            </div>
            <input type="hidden" name="email" value="{{ $inputs['email'] }}">

            <div class="form4">
                <p class="form4_label">郵便番号</p>
                <div class="form4_postcode">
                    {{ $inputs['postcode'] }}
                </div>
            </div>
            <input type="hidden" name="postcode" value="{{ $inputs['postcode'] }}">

            <div class="form5">
                <p class="form5_label">住所</p>
                <div class="form5_address">
                    {{ $inputs['address'] }}
                </div>
            </div>
            <input type="hidden" name="address" value="{{ $inputs['address'] }}">

            <div class="form6">
                <p class="form6_label">建物名</p>
                <div class="form6_building_name">
                    {{ $inputs['building_name'] }}
                </div>
            </div>
            <input type="hidden" name="building_name" value="{{ $inputs['building_name'] }}">

            <div class="form7">
                <p class="form7_label">ご意見</p>
                <div class="form7_opinion">
                    {{ $inputs['opinion'] }}
                </div>
            </div>
            <input type="hidden" name="opinion" value="{{ $inputs['opinion'] }}">
            
            <div class="text-center">
                <button name="action" type="submit" value="submit" class="btn_post">送信</button>
                <button name="action" type="submit" value="return" class="btn_re">修正する</button>
            </div>
        {!! Form::close() !!}
    </div>

</html>