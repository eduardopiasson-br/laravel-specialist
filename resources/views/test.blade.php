<x-app-layout>
    <x-slot name="header">
        <h3>Header</h3>
    </x-slot>
    <ol>
        <li>Nome: {{ auth()->user()->name }} </li>
        <li>Document: {{ auth()->user()->client->document }} </li>
        <li>Status da Assinatura: {{ auth()->user()->client->signatures->first()->status->name }} </li>
    </ol>
</x-app-layout>