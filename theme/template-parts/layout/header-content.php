<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package scs_consultoria
 */

?>

<!-- Header -->
<header id="masthead" class="fixed top-0 w-full glass-card z-50 border-b border-netword-primary/20">
	<div class="container flex justify-between items-center py-6">
		<div class="font-space text-3xl font-bold gradient-text flex items-center gap-3">
			<div class="w-8 h-8 rounded-full bg-gradient-to-r from-netword-primary to-netword-accent animate-glow-pulse"></div>
			<?php
			if ( is_front_page() ) :
				?>
				<h1 class="m-0">Recupera S+</h1>
				<?php
			else :
				?>
				<p class="m-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="text-inherit no-underline">Recupera S+</a></p>
				<?php
			endif;
			?>
		</div>
		
		<!-- Desktop Menu -->
		<nav id="site-navigation" class="hidden md:flex space-x-8" aria-label="<?php esc_attr_e( 'Main Navigation', 'scs_consultoria' ); ?>">
			<a href="#hero" class="text-netword-white/80 hover:text-netword-primary transition-colors font-medium scroll-link">
				Início
			</a>
			<a href="#solucao" class="text-netword-white/80 hover:text-netword-primary transition-colors font-medium scroll-link">
				Solução
			</a>
			<a href="#beneficios" class="text-netword-white/80 hover:text-netword-primary transition-colors font-medium scroll-link">
				Benefícios
			</a>
			<a href="#direito" class="text-netword-white/80 hover:text-netword-primary transition-colors font-medium scroll-link">
				Seu Direito
			</a>
			<a href="#depoimentos" class="text-netword-white/80 hover:text-netword-primary transition-colors font-medium scroll-link">
				Depoimentos
			</a>
			<a href="#contato" class="text-netword-white/80 hover:text-netword-primary transition-colors font-medium scroll-link">
				Contato
			</a>
		</nav>

		<!-- Mobile Menu Button -->
		<button 
			class="md:hidden text-netword-white hover:text-netword-primary transition-colors mobile-menu-toggle"
			aria-label="Toggle Mobile Menu"
		>
			<svg class="w-6 h-6 menu-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
			</svg>
			<svg class="w-6 h-6 close-icon hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
			</svg>
		</button>
	</div>

	<!-- Mobile Menu -->
	<div class="md:hidden glass-card border-t border-netword-primary/20 mobile-menu hidden">
		<nav class="container py-6 space-y-4">
			<a href="#hero" class="block text-netword-white/80 hover:text-netword-primary transition-colors font-medium scroll-link">
				Início
			</a>
			<a href="#solucao" class="block text-netword-white/80 hover:text-netword-primary transition-colors font-medium scroll-link">
				Solução
			</a>
			<a href="#beneficios" class="block text-netword-white/80 hover:text-netword-primary transition-colors font-medium scroll-link">
				Benefícios
			</a>
			<a href="#direito" class="block text-netword-white/80 hover:text-netword-primary transition-colors font-medium scroll-link">
				Seu Direito
			</a>
			<a href="#depoimentos" class="block text-netword-white/80 hover:text-netword-primary transition-colors font-medium scroll-link">
				Depoimentos
			</a>
			<a href="#contato" class="block text-netword-white/80 hover:text-netword-primary transition-colors font-medium scroll-link">
				Contato
			</a>
		</nav>
	</div>
</header><!-- #masthead -->
