<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no `home.php` file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package scs_consultoria
 */

get_header();
?>

<div class="min-h-screen bg-netword-secondary cyber-grid">

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

	<!-- Confiança Instantânea -->
	<section class="section-spacing">
		<div class="container container-spacing text-center">
			<div class="animate-slide-up">
				<div class="glass-card-lg neon-border hologram-effect element-spacing-md">
					<h2 class="text-3xl md:text-4xl font-space mb-6 gradient-text">
						Milhões parados no governo podem voltar ao seu caixa agora mesmo.
					</h2>
					<p class="text-2xl text-netword-primary font-bold neon-text">
						Mais de <span class="text-netword-accent">R$ 30 milhões</span> já recuperados para empresas de diversos setores no Brasil.
					</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Exposição -->
	<section class="section-spacing">
		<div class="container container-spacing">
			<div class="max-w-6xl mx-auto text-center animate-fade-in element-spacing-lg">
				<h2 class="text-4xl md:text-5xl font-space mb-12 gradient-text">
					Se a sua empresa está no regime Lucro Real ou Presumido...
				</h2>
				<div class="glass-card-md element-spacing-sm">
					<p class="text-lg md:text-xl text-netword-white/90 leading-relaxed">
						...e tem folha de pagamento acima de 20 salários-mínimos, você pode estar pagando até <span class="font-bold text-netword-primary neon-text">5,8% da folha ao Sistema S</span> (SENAI, SESI, SEBRAE, SESC) sobre valores que, pelas <span class="font-bold text-netword-primary neon-text">Leis 5.890/73 e 6.950/81</span>, não deveriam ser cobrados.
					</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Linha do Tempo Jurídica -->
	<section id="timeline" class="section-spacing-lg relative overflow-hidden">
		<!-- Background Effects -->
		<div class="absolute inset-0 bg-gradient-to-br from-green-400/5 via-transparent to-green-400/10"></div>
		<div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_20%,rgba(34,197,94,0.1),transparent_50%)]"></div>
		<div class="absolute inset-0 bg-[radial-gradient(circle_at_70%_80%,rgba(34,197,94,0.08),transparent_50%)]"></div>
		
		<div class="container container-spacing relative">
			<!-- Section Header -->
			<div class="text-center margin-section element-spacing-lg">
				<div class="inline-flex items-center gap-3 glass-card px-6 py-3 rounded-full mb-8 border border-green-400/20">
					<svg class="text-green-400 animate-pulse" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
						<path d="M16 11V3a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v8m2 6v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-2"/>
						<path d="M3 12h18l-2-3H5z"/>
					</svg>
					<span class="text-sm font-mono text-green-400 tracking-wider">EVOLUÇÃO JURÍDICA</span>
				</div>
				
				<h2 class="text-5xl md:text-7xl font-bold mb-8 bg-gradient-to-r from-green-400 via-white to-green-300 bg-clip-text text-transparent leading-tight">
					Linha do Tempo
					<span class="block text-green-400 text-3xl md:text-4xl mt-2 font-light">
						Sistema S (1973–2029)
					</span>
				</h2>
				
				<p class="text-xl text-gray-300 max-w-4xl mx-auto leading-relaxed">
					A evolução legal que garante o <span class="text-green-400 font-semibold">direito à recuperação</span> de contribuições pagas indevidamente ao Sistema S
				</p>
			</div>

			<!-- Timeline -->
			<div class="relative max-w-7xl mx-auto">
				<!-- Central Line -->
				<div class="absolute left-1/2 top-0 bottom-0 w-1 bg-gradient-to-b from-green-400/20 via-green-400/60 to-green-400/20 transform -translate-x-1/2 hidden md:block"></div>
				
				<!-- Mobile Line -->
				<div class="absolute left-6 md:left-8 top-0 bottom-0 w-1 bg-gradient-to-b from-green-400/20 via-green-400/60 to-green-400/20 md:hidden"></div>

				<!-- Timeline Items -->
				<div class="timeline-spacing">
					
					<!-- 1973 - Lei nº 5.890/73 -->
					<div class="timeline-item relative animate-fade-in">
						<!-- Desktop Layout -->
						<div class="hidden md:flex items-center">
							<!-- Left Content -->
							<div class="w-1/2 pr-6 lg:pr-12 text-right">
								<div class="glass-card-md border border-gray-700/40 bg-gray-800/20 transform transition-all duration-500 hover:scale-105 hover:shadow-2xl hover:shadow-green-400/10">
									<div class="inline-flex items-center gap-3 mb-4 px-4 py-2 rounded-full bg-gray-700/30 text-gray-300 border border-gray-600/20">
										<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor">
											<rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
											<line x1="16" y1="2" x2="16" y2="6"/>
											<line x1="8" y1="2" x2="8" y2="6"/>
											<line x1="3" y1="10" x2="21" y2="10"/>
										</svg>
										<span class="font-mono text-sm font-semibold tracking-wider">1973</span>
									</div>
									<h3 class="text-2xl font-bold mb-4 text-white">Lei nº 5.890/73</h3>
									<p class="text-gray-300 text-lg leading-relaxed">Introduz <span class="font-bold text-green-400">limite de 10 salários-mínimos</span> na base de cálculo das contribuições para o Sistema S.</p>
								</div>
							</div>
							<!-- Center Icon -->
							<div class="relative flex-shrink-0 z-10">
								<div class="w-20 h-20 rounded-full flex items-center justify-center border-4 bg-gray-800/80 border-gray-600 shadow-gray-600/30 backdrop-blur-xl shadow-2xl timeline-pulse">
									<svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="text-gray-300">
										<path d="M16 11V3a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v8m2 6v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-2"/>
										<path d="M3 12h18l-2-3H5z"/>
									</svg>
								</div>
							</div>
							<!-- Right Spacer -->
							<div class="w-1/2"></div>
						</div>
						<!-- Mobile Layout -->
						<div class="md:hidden flex items-start gap-4 sm:gap-6">
							<div class="flex-shrink-0 relative z-10">
								<div class="w-12 h-12 sm:w-16 sm:h-16 rounded-full flex items-center justify-center border-4 bg-gray-800/80 border-gray-600 shadow-gray-600/30 backdrop-blur-xl shadow-2xl">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="text-gray-300">
										<path d="M16 11V3a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v8m2 6v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-2"/>
										<path d="M3 12h18l-2-3H5z"/>
									</svg>
								</div>
							</div>
							<div class="flex-1">
								<div class="glass-card-sm border border-gray-700/40 bg-gray-800/20 timeline-card-spacing">
									<div class="inline-flex items-center gap-2 mb-3 px-3 py-1 rounded-full text-xs bg-gray-700/30 text-gray-300 border border-gray-600/20">
										<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor">
											<rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
											<line x1="16" y1="2" x2="16" y2="6"/>
											<line x1="8" y1="2" x2="8" y2="6"/>
											<line x1="3" y1="10" x2="21" y2="10"/>
										</svg>
										<span class="font-mono font-semibold tracking-wider">1973</span>
									</div>
									<h3 class="text-lg font-bold mb-3 text-white">Lei nº 5.890/73</h3>
									<p class="text-gray-300 leading-relaxed">Introduz <span class="font-bold text-green-400">limite de 10 salários-mínimos</span> na base de cálculo das contribuições para o Sistema S.</p>
								</div>
							</div>
						</div>
					</div>

					<!-- 1981 - Lei nº 6.950/81 -->
					<div class="timeline-item relative animate-fade-in" style="animation-delay: 0.2s">
						<!-- Desktop Layout -->
						<div class="hidden md:flex items-center">
							<!-- Left Spacer -->
							<div class="w-1/2"></div>
							<!-- Center Icon -->
							<div class="relative flex-shrink-0 z-10">
								<div class="w-20 h-20 rounded-full flex items-center justify-center border-4 bg-gray-800/80 border-gray-600 shadow-gray-600/30 backdrop-blur-xl shadow-2xl timeline-pulse">
									<svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="text-gray-300">
										<path d="M16 11V3a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v8m2 6v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-2"/>
										<path d="M3 12h18l-2-3H5z"/>
									</svg>
								</div>
							</div>
							<!-- Right Content -->
							<div class="w-1/2 pl-6 lg:pl-12">
								<div class="glass-card-md border border-gray-700/40 bg-gray-800/20 transform transition-all duration-500 hover:scale-105 hover:shadow-2xl hover:shadow-green-400/10">
									<div class="inline-flex items-center gap-3 mb-4 px-4 py-2 rounded-full bg-gray-700/30 text-gray-300 border border-gray-600/20">
										<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor">
											<rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
											<line x1="16" y1="2" x2="16" y2="6"/>
											<line x1="8" y1="2" x2="8" y2="6"/>
											<line x1="3" y1="10" x2="21" y2="10"/>
										</svg>
										<span class="font-mono text-sm font-semibold tracking-wider">1981</span>
									</div>
									<h3 class="text-2xl font-bold mb-4 text-white">Lei nº 6.950/81</h3>
									<p class="text-gray-300 text-lg leading-relaxed">Aumenta o teto anterior para <span class="font-bold text-green-400">20 salários-mínimos</span>, consolidando o limite legal.</p>
								</div>
							</div>
						</div>
						<!-- Mobile Layout -->
						<div class="md:hidden flex items-start gap-4 sm:gap-6">
							<div class="flex-shrink-0 relative z-10">
								<div class="w-12 h-12 sm:w-16 sm:h-16 rounded-full flex items-center justify-center border-4 bg-gray-800/80 border-gray-600 shadow-gray-600/30 backdrop-blur-xl shadow-2xl">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="text-gray-300">
										<path d="M16 11V3a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v8m2 6v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-2"/>
										<path d="M3 12h18l-2-3H5z"/>
									</svg>
								</div>
							</div>
							<div class="flex-1">
								<div class="glass-card-sm border border-gray-700/40 bg-gray-800/20 timeline-card-spacing">
									<div class="inline-flex items-center gap-2 mb-3 px-3 py-1 rounded-full text-xs bg-gray-700/30 text-gray-300 border border-gray-600/20">
										<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor">
											<rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
											<line x1="16" y1="2" x2="16" y2="6"/>
											<line x1="8" y1="2" x2="8" y2="6"/>
											<line x1="3" y1="10" x2="21" y2="10"/>
										</svg>
										<span class="font-mono font-semibold tracking-wider">1981</span>
									</div>
									<h3 class="text-lg font-bold mb-3 text-white">Lei nº 6.950/81</h3>
									<p class="text-gray-300 leading-relaxed">Aumenta o teto anterior para <span class="font-bold text-green-400">20 salários-mínimos</span>, consolidando o limite legal.</p>
								</div>
							</div>
						</div>
					</div>

					<!-- 1986 - Decreto nº 2.318/86 -->
					<div class="timeline-item relative animate-fade-in" style="animation-delay: 0.4s">
						<!-- Desktop Layout -->
						<div class="hidden md:flex items-center">
							<!-- Left Content -->
							<div class="w-1/2 pr-12 text-right">
								<div class="glass-card p-8 rounded-2xl border border-gray-700/40 bg-gray-800/20 backdrop-blur-xl transform transition-all duration-500 hover:scale-105 hover:shadow-2xl hover:shadow-green-400/10">
									<div class="inline-flex items-center gap-3 mb-4 px-4 py-2 rounded-full bg-gray-700/30 text-gray-300 border border-gray-600/20">
										<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor">
											<rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
											<line x1="16" y1="2" x2="16" y2="6"/>
											<line x1="8" y1="2" x2="8" y2="6"/>
											<line x1="3" y1="10" x2="21" y2="10"/>
										</svg>
										<span class="font-mono text-sm font-semibold tracking-wider">1986</span>
									</div>
									<h3 class="text-2xl font-bold mb-4 text-white">Decreto nº 2.318/86</h3>
									<p class="text-gray-300 text-lg leading-relaxed">Revoga parcialmente o limite de cálculo, <span class="font-bold text-red-400">criando insegurança jurídica</span> e controvérsia que duraria décadas.</p>
								</div>
							</div>
							<!-- Center Icon -->
							<div class="relative flex-shrink-0 z-10">
								<div class="w-20 h-20 rounded-full flex items-center justify-center border-4 bg-gray-800/80 border-gray-600 shadow-gray-600/30 backdrop-blur-xl shadow-2xl timeline-pulse">
									<svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="text-gray-300">
										<path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"/>
										<path d="M12 9v4"/>
										<path d="m12 17 .01 0"/>
									</svg>
								</div>
							</div>
							<!-- Right Spacer -->
							<div class="w-1/2"></div>
						</div>
						<!-- Mobile Layout -->
						<div class="md:hidden flex items-start gap-6">
							<div class="flex-shrink-0 relative z-10">
								<div class="w-16 h-16 rounded-full flex items-center justify-center border-4 bg-gray-800/80 border-gray-600 shadow-gray-600/30 backdrop-blur-xl shadow-2xl">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="text-gray-300">
										<path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"/>
										<path d="M12 9v4"/>
										<path d="m12 17 .01 0"/>
									</svg>
								</div>
							</div>
							<div class="flex-1">
								<div class="glass-card p-6 rounded-xl border border-gray-700/40 bg-gray-800/20 backdrop-blur-xl">
									<div class="inline-flex items-center gap-2 mb-3 px-3 py-1 rounded-full text-xs bg-gray-700/30 text-gray-300 border border-gray-600/20">
										<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor">
											<rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
											<line x1="16" y1="2" x2="16" y2="6"/>
											<line x1="8" y1="2" x2="8" y2="6"/>
											<line x1="3" y1="10" x2="21" y2="10"/>
										</svg>
										<span class="font-mono font-semibold tracking-wider">1986</span>
									</div>
									<h3 class="text-lg font-bold mb-3 text-white">Decreto nº 2.318/86</h3>
									<p class="text-gray-300 leading-relaxed">Revoga parcialmente o limite de cálculo, <span class="font-bold text-red-400">criando insegurança jurídica</span> e controvérsia que duraria décadas.</p>
								</div>
							</div>
						</div>
					</div>

					<!-- Antes 2020 - Jurisprudência Instável -->
					<div class="timeline-item relative animate-fade-in" style="animation-delay: 0.6s">
						<!-- Desktop Layout -->
						<div class="hidden md:flex items-center">
							<!-- Left Spacer -->
							<div class="w-1/2"></div>
							<!-- Center Icon -->
							<div class="relative flex-shrink-0 z-10">
								<div class="w-20 h-20 rounded-full flex items-center justify-center border-4 bg-gray-800/80 border-gray-600 shadow-gray-600/30 backdrop-blur-xl shadow-2xl timeline-pulse">
									<svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="text-gray-300">
										<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
										<polyline points="14,2 14,8 20,8"/>
										<line x1="16" y1="13" x2="8" y2="13"/>
										<line x1="16" y1="17" x2="8" y2="17"/>
										<polyline points="10,9 9,9 8,9"/>
									</svg>
								</div>
							</div>
							<!-- Right Content -->
							<div class="w-1/2 pl-12">
								<div class="glass-card p-8 rounded-2xl border border-gray-700/40 bg-gray-800/20 backdrop-blur-xl transform transition-all duration-500 hover:scale-105 hover:shadow-2xl hover:shadow-green-400/10">
									<div class="inline-flex items-center gap-3 mb-4 px-4 py-2 rounded-full bg-gray-700/30 text-gray-300 border border-gray-600/20">
										<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor">
											<rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
											<line x1="16" y1="2" x2="16" y2="6"/>
											<line x1="8" y1="2" x2="8" y2="6"/>
											<line x1="3" y1="10" x2="21" y2="10"/>
										</svg>
										<span class="font-mono text-sm font-semibold tracking-wider">Antes 2020</span>
									</div>
									<h3 class="text-2xl font-bold mb-4 text-white">Jurisprudência Instável</h3>
									<p class="text-gray-300 text-lg leading-relaxed">STJ ainda reconhecia o teto de 20 SM como válido, <span class="font-bold text-yellow-400">mas sem uniformização ou efeito vinculante</span>.</p>
								</div>
							</div>
						</div>
						<!-- Mobile Layout -->
						<div class="md:hidden flex items-start gap-6">
							<div class="flex-shrink-0 relative z-10">
								<div class="w-16 h-16 rounded-full flex items-center justify-center border-4 bg-gray-800/80 border-gray-600 shadow-gray-600/30 backdrop-blur-xl shadow-2xl">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="text-gray-300">
										<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
										<polyline points="14,2 14,8 20,8"/>
										<line x1="16" y1="13" x2="8" y2="13"/>
										<line x1="16" y1="17" x2="8" y2="17"/>
										<polyline points="10,9 9,9 8,9"/>
									</svg>
								</div>
							</div>
							<div class="flex-1">
								<div class="glass-card p-6 rounded-xl border border-gray-700/40 bg-gray-800/20 backdrop-blur-xl">
									<div class="inline-flex items-center gap-2 mb-3 px-3 py-1 rounded-full text-xs bg-gray-700/30 text-gray-300 border border-gray-600/20">
										<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor">
											<rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
											<line x1="16" y1="2" x2="16" y2="6"/>
											<line x1="8" y1="2" x2="8" y2="6"/>
											<line x1="3" y1="10" x2="21" y2="10"/>
										</svg>
										<span class="font-mono font-semibold tracking-wider">Antes 2020</span>
									</div>
									<h3 class="text-lg font-bold mb-3 text-white">Jurisprudência Instável</h3>
									<p class="text-gray-300 leading-relaxed">STJ ainda reconhecia o teto de 20 SM como válido, <span class="font-bold text-yellow-400">mas sem uniformização ou efeito vinculante</span>.</p>
								</div>
							</div>
						</div>
					</div>

					<!-- 2020 - Tema 1.079 (STJ) - DESTACADO -->
					<div class="timeline-item relative animate-fade-in" style="animation-delay: 0.8s">
						<!-- Desktop Layout -->
						<div class="hidden md:flex items-center">
							<!-- Left Content -->
							<div class="w-1/2 pr-12 text-right">
								<div class="glass-card-green p-8 rounded-2xl transform transition-all duration-500 hover:scale-105 hover:shadow-2xl hover:shadow-green-400/20">
									<div class="inline-flex items-center gap-3 mb-4 px-4 py-2 rounded-full bg-green-400/10 text-green-400 border border-green-400/20">
										<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor">
											<rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
											<line x1="16" y1="2" x2="16" y2="6"/>
											<line x1="8" y1="2" x2="8" y2="6"/>
											<line x1="3" y1="10" x2="21" y2="10"/>
										</svg>
										<span class="font-mono text-sm font-semibold tracking-wider">2020</span>
									</div>
									<h3 class="text-2xl font-bold mb-4 text-green-400">Tema 1.079 (STJ)</h3>
									<p class="text-gray-300 text-lg leading-relaxed">Uniformiza o entendimento: o <span class="font-bold text-green-400">teto de 20 SM é válido</span>, mas <span class="font-bold text-yellow-400">só para empresas que se anteciparam com ação ou pedido formal</span> até 02/05/2024.</p>
								</div>
							</div>
							<!-- Center Icon -->
							<div class="relative flex-shrink-0 z-10">
								<div class="w-20 h-20 rounded-full flex items-center justify-center border-4 bg-green-400/20 border-green-400 shadow-green-400/50 backdrop-blur-xl shadow-2xl animate-green-glow">
									<svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="text-green-400">
										<path d="M20 6L9 17l-5-5"/>
									</svg>
								</div>
							</div>
							<!-- Right Spacer -->
							<div class="w-1/2"></div>
						</div>
						<!-- Mobile Layout -->
						<div class="md:hidden flex items-start gap-6">
							<div class="flex-shrink-0 relative z-10">
								<div class="w-16 h-16 rounded-full flex items-center justify-center border-4 bg-green-400/20 border-green-400 shadow-green-400/50 backdrop-blur-xl shadow-2xl">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="text-green-400">
										<path d="M20 6L9 17l-5-5"/>
									</svg>
								</div>
							</div>
							<div class="flex-1">
								<div class="glass-card-green p-6 rounded-xl">
									<div class="inline-flex items-center gap-2 mb-3 px-3 py-1 rounded-full text-xs bg-green-400/10 text-green-400 border border-green-400/20">
										<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor">
											<rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
											<line x1="16" y1="2" x2="16" y2="6"/>
											<line x1="8" y1="2" x2="8" y2="6"/>
											<line x1="3" y1="10" x2="21" y2="10"/>
										</svg>
										<span class="font-mono font-semibold tracking-wider">2020</span>
									</div>
									<h3 class="text-lg font-bold mb-3 text-green-400">Tema 1.079 (STJ)</h3>
									<p class="text-gray-300 leading-relaxed">Uniformiza o entendimento: o <span class="font-bold text-green-400">teto de 20 SM é válido</span>, mas <span class="font-bold text-yellow-400">só para empresas que se anteciparam</span> até 02/05/2024.</p>
								</div>
							</div>
						</div>
					</div>

					<!-- 2021 - Tema 1.119 (STF) - DESTACADO -->
					<div class="timeline-item relative animate-fade-in" style="animation-delay: 1.0s">
						<!-- Desktop Layout -->
						<div class="hidden md:flex items-center">
							<!-- Left Spacer -->
							<div class="w-1/2"></div>
							<!-- Center Icon -->
							<div class="relative flex-shrink-0 z-10">
								<div class="w-20 h-20 rounded-full flex items-center justify-center border-4 bg-green-400/20 border-green-400 shadow-green-400/50 backdrop-blur-xl shadow-2xl animate-green-glow">
									<svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="text-green-400">
										<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
										<circle cx="9" cy="7" r="4"/>
										<path d="m16 11 2 2 4-4"/>
									</svg>
								</div>
							</div>
							<!-- Right Content -->
							<div class="w-1/2 pl-12">
								<div class="glass-card-green p-8 rounded-2xl transform transition-all duration-500 hover:scale-105 hover:shadow-2xl hover:shadow-green-400/20">
									<div class="inline-flex items-center gap-3 mb-4 px-4 py-2 rounded-full bg-green-400/10 text-green-400 border border-green-400/20">
										<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor">
											<rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
											<line x1="16" y1="2" x2="16" y2="6"/>
											<line x1="8" y1="2" x2="8" y2="6"/>
											<line x1="3" y1="10" x2="21" y2="10"/>
										</svg>
										<span class="font-mono text-sm font-semibold tracking-wider">2021</span>
									</div>
									<h3 class="text-2xl font-bold mb-4 text-green-400">Tema 1.119 (STF)</h3>
									<p class="text-gray-300 text-lg leading-relaxed">Reconhece que <span class="font-bold text-green-400">associações civis podem entrar com ações coletivas</span>, <span class="font-bold text-green-400">sem necessidade de lista de filiados ou autorização expressa</span>. Isso facilita a habilitação legal de empresas em ações já existentes.</p>
								</div>
							</div>
						</div>
						<!-- Mobile Layout -->
						<div class="md:hidden flex items-start gap-6">
							<div class="flex-shrink-0 relative z-10">
								<div class="w-16 h-16 rounded-full flex items-center justify-center border-4 bg-green-400/20 border-green-400 shadow-green-400/50 backdrop-blur-xl shadow-2xl">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="text-green-400">
										<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
										<circle cx="9" cy="7" r="4"/>
										<path d="m16 11 2 2 4-4"/>
									</svg>
								</div>
							</div>
							<div class="flex-1">
								<div class="glass-card-green p-6 rounded-xl">
									<div class="inline-flex items-center gap-2 mb-3 px-3 py-1 rounded-full text-xs bg-green-400/10 text-green-400 border border-green-400/20">
										<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor">
											<rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
											<line x1="16" y1="2" x2="16" y2="6"/>
											<line x1="8" y1="2" x2="8" y2="6"/>
											<line x1="3" y1="10" x2="21" y2="10"/>
										</svg>
										<span class="font-mono font-semibold tracking-wider">2021</span>
									</div>
									<h3 class="text-lg font-bold mb-3 text-green-400">Tema 1.119 (STF)</h3>
									<p class="text-gray-300 leading-relaxed">Reconhece que <span class="font-bold text-green-400">associações civis podem entrar com ações coletivas, sem necessidade de lista de filiados</span>. Facilita a habilitação legal de empresas.</p>
								</div>
							</div>
						</div>
					</div>

					<!-- 2024 - Fim do Prazo - URGENTE -->
					<div class="timeline-item relative animate-fade-in" style="animation-delay: 1.2s">
						<!-- Desktop Layout -->
						<div class="hidden md:flex items-center">
							<!-- Left Content -->
							<div class="w-1/2 pr-12 text-right">
								<div class="glass-card-red p-8 rounded-2xl transform transition-all duration-500 hover:scale-105 hover:shadow-2xl hover:shadow-red-400/20">
									<div class="inline-flex items-center gap-3 mb-4 px-4 py-2 rounded-full bg-red-400/10 text-red-400 border border-red-400/20">
										<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor">
											<rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
											<line x1="16" y1="2" x2="16" y2="6"/>
											<line x1="8" y1="2" x2="8" y2="6"/>
											<line x1="3" y1="10" x2="21" y2="10"/>
										</svg>
										<span class="font-mono text-sm font-semibold tracking-wider">2024</span>
									</div>
									<h3 class="text-2xl font-bold mb-4 text-red-400">Fim do Prazo de Antecipação</h3>
									<p class="text-gray-300 text-lg leading-relaxed">Até <span class="font-bold text-red-400">02 de maio de 2024</span>, empresas deveriam estar judicializadas ou habilitadas para manter o direito retroativo.</p>
								</div>
							</div>
							<!-- Center Icon -->
							<div class="relative flex-shrink-0 z-10">
								<div class="w-20 h-20 rounded-full flex items-center justify-center border-4 bg-red-400/20 border-red-400 shadow-red-400/50 backdrop-blur-xl shadow-2xl timeline-pulse">
									<svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="text-red-400">
										<circle cx="12" cy="12" r="10"/>
										<polyline points="12,6 12,12 16,14"/>
									</svg>
								</div>
							</div>
							<!-- Right Spacer -->
							<div class="w-1/2"></div>
						</div>
						<!-- Mobile Layout -->
						<div class="md:hidden flex items-start gap-6">
							<div class="flex-shrink-0 relative z-10">
								<div class="w-16 h-16 rounded-full flex items-center justify-center border-4 bg-red-400/20 border-red-400 shadow-red-400/50 backdrop-blur-xl shadow-2xl">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="text-red-400">
										<circle cx="12" cy="12" r="10"/>
										<polyline points="12,6 12,12 16,14"/>
									</svg>
								</div>
							</div>
							<div class="flex-1">
								<div class="glass-card-red p-6 rounded-xl">
									<div class="inline-flex items-center gap-2 mb-3 px-3 py-1 rounded-full text-xs bg-red-400/10 text-red-400 border border-red-400/20">
										<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor">
											<rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
											<line x1="16" y1="2" x2="16" y2="6"/>
											<line x1="8" y1="2" x2="8" y2="6"/>
											<line x1="3" y1="10" x2="21" y2="10"/>
										</svg>
										<span class="font-mono font-semibold tracking-wider">2024</span>
									</div>
									<h3 class="text-lg font-bold mb-3 text-red-400">Fim do Prazo de Antecipação</h3>
									<p class="text-gray-300 leading-relaxed">Até <span class="font-bold text-red-400">02 de maio de 2024</span>, empresas deveriam estar judicializadas ou habilitadas para manter o direito retroativo.</p>
								</div>
							</div>
						</div>
					</div>

					<!-- 2029 - Prescrição Final - URGENTE -->
					<div class="timeline-item relative animate-fade-in" style="animation-delay: 1.4s">
						<!-- Desktop Layout -->
						<div class="hidden md:flex items-center">
							<!-- Left Spacer -->
							<div class="w-1/2"></div>
							<!-- Center Icon -->
							<div class="relative flex-shrink-0 z-10">
								<div class="w-20 h-20 rounded-full flex items-center justify-center border-4 bg-red-400/20 border-red-400 shadow-red-400/50 backdrop-blur-xl shadow-2xl timeline-pulse">
									<svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="text-red-400">
										<path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"/>
										<path d="M12 9v4"/>
										<path d="m12 17 .01 0"/>
									</svg>
								</div>
							</div>
							<!-- Right Content -->
							<div class="w-1/2 pl-12">
								<div class="glass-card-red p-8 rounded-2xl transform transition-all duration-500 hover:scale-105 hover:shadow-2xl hover:shadow-red-400/20">
									<div class="inline-flex items-center gap-3 mb-4 px-4 py-2 rounded-full bg-red-400/10 text-red-400 border border-red-400/20">
										<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor">
											<rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
											<line x1="16" y1="2" x2="16" y2="6"/>
											<line x1="8" y1="2" x2="8" y2="6"/>
											<line x1="3" y1="10" x2="21" y2="10"/>
										</svg>
										<span class="font-mono text-sm font-semibold tracking-wider">2029</span>
									</div>
									<h3 class="text-2xl font-bold mb-4 text-red-400">Prazo-limite de Recuperação</h3>
									<p class="text-gray-300 text-lg leading-relaxed">Empresas têm até <span class="font-bold text-red-400">maio de 2029</span> para aproveitar esse direito — após isso, os valores prescrevem definitivamente.</p>
								</div>
							</div>
						</div>
						<!-- Mobile Layout -->
						<div class="md:hidden flex items-start gap-6">
							<div class="flex-shrink-0 relative z-10">
								<div class="w-16 h-16 rounded-full flex items-center justify-center border-4 bg-red-400/20 border-red-400 shadow-red-400/50 backdrop-blur-xl shadow-2xl">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="text-red-400">
										<path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"/>
										<path d="M12 9v4"/>
										<path d="m12 17 .01 0"/>
									</svg>
								</div>
							</div>
							<div class="flex-1">
								<div class="glass-card-red p-6 rounded-xl">
									<div class="inline-flex items-center gap-2 mb-3 px-3 py-1 rounded-full text-xs bg-red-400/10 text-red-400 border border-red-400/20">
										<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor">
											<rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
											<line x1="16" y1="2" x2="16" y2="6"/>
											<line x1="8" y1="2" x2="8" y2="6"/>
											<line x1="3" y1="10" x2="21" y2="10"/>
										</svg>
										<span class="font-mono font-semibold tracking-wider">2029</span>
									</div>
									<h3 class="text-lg font-bold mb-3 text-red-400">Prazo-limite de Recuperação</h3>
									<p class="text-gray-300 leading-relaxed">Empresas têm até <span class="font-bold text-red-400">maio de 2029</span> para aproveitar esse direito — após isso, os valores prescrevem definitivamente.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Conclusão da Timeline -->
			<div class="text-center margin-section">
				<div class="glass-card-lg border border-green-400/30 max-w-6xl mx-auto element-spacing-lg">
					<div class="flex items-center justify-center gap-3 mb-8">
						<svg class="text-green-400" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor">
							<path d="M20 6L9 17l-5-5"/>
						</svg>
						<h3 class="text-3xl md:text-4xl font-bold text-green-400">
							✅ Conclusão
						</h3>
					</div>
					
					<p class="text-xl md:text-2xl text-gray-300 mb-8 leading-relaxed">
						Essa linha do tempo mostra que o seu direito <span class="font-bold text-green-400">não surgiu agora</span> — ele é fruto de mais de <span class="font-bold text-netword-accent">40 anos de embates legais</span>, <span class="font-bold text-green-400">finalmente decididos em favor dos contribuintes</span>.
					</p>

					<div class="glass-card-yellow margin-element element-spacing-sm py-5">
						<div class="text-lg md:text-xl text-center leading-relaxed">
							<p class="text-gray-300 mb-4">
								Se sua empresa contribuiu além do limite de 20 salários-mínimos nesse período e ainda
							</p>
							<div class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-red-500/20 border-2 border-red-500/40">
								<svg class="text-red-400" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor">
									<path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"/>
									<path d="M12 9v4"/>
									<path d="m12 17 .01 0"/>
								</svg>
								<span class="text-red-400 font-bold text-xl">NÃO SE HABILITOU</span>
							</div>
						</div>
					</div>

					<!-- Destaque principal -->
					<div class="glass-card-md border border-green-400/40 element-spacing-lg">
						<p class="text-xl md:text-2xl text-gray-300 mb-6 leading-relaxed">
							O que a maioria das empresas não sabe é que <span class="font-bold text-green-400">a lei já limitava há décadas quanto pode ser cobrado sobre a folha de pagamento para o Sistema S</span>. Mas esse limite foi ignorado por anos — e muitas empresas acabaram pagando bem mais do que deviam.
						</p>
						
						<p class="text-lg md:text-xl text-gray-300 mb-6 leading-relaxed">
							Em 2020, <span class="font-bold text-green-400">o STJ confirmou que empresas que já haviam se posicionado (com ações ou pedidos formais) têm direito de recuperar esse valor pago a mais</span> — até 46 meses de contribuições.
						</p>

						<p class="text-lg md:text-xl text-gray-300 mb-8 leading-relaxed">
							E o melhor: <span class="font-bold text-green-400">não é preciso entrar com ação própria</span>. Graças a uma outra decisão do STF, <span class="font-bold text-green-400">você pode se habilitar em ações coletivas já existentes, sem necessidade de vínculo, autorização ou lista de associados.</span>
						</p>

						<div class="inline-flex items-start gap-3 md:gap-4 content-padding-sm rounded-xl bg-netword-primary/10 border border-netword-primary/30">
							<svg class="text-netword-primary flex-shrink-0 mt-1" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor">
								<circle cx="12" cy="12" r="10"/>
								<path d="m9 12 2 2 4-4"/>
							</svg>
							<div>
								<h4 class="font-bold text-netword-primary text-lg mb-2">💡 Resultado:</h4>
								<p class="text-gray-300 text-lg leading-relaxed">
									<span class="font-bold text-netword-accent">Você pode recuperar tudo o que foi pago indevidamente entre 2020 e 2024</span> — e transformar esse valor em capital de giro agora.
								</p>
							</div>
						</div>
					</div>

					<!-- Alerta de prazo -->
					<div class="margin-element element-spacing-md">
						<div class="flex items-center justify-center gap-3 mb-6">
							<svg class="text-red-400 animate-pulse" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor">
								<path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"/>
								<path d="M12 9v4"/>
								<path d="m12 17 .01 0"/>
							</svg>
							<h3 class="text-2xl md:text-3xl font-bold text-white">
								Prazo Final: <span class="text-red-400">Maio de 2029</span>
							</h3>
						</div>
						
						<p class="text-lg text-gray-300 mb-8 leading-relaxed">
							O direito expira em maio de 2029, portanto sua empresa tem <span class="font-bold text-red-400">menos de 4 anos</span> para aproveitar dos benefícios dessa decisão.
						</p>
					</div>
					
					<div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
						<div class="flex items-center gap-2 text-green-400 font-semibold">
							<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
								<path d="M20 6L9 17l-5-5"/>
							</svg>
							<span>Jurisprudência consolidada</span>
						</div>
						<div class="flex items-center gap-2 text-green-400 font-semibold">
							<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
								<path d="M16 11V3a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v8m2 6v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-2"/>
								<path d="M3 12h18l-2-3H5z"/>
							</svg>
							<span>Processo 100% legal</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Urgência -->
	<section class="section-spacing">
		<div class="container container-spacing">
			<div class="max-w-6xl mx-auto animate-fade-in">
				<div class="glass-card-lg border border-red-500/30 element-spacing-lg">
					<h2 class="text-3xl md:text-4xl font-space font-bold text-red-400 mb-8 text-center neon-text">
						⚠️ ATENÇÃO: Prazo Limitado até Maio de 2029
					</h2>
					<div class="text-center mb-8">
						<p class="text-xl text-netword-white mb-4">
							<span class="font-bold text-netword-accent neon-text">Você tem menos de 4 anos</span> para aproveitar essa decisão judicial histórica.
						</p>
					</div>
					<div class="grid grid-mobile-1 md:grid-cols-3 grid-spacing-md">
						<div class="glass-card-sm text-center element-spacing-sm">
							<svg class="text-red-400 mx-auto mb-4 animate-pulse" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor">
								<path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"/>
								<path d="M12 9v4"/>
								<path d="m12 17 .01 0"/>
							</svg>
							<h3 class="font-space font-semibold text-lg mb-2 text-netword-primary">Prazo Fatal</h3>
							<p class="text-netword-white/80">Habilitação deve ser feita até maio de 2029 - cada mês parado é oportunidade perdida.</p>
						</div>
						<div class="glass-card-sm text-center element-spacing-sm">
							<svg class="text-red-400 mx-auto mb-4 animate-pulse" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor">
								<polyline points="22,12 18,12 15,21 9,3 6,12 2,12"/>
							</svg>
							<h3 class="font-space font-semibold text-lg mb-2 text-netword-primary">Correção Monetária</h3>
							<p class="text-netword-white/80">Valores crescem mensalmente - quanto antes se habilitar, maior o montante recuperado.</p>
						</div>
						<div class="glass-card-sm text-center element-spacing-sm">
							<svg class="text-red-400 mx-auto mb-4 animate-pulse" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor">
								<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
								<circle cx="9" cy="7" r="4"/>
								<path d="m16 11 2 2 4-4"/>
							</svg>
							<h3 class="font-space font-semibold text-lg mb-2 text-netword-primary">Vantagem Competitiva</h3>
							<p class="text-netword-white/80">Empresas que já recuperaram esses créditos ganham capital para investir e crescer.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Como Posso Buscar Esse Direito -->
	<section id="direito" class="section-spacing relative overflow-hidden">
		<div class="absolute inset-0 bg-gradient-to-r from-netword-primary/10 to-netword-accent/10"></div>
		<div class="container container-spacing relative">
			<div class="max-w-6xl mx-auto text-center animate-fade-in element-spacing-lg">
				<h2 class="text-4xl md:text-5xl font-space font-bold mb-12 gradient-text">
					Como Posso Buscar Esse Direito?
				</h2>
				<div class="glass-card-lg tech-border element-spacing-lg">
					<div class="mb-8">
						<svg class="text-netword-primary mx-auto mb-6 animate-float" width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor">
							<path d="M16 11V3a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v8m2 6v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-2"/>
							<path d="M3 12h18l-2-3H5z"/>
						</svg>
						<h3 class="text-2xl md:text-3xl font-space font-bold text-netword-primary mb-6">
							Apenas Via Ações Judiciais Exclusivas
						</h3>
					</div>
					<p class="text-lg md:text-xl text-netword-white/90 leading-relaxed mb-8">
						Apenas empresas habilitadas nas <span class="font-bold text-netword-accent neon-text">Ações Coletivas Exclusivas</span> (Temas 1.079 e 1.119 do STJ) têm legitimidade para recuperar esses valores – e nós cuidamos de todo o processo para você, de forma <span class="font-bold text-netword-primary">segura e 100% legal</span>.
					</p>
					<div class="grid md:grid-cols-2 grid-spacing-md">
						<div class="glass-card-sm element-spacing-sm">
							<svg class="text-netword-primary mb-4 mx-auto" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor">
								<path d="M20 6L9 17l-5-5"/>
							</svg>
							<h4 class="font-space font-semibold text-lg mb-2 text-netword-primary">Processo Seguro</h4>
							<p class="text-netword-white/80">Fundamentado em decisões do STJ e STF, com jurisprudência consolidada</p>
						</div>
						<div class="glass-card-sm element-spacing-sm">
							<svg class="text-netword-primary mb-4 mx-auto" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor">
								<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
							</svg>
							<h4 class="font-space font-semibold text-lg mb-2 text-netword-primary">100% Legal</h4>
							<p class="text-netword-white/80">Processo judicial oficial com acompanhamento total da nossa equipe especializada</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Alerta sobre Ações Genéricas -->
	<section class="section-spacing relative overflow-hidden">
		<div class="absolute inset-0 bg-gradient-to-r from-red-500/10 to-orange-500/10"></div>
		<div class="container container-spacing relative">
			<div class="max-w-5xl mx-auto text-center animate-fade-in">
				<div class="glass-card-lg border border-red-500/30 element-spacing-lg">
					<div class="flex items-center justify-center gap-3 mb-6">
						<svg class="text-red-400 animate-pulse" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor">
							<path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"/>
							<path d="M12 9v4"/>
							<path d="m12 17 .01 0"/>
						</svg>
						<h3 class="text-2xl md:text-3xl font-bold text-red-400">
							⚠️ ATENÇÃO IMPORTANTE
						</h3>
					</div>
					
					<h4 class="text-xl md:text-2xl font-space font-bold text-white mb-6">
						Cuidado com Ações Coletivas Genéricas
					</h4>
					
					<p class="text-lg md:text-xl text-gray-300 leading-relaxed mb-6">
						O Judiciário já pacificou que <span class="font-bold text-red-400">é vedada a utilização de ações coletivas genéricas</span>, pois estas <span class="font-bold text-yellow-400">não têm adequação ao Tema 1.119 do STF</span>.
					</p>
					
					<div class="glass-card-sm border border-green-400/30 element-spacing-sm">
						<div class="flex items-start gap-4">
							<svg class="text-green-400 flex-shrink-0 mt-1" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor">
								<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
							</svg>
							<div class="text-left">
								<h5 class="font-bold text-green-400 text-lg mb-2">Nossa Garantia de Segurança</h5>
								<p class="text-gray-300 leading-relaxed">
									<span class="font-bold text-green-400">Apenas poderá usar do direito pleiteado aqueles que se habilitarem na ação judicial que permite contribuir na forma mencionada.</span> São <span class="font-bold text-netword-accent">AÇÕES JUDICIAIS EXCLUSIVAS</span>. Apenas aqueles que as possuem podem buscar tal direito, <span class="font-bold text-green-400">e nós conseguimos fazer isso por você de forma segura e legal</span>.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Como Funciona o Processo -->
	<section class="section-spacing">
		<div class="container container-spacing">
			<div class="max-w-7xl mx-auto animate-fade-in element-spacing-xl">
				<h2 class="text-4xl md:text-5xl font-space font-bold text-center mb-16 gradient-text">
					Como Funciona o Processo
				</h2>
				<div class="grid lg:grid-cols-3 grid-spacing-lg">
					
					<!-- Etapa 1: Análise -->
					<div class="glass-card-md tech-border text-center element-spacing-lg">
						<div class="w-20 h-20 bg-netword-primary/20 rounded-full flex items-center justify-center mx-auto mb-6 border-2 border-netword-primary/30">
							<svg class="text-netword-primary" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor">
								<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
								<polyline points="14,2 14,8 20,8"/>
								<line x1="16" y1="13" x2="8" y2="13"/>
								<line x1="16" y1="17" x2="8" y2="17"/>
								<polyline points="10,9 9,9 8,9"/>
							</svg>
						</div>
						<div class="inline-flex items-center gap-2 mb-4 px-4 py-2 rounded-full bg-netword-primary/10 text-netword-primary border border-netword-primary/20">
							<span class="font-mono text-sm font-semibold">ETAPA 1</span>
						</div>
						<h3 class="text-2xl font-space font-bold mb-4 text-netword-primary">
							Análise de 48 Meses
						</h3>
						<p class="text-netword-white/80 mb-6 leading-relaxed">
							Análise completa das suas contribuições ao Sistema S em até <span class="font-bold text-netword-accent">5 dias úteis</span> através do e-CAC, identificando valores pagos indevidamente.
						</p>
						<div class="flex items-center justify-center gap-2 text-green-400 font-semibold">
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor">
								<path d="M20 6L9 17l-5-5"/>
							</svg>
							<span class="text-sm">Consulta ao e-CAC autorizada</span>
						</div>
					</div>

					<!-- Etapa 2: Habilitação -->
					<div class="glass-card-md tech-border text-center element-spacing-lg">
						<div class="w-20 h-20 bg-netword-accent/20 rounded-full flex items-center justify-center mx-auto mb-6 border-2 border-netword-accent/30">
							<svg class="text-netword-accent" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor">
								<path d="M16 11V3a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v8m2 6v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-2"/>
								<path d="M3 12h18l-2-3H5z"/>
							</svg>
						</div>
						<div class="inline-flex items-center gap-2 mb-4 px-4 py-2 rounded-full bg-netword-accent/10 text-netword-accent border border-netword-accent/20">
							<span class="font-mono text-sm font-semibold">ETAPA 2</span>
						</div>
						<h3 class="text-2xl font-space font-bold mb-4 text-netword-accent">
							Habilitação na Ação
						</h3>
						<p class="text-netword-white/80 mb-6 leading-relaxed">
							Habilitação na <span class="font-bold text-netword-accent">ação coletiva vencedora</span> sem custos adicionais. Processo 100% legal baseado nos Temas 1.079 e 1.119.
						</p>
						<div class="flex items-center justify-center gap-2 text-green-400 font-semibold">
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor">
								<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
							</svg>
							<span class="text-sm">Sem custos adicionais</span>
						</div>
					</div>

					<!-- Etapa 3: Recuperação -->
					<div class="glass-card-md tech-border text-center element-spacing-lg">
						<div class="w-20 h-20 bg-green-400/20 rounded-full flex items-center justify-center mx-auto mb-6 border-2 border-green-400/30">
							<svg class="text-green-400" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor">
								<line x1="12" y1="1" x2="12" y2="23"/>
								<path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>
							</svg>
						</div>
						<div class="inline-flex items-center gap-2 mb-4 px-4 py-2 rounded-full bg-green-400/10 text-green-400 border border-green-400/20">
							<span class="font-mono text-sm font-semibold">ETAPA 3</span>
						</div>
						<h3 class="text-2xl font-space font-bold mb-4 text-green-400">
							Valores Liberados
						</h3>
						<p class="text-netword-white/80 mb-6 leading-relaxed">
							Valores recuperados disponíveis para <span class="font-bold text-green-400">compensação em até 40 dias</span> da apresentação da apuração dos resultados.
						</p>
						<div class="flex items-center justify-center gap-2 text-green-400 font-semibold">
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor">
								<circle cx="12" cy="12" r="10"/>
								<polyline points="12,6 12,12 16,14"/>
							</svg>
							<span class="text-sm">Prazo máximo de 40 dias</span>
						</div>
					</div>
				</div>

				<!-- Destaque sobre empresas que já usaram -->
				<div class="margin-section">
					<div class="glass-card-lg border border-netword-primary/30 element-spacing-lg">
						<div class="text-center">
							<h3 class="text-2xl md:text-3xl font-space font-bold mb-6 text-netword-primary neon-text">
								🚀 Milhares de Empresas Já Recuperaram
							</h3>
							<p class="text-lg md:text-xl text-netword-white/90 leading-relaxed mb-6">
								Mensalmente, <span class="font-bold text-netword-accent">milhares de empresas em todo o Brasil</span> utilizam dos benefícios concedidos pelos Temas 1.079 e 1.119, recuperando <span class="font-bold text-netword-primary neon-text">milhões de reais</span> que lhes pertencem.
							</p>
							<div class="inline-flex items-center gap-3 px-6 py-3 rounded-full bg-red-500/10 border border-red-500/20">
								<svg class="text-red-400 animate-pulse" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
									<path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"/>
									<path d="M12 9v4"/>
									<path d="m12 17 .01 0"/>
								</svg>
								<span class="text-red-400 font-semibold">
									Valores não requeridos ficam em benefício do fisco em detrimento aos contribuintes
								</span>
							</div>
						</div>
					</div>
				</div>

				<!-- Importante sobre correção dos valores -->
				<div class="margin-element">
					<div class="glass-card-yellow element-spacing-sm">
						<div class="flex items-start gap-4">
							<svg class="text-yellow-400 flex-shrink-0 mt-1" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor">
								<path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"/>
								<path d="M12 9v4"/>
								<path d="m12 17 .01 0"/>
							</svg>
							<div>
								<h4 class="font-space font-bold text-yellow-400 mb-2">
									⚠️ Importante sobre Valores Estimados
								</h4>
								<p class="text-netword-white/80 leading-relaxed">
									Os valores estimados são corrigidos <span class="font-bold text-yellow-400">mensalmente</span> e, portanto, <span class="font-bold text-netword-accent">serão majorados</span> com o tempo. Quanto antes iniciar o processo, maior será o valor recuperado.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Formulário de Contato -->
	<section id="contato" class="section-spacing-lg">
		<div class="container container-spacing">
			<div class="max-w-3xl mx-auto animate-slide-up element-spacing-lg">
				<h2 class="text-4xl md:text-5xl font-space font-bold text-center mb-16 gradient-text">
					Solicite Seu Diagnóstico Gratuito
				</h2>
				<div class="glass-card-lg tech-border">
					<form method="post" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" class="form-spacing">
						<?php wp_nonce_field('diagnostico_form', 'diagnostico_nonce'); ?>
						<input type="hidden" name="action" value="submit_diagnostico">
						
						<div class="form-field-spacing">
							<label for="nome" class="block font-space font-semibold text-netword-primary text-sm md:text-base">Nome Completo</label>
							<input
								id="nome"
								name="nome"
								type="text"
								required
								class="w-full glass-card border-netword-primary/30 text-netword-white placeholder:text-netword-white/50 focus:border-netword-primary focus:ring-netword-primary/20 bg-transparent rounded-lg px-3 md:px-4 py-2 md:py-3 text-sm md:text-base"
							/>
						</div>
						<div class="form-field-spacing">
							<label for="empresa" class="block font-space font-semibold text-netword-primary text-sm md:text-base">Empresa</label>
							<input
								id="empresa"
								name="empresa"
								type="text"
								required
								class="w-full glass-card border-netword-primary/30 text-netword-white placeholder:text-netword-white/50 focus:border-netword-primary focus:ring-netword-primary/20 bg-transparent rounded-lg px-3 md:px-4 py-2 md:py-3 text-sm md:text-base"
							/>
						</div>
						<div class="form-field-spacing">
							<label for="cargo" class="block font-space font-semibold text-netword-primary text-sm md:text-base">Cargo</label>
							<input
								id="cargo"
								name="cargo"
								type="text"
								required
								class="w-full glass-card border-netword-primary/30 text-netword-white placeholder:text-netword-white/50 focus:border-netword-primary focus:ring-netword-primary/20 bg-transparent rounded-lg px-3 md:px-4 py-2 md:py-3 text-sm md:text-base"
							/>
						</div>
						<div class="form-field-spacing">
							<label for="email" class="block font-space font-semibold text-netword-primary text-sm md:text-base">E-mail Corporativo</label>
							<input
								id="email"
								name="email"
								type="email"
								required
								class="w-full glass-card border-netword-primary/30 text-netword-white placeholder:text-netword-white/50 focus:border-netword-primary focus:ring-netword-primary/20 bg-transparent rounded-lg px-3 md:px-4 py-2 md:py-3 text-sm md:text-base"
							/>
						</div>
						<div class="form-field-spacing">
							<label for="telefone" class="block font-space font-semibold text-netword-primary text-sm md:text-base">Telefone/WhatsApp</label>
							<input
								id="telefone"
								name="telefone"
								type="tel"
								required
								class="w-full glass-card border-netword-primary/30 text-netword-white placeholder:text-netword-white/50 focus:border-netword-primary focus:ring-netword-primary/20 bg-transparent rounded-lg px-3 md:px-4 py-2 md:py-3 text-sm md:text-base"
							/>
						</div>
						<button type="submit" class="w-full glass-button font-semibold margin-element">
							<svg class="mr-3" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
								<circle cx="12" cy="12" r="4"/>
								<path d="m22 12-3 3-3-3-3 3-3-3"/>
							</svg>
							Enviar e Agendar Diagnóstico
						</button>
					</form>
				</div>
			</div>
		</div>
	</section>

</div>

<?php
get_footer();
