@extends('layouts.app')

@section('content')
    <div class="sm:grid sm:grid-cols-3 sm:gap-10">
        <aside class="mt-4">
            {{-- ユーザー情報 --}}
            @include('users.card')
        </aside>
        <div class="sm:col-span-2 mt-4">
            {{-- タブ --}}  
            @include('users.navtabs')
            {{-- 投稿フォーム --}}
            <!--resources/views/microposts/form.blade.php-->
            @include('microposts.form')
            {{-- 投稿一覧 --}}
            <!--resources/views/microposts/microposts.blade.php-->
            @include('microposts.microposts')
        </div>
    </div>
@endsection