@extends('layouts.app')

@section('content')


<div class="container py-5">
    <h1>Mettiti in contatto con noi</h1>
    <p class="lead">Completa il form per contattarci</p>
    <form action="">

        <div class="mb-3">
            <label for="name" class="form-label">Nome:</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Mario" aria-describedby="nameHelper">
            <small id="nameHelper" class="text-muted">Inserisci il tuo nome</small>
        </div>

        <div class="mb-3">
            <label for="lastname" class="form-label">Cognome:</label>
            <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Rossi" aria-describedby="nameHelper">
            <small id="lastnameHelper" class="text-muted">Inserisci il tuo cognome</small>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="text" name="email" id="email" class="form-control" placeholder="email_example@gmail.com" aria-describedby="emailHelper">
            <small id="emailHelper" class="text-muted">Inserisci la tua email</small>
        </div>

        <div class="mb-3">
            <label for="message" class="form-label">Scrivici:</label>
            <textarea class="form-control" placeholder="Qui puoi scrivere il tuo testo..." name="message" id="message" rows="8"></textarea>
        </div>

        <button type="submit" class="btn btn-primary btn-block">Invia</button>

    </form>
</div>


@endsection
