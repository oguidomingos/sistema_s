<?php
/**
 * Template part for displaying the hero section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package scs_consultoria
 */

?>

<!-- Hero Section -->
<section id="hero" class="hero-padding relative overflow-hidden">
	<div class="absolute inset-0 bg-gradient-to-br from-netword-primary/5 via-transparent to-netword-accent/5"></div>
	<div class="container container-spacing relative">
		<div class="text-center max-w-6xl mx-auto animate-fade-in hero-content-spacing">
			<div class="inline-flex items-center gap-2 glass-card px-4 py-2 rounded-full mb-8 neon-border">
				<svg class="text-netword-primary animate-pulse" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor">
					<path d="M16 11V3a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v8m2 6v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-2"/>
					<path d="M3 12h18l-2-3H5z"/>
				</svg>
				<span class="text-sm font-mono text-netword-primary">AÇÕES JUDICIAIS EXCLUSIVAS</span>
			</div>
			
			<h1 class="text-4xl md:text-6xl font-space font-bold mb-8 gradient-text leading-tight">
				<span class="neon-text">RECUPERE COM SEGURANÇA</span><br />
				<span class="text-netword-accent">46 MESES</span> de Contribuições Feitas ao Sistema S
			</h1>
			
			<p class="text-2xl md:text-3xl mb-8 text-netword-primary font-bold neon-text">
				Seu dinheiro de volta em apenas 30 dias
			</p>

			<!-- Prazo em vermelho -->
			<div class="mb-8">
				<p class="text-xl md:text-2xl font-bold text-red-500 animate-pulse">
					⚠️ Prazo: sua empresa tem apenas mais 3 anos e seis meses para aproveitar dos resultados dessa decisão
				</p>
			</div>
			
			<p class="text-lg md:text-xl mb-12 text-netword-white/80 font-inter max-w-4xl mx-auto">
				Para empresas do Lucro Presumido e Real, com folha acima de 20 SM.<br />
				<span class="text-netword-accent font-semibold">Ações Judiciais Exclusivas – Temas 1.079 e 1.119 do STJ</span>
			</p>
			
			<div class="flex flex-col sm:flex-row grid-spacing-md justify-center items-center margin-subsection">
				<div class="flex items-center space-x-2 md:space-x-3 glass-card px-3 md:px-4 py-2 md:py-3 rounded-lg text-sm md:text-base">
					<svg class="text-netword-primary" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
						<path d="M20 6L9 17l-5-5"/>
					</svg>
					<span class="text-netword-white">Zero custo inicial</span>
				</div>
				<div class="flex items-center space-x-2 md:space-x-3 glass-card px-3 md:px-4 py-2 md:py-3 rounded-lg text-sm md:text-base">
					<svg class="text-netword-primary" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
						<path d="M20 6L9 17l-5-5"/>
					</svg>
					<span class="text-netword-white">Success Fee de 15%</span>
				</div>
				<div class="flex items-center space-x-2 md:space-x-3 glass-card px-3 md:px-4 py-2 md:py-3 rounded-lg text-sm md:text-base">
					<svg class="text-netword-primary" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
						<path d="M20 6L9 17l-5-5"/>
					</svg>
					<span class="text-netword-white">Garantia "No Win, No Fee"</span>
				</div>
			</div>
			
			<button class="glass-button font-semibold animate-glow-pulse scroll-to-contact">
				<svg class="mr-3" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
					<rect x="2" y="3" width="20" height="14" rx="2" ry="2"/>
					<line x1="8" y1="21" x2="16" y2="21"/>
					<line x1="12" y1="17" x2="12" y2="21"/>
				</svg>
				Quero Meu Diagnóstico Gratuito
				<svg class="ml-3" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
					<line x1="5" y1="12" x2="19" y2="12"/>
					<polyline points="12,5 19,12 12,19"/>
				</svg>
			</button>
		</div>
	</div>
</section>