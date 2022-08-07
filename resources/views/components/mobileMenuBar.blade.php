<div class="mb_menu">
    <div class="mb_bg" style="display: none"></div>
    <div class="mb_menu_block" style="display: none">
        <button class="btn exitBtn">
            <img src="{{asset('images/exitBtn.svg')}}" alt="">
        </button>
        <div class="mb_link">
            <a href="#" class="mb_link_item">@lang('site.Басты бет')</a>
            <div class="accordion">
                <div class="accordion-header">
                    <a type="button" class="mb_link_item" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">@lang('site.Ауыл туралы')</a>
                </div>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <a class="mb_link_item" href="#">@lang('site.Әкімшілік')</a>
                        <a class="mb_link_item" href="#">@lang('site.Ардагерлер кеңесі')</a>
                        <a class="mb_link_item" href="#">@lang('site.Қоғамдық мүшелері')</a>
                        <a class="mb_link_item" href="#">@lang('site.Аналар кеңесі')</a>
                        <a class="mb_link_item" href="#">@lang('site.Медиатор')</a>
                        <a class="mb_link_item" href="#">@lang('site.Қоғамдық қор мүшелері')</a>
                    </div>
                </div>
            </div>
            <a href="#" class="mb_link_item">@lang('site.Жаңалықтар')</a>
            <a href="#" class="mb_link_item">@lang('site.Кітапхана')</a>
            <a href="#" class="mb_link_item">@lang('site.Бейнероликтер')</a>
            <a href="#" class="mb_link_item">@lang('site.Форум')</a>
            <a href="#" class="mb_link_item">@lang('site.Галерея')</a>
            @if(LaravelLocalization::getCurrentLocale() == 'ru')
            <a href="{{ LaravelLocalization::getLocalizedURL('kk') }}" class="mb_link_item translater"><span class="disabled">Қазақша </span> Русский</a>
            @else
            <a href="{{ LaravelLocalization::getLocalizedURL('ru') }}" class="mb_link_item translater">Қазақша <span class="disabled">Русский</span></a>
            @endif
            <a href="#" class="mb_link_item translater a-c">
                <img src="{{asset('images/kiru.svg')}}" alt="">
                @lang('site.Кіру')
            </a>
        </div>
    </div>
</div>
