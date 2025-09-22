<?php
/**
 * Template part for displaying the legal timeline section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package scs_consultoria
 */

?>

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
				Linha do Tempo Jurídica
				<span class="block text-green-400 text-3xl md:text-4xl mt-2 font-light">
					A Jornada do Direito à Recuperação
				</span>
			</h2>
		</div>

		<!-- Timeline Vertical -->
		<div class="relative max-w-6xl mx-auto margin-section">
			<!-- Timeline Container -->
			<div class="timeline-container relative">
				<!-- Central Line -->
				<div class="absolute left-1/2 top-0 bottom-0 w-1 bg-gradient-to-b from-green-400 via-green-500 to-green-600 transform -translate-x-1/2 shadow-lg shadow-green-400/30"></div>
				
				<!-- Timeline Items -->
				<div class="space-y-12 md:space-y-16">
					
					<!-- 1973 -->
					<div class="timeline-item flex items-center relative group">
						<!-- Timeline Marker -->
						<div class="absolute left-1/2 w-6 h-6 bg-green-400 rounded-full transform -translate-x-1/2 z-10 shadow-lg shadow-green-400/50 group-hover:scale-110 transition-transform duration-300 border-4 border-slate-900"></div>
						
						<!-- Content Card - Left -->
						<div class="timeline-content w-full md:w-5/12 md:ml-auto md:mr-8 transform translate-x-0 opacity-100 transition-all duration-700">
							<div class="glass-card-lg border border-green-400/30 p-6 rounded-xl hover:border-green-400/50 hover:shadow-xl hover:shadow-green-400/20 transition-all duration-300">
								<div class="flex items-center justify-between mb-4">
									<h3 class="text-2xl font-bold text-green-400">1973</h3>
									<div class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></div>
								</div>
								<h4 class="text-xl font-bold text-white mb-3">Lei nº 5.890/73</h4>
								<p class="text-gray-300 leading-relaxed">
									Introduz <strong class="text-green-400">limite de 10 salários-mínimos</strong> na base de cálculo das contribuições para o Sistema S.
								</p>
							</div>
						</div>
					</div>

					<!-- 1981 -->
					<div class="timeline-item flex items-center relative group">
						<!-- Timeline Marker -->
						<div class="absolute left-1/2 w-6 h-6 bg-green-400 rounded-full transform -translate-x-1/2 z-10 shadow-lg shadow-green-400/50 group-hover:scale-110 transition-transform duration-300 border-4 border-slate-900"></div>
						
						<!-- Content Card - Right -->
						<div class="timeline-content w-full md:w-5/12 md:ml-8 transform translate-x-0 opacity-100 transition-all duration-700">
							<div class="glass-card-lg border border-green-400/30 p-6 rounded-xl hover:border-green-400/50 hover:shadow-xl hover:shadow-green-400/20 transition-all duration-300">
								<div class="flex items-center justify-between mb-4">
									<h3 class="text-2xl font-bold text-green-400">1981</h3>
									<div class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></div>
								</div>
								<h4 class="text-xl font-bold text-white mb-3">Lei nº 6.950/81</h4>
								<p class="text-gray-300 leading-relaxed">
									Aumenta o teto anterior para <strong class="text-green-400">20 salários-mínimos</strong>, consolidando o limite legal.
								</p>
							</div>
						</div>
					</div>

					<!-- 1986 -->
					<div class="timeline-item flex items-center relative group">
						<!-- Timeline Marker -->
						<div class="absolute left-1/2 w-6 h-6 bg-red-400 rounded-full transform -translate-x-1/2 z-10 shadow-lg shadow-red-400/50 group-hover:scale-110 transition-transform duration-300 border-4 border-slate-900"></div>
						
						<!-- Content Card - Left -->
						<div class="timeline-content w-full md:w-5/12 md:ml-auto md:mr-8 transform translate-x-0 opacity-100 transition-all duration-700">
							<div class="glass-card-lg border border-red-400/30 p-6 rounded-xl hover:border-red-400/50 hover:shadow-xl hover:shadow-red-400/20 transition-all duration-300">
								<div class="flex items-center justify-between mb-4">
									<h3 class="text-2xl font-bold text-red-400">1986</h3>
									<div class="w-2 h-2 bg-red-400 rounded-full animate-pulse"></div>
								</div>
								<h4 class="text-xl font-bold text-white mb-3">Decreto nº 2.318/86</h4>
								<p class="text-gray-300 leading-relaxed">
									Revoga parcialmente o limite de cálculo, <strong class="text-red-400">criando insegurança jurídica</strong> e controvérsia que duraria décadas.
								</p>
							</div>
						</div>
					</div>

					<!-- Antes de 2020 -->
					<div class="timeline-item flex items-center relative group">
						<!-- Timeline Marker -->
						<div class="absolute left-1/2 w-6 h-6 bg-yellow-400 rounded-full transform -translate-x-1/2 z-10 shadow-lg shadow-yellow-400/50 group-hover:scale-110 transition-transform duration-300 border-4 border-slate-900"></div>
						
						<!-- Content Card - Right -->
						<div class="timeline-content w-full md:w-5/12 md:ml-8 transform translate-x-0 opacity-100 transition-all duration-700">
							<div class="glass-card-lg border border-yellow-400/30 p-6 rounded-xl hover:border-yellow-400/50 hover:shadow-xl hover:shadow-yellow-400/20 transition-all duration-300">
								<div class="flex items-center justify-between mb-4">
									<h3 class="text-2xl font-bold text-yellow-400">Antes de 2020</h3>
									<div class="w-2 h-2 bg-yellow-400 rounded-full animate-pulse"></div>
								</div>
								<h4 class="text-xl font-bold text-white mb-3">Jurisprudência instável</h4>
								<p class="text-gray-300 leading-relaxed">
									STJ ainda reconhecia o teto de 20 SM como válido, <strong class="text-yellow-400">mas sem uniformização ou efeito vinculante</strong>.
								</p>
							</div>
						</div>
					</div>

					<!-- 2020 - Marco Importante -->
					<div class="timeline-item flex items-center relative group">
						<!-- Timeline Marker - Destacado -->
						<div class="absolute left-1/2 w-8 h-8 bg-gradient-to-r from-green-400 to-green-500 rounded-full transform -translate-x-1/2 z-10 shadow-xl shadow-green-400/70 group-hover:scale-125 transition-transform duration-300 border-4 border-slate-900 animate-pulse">
							<div class="absolute inset-1 bg-white rounded-full"></div>
							<div class="absolute inset-2 bg-green-400 rounded-full"></div>
						</div>
						
						<!-- Content Card - Left - Destacado -->
						<div class="timeline-content w-full md:w-5/12 md:ml-auto md:mr-8 transform translate-x-0 opacity-100 transition-all duration-700">
							<div class="glass-card-lg border-2 border-green-400/50 bg-green-400/5 p-8 rounded-xl hover:border-green-400/70 hover:shadow-2xl hover:shadow-green-400/30 transition-all duration-300 relative overflow-hidden">
								<!-- Glow effect -->
								<div class="absolute inset-0 bg-gradient-to-r from-green-400/10 to-transparent rounded-xl"></div>
								<div class="relative">
									<div class="flex items-center justify-between mb-4">
										<h3 class="text-3xl font-bold text-green-400">2020</h3>
										<div class="flex items-center gap-2">
											<span class="px-3 py-1 bg-green-400/20 text-green-400 text-xs font-bold rounded-full border border-green-400/30">MARCO</span>
											<div class="w-3 h-3 bg-green-400 rounded-full animate-pulse"></div>
										</div>
									</div>
									<h4 class="text-xl font-bold text-white mb-4">Tema 1.079 – STJ</h4>
									<p class="text-gray-300 leading-relaxed">
										Uniformiza o entendimento: o <strong class="text-green-400">teto de 20 SM é válido</strong>, mas <strong class="text-yellow-400">só para empresas que se anteciparam com ação ou pedido formal</strong> até <strong class="text-red-400">02/05/2024</strong>.
									</p>
								</div>
							</div>
						</div>
					</div>

					<!-- 2021 - Marco Importante -->
					<div class="timeline-item flex items-center relative group">
						<!-- Timeline Marker - Destacado -->
						<div class="absolute left-1/2 w-8 h-8 bg-gradient-to-r from-green-400 to-green-500 rounded-full transform -translate-x-1/2 z-10 shadow-xl shadow-green-400/70 group-hover:scale-125 transition-transform duration-300 border-4 border-slate-900 animate-pulse">
							<div class="absolute inset-1 bg-white rounded-full"></div>
							<div class="absolute inset-2 bg-green-400 rounded-full"></div>
						</div>
						
						<!-- Content Card - Right - Destacado -->
						<div class="timeline-content w-full md:w-5/12 md:ml-8 transform translate-x-0 opacity-100 transition-all duration-700">
							<div class="glass-card-lg border-2 border-green-400/50 bg-green-400/5 p-8 rounded-xl hover:border-green-400/70 hover:shadow-2xl hover:shadow-green-400/30 transition-all duration-300 relative overflow-hidden">
								<!-- Glow effect -->
								<div class="absolute inset-0 bg-gradient-to-l from-green-400/10 to-transparent rounded-xl"></div>
								<div class="relative">
									<div class="flex items-center justify-between mb-4">
										<h3 class="text-3xl font-bold text-green-400">2021</h3>
										<div class="flex items-center gap-2">
											<span class="px-3 py-1 bg-green-400/20 text-green-400 text-xs font-bold rounded-full border border-green-400/30">MARCO</span>
											<div class="w-3 h-3 bg-green-400 rounded-full animate-pulse"></div>
										</div>
									</div>
									<h4 class="text-xl font-bold text-white mb-4">Tema 1.119 – STF</h4>
									<p class="text-gray-300 leading-relaxed">
										Reconhece que <strong class="text-green-400">associações civis podem entrar com ações coletivas</strong>, <strong class="text-green-400">sem necessidade de lista de filiados ou autorização expressa</strong>. Isso <strong class="text-green-400">facilita a habilitação legal de empresas em ações já existentes</strong>.
									</p>
								</div>
							</div>
						</div>
					</div>

					<!-- 2024 - Prazo Crítico -->
					<div class="timeline-item flex items-center relative group">
						<!-- Timeline Marker -->
						<div class="absolute left-1/2 w-8 h-8 bg-gradient-to-r from-red-400 to-red-500 rounded-full transform -translate-x-1/2 z-10 shadow-xl shadow-red-400/70 group-hover:scale-125 transition-transform duration-300 border-4 border-slate-900">
							<div class="absolute inset-1 bg-white rounded-full"></div>
							<div class="absolute inset-2 bg-red-400 rounded-full animate-pulse"></div>
						</div>
						
						<!-- Content Card - Left -->
						<div class="timeline-content w-full md:w-5/12 md:ml-auto md:mr-8 transform translate-x-0 opacity-100 transition-all duration-700">
							<div class="glass-card-lg border-2 border-red-400/50 bg-red-400/5 p-8 rounded-xl hover:border-red-400/70 hover:shadow-2xl hover:shadow-red-400/30 transition-all duration-300 relative overflow-hidden">
								<!-- Glow effect -->
								<div class="absolute inset-0 bg-gradient-to-r from-red-400/10 to-transparent rounded-xl"></div>
								<div class="relative">
									<div class="flex items-center justify-between mb-4">
										<h3 class="text-3xl font-bold text-red-400">2024</h3>
										<div class="flex items-center gap-2">
											<span class="px-3 py-1 bg-red-400/20 text-red-400 text-xs font-bold rounded-full border border-red-400/30">CRÍTICO</span>
											<div class="w-3 h-3 bg-red-400 rounded-full animate-pulse"></div>
										</div>
									</div>
									<h4 class="text-xl font-bold text-white mb-4">Fim do prazo de antecipação</h4>
									<p class="text-gray-300 leading-relaxed">
										Até <strong class="text-red-400">02 de maio de 2024</strong>, empresas deveriam estar judicializadas ou habilitadas para manter o direito retroativo.
									</p>
								</div>
							</div>
						</div>
					</div>

					<!-- 2029 - Prazo Final -->
					<div class="timeline-item flex items-center relative group">
						<!-- Timeline Marker -->
						<div class="absolute left-1/2 w-10 h-10 bg-gradient-to-r from-red-500 to-red-600 rounded-full transform -translate-x-1/2 z-10 shadow-2xl shadow-red-500/80 group-hover:scale-125 transition-transform duration-300 border-4 border-slate-900">
							<div class="absolute inset-1 bg-white rounded-full"></div>
							<div class="absolute inset-2 bg-red-500 rounded-full animate-pulse"></div>
							<div class="absolute inset-3 bg-white rounded-full animate-ping"></div>
						</div>
						
						<!-- Content Card - Right -->
						<div class="timeline-content w-full md:w-5/12 md:ml-8 transform translate-x-0 opacity-100 transition-all duration-700">
							<div class="glass-card-lg border-2 border-red-500/60 bg-red-500/10 p-8 rounded-xl hover:border-red-500/80 hover:shadow-2xl hover:shadow-red-500/40 transition-all duration-300 relative overflow-hidden">
								<!-- Glow effect -->
								<div class="absolute inset-0 bg-gradient-to-l from-red-500/15 to-transparent rounded-xl"></div>
								<div class="relative">
									<div class="flex items-center justify-between mb-4">
										<h3 class="text-4xl font-bold text-red-500">2029</h3>
										<div class="flex items-center gap-2">
											<span class="px-3 py-1 bg-red-500/20 text-red-400 text-xs font-bold rounded-full border border-red-500/40 animate-pulse">PRAZO FINAL</span>
											<div class="w-4 h-4 bg-red-500 rounded-full animate-bounce"></div>
										</div>
									</div>
									<h4 class="text-xl font-bold text-white mb-4">Prazo-limite de recuperação</h4>
									<p class="text-gray-300 leading-relaxed">
										Empresas têm até <strong class="text-red-400">maio de 2029</strong> para aproveitar esse direito — após isso, os valores prescrevem definitivamente.
									</p>
								</div>
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
						Conclusão
					</h3>
				</div>
				
				<p class="text-xl md:text-2xl text-gray-300 mb-8 leading-relaxed">
					Essa linha do tempo mostra que o seu direito <span class="font-bold text-green-400">não surgiu agora</span> — ele é fruto de mais de <span class="font-bold text-netword-accent">40 anos de embates legais</span>, <span class="font-bold text-green-400">finalmente decididos em favor dos contribuintes</span>.
				</p>

				<div class="glass-card-yellow margin-element element-spacing-sm p-5 m-10">
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

