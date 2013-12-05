<?php include('_header.php') ?>

<div class="container">
	<div class="row slider">


		<div class="iosSlider" style="background: url(/img/slider1.jpg) no-repeat center center;">
			<div class="slider">
				<div class="item" id="item1">
					<!-- <div class="image" style="background: url(/img/slider1.jpg) no-repeat center top;"></div> -->
					<div class="text">
						<div class="title">
							<span>Наши услуги помогут вам:</span>
						</div>
						<div class="desc">
							<span>Сосредоточиться на непосредственном ведении бизнеса</span>
						</div>
					</div>
				</div>
				<div class="item" id="item2">
					<!-- <div class="image" style="background: url(/img/slider1.jpg) no-repeat center top;"></div> -->
					<div class="text">
						<div class="title">
							<span>Наши услуги помогут вам:</span>
						</div>
						<div class="desc">
							<span>Снизить затраты и повысить доходы</span>
						</div>
					</div>
				</div>
				<div class="item" id="item3">
					<!-- <div class="image" style="background: url(/img/slider1.jpg) no-repeat center top;"></div> -->
					<div class="text">
						<div class="title">
							<span>Наши услуги помогут вам:</span>
						</div>
						<div class="desc">
							<span>Оптимизировать налогооблажение</span>
						</div>
					</div>
				</div>
			</div>
			<div class="prevButton"></div>
			<div class="nextButton"></div>
		</div>


	</div>


	<div class="row">
		<div class="span6">
			<h2>Кратко о нас <a href="#">Узнать больше</a></h2>
			<p>Бухгалтерский учет не должен восприниматься Вами лишь как обязательная для Компании отчетность – вместе с TES Consulting  бухгалтерский учет может стать чрезвычайно полезным инструментом для принятия управленческих решений.</p>
			<p class="slogan">Мы гарантируем конфиденциальность, профессионализм, надежность и оперативность в работе.</p>
		</div>
		<div class="span5 offset1">
			<h3>Последние события</h3>
			<div class="span">
				<img src="/img/event1.jpg" alt="">
				<p class="date">12 февраля</p>
				<p>Оформлена книга Станислава Смелянского «Полеты над вечностью. Роман-экшн».</p>
			</div>
			<div class="span">
				<img src="/img/event2.jpg" alt="">
				<p class="date">12 февраля</p>
				<p>В Харькове открылся наш партнерский магазин «Обыкновенное чудо».</p>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
$(document).ready(function() {

	$('.iosSlider').iosSlider({
		infiniteSlider: true,
		snapToChildren: true,
		desktopClickDrag: true,
		navPrevSelector: $('.prevButton'),
		navNextSelector: $('.nextButton')
	});

});
</script>

<?php include('_footer.php') ?>
