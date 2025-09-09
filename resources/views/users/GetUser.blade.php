@extends('layouts.app')
@section('title', 'GetUser')

@section('body')
    <section class="bg-gray-50 min-h-screen flex items-center justify-center px-0">
        <main class="text-center max-w-2xl p-10 bg-white rounded-2xl shadow-lg">
            
           
            <h5 class="text-1xl font-semibold text-gray-800 mb-1">
                Usuário: <span class="text-purple-600">{{$user->name}}</span>
            </h5>
            <p class="text-sm text-gray-600 mb-8">
                E-mail: <span class="font-medium">{{$user->email}}</span>
            </p>

            
            <h3 class="text-2xl font-extrabold text-purple-600 mb-4">
                Primeira Página com Tailwind CSS | Laravel
            </h3>
            <p class="text-lg text-gray-600 mb-8">
                Testando a integração do Tailwind CSS com Laravel Blade.    
            </p>
            
            <a href="javascript:history.back();"
                class="inline-block bg-purple-600 text-white px-8 py-3 rounded-lg shadow-lg hover:bg-purple-700 transition">
                Voltar
            </a>
        </main>
    </section>a
@endsection

