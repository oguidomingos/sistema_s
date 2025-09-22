<?php
/**
 * Template part for displaying the success case section
 *
 * @package scs_consultoria
 */
?>

<!-- Caso de Sucesso -->
<section id="caso" class="section-spacing-lg relative overflow-hidden">
    <!-- Background Effects -->
    <div class="absolute inset-0 bg-gradient-to-br from-green-500/5 via-transparent to-green-600/10"></div>
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_20%,rgba(34,197,94,0.1),transparent_50%)]"></div>
    
    <div class="container container-spacing relative">
        <!-- Section Header -->
        <div class="text-center margin-section element-spacing-lg">
            <div class="inline-flex items-center gap-3 glass-card px-6 py-3 rounded-full mb-8 border border-green-400/20">
                <svg class="text-green-400" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <span class="text-sm font-mono text-green-400 tracking-wider">RESULTADO</span>
            </div>
            
            <h2 class="text-5xl md:text-7xl font-bold mb-8 bg-gradient-to-r from-green-400 via-white to-green-300 bg-clip-text text-transparent leading-tight">
                Caso de Sucesso
                <span class="block text-green-400 text-3xl md:text-4xl mt-2 font-light">
                    Veja o Resultado Que Um Cliente Obteve
                </span>
            </h2>
        </div>

        <!-- Case Study Content -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 max-w-6xl mx-auto margin-section">
            <!-- Testimonial -->
            <div class="glass-card-lg border border-green-400/30 p-8 rounded-xl hover:border-green-400/50 hover:shadow-xl hover:shadow-green-400/20 transition-all duration-300 relative overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-green-500/5 to-transparent rounded-xl"></div>
                <div class="relative">
                    <!-- Client Info -->
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-16 h-16 rounded-full bg-green-400/10 border border-green-400/30 flex items-center justify-center">
                            <span class="text-2xl font-bold text-green-400">JS</span>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-white">João Silva</h3>
                            <p class="text-gray-300">Diretor Financeiro</p>
                        </div>
                    </div>
                    
                    <!-- Testimonial Text -->
                    <div class="relative">
                        <svg class="absolute -top-2 -left-2 text-green-400/20" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 00-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0020 4.77 5.07 5.07 0 0019.91 1S18.73.65 16 2.48a13.38 13.38 0 00-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 005 4.77a5.44 5.44 0 00-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 009 18.13V22"/>
                        </svg>
                        <blockquote class="text-lg text-gray-300 leading-relaxed pl-8">
                            "Em apenas 35 dias após o protocolo, recebemos R$ 28.750,00 de créditos tributários que nem sabíamos que existiam. O processo foi tão simples que mal acreditamos quando o dinheiro caiu na conta."
                        </blockquote>
                    </div>
                    
                    <!-- Company Logo -->
                    <div class="mt-8 pt-6 border-t border-green-400/20">
                        <div class="flex items-center justify-center">
                            <div class="px-4 py-2 bg-green-400/10 rounded-lg border border-green-400/20">
                                <span class="font-bold text-green-400">Empresa XYZ</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Results -->
            <div class="glass-card-lg border border-green-400/30 p-8 rounded-xl hover:border-green-400/50 hover:shadow-xl hover:shadow-green-400/20 transition-all duration-300 relative overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-green-500/5 to-transparent rounded-xl"></div>
                <div class="relative">
                    <h3 class="text-xl font-bold text-white mb-6 text-center">Resultados Obtidos</h3>
                    
                    <!-- Timeline -->
                    <div class="space-y-6">
                        <!-- Timeline Item 1 -->
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0 flex items-center justify-center w-10 h-10 bg-green-400/10 rounded-full border border-green-400/30 mt-1">
                                <svg class="text-green-400" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                    <path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-green-400">Tempo Total</h4>
                                <p class="text-gray-300">35 dias do protocolo à compensação</p>
                            </div>
                        </div>
                        
                        <!-- Timeline Item 2 -->
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0 flex items-center justify-center w-10 h-10 bg-green-400/10 rounded-full border border-green-400/30 mt-1">
                                <svg class="text-green-400" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                    <path d="M12 2v4m0 12v4M4.93 4.93l2.83 2.83m8.48 8.48l2.83 2.83M2 12h4m12 0h4M4.93 19.07l2.83-2.83m8.48-8.48l2.83-2.83"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-green-400">Processo</h4>
                                <p class="text-gray-300">100% digital sem necessidade de deslocamentos</p>
                            </div>
                        </div>
                        
                        <!-- Timeline Item 3 -->
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0 flex items-center justify-center w-10 h-10 bg-green-400/10 rounded-full border border-green-400/30 mt-1">
                                <svg class="text-green-400" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                    <path d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-green-400">Valor Recuperado</h4>
                                <p class="text-gray-300">R$ 28.750,00 por 5 funcionários</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Graph -->
                    <div class="mt-8 pt-6 border-t border-green-400/20">
                        <div class="graph-container-caso h-40 w-full relative">
                            <svg viewBox="0 0 400 160" preserveAspectRatio="none" class="w-full h-full">
                                <!-- Eixo X -->
                                <line x1="0" y1="150" x2="400" y2="150" stroke="#4ade80" stroke-opacity="0.3" stroke-width="1"/>

                                <!-- Linha do Gráfico (representando crescimento) -->
                                <polyline points="0,140 100,100 200,60 300,20 400,10" fill="none" stroke="url(#gradientGreen)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>

                                <!-- Pontos do Gráfico -->
                                <circle cx="0" y="140" r="4" fill="#4ade80"/>
                                <circle cx="100" y="100" r="4" fill="#4ade80"/>
                                <circle cx="200" y="60" r="4" fill="#4ade80"/>
                                <circle cx="300" y="20" r="4" fill="#4ade80"/>
                                <circle cx="400" y="10" r="4" fill="#4ade80"/>

                                <!-- Rótulos dos Anos -->
                                <text x="0" y="158" text-anchor="start" fill="#4ade80" font-size="10">2021</text>
                                <text x="100" y="158" text-anchor="middle" fill="#4ade80" font-size="10">2022</text>
                                <text x="200" y="158" text-anchor="middle" fill="#4ade80" font-size="10">2023</text>
                                <text x="300" y="158" text-anchor="middle" fill="#4ade80" font-size="10">2024</text>

                                <!-- Marcador de Valor -->
                                <rect x="280" y="0" width="120" height="20" fill="#4ade80" fill-opacity="0.2" rx="10" ry="10"/>
                                <text x="340" y="14" text-anchor="middle" fill="#4ade80" font-size="12" font-weight="bold">R$ 15.400.000</text>

                                <!-- Definição do Gradiente -->
                                <defs>
                                    <linearGradient id="gradientGreen" x1="0%" y1="0%" x2="100%" y2="0%">
                                        <stop offset="0%" style="stop-color:#4ade80;stop-opacity:1" />
                                        <stop offset="100%" style="stop-color:#22c55e;stop-opacity:1" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                        <p class="text-gray-300 text-center mt-4">
                            Nossa taxa de sucesso e volume de recuperação vêm crescendo ano após ano com o uso de tecnologia e estratégias jurídicas exclusivas.
                        </p>
                        <p class="text-gray-400 text-sm text-center mt-2">
                            +130 empresas de diversos setores • Transporte & Indústria representam 60% dos valores recuperados<br>
                            Indústria: R$ 590 mil • Transporte: R$ 400 mil
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="glass-card-lg border border-green-400/40 max-w-4xl mx-auto margin-section element-spacing-lg p-8 rounded-xl relative overflow-hidden">
            <div class="absolute bg-gradient-to-r from-green-400/10 to-transparent rounded-xl"></div>
            <div class="relative text-center">
                <h3 class="text-2xl md:text-3xl font-bold text-green-400 mb-6">
                    Quer Resultados Como Estes?
                </h3>
                <p class="text-lg text-gray-300 leading-relaxed mb-8 max-w-2xl mx-auto">
                    Nossa equipe está pronta para analisar seu caso e estimar quanto você pode recuperar.
                </p>
                <button class="btn-primary bg-gradient-to-r from-green-400 to-green-600 hover:from-green-500 hover:to-green-700 p-6 mt-4 rounded-lg text-lg open-diagnostico-modal">
                    Fazer Minha Análise Grátis
                </button>
            </div>
        </div>
    </div>
</section>

