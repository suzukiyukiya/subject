@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')

<h3>必修科目</h3>
   <p>@if($eigoes_unit>=8)
    @else($eigoes_unit<8)
    英語群からあと{{8 - $eigoes_unit}}単位必要です。
    @endif
    </p>
    <p>
    @if($careers_unit>=2)
    @else($careers_unit<2)
    キャリア・デザイン群からあと{{2 - $careers_unit}}単位必要です。
    @endif
    </p>
    <p>
    @if($ningengakus_unit>=2)
    @else($ningengakus_unit<2)
    人間学総論の2単位が必要です。
    @endif
    </p>
    <p>
    @if($sinrigakus_unit>=2)
    @else($sinrigakus_unit<2)
    心理学概論の2単位が必要です。
    @endif
    </p>
    <p>
    @if($syakaigakus_unit>=2)
    @else($syakaigakus_unit<2)
    社会学概論の2単位が必要です。
    @endif
    </p>
    <p>
    @if($kokusaigakus_unit>=2)
    @else($kokusaigakus_unit<2)
    国際コミュニケーション概論の2単位が必要です。
    @endif
    </p>
    <p>
    @if($bunkens_unit>=2)
    @else($bunkens_unit<2)
    文献講読Aの2単位が必要です。
    @endif
    </p>
    <p>
    @if($zemis_unit>=8)
    @else($zemis_unit<8)
    ゼミナール群からあと{{8 - $zemis_unit}}単位必要です。
    @endif
    </p>
    
    
<h3>選択必修</h3>
    <p>
    @if($bunkas_unit>=2)
    @else($bunkas_unit<2)
    人間と文化群からあと{{2 - $bunkas_unit}}単位必要です。
    @endif
    </p>
    <p>
    @if($syakais_unit>=2)
    @else($syakais_unit<2)
    人間と社会群からあと{{2 - $syakais_unit}}単位必要です。
    @endif
    </p>
    <p>
    @if($sizens_unit>=2)
    @else($sizens_unit<2)
    自然と環境群からあと{{2 - $sizens_unit}}単位必要です。
    @endif
    </p>
    <p>
    @if($jouhous_unit>=2)
    @else($jouhous_unit<2)
    情報技術群からあと{{2 - $jouhous_unit}}単位必要です。
    @endif
    </p>
    <p>
    @if($taikens_unit>=4)
    @else($taikens_unit<4)
    体験科目群からあと{{4 - $taikens_unit}}単位必要です。
    @endif
    </p>
    {{$bunkas_unit}}
    {{$syakais_unit}}
    {{$sizens_unit}}
    {{$jouhous_unit}}
    {{$kyouyous_unit}}
<h3>選択科目</h3>
    <p>
    @if($bunkas_unit===0 && $syakais_unit===0 && $sizens_unit===0 && $jouhous_unit===0)
    必修・選択必修科目を除く教養教育部門からあと{{12-$kyouyous_unit}}単位必要です。
    @endif
    
     @if($bunkas_unit===0 && $syakais_unit>=2 && $sizens_unit===0 && $jouhous_unit===0)
    必修・選択必修科目を除く教養教育部門からあと{{12-$kyouyous_unit+2}}単位必要です。
    @endif
    
     @if($bunkas_unit===0 && $syakais_unit===0 && $sizens_unit>=2 && $jouhous_unit===0)
    必修・選択必修科目を除く教養教育部門からあと{{12-$kyouyous_unit+2}}単位必要です。
    @endif
    
     @if($bunkas_unit===0 && $syakais_unit===0 && $sizens_unit===0 && $jouhous_unit>=2)
    必修・選択必修科目を除く教養教育部門からあと{{12-$kyouyous_unit+2}}単位必要です。
    @endif
    
     @if($bunkas_unit===0 && $syakais_unit===0 && $sizens_unit>=2 && $jouhous_unit>=2)
    必修・選択必修科目を除く教養教育部門からあと{{12-$kyouyous_unit+4}}単位必要です。
    @endif
    
     @if($bunkas_unit===0 && $syakais_unit>=2 && $sizens_unit>=2 && $jouhous_unit===0)
    必修・選択必修科目を除く教養教育部門からあと{{12-$kyouyous_unit+4}}単位必要です。
    @endif
    
     @if($bunkas_unit===0 && $syakais_unit>=2 && $sizens_unit===0 && $jouhous_unit>=2)
    必修・選択必修科目を除く教養教育部門からあと{{12-$kyouyous_unit+4}}単位必要です。
    @endif
    
     @if($bunkas_unit===0 && $syakais_unit>=2 && $sizens_unit>=2 && $jouhous_unit>=2)
    必修・選択必修科目を除く教養教育部門からあと{{12-$kyouyous_unit+6}}単位必要です。
    @endif
    
      @if($bunkas_unit>=2 && $syakais_unit===0 && $sizens_unit===0 && $jouhous_unit===0)
    必修・選択必修科目を除く教養教育部門からあと{{12-$kyouyous_unit+2}}単位必要です。
    @endif
    
    @if($bunkas_unit>=2 && $syakais_unit===0 && $sizens_unit===0 && $jouhous_unit>=20)
    必修・選択必修科目を除く教養教育部門からあと{{12-$kyouyous_unit+4}}単位必要です。
    @endif
    
    @if($bunkas_unit>=2 && $syakais_unit===0 && $sizens_unit>=2 && $jouhous_unit===0)
    必修・選択必修科目を除く教養教育部門からあと{{12-$kyouyous_unit+4}}単位必要です。
    @endif
    
     @if($bunkas_unit>=2 && $syakais_unit===0 && $sizens_unit>=2 && $jouhous_unit>=2)
    必修・選択必修科目を除く教養教育部門からあと{{12-$kyouyous_unit+6}}単位必要です。
    @endif
    
     @if($bunkas_unit>=2 && $syakais_unit>=2 && $sizens_unit===0 && $jouhous_unit===0)
    必修・選択必修科目を除く教養教育部門からあと{{12-$kyouyous_unit+4}}単位必要です。
    @endif
    
     @if($bunkas_unit>=2 && $syakais_unit>=2 && $sizens_unit===0 && $jouhous_unit>=2)
    必修・選択必修科目を除く教養教育部門からあと{{12-$kyouyous_unit+6}}単位必要です。
    @endif
    
     @if($bunkas_unit>=2 && $syakais_unit>=2 && $sizens_unit>=2 && $jouhous_unit===0)
    必修・選択必修科目を除く教養教育部門からあと{{12-$kyouyous_unit+6}}単位必要です。
    @endif
    
     @if($bunkas_unit>=2 && $syakais_unit>=2 && $sizens_unit>=2 && $jouhous_unit>=2)
    必修・選択必修科目を除く教養教育部門からあと{{12-$kyouyous_unit+8}}単位必要です。
    @endif
    </p>
    
    {{$taikens_unit}}
    {{$senmons_unit}}
    <p>
    @if($taikens_unit===0)
    必修・選択必修科目を除く専門教育部門からあと{{72-$senmons_unit}}単位必要です。
    @endif
    @if($taikens_unit===2)
    必修・選択必修科目を除く専門教育部門からあと{{72-$senmons_unit+2}}単位必要です。
    @endif
    @if($taikens_unit>=4)
    必修・選択必修科目を除く専門教育部門からあと{{72-$senmons_unit+4}}単位必要です。
    @endif
    </p>
    
@endsection