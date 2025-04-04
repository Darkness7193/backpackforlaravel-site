@extends(backpack_view('blank'))

@section('content')

<section class="header-operation container-fluid animated fadeIn d-flex mb-2 align-items-baseline d-print-none" bp-section="page-header">
    <h1 class="text-capitalize mb-0" bp-section="page-heading">{{__('Settings')}}</h1>
    <p class="ms-2 ml-2 mb-0" bp-section="page-subheading">{{__('Page for') . ' ' . __('Settings')}} </p>
</section>

<section class="content container-fluid animated fadeIn" bp-section="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form class="settings-form" name="settings-form" method="post" action="{{ route('page.settings.save') }}">
                        @csrf
                        Принудительная авторизация
                        <input type="hidden" name="forced-authorization" value="off"> <!-- unchecked checkboxes aren't sent by default -->
                        <input type="checkbox" name="forced-authorization" {{ $site_settings['forced-authorization'] === 'on' ? 'checked' : 'unchecked' }}>
                    </form>
                </div>
            </div>

            <x-primary-button
                name="save_settings"
                class="save-btn"
                type="button"
                onclick="document.getElementsByClassName('settings-form')[0].submit()"
                > Сохранить
            </x-primary-button>
        </div>
    </div>
@endsection
