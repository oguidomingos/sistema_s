<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package scs_consultoria
 */

?>

<!-- Footer -->
<footer id="colophon" class="glass-card py-16">
	<div class="container">
		<div class="text-center">
			<div class="font-space text-4xl font-bold mb-8 gradient-text flex items-center justify-center gap-3">
				<div class="w-10 h-10 rounded-full bg-gradient-to-r from-netword-primary to-netword-accent animate-glow-pulse"></div>
				Recupera S+
			</div>
			<p class="mb-8 text-netword-white/70">© <?php echo date('Y'); ?> Recupera S+ • CNPJ 00.000.000/0001-00</p>
			<div class="space-x-8 mb-8">
				<?php if ( has_nav_menu( 'menu-2' ) ) : ?>
					<nav aria-label="<?php esc_attr_e( 'Footer Menu', 'scs_consultoria' ); ?>" class="inline-block">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-2',
								'menu_class'     => 'footer-menu inline-flex space-x-8',
								'depth'          => 1,
								'container'      => false,
								'link_before'    => '<span class="text-netword-white/80 hover:text-netword-primary transition-colors font-medium">',
								'link_after'     => '</span>',
							)
						);
						?>
					</nav>
				<?php else: ?>
					<a href="#" class="text-netword-white/80 hover:text-netword-primary transition-colors font-medium">Política de Privacidade</a>
					<a href="#" class="text-netword-white/80 hover:text-netword-primary transition-colors font-medium">Termos de Uso</a>
				<?php endif; ?>
			</div>
			<p class="text-sm text-netword-white/60 mb-8">
				Rua Exemplo, 123 – São Paulo, SP • contato@recuperas.com.br • (11) 4000-0000
			</p>
			<p class="text-netword-accent font-semibold neon-text">
				Transforme hoje seu passivo tributário em capital de giro.
			</p>
		</div>

		<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
			<aside role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'scs_consultoria' ); ?>" class="mt-12">
				<div class="grid md:grid-cols-3 gap-8">
					<?php dynamic_sidebar( 'sidebar-1' ); ?>
				</div>
			</aside>
		<?php endif; ?>
	</div>
</footer><!-- #colophon -->
