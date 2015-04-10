<?php get_header(); ?>

	<div class="row white">
		<div class="large-6 large-centered medium-8 medium-centered small-centered columns content center">
			<?php include('searchform.php'); ?>

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" style="margin-top: 20px;">
					<header class="entry-header article-header">
						<h3 class="search-title entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
						<p class="byline entry-meta vcard">
							<?php printf(
								__('Posted %1$s by %2$s', 'bonestheme'),
								'<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
								'<span class="by">by</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link(get_the_author_meta('ID')) . '</span>'
							); ?>
						</p>
					</header>
					<br>
					<section class="entry-content">
						<?php the_excerpt('<span class="read-more">' . __('Read more &raquo;', 'bonestheme') . '</span>'); ?>
					</section>
				</article>
				<hr/>

			<?php endwhile; ?>

			<?php bones_page_navi(); ?>

			<?php else : ?>

				<article id="post-not-found" class="hentry cf">
					<h3><?php _e('Sorry, that ship may have sailed.', 'bonestheme'); ?></h3>
					<p><?php _e('Try searching for something else.', 'bonestheme'); ?></p>
				</article>

			<?php endif; ?>

		</div>
	</div>

<?php get_footer(); ?>
