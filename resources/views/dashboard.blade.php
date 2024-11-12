@foreach($userslist as $user)

<h1>  <?= $user['name']  ?> </h1>
<h2>  {{$user['age']}}</h2>
<br>
@if($user['age']<18 )
<p>user can't drive </p>
@endif
<hr>
@endforeach