<style>
/* Timeline Vertical Styles */
.timeline-container {
	position: relative;
	min-height: 800px;
}

.timeline-item {
	position: relative;
	margin-bottom: 4rem;
}

/* Responsive adjustments */
@media (max-width: 768px) {
	.timeline-item {
		flex-direction: column;
	}
	
	.timeline-content {
		width: 100% !important;
		margin: 1rem 0 !important;
		padding: 0 2rem;
	}
	
	.timeline-container::before {
		left: 2rem !important;
	}
	
	.timeline-item .absolute {
		left: 2rem !important;
		transform: translateX(-50%) !important;
	}
}

/* Enhanced animations */
@keyframes timelineFloat {
	0%, 100% { transform: translateY(0px); }
	50% { transform: translateY(-10px); }
}

.timeline-content:hover {
	animation: timelineFloat 2s ease-in-out infinite;
}

/* Glow effects for important milestones */
.timeline-item:nth-child(5) .timeline-content, /* 2020 */
.timeline-item:nth-child(6) .timeline-content, /* 2021 */
.timeline-item:nth-child(7) .timeline-content, /* 2024 */
.timeline-item:nth-child(8) .timeline-content { /* 2029 */
	position: relative;
}

.timeline-item:nth-child(5) .timeline-content::before,
.timeline-item:nth-child(6) .timeline-content::before {
	content: '';
	position: absolute;
	top: -2px;
	left: -2px;
	right: -2px;
	bottom: -2px;
	background: linear-gradient(45deg, rgba(34, 197, 94, 0.3), transparent, rgba(34, 197, 94, 0.3));
	border-radius: inherit;
	z-index: -1;
	animation: borderGlow 3s linear infinite;
}

