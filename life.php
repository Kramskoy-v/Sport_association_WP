<?php 

/*Template Name: Жизнь вуза*/

    get_header(); ?>
    <main class="main">
        <section class="life">
            <div class="container bread">
			<div class="breadcrumbs">
                    <?php if(function_exists('bcn_display'))
                        {
                            bcn_display();
                        }?>
                </div>
				</div>
				<div class="container p-0">
                <div class="life__bg">
                    <div class="life__info">
                        <h1 class="life__title">ЖИЗНЬ АССОЦИАЦИИ</h1>
                        <p class="life__desc">Здесь Вы можете ознакомиться с  нашими документами</p>
                    </div>
                </div>
            </div>
				<div class="container pres">
				<div class="president">
                    <div class="president__image">
                        <img src="<?php echo get_field('photo_president', 8); ?>" alt="">
                    </div>
					<div class="director__info">
                    <h3 class="director__name">
                        <?php echo get_field('name_president', 8); ?>
                    </h3>
                    <p class="director__position">
                        <?php echo get_field('position_president', 8); ?>
                    </p>
					<p class="director__position">
                        <?php echo get_field('name_univer', 8); ?>
                    </p>
					</div>
                 </div>
				</div>	
            </div>
        </section>
        <section class="target resolution">
			<div class="container d-flex fd-c">
				<div class="section__info w-413">
					<h2 class="section__title">ПЛАН <span>РАБОТЫ</span></h2>
					<p class="section__desc">Решение, принятое должностным лицом или совещательным органом</p>
				</div>
				<div class="target__docs">
					<div class="swiper">
						<div class="swiper-wrapper">
							<?php $images = get_field('resolution', 12); 
                        		foreach( $images as $image ) {
                        	?> 
							<div class="swiper-slide">
								<img src="<?php echo $image['url']; ?>" alt="">
							</div>
							<?php } ?>
						</div>
						<div class="swiper-button-prev"></div>
						<div class="swiper-button-next"></div>
					</div>
				</div>
		</section>
        <section class="target protocol">
			<div class="container d-flex fd-c">
				<div class="section__info w-413">
					<h2 class="section__title">Протоколы <span>АССОЦИАЦИИ</span></h2>
					<p class="section__desc">Решение, принятое должностным лицом или совещательным органом</p>
				</div>
				<div class="target__docs">
					<div class="swiper">
						
					<div class="swiper-wrapper">
							<?php $images = get_field('protocol', 12); 
                        		foreach( $images as $image ) {
                        	?> 
							<div class="swiper-slide">
								<img src="<?php echo $image['url']; ?>" alt="">
							</div>
							<?php } ?>
						</div>
						<div class="swiper-button-prev"></div>
						<div class="swiper-button-next"></div>
					</div>
				</div>
		</section>
        <section class="target charter">
			<div class="container d-flex fd-c">
				<div class="section__info w-413">
					<h2 class="section__title">Устав <span>АССОЦИАЦИИ</span></h2>
					<p class="section__desc">Решение, принятое должностным лицом или совещательным органом</p>
				</div>
				<div class="target__docs">
					<div class="swiper">
					<div class="swiper-wrapper">
							<?php $images = get_field('charter', 12); 
                        		foreach( $images as $image ) {
                        	?> 
							<div class="swiper-slide">
								<img src="<?php echo $image['url']; ?>" alt="">
							</div>
							<?php } ?>
						</div>
						<div class="swiper-button-prev">

						</div>
						<div class="swiper-button-next"></div>
					</div>
				</div>
		</section>
    </main>
	<?php get_footer(); ?>