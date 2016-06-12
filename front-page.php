<?php get_header();  ?>

<div class="main">

<section class="about" id="about">
	<div class="container">
		<div class="about-title">
			<div class="pseudo-div"></div>
			<div class="line-wrapper clearfix">
				<div class="upperline"></div>
				<div class="lowerline"></div>
			</div>
			<h3>ABOUT ME</h3>
		</div>
		<div class="about-img">
		</div>
		<div class="about-bio">
			<p><?php the_field('bio') ?></p>
		</div>
		<div class="about-tag-line">
			<div class="line-wrapper clearfix">
				<div class="upperline"></div>
				<div class="lowerline"></div>
			</div>
			<h4><?php the_field('about_section_tag_line') ?></h4>
		</div>
	</div> <!-- /.container about -->
</section> <!-- end about -->
<section class="skills" id="skills">
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none" class="top-skills">
	  <polygon points="100 0 100 10 0 0" />
	</svg>
	<div class="container">
		<h3 class="sub-head">MY SKILL SET</h3>
		<div class="line-wrapper clearfix">
			<div class="upperline"></div>
			<div class="lowerline"></div>
		</div>
		<p><?php the_field('skills_tag_line')?></p>
		<div class="skills-wrapper">
			<div class="skill">
				<i class="devicons devicons-html5"></i>
				<h6>HTML5</h6>
			</div>
			<div class="skill">
				<i class="devicons devicons-css3"></i>
				<h6>CSS3</h6>
			</div>
			<div class="skill">
				<i class="fa fa-mobile" aria-hidden="true"></i>
				<h6>Responsive Web Design</h6>
			</div>
			<div class="skill">
				<i class="devicons devicons-javascript_badge"></i>
				<h6>JavaScript</h6>
			</div>
			<div class="skill">
				<i class="devicons devicons-jquery"></i>
				<h6>jQuery</h6>
			</div>
			<div class="skill">
				<i class="devicons devicons-wordpress"></i>
				<h6>WordPress</h6>
			</div>
			<div class="skill">
				<i class="devicons devicons-terminal_badge"></i>
				<h6>Command Line</h6>
			</div>
			<div class="skill">
				<i class="devicons devicons-git"></i>
				<h6>Git</h6>
			</div>
			<div class="skill">
				<i class="devicons devicons-github_badge"></i>
				<h6>GitHub</h6>
			</div>
			<div class="skill">
				<i class="devicons devicons-gulp"></i>
				<h6>Gulp</h6>
			</div>
			<div class="skill">
				<i class="devicons devicons-sass"></i>
				<h6>Sass</h6>
			</div>
			<div class="learn-skills">
				<div class="pseudodiv">
				<div class="skill">
					<i class="devicons devicons-angular"></i>
					<h6>AngularJS</h6>
				</div>
				<div class="skill">
					<i class="devicon-react-original"></i>
					<h6>React</h6>
				</div>
				<div class="skill">
					<i class="devicons devicons-nodejs_small"></i>
					<h6>Node.js</h6>
				</div>
				</div>
			</div>
		</div> <!-- skills wrapper -->
	</div> <!-- container -->
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none" class="bottom-skills">
	  <polygon points="100 0 100 10 0 10" />
	</svg>
</section><!-- end of skills section -->
<section class="portfolio" id="portfolio">
	<div class="container">
		<h3 class="sub-head">MY PORTFOLIO</h3>
		<div class="line-wrapper clearfix">
			<div class="upperline"></div>
			<div class="lowerline"></div>
		</div>
		<p class='tag-line'><?php the_field('portfolio_tag_line')?></p>
		<?php 
		if (have_rows('portfolio')){
			while(have_rows('portfolio')) {
			the_row();
			?>
			<?php $image = get_sub_field('image'); ?>
			<article class="project">
				<a href="<?php the_sub_field('project_url')?>" target="_blank" class="figure-link"><figure><img src="<?php echo $image['url']?>"/>
				</figure></a>
				<aside class='project-info clearfix'>
					<h6 class='skills-involved'><?php the_sub_field('skills_involved')?></h6>
					<h4><?php the_sub_field('project_name')?></h4>
					<div class="line-wrapper clearfix">
						<div class="upperline"></div>
						<div class="lowerline"></div>
					</div>
					<p class='description-para'><?php the_sub_field('project_description')?></p>
					<div class='button-wrapper'>
						<a href="<?php the_sub_field('project_url')?>" target="_blank"><button class='view-live'><h6>VIEW LIVE</h6></button></a>
						<a href="<?php the_sub_field('github_url')?>" target="_blank"><button class='view-git'><i class="devicons devicons-github_badge"></i></button></a>
					</div>
				</aside>
			</article>
			<?php
			 }
		}
		?>
	</div><!-- container -->
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none">
	  <polygon points="100 0 100 10 0 0" />
	</svg>
</section>
<section class="contact" id="contact">
	<div class="container">
		<h3 class="sub-head">CONTACT</h3>
		<div class="line-wrapper clearfix">
			<div class="upperline"></div>
			<div class="lowerline"></div>
		</div>
		<p class='tag-line'><?php the_field('contact_side_text')?></p>
		<div class="contact-wrapper">
			<div class="contact-individual">
				<div class="sm-wrapper">
					<a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i><h6><?php the_field('email_address')?></h6></a>
					<a href="<?php the_field('twitter')?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i><h6>@ledukeness</h6></a>
					<a href="<?php the_field('linkedin')?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i><h6>Maxime Leduc</h6></a>
					<a href="<?php the_field('github')?>" target="_blank"><i class="fa fa-github" aria-hidden="true"></i><h6>MaxLeduc</h6></a>
				</div>
			</div>
			<?php the_field('contact_form', 'option')?>
		</div>
		</div><!-- container -->
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none">
		  <polygon points="100 0 100 10 0 10" />
		</svg>
</section>
</div> <!-- /.main -->

<?php get_footer(); ?>