@keyframes borderGlow {
	0%, 100% { opacity: 0.3; }
	50% { opacity: 0.8; }
}

/* Scroll-triggered animations */
.timeline-content {
	opacity: 0;
	transform: translateY(30px);
	transition: all 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

.timeline-content.animate-in {
	opacity: 1;
	transform: translateY(0);
}

/* Staggered animation delays */
.timeline-item:nth-child(1) .timeline-content { transition-delay: 0.1s; }
.timeline-item:nth-child(2) .timeline-content { transition-delay: 0.2s; }
.timeline-item:nth-child(3) .timeline-content { transition-delay: 0.3s; }
.timeline-item:nth-child(4) .timeline-content { transition-delay: 0.4s; }
.timeline-item:nth-child(5) .timeline-content { transition-delay: 0.5s; }
.timeline-item:nth-child(6) .timeline-content { transition-delay: 0.6s; }
.timeline-item:nth-child(7) .timeline-content { transition-delay: 0.7s; }
.timeline-item:nth-child(8) .timeline-content { transition-delay: 0.8s; }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
	// Intersection Observer para animações on scroll
	const observerOptions = {
		threshold: 0.1,
		rootMargin: '0px 0px -50px 0px'
	};

	const observer = new IntersectionObserver(function(entries) {
		entries.forEach(entry => {
			if (entry.isIntersecting) {
				entry.target.classList.add('animate-in');
			}
		});
	}, observerOptions);

	// Observa todos os elementos da timeline
	const timelineContents = document.querySelectorAll('.timeline-content');
	timelineContents.forEach(content => {
		observer.observe(content);
	});
});
</script>