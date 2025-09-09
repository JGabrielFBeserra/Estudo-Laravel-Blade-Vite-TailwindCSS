@extends('layouts.app')
@section('title', 'Contato')



@section('body')
    <section class="bg-gray-50 min-h-screen flex items-center justify-center px-4 py-10">
        <div class="max-w-lg w-full bg-white p-8 rounded-2xl shadow-lg">
            <h2 class="text-3xl font-extrabold text-purple-600 mb-6 text-center">
                Entre em Contato
            </h2>

            <form action="/contato" method="POST" class="space-y-6">
                @csrf
                <!-- Nome -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nome</label>
                    <input type="text" id="name" name="name" 
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:outline-none" 
                        placeholder="Seu nome" required>
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">E-mail</label>
                    <input type="email" id="email" name="email" 
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:outline-none" 
                        placeholder="seuemail@exemplo.com" required>
                </div>

                <!-- Mensagem -->
                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Mensagem</label>
                    <textarea id="message" name="message" rows="4" 
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:outline-none" 
                        placeholder="Digite sua mensagem..." required></textarea>
                </div>

                <!-- Botão -->
                <div class="text-center">
                    <button type="submit" 
                        class="bg-purple-600 text-white px-6 py-2 rounded-lg shadow hover:bg-purple-700 transition">
                        Enviar
                    </button>
                </div>
            </form>
        </div>
    </section>
@endsection
