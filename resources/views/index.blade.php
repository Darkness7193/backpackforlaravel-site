<!DOCTYPE html><html lang="ru">

<!-- imports: -->
<link rel="stylesheet" href="{{ asset('css/accordion.css') }}">
<script src="{{ asset('js/accordion.js') }}" type="module"></script>




<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>
<div class="accordion" id="accordion-1" style="max-width: 30rem; margin: 1rem auto 2rem;">
    @if(!empty($accordion_texts))
        @foreach ($accordion_texts as $accordion_text)
            <div class="accordion__item">
                <div class="accordion__header">
                    {{ $accordion_text->title }}
                </div>
                <div class="accordion__body">
                    {{ $accordion_text->text }}
                </div>
            </div>
      @endforeach
    @else
        Нет записей в админке
    @endif
</div>
</body>
</html>


