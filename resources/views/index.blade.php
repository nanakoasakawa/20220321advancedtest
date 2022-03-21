<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>お問い合わせ</title>
    <link rel="stylesheet" href="/css/reset.css" />
    <link rel="stylesheet" href="/css/style.css" />
</head>
<body>

    <h1 class="titel1">お問い合わせ</h1>
    <div class="container">
        {!! Form::open(['route' => 'confirm', 'method' => 'POST']) !!}
            <div class="form1">
                <p class="form1_label">お名前 <span class="caution">※</span></p>
                <div class="form1_name">
                    {{ Form::text('fullname', null, ['class' => 'form-control']) }}
                </div>
            </div>
            @if ($errors->has('fullname'))
                <p class="alert">{{ $errors->first('fullname') }}</p>
            @endif

             <div class="form2">
                <p class="form2_lavel">性別<span class="caution">※</span></p>
                <div class="form2_gender">
                    <label>{{ Form::radio('gender', "男性") }}男性</label>
                    <label>{{ Form::radio('gender', "女性") }}女性</label>
                </div>
            </div>
            @if ($errors->has('gender'))
                <p class="alert">{{ $errors->first('gender') }}</p>
            @endif

            <div class="form3">
                <p class="form3_lavel">メールアドレス<span class="caution">※</span></p>
                <div class="form3_mail">
                    {{ Form::text('email', null, ['class' => 'form-control']) }}
                </div>
            </div>
            @if ($errors->has('email'))
                <p class="alert">{{ $errors->first('email') }}</p>
            @endif

            <div class="form4">
                <p class="form4_label">郵便番号<span class="caution">※</span></p>
                <div class="form4_postcode">
                    {{ Form::text('postcode', null, ['class' => 'form-control']) }}
                </div>
            </div>
            @if ($errors->has('postcode'))
                <p class="alert">{{ $errors->first('postcode') }}</p>
            @endif

            <div class="form5">
                <p class="form5_label">住所<span class="caution">※</span></p>
                <div class="form5_address">
                    {{ Form::text('address', null, ['class' => 'form-control']) }}
                </div>
            </div>
            @if ($errors->has('address'))
                <p class="alert">{{ $errors->first('address') }}</p>
            @endif

            <div class="form6">
                <p class="form6_label">建物名</p>
                <div class="form6_building_name">
                    {{ Form::text('building_name', null, ['class' => 'form-control']) }}
                </div>
            </div>
            @if ($errors->has('building_name'))
                <p class="alert">{{ $errors->first('building_name') }}</p>
            @endif

            <div class="form7">
                <p class="form7_label">ご意見<span class="caution">※</span></p>
                <div class="form7_opinion">
                    {{ Form::textarea('opinion', null, ['class' => 'form-control']) }}
                </div>
            </div>
            @if ($errors->has('opinion'))
                <p class="alert">{{ $errors->first('opinion') }}</p>
            @endif
            
            <div class="text-center">
                {{ Form::submit('確認', ['class' => 'btn btn-primary']) }}
            </div>
        {!! Form::close() !!}
    </div>
</body>
</html>