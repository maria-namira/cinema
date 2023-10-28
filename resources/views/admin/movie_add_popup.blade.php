<div class="popup" id="popup-add_movie">
    <div class="popup__container">
        <div class="popup__content">
            <div class="popup__header">
                <h2 class="popup__title">
                    Добавление фильма
                    <a class="popup__dismiss" href="#"><img src="{{ asset('admin/images/close.png') }}" alt="Закрыть"></a>
                </h2>

            </div>
            <div class="popup__wrapper">
                <form action="{{ route('add_movie') }}" method="post" accept-charset="utf-8">
                    @csrf
                    <label class="conf-step__label conf-step__label-fullsize" for="movie-name">
                        Название фильма
                        <input class="conf-step__input" type="text" placeholder="Например, &laquo;Гражданин Кейн&raquo;" name="movie-name" required>
                    </label>
                    <label class="conf-step__label conf-step__label-fullsize" for="movie-duration">
                        Название фильма
                        <input class="conf-step__input" type="text" placeholder="110" name="movie-duration" required>
                    </label>
                    <div class="conf-step__buttons text-center">
                        <input type="submit" value="Добавить фильм" class="conf-step__button conf-step__button-accent">
                        <button class="conf-step__button conf-step__button-regular">Отменить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
