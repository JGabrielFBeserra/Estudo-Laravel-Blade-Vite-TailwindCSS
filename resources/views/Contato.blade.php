@extends('layouts.app')
@section('title', 'Contato')



@section('body')
    <div class="flex justify-center items-center relative">
        <img src="{{ Vite::asset('resources/images/download.png') }}" alt="Imagem de Contato" class="w-full">
        <div class="absolute left-10 transform   bg-white bg-opacity-75 p-6 rounded-lg shadow-lg max-w-md ">
        <div class="text-center justify-center flex flex-col items-center">   
            <img src="https://media.licdn.com/dms/image/v2/D4D03AQEH9Hz-ozoHUw/profile-displayphoto-shrink_400_400/B4DZXE9VFCHIAk-/0/1742766167040?e=1760572800&v=beta&t=nCbs8fPJB3wHUObiFsv8pB5lvzRINvvM8iyYyh6DoEs" alt="Descrição da imagem" class="w-48 h-48 rounded-full">      
            <h1 class="text-2xl">João Gabriel</h1>
            <p>Gosto do novo, amo programar e <br> sou movido por boas propostas.</p>
        </div>
            
        </div>
    </div>

@endsection
