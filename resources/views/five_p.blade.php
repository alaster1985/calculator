<div id="5" data-hash="five">
        <section>
            <div id="log" class="bg_sections1_page2 fartuck_page d-flex b center-block">
                <div id="log" class="bg-1_page_showers fartuck_page1">
                    <!-- <a href="#">Калькулятор стоимости простых изделий</a> -->
                </div>
                <div class="bg-2_page_showers fartuck_page2">
                    <h2>кухонные фартуки из стекла на заказ</h2>
                    <span>Красиво</span>
                    <img src="images/squad_smaler.png" alt="">
                    <span>Практично</span>
                    <img src="images/squad_smaler.png" alt="">
                    <span>Надежно</span>
                    <h3>индивидуальное изготовление</h3>
                    <a href="#win2">вызвать замерщика</a>
                </div>
                <div class="bg-3_pages_howers fartuck_page3">
                    <!-- <a href="#">Бесплатная консультация по телефону
</a> -->
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="stairs_and_flooring">
                            <h2>галерея работ</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="stairs_and_flooring_buttons stairs_and_flooring_buttons2 d-flex">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#page5_home" role="tab"
                                       aria-controls="home">Скинали с Фотопечатью</a>
                                    <p class="stairs_and_flooring_text">От 26100 руб. <br>
                                        6-8 дней</p>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#page5_profile" role="tab"
                                       aria-controls="profile">Одноцветные фартуки</a>
                                    <p class="stairs_and_flooring_text">От 26100 руб. <br>
                                        6-8 дней</p>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#page5_messages" role="tab"
                                       aria-controls="messages">Скинали с подсветкой</a>
                                    <p class="stairs_and_flooring_text">От 26100 руб. <br>
                                        6-8 дней</p>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-content">
                    <div class="tab-pane active" id="page5_home" role="tabpanel">
                        @foreach($photo as $value)
                            @if($value->type === 'скинали с фотопечатью')
                                <a data-fancybox="gallery_Fartucks" href="{{$value->photo}}">
                                    <div class="img_items_stairs">
                                        <img src="{{$value->small_photo}}" alt="1">
                                        <p></p>
                                    </div>
                                </a>
                            @endif
                        @endforeach
                    </div>
                    <div class="tab-pane" id="page5_profile" role="tabpanel">
                        @foreach($photo as $value)
                            @if($value->type === 'одноцветные фартуки')
                                <a data-fancybox="gallery_Fartucks1" href="{{$value->photo}}">
                                    <div class="img_items_stairs">
                                        <img src="{{$value->small_photo}}" alt="1">
                                        <p></p>
                                    </div>
                                </a>
                            @endif
                        @endforeach
                    </div>
                    <div class="tab-pane" id="page5_messages" role="tabpanel">
                        @foreach($photo as $value)
                            @if($value->type === 'скинали с подсветкой')
                                <a data-fancybox="gallery_Fartucks2" href="{{$value->photo}}">
                                    <div class="img_items_stairs">
                                        <img src="{{$value->small_photo}}" alt="1">
                                        <p></p>
                                    </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        @if($video[9]->show  === 1 || $video[10]->show  === 1)
            <section id="glass_reliability">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="glass_reliability">
                                <h2 class="">наше видео</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="video_our d-flex">
                                @if($video[9]->show  === 1)
                                    <iframe width="560" height="315"
                                            src={{$video[9]->video}}
                                                    frameborder="0"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                @endif
                                @if($video[10]->show  === 1)
                                    <iframe width="560" height="315"
                                            src={{$video[10]->video}}
                                                    frameborder="0"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="glass_door">
                            <h2>Премиальная УФ-печать, без обмана и пленок</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="glass_door_items Glasses_pages_doors d-flex">
                        <!-- <div class="glass_door_items_new_img d-flex"> -->
                           <img src="images/five_page_imgBlock/1/1.jpg" alt="">
                            
                           <!-- </div> -->
                            <div class="glass_door_item">
                                <p> Наносим специализированные полимерные краски, стойкие
                                     к нахождению в агрессивных средах и механическим 
                                     повреждениям. В отличии от многих производителей 
                                     используем Японские полимеры и наносим толстый
                                     слой белил, вместо дешевых пленок.</p>
                                <ul>
                                    <li>Очень "сочный" и насыщенные цвета, с гарантией долговечности.</li>
                                    <li>Не смываются, не боятся мороза, влаги и перепадов температур.
                                    </li>
                                </ul>
                                <ul>
                                    <li>Не желтеют и не выцветают, как дешевые краски и пленки
                                    </li>
                                    <li>Бесплатно консультируем, помогаем с выбором картинки.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <a class="glass_door_item_buttons aprons_items_button" href="#win1">бесплатная консультация</a>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="glass_door">
                            <h2>Премиальное исполнение</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="glass_door_items_down  d-flex">
                            <div class="glass_door_item_down Glases_page_door">
                                <p> В работе используем самые лучшие материалы и краски.
                                     Используем самые дорогие и наиболее качественные виды
                                      сырья, при этом сохраняя адекватные цены и сроки поставки.
                                       Даем полные консультации, рекомендации и сопровождаем заказ
                                     от замера и подбора картинки до установки.</p>
                                <ul>
                                    <li>Четко сформулированые сроки и задачи по договору.
                                    </li>
                                    <li>Опытные замерщики, способные дать консультацию.
                                    </li>
                                </ul>
                                <ul>
                                    <li>Сопровождение на всех этапах заказа
                                    </li>
                                    <li>Зачастую, молча исправляем не наши косяки =)</li>
                                </ul>
                            </div>
                            <div class="Glasses_pages_doors"><img src="images/five_page_imgBlock/2/1.jpg" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="call_back">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="type_fastener_comparison">
                            <h2>Сравнение видов стекла </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 ">
                        <div class="shower_type_items comparison_glass_items d-flex">
                            <img class="glasses_img_fastener1" src="images/glaas_type1.png" alt="">
                            <div class="shower_type_item-left fastener_shower_glass comparison_glass">
                                <p>Прозрачное (М1 или бц)</p>
                                <ul>
                                    <li>низкая стоимость</li>
                                    <li>ускоренные сроки поставки</li>
                                    <li>идеально для темных тонов (не зеленит)</li>
                                    <li class="dark-mines">сильно зеленит на светлых и белых тонах</li>
                                    <li class="dark-mines">менее "сочные" краски</li>
                                    <li>больше отсвечивает солнечные лучи</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <div class="shower_type_items comparison_glass_items2 d-flex">

                            <div class="shower_type_item-right fastener_shower_glass2 comparison_glass2">
                                <p>Осветленное (Crystal или Optiwhite)</p>
                                <ul>
                                    <li>идеальная цветопередача</li>
                                    <li>нет сторонних оттенков с лица</li>
                                    <li>делает изображение "сочнее" и выраженнее</li>
                                    <li class="pluss">можно спокойно наносить любой цвет или оттенок</li>
                                    <li class="pluss">меньше зеркалит и бликует, нежели обычное</li>
                                    <li>цена стекла ощутимо выше</li>
                                </ul>
                            </div>
                            <img class="glasses_img_fastener2" src="images/glass3.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="fastener">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="type_fastener">
                            <h2>типы крепежа</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="shower_type_items d-flex">
                            <div class="shower_type_item-left fastener_shower_glass">
                                <p>СПЕЦИАЛЬНЫЙ КЛЕЙ</p>
                                <ul>
                                    <li>Выдерживает нагрузку более 220 кг на м2</li>
                                    <li>Эстетично (нет сторонних элементов)</li>
                                    <li>Безопасно в случае разбития</li>
                                    <li>Влагостойкость (не разрушается от влаги)</li>
                                    <li>Идеально для крепления в нишу</li>
                                    <li class="dark-mines">С монтажом не все так просто как кажется</li>
                                    <li>Тяжело демонтировать</li>
                                    {{--<li>Простой и понятный монтаж</li>--}}
                                    {{--<li>Простое согласование схемы</li>--}}
                                    {{--<li>Можно подобрать крышки под Ваш дизайн</li>--}}
                                    {{--<li>Требует сверления стены</li>--}}
                                    {{--<li>Высокая хрупкость (из-за отверстий)</li>--}}
                                    {{--<li>Самый дорогой вид крепежа</li>--}}
                                    {{--<li>Не всем нравятся выпирающие элементы</li>--}}
                                </ul>
                            </div>
                            <a class="galery_kripezh-pos" data-fancybox="gallery_kripezh"
                               href="images/cley.jpg">
                                <img class="glasses_img_fastener2" src="images/cley_small.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="shower_type_items d-flex">
                            <a data-fancybox="gallery_kripezh" href="images/second_fastener_big.jpg">
                                <img class="glasses_img_fastener2" src="images/second_fastener.png" alt="">
                            </a>
                            <div class="shower_type_item-right fastener_shower_glass2">
                                <p>ТОЧЕЧНЫЙ КРЕПЕЖ</p>
                                <ul>
                                    <li>Выдерживает нагрузку более 220 кг на м2</li>
                                    <li>Эстетично (нет сторонних элементов)</li>
                                    <li>Безопасно в случае разбития</li>
                                    <li>Влагостойкость (не разрушается от влаги)</li>
                                    <li class="pluss">Идеально для крепления в нишу</li>
                                    <li>С монтажом не все так просто как кажется</li>
                                    <li>Тяжело демонтировать</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="call_back_section">
            <section id="call_back">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="request_call_back">
                                <h2>быстро запросить стоимость</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="help_glaas_type kripezh d-flex">
                                <div class="help_glass_items ">
                                    <img src="images/types_kripezh1.png" alt="">
                                    <p>ОБЫЧНОЕ</p>
                                </div>
                                <div class="help_glass_items">
                                    <img src="images/types_kripezh2.png" alt="">
                                    <p>ОБЫЧНОЕ</p>
                                </div>
                                <div class="help_glass_items">
                                    <img src="images/types_kripezh3.png" alt="">
                                    <p>ОБЫЧНОЕ</p>
                                </div>
                                <!-- <div class="help_glass_items">
							<img src="images/glass5.png" alt="">
							<p>ОБЫЧНОЕ</p>
						</div>
						<div class="help_glass_items">
							<img src="images/glaas6.png" alt="">
							<p>ОБЫЧНОЕ</p>
						</div>
 -->                    </div>
                            <div class="button_next">
                                <a class="next__block">Далее</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <section id="call_back" class="call_back_section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="request_call_back">
                            <h2>быстро запросить стоимость</h2>
                            <p>Выбор нанесения покрытия</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="help_glaas_type d-flex">
                            <div class="help_glass_items">
                                <img src="images/types_kripezh2.png" alt="">
                                <p>прозрачное стекло</p>
                            </div>
                            <div class="help_glass_items">
                                <img src="images/types_kripezh2.png" alt="">
                                <p>градиент</p>
                            </div>
                            <div class="help_glass_items">
                                <img src="images/types_kripezh2.png" alt="">
                                <p>однотонная покраска</p>
                            </div>
                            <div class="help_glass_items">
                                <img src="images/types_kripezh2.png" alt="">
                                <p>УФ-печать</p>
                            </div>
                            <div class="help_glass_items">
                                <img src="images/types_kripezh2.png" alt="">
                                <p>3D-эффект</p>
                            </div>
                            <div class="help_glass_items">
                                <img src="images/types_kripezh2.png" alt="">
                                <p>матовка</p>
                            </div>
                        </div>
                        <div class="button_next">
                            <a class="next__block">Далее</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <div class="call_back_section">
            <section id="call_back">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="request_call_back">
                                <h2>быстро запросить стоимость</h2>
                                <p>Стадия ремона</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="help_glaas_type help_glaas_type2 d-flex">
                                <div class="help_glass_items help_glass_items2">
                                    <img src="images/cost_calc_link1.png" alt="">
                                    <p>Кухня не установлена</p>
                                    <span>Нужна консультация</span>
                                </div>
                                <div class="help_glass_items help_glass_items2">
                                    <img src="images/cost_calc_link3.png" alt="">
                                    <p>Кухня установлена нужен замер</p>
                                    <span>Нужен расчет или замер</span>
                                </div>
                            </div>
                            <div class="button_next">
                                <a class="next__block">Далее</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <section id="call_back" class="call_back_section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="request_call_back">
                            <h2>быстро запросить стоимость</h2>
                            <p>Дополнительные требования</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="help_glaas_type help_glaas_type2 d-flex">
                            <div class="chekbox_sect_6 d-flex">
                                <div class="first_chekbox">
                                    <label>
                                        <input type="checkbox">
                                        <span class="fake-checkbox" aria-hidden="true"></span>
                                        <span class="label">Доставка изделия</span>
                                    </label>
                                    <label>
                                        <input type="checkbox">
                                        <span class="fake-checkbox" aria-hidden="true"></span>
                                        <span class="label">Монтаж (Установка)</span>
                                    </label>
                                    <label>
                                        <input type="checkbox">
                                        <span class="fake-checkbox" aria-hidden="true"></span>
                                        <span class="label">Зеркало в ванну</span>
                                    </label>
                                </div>
                                <div class="ssecond_chekbox">
                                    <label>
                                        <input type="checkbox">
                                        <span class="fake-checkbox" aria-hidden="true"></span>
                                        <span class="label">Гидрофобное покрытие / антигрязь</span>
                                    </label>
                                    <label>
                                        <input type="checkbox">
                                        <span class="fake-checkbox" aria-hidden="true"></span>
                                        <span class="label">Стеклянные полки / дверцы</span>
                                    </label>
                                    <label>
                                        <input type="checkbox">
                                        <span class="fake-checkbox" aria-hidden="true"></span>
                                        <span class="label">Выезд дизайнера / подбор рисунка</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="button_next">
                            <a class="next__block">Далее</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="call_back" class="call_back_section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="request_call_back">
                            <h2>быстро запросить стоимость</h2>
                            <p>Контактные данные</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="help_glaas_type help_glaas_type_last ">
                            <div class="up_form ">
                                <input type="text" placeholder="Your name">
                                <input type="text" placeholder="Your name">
                            </div>
                            <div class="down_form down_form_2">
                                <input type="text" placeholder="EMail">
                                <input type="text" placeholder="EMail">
                            </div>
                            <div class="checkbox">
                            <label>
                                <input type="checkbox">
                                <span class="fake-checkbox" aria-hidden="true"></span>
                                <span class="label">Согласие с конфиденциальностью и куки</span>
                            </label>
                        </div>
                        </div>
                        <div class="button_next">
                            <a class="next__block">отправить</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="call_back" class="call_back_section">
            <div class="container">                
                <div class="row">
                    <div class="col-lg-12">
                        <div class="help_glaas_type help_glaas_type_last thanku ">
                              <h2 class=" popup_choise_h2">Спасибо за заказ!</h2>                        
                        </div>
                        <div class="button_next">
                            <a  >Ок</a>
                        </div>
                    </div>
                </div>
            </div>            
        </section>
    </div>