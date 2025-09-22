<?php
/**
 * Template part for displaying the testimonials section
 *
 * @package scs_consultoria
 */
?>

<!-- Depoimentos -->
<section id="depoimentos" class="section-spacing-lg relative overflow-hidden">
    <!-- Background Effects -->
    <div class="absolute inset-0 bg-gradient-to-br from-purple-500/5 via-transparent to-purple-600/10"></div>
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_20%,rgba(168,85,247,0.1),transparent_50%)]"></div>
    
    <div class="container container-spacing relative">
        <!-- Section Header -->
        <div class="text-center margin-section element-spacing-lg">
            <div class="inline-flex items-center gap-3 glass-card px-6 py-3 rounded-full mb-8 border border-purple-400/20">
                <svg class="text-purple-400" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                </svg>
                <span class="text-sm font-mono text-purple-400 tracking-wider">FEEDBACK</span>
            </div>
            
            <h2 class="text-5xl md:text-7xl font-bold mb-8 bg-gradient-to-r from-purple-400 via-white to-purple-300 bg-clip-text text-transparent leading-tight">
                Depoimentos
                <span class="block text-purple-400 text-3xl md:text-4xl mt-2 font-light">
                    O Que Nossos Clientes Dizem
                </span>
            </h2>
        </div>

        <!-- Testimonials Carousel -->
        <div class="max-w-6xl mx-auto margin-section">
            <div class="testimonial-carousel relative">
                <!-- Testimonial Cards -->
                <div class="flex gap-8 overflow-x-auto pb-8 scrollbar-hide snap-x snap-mandatory">
                    <!-- Testimonial 1 -->
                    <div class="glass-card-lg border border-purple-400/30 p-8 rounded-xl hover:border-purple-400/50 hover:shadow-xl hover:shadow-purple-400/20 transition-all duration-300 flex-shrink-0 w-full md:w-1/2 lg:w-1/3 snap-center">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-16 h-16 rounded-full bg-purple-400/10 border border-purple-400/30 overflow-hidden">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonials/1.jpg" alt="Cliente Maria" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-white">Maria Souza</h3>
                                <p class="text-gray-300">Empresa ABC</p>
                            </div>
                        </div>
                        <div class="relative">
                            <svg class="absolute -top-2 -left-2 text-purple-400/20" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 00-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0020 4.77 5.07 5.07 0 0019.91 1S18.73.65 16 2.48a13.38 13.38 0 00-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 005 4.77a5.44 5.44 0 00-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 009 18.13V22"/>
                            </svg>
                            <blockquote class="text-lg text-gray-300 leading-relaxed pl-8">
                                "Recuperamos R$ 45.000 em créditos que estavam esquecidos há anos. O processo foi tão simples que mal acreditei quando o dinheiro caiu na conta."
                            </blockquote>
                        </div>
                        <div class="mt-6 flex items-center justify-start gap-1">
                            <?php for ($i = 0; $i < 5; $i++): ?>
                                <svg class="text-purple-400" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor">
                                    <path d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                                </svg>
                            <?php endfor; ?>
                        </div>
                    </div>

                    <!-- Testimonial 2 -->
                    <div class="glass-card-lg border border-purple-400/30 p-8 rounded-xl hover:border-purple-400/50 hover:shadow-xl hover:shadow-purple-400/20 transition-all duration-300 flex-shrink-0 w-full md:w-1/2 lg:w-1/3 snap-center">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-16 h-16 rounded-full bg-purple-400/10 border border-purple-400/30 overflow-hidden">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonials/2.jpg" alt="Cliente Carlos" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-white">Carlos Mendes</h3>
                                <p class="text-gray-300">Empresa XYZ</p>
                            </div>
                        </div>
                        <div class="relative">
                            <svg class="absolute -top-2 -left-2 text-purple-400/20" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 00-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0020 4.77 5.07 5.07 0 0019.91 1S18.73.65 16 2.48a13.38 13.38 0 00-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 005 4.77a5.44 5.44 0 00-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 009 18.13V22"/>
                            </svg>
                            <blockquote class="text-lg text-gray-300 leading-relaxed pl-8">
                                "Como contador, fiquei impressionado com a eficiência da equipe. Em 40 dias recuperamos R$ 78.500 para nosso cliente sem qualquer burocracia."
                            </blockquote>
                        </div>
                        <div class="mt-6 flex items-center justify-start gap-1">
                            <?php for ($i = 0; $i < 5; $i++): ?>
                                <svg class="text-purple-400" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor">
                                    <path d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                                </svg>
                            <?php endfor; ?>
                        </div>
                    </div>

                    <!-- Testimonial 3 -->
                    <div class="glass-card-lg border border-purple-400/30 p-8 rounded-xl hover:border-purple-400/50 hover:shadow-xl hover:shadow-purple-400/20 transition-all duration-300 flex-shrink-0 w-full md:w-1/2 lg:w-1/3 snap-center">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-16 h-16 rounded-full bg-purple-400/10 border border-purple-400/30 overflow-hidden">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonials/3.jpg" alt="Cliente Ana" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-white">Ana Paula</h3>
                                <p class="text-gray-300">Empresa 123</p>
                            </div>
                        </div>
                        <div class="relative">
                            <svg class="absolute -top-2 -left-2 text-purple-400/20" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 00-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0020 4.77 5.07 5.07 0 0019.91 1S18.73.65 16 2.48a13.38 13.38 0 00-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 005 4.77a5.44 5.44 0 00-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 009 18.13V22"/>
                            </svg>
                            <blockquote class="text-lg text-gray-300 leading-relaxed pl-8">
                                "Depois de anos tentando resolver sozinha, a SCS recuperou R$ 32.000 em menos de 2 meses. O melhor investimento que já fiz para minha empresa."
                            </blockquote>
                        </div>
                        <div class="mt-6 flex items-center justify-start gap-1">
                            <?php for ($i = 0; $i < 5; $i++): ?>
                                <svg class="text-purple-400" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor">
                                    <path d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                                </svg>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>

                <!-- Carousel Controls -->
                <button class="testimonial-prev absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 bg-purple-400/20 hover:bg-purple-400/30 border border-purple-400/30 rounded-full w-10 h-10 flex items-center justify-center transition-all duration-300 z-10">
                    <svg class="text-purple-400" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path d="M15 18l-6-6 6-6"/>
                    </svg>
                </button>
                <button class="testimonial-next absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 bg-purple-400/20 hover:bg-purple-400/30 border border-purple-400/30 rounded-full w-10 h-10 flex items-center justify-center transition-all duration-300 z-10">
                    <svg class="text-purple-400" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path d="M9 18l6-6-6-6"/>
                    </svg>
                </button>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="glass-card-lg border border-purple-400/40 max-w-4xl mx-auto margin-section element-spacing-lg p-8 rounded-xl relative overflow-hidden">
            <div class="absolute bg-gradient-to-r from-purple-400/10 to-transparent rounded-xl"></div>
            <div class="relative text-center">
                <h3 class="text-2xl md:text-3xl font-bold text-purple-400 mb-6">
                    Quer Fazer Parte Dos Nossos Casos de Sucesso?
                </h3>
                <p class="text-lg text-gray-300 leading-relaxed mb-8 max-w-2xl mx-auto">
                    Comece hoje mesmo sua jornada para recuperar o que é seu por direito.
                </p>
                <button class="btn-primary bg-gradient-to-r from-purple-400 to-purple-600 hover:from-purple-500 hover:to-purple-700 p-6 mt-4 rounded-lg text-lg">
                    Quero Minha Análise Grátis
                </button>
            </div>
        </div>
    </div>
</section>

<style>
/* Custom styles for this section */
#depoimentos .glass-card-lg:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px -5px rgba(168, 85, 247, 0.3);