<?php
/**
 * Template part for displaying the legal milestones section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package scs_consultoria
 */

?>

<!-- Marcos Jurídicos Definidos -->
<section id="legal-milestones" class="section-spacing relative overflow-hidden">
	<!-- Background Effects -->
	<div class="absolute inset-0 bg-gradient-to-br from-green-400/5 via-transparent to-green-400/10"></div>
	<div class="absolute inset-0 bg-[radial-gradient(circle_at_20%_30%,rgba(34,197,94,0.1),transparent_50%)]"></div>
	<div class="absolute inset-0 bg-[radial-gradient(circle_at_80%_70%,rgba(34,197,94,0.08),transparent_50%)]"></div>
	
	<div class="container container-spacing relative">
		<!-- Section Header -->
		<div class="text-center margin-section element-spacing-lg">
			<div class="inline-flex items-center gap-3 glass-card px-6 py-3 rounded-full mb-8 border border-green-400/20">
				<svg class="text-green-400 animate-pulse" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
					<path d="M20 6L9 17l-5-5"/>
				</svg>
				<span class="text-sm font-mono text-green-400 tracking-wider">MARCOS DEFINIDOS</span>
			</div>
			
			<h2 class="text-4xl md:text-6xl font-bold mb-8 bg-gradient-to-r from-green-400 via-white to-green-300 bg-clip-text text-transparent leading-tight">
				Marcos Jurídicos
				<span class="block text-green-400 text-2xl md:text-3xl mt-2 font-light">
					Que Garantem Seu Direito
				</span>
			</h2>
			
			<p class="text-xl text-gray-300 max-w-4xl mx-auto leading-relaxed">
				Os <span class="text-green-400 font-semibold">fundamentos legais definitivos</span> que asseguram a recuperação de valores pagos indevidamente ao Sistema S
			</p>
		</div>

		<!-- Legal Milestones Grid -->
		<div class="max-w-7xl mx-auto">
			<!-- Desktop Grid Layout -->
			<div class="hidden md:grid md:grid-cols-3 gap-8 lg:gap-12">
				
				<!-- Marco 1: Leis 5.890/73 e 6.950/81 -->
				<?php get_template_part( 'template-parts/milestones/milestone', 'laws' ); ?>

				<!-- Marco 2: STJ Tema 1.079 -->
				<?php get_template_part( 'template-parts/milestones/milestone', 'stj' ); ?>

				<!-- Marco 3: STF Tema 1.119 -->
				<?php get_template_part( 'template-parts/milestones/milestone', 'stf' ); ?>
			</div>

			<!-- Mobile Stack Layout -->
			<div class="md:hidden space-y-6">
				
				<!-- Marco 1: Mobile -->
				<?php get_template_part( 'template-parts/milestones/milestone-laws', 'mobile' ); ?>

				<!-- Marco 2: Mobile -->
				<?php get_template_part( 'template-parts/milestones/milestone-stj', 'mobile' ); ?>

				<!-- Marco 3: Mobile -->
				<?php get_template_part( 'template-parts/milestones/milestone-stf', 'mobile' ); ?>
			</div>
		</div>

		<!-- Section Conclusion -->
		<div class="text-center mt-16 max-w-4xl mx-auto">
			<div class="glass-card p-8 rounded-2xl border border-green-400/20">
				<h3 class="text-2xl font-bold mb-4 text-green-400">Fundamento Legal Sólido</h3>
				<p class="text-lg text-gray-300 leading-relaxed">
					Estes marcos jurídicos consolidam o <span class="font-bold text-green-400">direito à recuperação</span> para empresas que se anteciparam dentro dos prazos estabelecidos, garantindo segurança jurídica total ao processo.
				</p>
			</div>
		</div>
	</div>
</section>