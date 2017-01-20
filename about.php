<?php
/*
Template Name: about.php
*/
?>

<?php get_header(); ?>
  <div class="clearfix"></div>
      <section class="slider">
      </section>
      <section class="content3">
        <div class="zag">
          <h2><?php the_title();?></h2>
        </div>
        <div class="text">
          <div class="text-img">
            <?php the_post_thumbnail(); ?>
          </div>
          <div class="text-opis">
            <p><i class="fa fa-map-marker icon" aria-hidden="true"></i><b>Юр. адрес:</b>  629850, ЯНАО, Пуровский район, г. Тарко-Сале, ул. Труда, д. 16, кв. 6</p>
            <p>&nbsp;</p>
            <p><i class="fa fa-map-marker icon" aria-hidden="true"></i><b>Факт. адрес:</b> 629800, ЯНАО, г. Ноябрьск, Промузел  Пелей Панель 1 тер, дом 1</p>
            <p>&nbsp;</p>
            <p><i class="fa fa-phone icon" aria-hidden="true"></i><b>Тел:</b> +7(3496)35-47-03</p>
            <p>&nbsp;</p>
            <p><i class="fa fa-phone icon" aria-hidden="true"></i><b>Факс:</b> +7(3496)35-47-07</p>
            <p>&nbsp;</p>
            <p><i class="fa fa-envelope icon" aria-hidden="true"></i><b>Электронная почта:</b> info@mailghm.ru</p>

          </div>
        </div>
      </section>
      <div class="clearfix"></div>
      <section class="about-form">
        <div class="kontakt-form">
          <form action="">
            <input type="text" value="Имя"><br>
            <input type="text" value="E-mail"><br>
            <textarea rows="10" cols="180" name="text">Сообщение</textarea>
            <div class="button" style="text-align: right;">
              <a href="#" class="ssylbutton button-pod">Отправить</a>
             </div>
          </form>
        </div>
      </section>
    </div>
    <div class="clearfix"></div>
<?php get_footer(); ?>