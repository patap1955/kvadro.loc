<footer id="footer">
    <div class="containers footer">
        <div class="footer__top">
            <div class="footer__logo">
                <a href="{{ route("index") }}">
                    <img src="{{ asset("assets/img/logo.svg") }}">
                </a>
            </div>
            <div class="footer__top-right">
                <nav class="footer__nav">
                    <ul class="nav-list nav-list-footer">
                        <li class="nav-item"><a class="nav-link" href="#services">Услуги</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">О компании</a></li>
                        <li class="nav-item"><a class="nav-link" href="#project">Наши проекты</a></li>
                        <li class="nav-item"><a class="nav-link" href="#news">Новости</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contacts">Контакты</a></li>
                    </ul>
                </nav>
                <div class="footer__politics">
                    <a class="footer__politics-link" href="{{ route('politics') }}">Политика конфиденциальности</a>
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <p class="footer__bottom-text">© <?=date("Y")?>, Все права защищены</p>
            <p class="footer__bottom-text">Сайт разработан компанией <a class="footer__bottom-text-link" href="https://alex-media.ru">ALEX–MEDIA</a></p>
        </div>
    </div>
</footer>
<div class="footer__fon">
    <img src="{{ asset("assets/img/2.svg") }}">
</div>
