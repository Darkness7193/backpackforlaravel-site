<!DOCTYPE html><html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Главная страница </title>
</head>

<!-- imports: -->
<link rel="stylesheet" href="{{ asset('css/global.css') }}">
<link rel="stylesheet" href="{{ asset('css/accordion.css') }}">
<script src="{{ asset('js/accordion.js') }}" type="module"></script>




<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <div class="accordion" id="accordion-1" style="margin: 1rem auto 2rem;">
                        @if(!$accordion_texts->isEmpty())
                            @foreach ($accordion_texts as $accordion_text)
                                <div class="accordion__item">
                                    <div class="accordion__header">
                                        {{ $accordion_text->title }}
                                    </div>
                                    <div class="accordion__body">
                                        {!! $accordion_text->text !!}
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="horizontal-center">
                                <div class="accordion-fail-message">
                                    В административной панели нет соответствующих записей
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
