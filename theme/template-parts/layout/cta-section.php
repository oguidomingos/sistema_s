<?php
/**
 * Template part for displaying the final CTA section
 *
 * @package scs_consultoria
 */
?>

<!-- CTA Final -->
<section id="cta" class="section-spacing-lg relative overflow-hidden">
    <!-- Background Effects -->
    <div class="absolute inset-0 bg-gradient-to-br from-indigo-500/5 via-transparent to-pink-600/10"></div>
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_20%,rgba(99,102,241,0.1),transparent_50%)]"></div>
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_70%_80%,rgba(236,72,153,0.1),transparent_50%)]"></div>
    
    <div class="container container-spacing relative">
        <!-- Section Header -->
        <div class="text-center margin-section element-spacing-lg">
            <div class="inline-flex items-center gap-3 glass-card px-6 py-3 rounded-full mb-8 border border-indigo-400/20">
                <svg class="text-indigo-400" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path d="M9 12l2 2 4-4m6-2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <span class="text-sm font-mono text-indigo-400 tracking-wider">OPORTUNIDADE</span>
            </div>
            
            <h2 class="text-5xl md:text-7xl font-bold mb-8 bg-gradient-to-r from-indigo-400 via-pink-400 to-yellow-300 bg-clip-text text-transparent leading-tight">
                Não Deixe Seu Dinheiro Para Trás
                <span class="block text-white text-3xl md:text-4xl mt-2 font-light">
                    Comece Agora Mesmo Sem Custos
                </span>
            </h2>
        </div>

        <!-- CTA Content -->
        <div class="max-w-4xl mx-auto margin-section">
            <!-- Benefits Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
                <!-- Benefit 1 -->
                <div class="glass-card-lg border border-indigo-400/30 p-6 rounded-xl hover:border-indigo-400/50 hover:shadow-xl hover:shadow-indigo-400/20 transition-all duration-300 text-center">
                    <div class="w-12 h-12 bg-indigo-400/10 rounded-full border border-indigo-400/30 flex items-center justify-center mb-4 mx-auto">
                        <svg class="text-indigo-400" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Análise Grátis</h3>
                    <p class="text-gray-300 text-sm">Sem compromisso e sem custos</p>
                </div>
                
                <!-- Benefit 2 -->
                <div class="glass-card-lg border border-pink-400/30 p-6 rounded-xl hover:border-pink-400/50 hover:shadow-xl hover:shadow-pink-400/20 transition-all duration-300 text-center">
                    <div class="w-12 h-12 bg-pink-400/10 rounded-full border border-pink-400/30 flex items-center justify-center mb-4 mx-auto">
                        <svg class="text-pink-400" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Sem Risco</h3>
                    <p class="text-gray-300 text-sm">Você só paga se recuperarmos</p>
                </div>
                
                <!-- Benefit 3 -->
                <div class="glass-card-lg border border-yellow-400/30 p-6 rounded-xl hover:border-yellow-400/50 hover:shadow-xl hover:shadow-yellow-400/20 transition-all duration-300 text-center">
                    <div class="w-12 h-12 bg-yellow-400/10 rounded-full border border-yellow-400/30 flex items-center justify-center mb-4 mx-auto">
                        <svg class="text-yellow-400" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">Resultados Rápidos</h3>
                    <p class="text-gray-300 text-sm">Média de 30-60 dias</p>
                </div>
            </div>

            <!-- Main CTA -->
            <div class="glass-card-xl border border-indigo-400/40 p-8 md:p-12 rounded-2xl relative overflow-hidden margin-section">
                <div class="absolute inset-0 bg-gradient-to-r from-indigo-500/10 to-pink-500/10 rounded-2xl"></div>
                <div class="relative">
                    <div class="text-center">
                        <h3 class="text-2xl md:text-4xl font-bold text-white mb-6">
                            Quanto Você Pode Recuperar?
                        </h3>
                        <p class="text-xl text-gray-300 leading-relaxed mb-8 max-w-2xl mx-auto">
                            Descubra agora mesmo com nossa análise gratuita e sem compromisso.
                        </p>
                        
                        <!-- CTA Buttons -->
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            <button class="btn-primary bg-gradient-to-r from-indigo-500 to-pink-500 hover:from-indigo-600 hover:to-pink-600 px-8 py-4 text-lg rounded-lg text-white shadow-lg shadow-indigo-500/30 hover:shadow-indigo-500/50 transition-all duration-300 open-diagnostico-modal">
                                Quero Minha Análise Grátis
                            </button>
                            <button class="btn-secondary border border-indigo-400/30 hover:border-indigo-400/50 hover:bg-indigo-400/10 px-8 py-4 text-lg rounded-lg text-white open-diagnostico-modal">
                                Falar Com Especialista
                            </button>
                        </div>
                        
                        <!-- Trust Badges -->
                        <div class="flex flex-wrap items-center justify-center gap-6 mt-8">
                            <div class="flex items-center gap-2">
                                <svg class="text-yellow-400" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor">
                                    <path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                </svg>
                                <span class="text-sm text-gray-300">+ de 500 clientes atendidos</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg class="text-yellow-400" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor">
                                    <path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                </svg>
                                <span class="text-sm text-gray-300">+ de R$ 5MM recuperados</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Final Note -->
            <div class="text-center mt-12">
                <p class="text-gray-400 text-sm max-w-2xl mx-auto">
                    Não perca mais tempo. Seu dinheiro está esperando para ser recuperado. Preencha o formulário agora mesmo e descubra quanto você pode receber.
                </p>
            </div>
        </div>
    </div>
</section>

<style>
/* Custom styles for this section */
#cta .glass-card-lg:hover {
    transform: translateY(-5px);
}

#cta .glass-card-xl {
    backdrop-filter: blur(16px);
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

#cta .glass-card-xl:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 25px -5px rgba(99, 102, 241, 0.3), 0 10px 10px -5px rgba(236, 72, 153, 0.1);
}

#cta .btn-primary {
    box-shadow: 0 4px 15px -3px rgba(99, 102, 241, 0.4);
}

#cta .btn-primary:hover {
    box-shadow: 0 4px 20px -3px rgba(99, 102, 241, 0.6);
}

@keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.05); }
    100% { transform: scale(1); }
}

#cta .glass-card-xl {
    animation: pulse 4s infinite;
}
</style>