</main>
    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-3 footer-links">                                     
                    <ul>
                        <h2>Полезные ссылки</h2>
                        <li>google.com</li>
                        <li>google.com</li>
                        <li>google.com</li>
                        <li>google.com</li>
                        <li>google.com</li>
                        <li>google.com</li>
                    </ul>                    
					<a href="energy.html"><img src="<?php bloginfo('template_url'); ?>/img/energy-white-2.png" alt="Energy"></a>   
					
                </div>
                <div class="col-xl-3 col-lg-3">
                    <ul>
                        <h2>Контакты</h2>
                        <li>096666666666</li>
                        <li>096666666666</li>
                        <li>096666666666</li>
                        <li>096666666666</li>
                        <li>096666666666</li>
                        <li>096666666666</li>
                    </ul>
                    <div class="subscribe">
                        <h2>Подписки:</h2>
                        <div class="subscribe-news-wrap">
                            <!-- <label for="subscribe-news">Новости:</label> -->
                            <div>
                                <input type="checkbox" id="news" name="news">
                                <label for="news">Новости</label>
                            </div>                            
                                
                            <div>
                                <input type="checkbox" id="publication" name="publication">
                                <label for="news">Публикации</label>
                            </div>

                            <div>
                                <input type="checkbox" id="realization" name="realization">
                                <label for="news">Реализация</label>
                            </div>

                            <input type="text" id="subscribe-news" placeholder="email">
                            <button class="subscribe-news-btn">
                                <i class="demo-icon icon-paper-plane"></i>
                            </button>
                        </div>

                        <!-- <div class="subscribe-news-wrap">
                            <label for="subscribe-news">Публикации:</label>
                            <input type="text" id="subscribe-news" placeholder="email">
                            <button class="subscribe-news-btn">
                                    <i class="demo-icon icon-paper-plane"></i>
                            </button>
                        </div> -->
                    </div>
                </div>
                <div class="offset-xl-1 col-xl-4 col-lg-6">
                    <div class="col-12"><h2>Напишите нам</h2></div>
                    <form class="form-footer mb-5" action="#" >
                        <div class="row">                            
                            <div class="col-6">
                                <input type="text" name="fio" placeholder="ФИО" class="input-fio">
                            </div>
                            <div class="col-6">
                                <input type="text" name="email" placeholder="email" class="input-fio">
                            </div>
                        </div>  
                        <div class="row">
                            <div class="col-12">
                                <label for="forWho">Выберите адресат</label>
                                <select id="forWho" name="forWho" form="nubexForm" class="contact-form-select">
                                    <option value="">Общие вопросы</option>
                                    <option value="">Webmaster</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">                   
                            <div class="col-12">
                                <textarea rows="5" placeholder="Сообщение"  class="contact-us-textarea"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="footer-btn-contactUs">Отправить</button>
                            </div>
                        </div>
                    </form>     
                </div>
            </div>
        </div>
        <p class="mb-0">Create by: miraclus1@gmail.com</p>        
    </footer>


    
    <!-- <script src="js/jquery-3.3.1.min.js"  type="text/javascript"></script> -->
    <!-- <script src="js/parallax.min.js"  type="text/javascript"></script>     -->
    <!-- <script src="js/bootstrap.min.js" type="text/javascript"></script> -->
    <!-- <script src="js/script.js" type="text/javascript"></script> -->
    
<?php wp_footer(); ?>    
</body>
</html>