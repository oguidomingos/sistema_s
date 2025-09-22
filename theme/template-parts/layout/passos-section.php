<?php
/**
 * Template part for displaying the step-by-step process section
 *
 * @package scs_consultoria
 */
?>

<!-- Como Funciona - Passo a Passo -->
<section id="passos" class="section-spacing-lg relative overflow-hidden">
    <!-- Background Effects -->
    <div class="absolute inset-0 bg-gradient-to-br from-blue-400/5 via-transparent to-blue-400/10"></div>
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_20%,rgba(96,165,250,0.1),transparent_50%)]"></div>
    
    <div class="container container-spacing relative">
        <!-- Section Header -->
        <div class="text-center margin-section element-spacing-lg">
            <div class="inline-flex items-center gap-3 glass-card px-6 py-3 rounded-full mb-8 border border-blue-400/20">
                <svg class="text-blue-400" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path d="M12 6v6l4 2m5-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <span class="text-sm font-mono text-blue-400 tracking-wider">PROCESSO</span>
            </div>
            
            <h2 class="text-5xl md:text-7xl font-bold mb-8 bg-gradient-to-r from-blue-400 via-white to-blue-300 bg-clip-text text-transparent leading-tight">
                Como Funciona
                <span class="block text-blue-400 text-3xl md:text-4xl mt-2 font-light">
                    Passo a Passo Simples
                </span>
            </h2>
        </div>

        <!-- Timeline Steps -->
        <div class="max-w-4xl mx-auto margin-section">
            <!-- Timeline Line -->
            <div class="absolute left-1/2 h-full w-0.5 bg-gradient-to-b from-blue-400/30 via-blue-400/50 to-blue-400/30 -translate-x-1/2 hidden md:block"></div>

            <!-- Step 1 -->
            <div class="relative mb-16 md:mb-24 group">
                <div class="flex flex-col md:flex-row items-start gap-8">
                    <!-- Step Content -->
                    <div class="md:w-1/2 md:pr-16 md:text-right order-1 md:order-1">
                        <div class="glass-card-lg border border-blue-400/30 p-6 rounded-xl hover:border-blue-400/50 transition-all duration-300">
                            <h3 class="text-xl font-bold text-white mb-3">1. Análise Inicial</h3>
                            <p class="text-gray-300 leading-relaxed">
                                Envie seus holerites e nossa plataforma faz uma análise preliminar em 24h.
                            </p>
                        </div>
                    </div>
                    
                    <!-- Step Indicator -->
                    <div class="md:w-1/2 md:pl-16 order-2 md:order-2 flex justify-center md:justify-start">
                        <div class="flex items-center justify-center w-20 h-20 bg-blue-400/10 rounded-full border-2 border-blue-400/50 group-hover:border-blue-400 group-hover:bg-blue-400/20 transition-all duration-300 relative">
                            <span class="text-2xl font-bold text-blue-400">1</span>
                            <div class="absolute inset-0 rounded-full border-2 border-blue-400 opacity-0 group-hover:opacity-100 animate-ping duration-1000"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="relative mb-16 md:mb-24 group">
                <div class="flex flex-col md:flex-row items-start gap-8">
                    <!-- Step Content -->
                    <div class="md:w-1/2 md:pl-16 order-1 md:order-2">
                        <div class="glass-card-lg border border-blue-400/30 p-6 rounded-xl hover:border-blue-400/50 transition-all duration-300">
                            <h3 class="text-xl font-bold text-white mb-3">2. Contrato Digital</h3>
                            <p class="text-gray-300 leading-relaxed">
                                Assinatura eletrônica do contrato com termos claros e sem burocracia.
                            </p>
                        </div>
                    </div>
                    
                    <!-- Step Indicator -->
                    <div class="md:w-1/2 md:pr-16 order-2 md:order-1 flex justify-center md:justify-end">
                        <div class="flex items-center justify-center w-20 h-20 bg-blue-400/10 rounded-full border-2 border-blue-400/50 group-hover:border-blue-400 group-hover:bg-blue-400/20 transition-all duration-300 relative">
                            <span class="text-2xl font-bold text-blue-400">2</span>
                            <div class="absolute inset-0 rounded-full border-2 border-blue-400 opacity-0 group-hover:opacity-100 animate-ping duration-1000"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="relative mb-16 md:mb-24 group">
                <div class="flex flex-col md:flex-row items-start gap-8">
                    <!-- Step Content -->
                    <div class="md:w-1/2 md:pr-16 md:text-right order-1 md:order-1">
                        <div class="glass-card-lg border border-blue-400/30 p-6 rounded-xl hover:border-blue-400/50 transition-all duration-300">
                            <h3 class="text-xl font-bold text-white mb-3">3. Análise Completa</h3>
                            <p class="text-gray-300 leading-relaxed">
                                Nossa equipe valida os dados e prepara toda documentação necessária.
                            </p>
                        </div>
                    </div>
                    
                    <!-- Step Indicator -->
                    <div class="md:w-1/2 md:pl-16 order-2 md:order-2 flex justify-center md:justify-start">
                        <div class="flex items-center justify-center w-20 h-20 bg-blue-400/10 rounded-full border-2 border-blue-400/50 group-hover:border-blue-400 group-hover:bg-blue-400/20 transition-all duration-300 relative">
                            <span class="text-2xl font-bold text-blue-400">3</span>
                            <div class="absolute inset-0 rounded-full border-2 border-blue-400 opacity-0 group-hover:opacity-100 animate-ping duration-1000"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="relative mb-16 md:mb-24 group">
                <div class="flex flex-col md:flex-row items-start gap-8">
                    <!-- Step Content -->
                    <div class="md:w-1/2 md:pl-16 order-1 md:order-2">
                        <div class="glass-card-lg border border-blue-400/30 p-6 rounded-xl hover:border-blue-400/50 transition-all duration-300">
                            <h3 class="text-xl font-bold text-white mb-3">4. Protocolo no e-CAC</h3>
                            <p class="text-gray-300 leading-relaxed">
                                Protocolamos sua ação diretamente no sistema da Receita Federal.
                            </p>
                        </div>
                    </div>
                    
                    <!-- Step Indicator -->
                    <div class="md:w-1/2 md:pr-16 order-2 md:order-1 flex justify-center md:justify-end">
                        <div class="flex items-center justify-center w-20 h-20 bg-blue-400/10 rounded-full border-2 border-blue-400/50 group-hover:border-blue-400 group-hover:bg-blue-400/20 transition-all duration-300 relative">
                            <span class="text-2xl font-bold text-blue-400">4</span>
                            <div class="absolute inset-0 rounded-full border-2 border-blue-400 opacity-0 group-hover:opacity-100 animate-ping duration-1000"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 5 -->
            <div class="relative group">
                <div class="flex flex-col md:flex-row items-start gap-8">
                    <!-- Step Content -->
                    <div class="md:w-1/2 md:pr-16 md:text-right order-1 md:order-1">
                        <div class="glass-card-lg border border-blue-400/30 p-6 rounded-xl hover:border-blue-400/50 transition-all duration-300">
                            <h3 class="text-xl font-bold text-white mb-3">5. Compensação</h3>
                            <p class="text-gray-300 leading-relaxed">
                                Receba os valores diretamente em sua conta em até 40 dias após deferimento.
                            </p>
                        </div>
                    </div>
                    
                    <!-- Step Indicator -->
                    <div class="md:w-1/2 md:pl-16 order-2 md:order-2 flex justify-center md:justify-start">
                        <div class="flex items-center justify-center w-20 h-20 bg-blue-400/10 rounded-full border-2 border-blue-400/50 group-hover:border-blue-400 group-hover:bg-blue-400/20 transition-all duration-300 relative">
                            <span class="text-2xl font-bold text-blue-400">5</span>
                            <div class="absolute inset-0 rounded-full border-2 border-blue-400 opacity-0 group-hover:opacity-100 animate-ping duration-1000"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="glass-card-lg border border-blue-400/40 max-w-4xl mx-auto margin-section element-spacing-lg p-8 rounded-xl relative overflow-hidden">
            <div class="absolute bg-gradient-to-r from-blue-400/10 to-transparent rounded-xl"></div>
            <div class="relative text-center">
                <h3 class="text-2xl md:text-3xl font-bold text-blue-400 mb-6">
                    Pronto para Começar?
                </h3>
                <p class="text-lg text-gray-300 leading-relaxed mb-8 max-w-2xl mx-auto">
                    Nosso processo é 100% digital e você não precisa se preocupar com nada. Toda a tramitação é feita por nossa equipe especializada.
                </p>
                <button class="btn-primary bg-gradient-to-r from-blue-400 to-blue-600 hover:from-blue-500 hover:to-blue-700 p-4 rounded-lg text-lg mt-12">
                    Quero Recuperar Meus Créditos
                </button>
            </div>
        </div>
    </div>
</section>

<style>
/* Custom styles for this section */
#passos .glass-card-lg:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px -5px rgba(96, 165, 250, 0.3);
}

#passos .glass-card-lg {
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

/* Responsive adjustments */
@media (max-width: 767px) {
    #passos .order-1 {
        order: 1 !important;
    }
    #passos .order-2 {
        order: 2 !important;
    }
}
</style>