<?php
/**
 * Template part for displaying the guarantee section
 *
 * @package scs_consultoria
 */
?>

<!-- Garantia -->
<section id="garantia" class="section-spacing-lg relative overflow-hidden">
    <!-- Background Effects -->
    <div class="absolute inset-0 bg-gradient-to-br from-yellow-500/5 via-transparent to-yellow-600/10"></div>
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_20%,rgba(234,179,8,0.1),transparent_50%)]"></div>
    
    <div class="container container-spacing relative">
        <!-- Section Header -->
        <div class="text-center margin-section element-spacing-lg">
            <div class="inline-flex items-center gap-3 glass-card px-6 py-3 rounded-full mb-8 border border-yellow-400/20">
                <svg class="text-yellow-400" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                </svg>
                <span class="text-sm font-mono text-yellow-400 tracking-wider">SEGURANÇA</span>
            </div>
            
            <h2 class="text-5xl md:text-7xl font-bold mb-8 bg-gradient-to-r from-yellow-400 via-white to-yellow-300 bg-clip-text text-transparent leading-tight">
                Nossa Garantia
                <span class="block text-yellow-400 text-3xl md:text-4xl mt-2 font-light">
                    Trabalhamos Sem Risco Para Você
                </span>
            </h2>
        </div>

        <!-- Guarantee Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto margin-section">
            <!-- Card 1 -->
            <div class="glass-card-lg border border-yellow-400/30 p-8 rounded-xl hover:border-yellow-400/50 hover:shadow-xl hover:shadow-yellow-400/20 transition-all duration-300 relative overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-yellow-500/5 to-transparent rounded-xl"></div>
                <div class="relative">
                    <div class="w-16 h-16 bg-yellow-400/10 rounded-full border border-yellow-400/30 flex items-center justify-center mb-6 mx-auto">
                        <svg class="text-yellow-400" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4 text-center">Sem Custos Iniciais</h3>
                    <p class="text-gray-300 text-center">
                        Você só paga se conseguirmos recuperar seus créditos. Nada de taxas antecipadas ou custos ocultos.
                    </p>
                </div>
            </div>
            
            <!-- Card 2 -->
            <div class="glass-card-lg border border-yellow-400/30 p-8 rounded-xl hover:border-yellow-400/50 hover:shadow-xl hover:shadow-yellow-400/20 transition-all duration-300 relative overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-yellow-500/5 to-transparent rounded-xl"></div>
                <div class="relative">
                    <div class="w-16 h-16 bg-yellow-400/10 rounded-full border border-yellow-400/30 flex items-center justify-center mb-6 mx-auto">
                        <svg class="text-yellow-400" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4 text-center">Contrato Formal</h3>
                    <p class="text-gray-300 text-center">
                        Todos os termos são estabelecidos em contrato com cláusulas claras e sem letras miúdas.
                    </p>
                </div>
            </div>
            
            <!-- Card 3 -->
            <div class="glass-card-lg border border-yellow-400/30 p-8 rounded-xl hover:border-yellow-400/50 hover:shadow-xl hover:shadow-yellow-400/20 transition-all duration-300 relative overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-yellow-500/5 to-transparent rounded-xl"></div>
                <div class="relative">
                    <div class="w-16 h-16 bg-yellow-400/10 rounded-full border border-yellow-400/30 flex items-center justify-center mb-6 mx-auto">
                        <svg class="text-yellow-400" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4 text-center">7 Dias Para Desistir</h3>
                    <p class="text-gray-300 text-center">
                        Se não estiver satisfeito nos primeiros 7 dias, pode cancelar sem custos e sem questionamentos.
                    </p>
                </div>
            </div>
        </div>

        <!-- Guarantee Seal -->
        <div class="glass-card-lg border border-yellow-400/40 max-w-2xl mx-auto margin-section element-spacing-lg p-8 rounded-xl relative overflow-hidden">
            <div class="absolute bg-gradient-to-r from-yellow-400/10 to-transparent rounded-xl"></div>
            <div class="relative flex flex-col md:flex-row items-center gap-8">
                <!-- Seal -->
                <div class="flex-shrink-0">
                    <div class="w-32 h-32 bg-yellow-400/10 rounded-full border-2 border-yellow-400/30 flex items-center justify-center relative">
                        <div class="absolute inset-0 rounded-full border-2 border-yellow-400/20 animate-ping"></div>
                        <svg class="text-yellow-400" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                        </svg>
                    </div>
                </div>
                
                <!-- Text -->
                <div>
                    <h3 class="text-2xl font-bold text-yellow-400 mb-4">
                        Garantia Total de Satisfação
                    </h3>
                    <p class="text-lg text-gray-300 leading-relaxed">
                        Nossa reputação é construída na transparência e resultados. Se por qualquer motivo você não estiver completamente satisfeito com nosso serviço, devolveremos 100% do valor pago.
                    </p>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="glass-card-lg border border-yellow-400/40 max-w-4xl mx-auto margin-section element-spacing-lg p-8 rounded-xl relative overflow-hidden">
            <div class="absolute bg-gradient-to-r from-yellow-400/10 to-transparent rounded-xl"></div>
            <div class="relative text-center">
                <h3 class="text-2xl md:text-3xl font-bold text-yellow-400 mb-6">
                    Pronto Para Recuperar Seu Dinheiro Sem Risco?
                </h3>
                <p class="text-lg text-gray-300 leading-relaxed mb-8 max-w-2xl mx-auto">
                    Comece hoje mesmo com nossa garantia de satisfação.
                </p>
                <button class="btn-primary bg-gradient-to-r from-yellow-400 to-yellow-600 hover:from-yellow-500 hover:to-yellow-700 p-6 mt-4 rounded-lg text-lg">
                    Quero Minha Análise Grátis
                </button>
            </div>
        </div>
    </div>
</section>

<style>
/* Custom styles for this section */
#garantia .glass-card-lg:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px -5px rgba(234, 179, 8, 0.3);
}

#garantia .glass-card-lg {
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

/* Pulse animation for seal */
@keyframes pulse-gold {
    0% { transform: scale(1); opacity: 1; }
    50% { transform: scale(1.05); opacity: 0.7; }
    100% { transform: scale(1); opacity: 1; }
}

#garantia .glass-card-lg:nth-child(2) {
    animation: pulse-gold 2s infinite;
}
</style>