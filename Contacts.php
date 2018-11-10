<?php $image = 'image_contacts' ?>
<?php $title = 'Контакты' ?>
<?php include('templates/header.php') ?>
    <div class="wrapper">
        <div class="main">
            <h2>КОНТАКТЫ</h2>
            <p>
                Мы - команда тех, кто любит историю и любит Москву. 
            </p>
            <p>
                Москва – это не только место по «заколачиванию денег» и «взращиванию карьеры», а еще и бесконечно красивые памятники природы, заказники, парки, заповедники. Активный отдых в Москве и Подмосковье – это отличная возможность вырваться из душного мегаполиса куда-нибудь в «дебри», навстречу приключениям. К счастью, не все Подмосковье еще «облагорожено» асфальтными дорожками и высоченными коттеджными заборами. Еще встречаются места, настолько глухие и далекие, что, очутившись там, кажется, что ты – первый человек, ступивший на эту землю.
            </p>
            <p>
                Там, где не проедет автомобилист и даже велосипедист, найдет лазейку и откроет для себя все красоты 100% бездорожья турист, проводящий свой активный отдых в Подмосковье.
            </p>
        </div>
        <div class="peoples">
            <div class="people">
                <div class="people_img_1"></div>
                <div class="people_info">
                    <h3>Александр Рыбаков</h3>
                    <p>директор</p>
                    <p>по всем вопросам пишите на почту:</p>
                    <a href="rybakov@mymoscow.ru">rybakov@mymoscow.ru</a>
                </div>
            </div>
            <div class="people">
                <div class="people_img_2"></div>
                <div class="people_info">
                    <h3>Елена Белкина</h3>
                    <p>руководитель корпоративного отдела</p>
                    <p>по вопросам корпоративных экскурсий:</p>
                    <a href="belkina@mymoscow.ru">belkina@mymoscow.ru</a>
                </div>
            </div>
        </div>
        <div class="info">
            <div class="info_block">
                <div class="info_block_text">
                    <img src="pics/placeholder.png" alt="карта">
                    <p>
                        Москва, Большая Спасская 12
                    </p>
                </div>
                <div class="info_block_text">
                    <img src="pics/mail.png" alt="почта">
                    <p>
                        moscow@imoscow.ru
                    </p>
                </div>
                <div class="info_block_text">
                    <img src="pics/telephone.png" alt="телефон">
                    <p>
                        8(495)626-46-00
                    </p>
                </div>
            </div>
            <div class="info_block">
                <h4>Напишите нам</h4>
                <div class="forms">
                    <form action="form.php" method="GET">
                        <label class="box">
                            <input type="text" name="Name">
                            <div class="place">
                                <p>Введите имя</p>
                            </div>
                        </label>
                        <input type="email" name="email" placeholder="e-mail" required><br><br>
                        <textarea name="text" cols="30" rows="10" placeholder="Ваше сообщение"></textarea><br><br>
                        <input type="submit" value="Отправить"><br><br>
                    </form>
                </div>
                <!-- форма обратной связи -->
                <div class="form">
                    <form method="GET" action="form.php">
                        <div class="pas">
                            <input type="password" name="pas"> Укажите пароль
                            <img src="pics/eye.png" alt="">
                        </div>
                        <br><br>
                        <input type="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1121.9964808120717!2d37.64757692147534!3d55.775994086261804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54a7a220c9e5f%3A0x262ed08bf1f58a9c!2z0JHQvtC70YzRiNCw0Y8g0KHQv9Cw0YHRgdC60LDRjyDRg9C7LiwgMTIsINCc0L7RgdC60LLQsCwgMTI5MDkw!5e0!3m2!1sru!2sru!4v1537441596676" allowfullscreen></iframe>
    </div>
    <?php include('templates/footer.php'); ?>