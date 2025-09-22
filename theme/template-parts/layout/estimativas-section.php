<?php
/**
 * Template part for displaying the recovery estimates section
 *
 * @package scs_consultoria
 */
?>

<!-- Estimativas de Recuperação -->
<section id="estimativas" class="section-spacing-lg relative overflow-hidden">
    <!-- Background Effects -->
    <div class="absolute inset-0 bg-gradient-to-br from-purple-500/5 via-transparent to-purple-600/10"></div>
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_20%,rgba(168,85,247,0.1),transparent_50%)]"></div>

    <div class="container container-spacing relative">
        <!-- Section Header -->
        <div class="text-center margin-section element-spacing-lg">
            <div
                class="inline-flex items-center gap-3 glass-card px-6 py-3 rounded-full mb-8 border border-purple-400/20">
                <svg class="text-purple-400" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor">
                    <path
                        d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span class="text-sm font-mono text-purple-400 tracking-wider">VALORES</span>
            </div>

            <h2
                class="text-5xl md:text-7xl font-bold mb-8 bg-gradient-to-r from-purple-400 via-white to-purple-300 bg-clip-text text-transparent leading-tight">
                Estimativas de Recuperação
                <span class="block text-purple-400 text-3xl md:text-4xl mt-2 font-light">
                    Veja Quanto Você Pode Recuperar
                </span>
            </h2>
        </div>

        <!-- Value Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto margin-section">
            <!-- Card 1 -->
            <div
                class="glass-card-lg border border-purple-400/30 p-8 rounded-xl hover:border-purple-400/50 hover:shadow-xl hover:shadow-purple-400/20 transition-all duration-300 relative overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-purple-500/5 to-transparent rounded-xl"></div>
                <div class="relative">
                    <div
                        class="flex items-center justify-center w-20 h-20 bg-purple-400/10 rounded-full mb-6 border border-purple-400/30 mx-auto">
                        <svg class="text-purple-400" width="32" height="32" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor">
                            <path
                                d="M12 2v4m0 12v4M4.93 4.93l2.83 2.83m8.48 8.48l2.83 2.83M2 12h4m12 0h4M4.93 19.07l2.83-2.83m8.48-8.48l2.83-2.83" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4 text-center">Média por Empresa</h3>

                    <!-- Animated Value -->
                    <div class="text-5xl font-bold text-purple-400 text-center mb-6">
                        R$ <span class="count-up" data-target="312000">R$ 312.000+</span>
                        <span class="text-2xl">+</span>
                    </div>

                    <p class="text-gray-300 leading-relaxed text-center">
                        Valor médio recuperado por empresa com folha superior a 20 SM.
                    </p>
                </div>
            </div>

            <!-- Card 2 -->
            <div
                class="glass-card-lg border border-purple-400/30 p-8 rounded-xl hover:border-purple-400/50 hover:shadow-xl hover:shadow-purple-400/20 transition-all duration-300 relative overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-purple-500/5 to-transparent rounded-xl"></div>
                <div class="relative">
                    <div
                        class="flex items-center justify-center w-20 h-20 bg-purple-400/10 rounded-full mb-6 border border-purple-400/30 mx-auto">
                        <svg class="text-purple-400" width="32" height="32" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor">
                            <path
                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4 text-center">Total Recuperado</h3>

                    <!-- Animated Value -->
                    <div class="text-5xl font-bold text-purple-400 text-center mb-6 text-2xl">
                        R$ <span class="count-up text-4xl" data-target="33700000">R$33.700.000</span>
                    </div>

                    <p class="text-gray-300 leading-relaxed text-center">
                        Total já recuperado para nossos clientes com base nos Temas 1.079 e 1.119.
                    </p>
                </div>
            </div>

            <!-- Card 3 -->
            <div
                class="glass-card-lg border border-purple-400/30 p-8 rounded-xl hover:border-purple-400/50 hover:shadow-xl hover:shadow-purple-400/20 transition-all duration-300 relative overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-purple-500/5 to-transparent rounded-xl"></div>
                <div class="relative">
                    <div
                        class="flex items-center justify-center w-20 h-20 bg-purple-400/10 rounded-full mb-6 border border-purple-400/30 mx-auto">
                        <svg class="text-purple-400" width="32" height="32" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor">
                            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4 text-center">Taxa de Sucesso</h3>

                    <!-- Animated Value -->
                    <div class="text-5xl font-bold text-purple-400 text-center mb-6">
                        <span class="count-up" data-target="98.7">98,7%</span>
                        <span class="text-2xl">%</span>
                    </div>

                    <p class="text-gray-300 leading-relaxed text-center">
                        Percentual de casos deferidos nas ações coletivas representadas pela nossa equipe.
                    </p>
                </div>
            </div>
        </div>

        <!-- Graph Visualization -->
        <div
            class="glass-card-lg border border-purple-400/40 max-w-4xl mx-auto margin-section element-spacing-lg p-8 rounded-xl relative overflow-hidden">
            <div class="absolute bg-gradient-to-r from-purple-400/10 to-transparent rounded-xl"></div>
            <div class="relative">
                <h3 class="text-2xl md:text-3xl font-bold text-purple-400 mb-6 text-center">
                    Histórico de Recuperação
                </h3>

                <!-- Graph Container -->
                <div class="graph-container h-64 w-full relative">
                    <svg viewBox="0 0 400 200" preserveAspectRatio="none" class="w-full h-full">
                        <!-- Eixo X -->
                        <line x1="0" y1="190" x2="400" y2="190" stroke="#a855f7" stroke-opacity="0.3" stroke-width="1"/>

                        <!-- Barras do Gráfico -->
                        <!-- 2021: 1.7M / 15.4M = ~11% -->
                        <rect x="40" y="168" width="30" height="22" fill="url(#gradientPurple)" rx="2" ry="2"/>
                        <text x="55" y="198" text-anchor="middle" fill="#a855f7" font-size="10">2021</text>
                        <text x="55" y="160" text-anchor="middle" fill="#a855f7" font-size="10">R$1.7M</text>

                        <!-- 2022: 6.2M / 15.4M = ~40% -->
                        <rect x="130" y="106" width="30" height="84" fill="url(#gradientPurple)" rx="2" ry="2"/>
                        <text x="145" y="198" text-anchor="middle" fill="#a855f7" font-size="10">2022</text>
                        <text x="145" y="98" text-anchor="middle" fill="#a855f7" font-size="10">R$6.2M</text>

                        <!-- 2023: 10.4M / 15.4M = ~67% -->
                        <rect x="220" y="64" width="30" height="126" fill="url(#gradientPurple)" rx="2" ry="2"/>
                        <text x="235" y="198" text-anchor="middle" fill="#a855f7" font-size="10">2023</text>
                        <text x="235" y="56" text-anchor="middle" fill="#a855f7" font-size="10">R$10.4M</text>

                        <!-- 2024: 15.4M / 15.4M = 100% -->
                        <rect x="310" y="0" width="30" height="190" fill="url(#gradientPurple)" rx="2" ry="2"/>
                        <text x="325" y="198" text-anchor="middle" fill="#a855f7" font-size="10">2024</text>
                        <text x="325" y="-8" text-anchor="middle" fill="#a855f7" font-size="10">R$15.4M</text>

                        <!-- Definição do Gradiente -->
                        <defs>
                            <linearGradient id="gradientPurple" x1="0%" y1="0%" x2="0%" y2="100%">
                                <stop offset="0%" style="stop-color:#a855f7;stop-opacity:1" />
                                <stop offset="100%" style="stop-color:#8b5cf6;stop-opacity:1" />
                            </linearGradient>
                        </defs>
                    </svg>
                </div>

                <p class="text-lg text-gray-300 leading-relaxed mt-8 text-center">
                    Nossa taxa de sucesso e volume de recuperação vêm crescendo ano após ano com o uso de tecnologia e
                    estratégias jurídicas exclusivas.
                </p>
            </div>
        </div>
    </div>
</section>



