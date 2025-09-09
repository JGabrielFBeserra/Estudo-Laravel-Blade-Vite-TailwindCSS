@extends('layouts.app')
@section('title', 'GetUsers')

@section('body')
    <section class="bg-gray-50 min-h-screen px-4 py-10">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-3xl font-extrabold text-purple-600 mb-6 text-center">
                Lista de Usuários
            </h2>

          
            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach($users as $user)
                    <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                        <a href="/usuarios/{{ $user->id }}">
                            <h3 class="text-lg font-semibold text-gray-800">
                                {{ $user->name }}
                            </h3>
                            <p class="text-sm text-gray-600 mb-4">
                                {{ $user->email }}
                        </p>

                        @if($user->name == "Dr. Olga Medina Rosa Sobrinho")
   
                            <span class="inline-block bg-purple-100 text-black-700 px-3 py-1 text-xs font-semibold ">
                                Usuário VIP
                            </span>
                        @endif
                        @if($user->name == "Ítalo Padrão Ferreira")
                            <span class="inline-block bg-green-100 text-black-700 px-3 py-1 text-xs font-semibold">
                                Usuário Especial
                            </span>
                        @endif
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection


