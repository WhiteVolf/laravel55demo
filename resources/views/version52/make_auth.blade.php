@extends('layouts.app')

@section('content')
<ul>
<li>welcome.blade.php — публичная страница приветствия</li>
<li>home.blade.php — информационная панель для вошедших пользователей</li>
<li>auth/login.blade.php — страница входа</li>
<li>auth/register.blade.php — страница регистрации/подписки</li>
<li>auth/passwords/email.blade.php — страница подтверждения сброса пароля</li>
<li>auth/passwords/reset.blade.php — страница для сброса пароля</li>
<li>auth/emails/password.blade.php — email для сброса пароля</li>
</ul>
@endsection
