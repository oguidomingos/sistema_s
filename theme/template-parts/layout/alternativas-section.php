<?php
/**
 * Template part for displaying the traditional alternatives section
 *
 * @package scs_consultoria
 */
?>

<!-- Alternativas Tradicionais -->
<section id="alternativas" class="section-spacing-lg relative overflow-hidden">
    <!-- Background Effects -->
    <div class="absolute inset-0 bg-gradient-to-br from-red-400/5 via-transparent to-red-400/10"></div>
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_20%,rgba(239,68,68,0.1),transparent_50%)]"></div>
    
    <div class="container container-spacing relative">
        <!-- Section Header -->
        <div class="text-center margin-section element-spacing-lg">
            <div class="inline-flex items-center gap-3 glass-card px-6 py-3 rounded-full mb-8 border border-red-400/20">
                <svg class="text-red-400" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path d="M10 10l4 4m0 -4l-4 4"/>
                    <path d="M12 3c7.2 0 9 1.8 9 9s-1.8 9 -9 9s-9 -1.8 -9 -9s1.8 -9 9 -9z"/>
                </svg>
                <span class="text-sm font-mono text-red-400 tracking-wider">PROBLEMAS</span>
            </div>
            
            <h2 class="text-5xl md:text-7xl font-bold mb-8 bg-gradient-to-r from-red-400 via-white to-red-300 bg-clip-text text-transparent leading-tight">
                Alternativas Tradicionais Frustram
                <span class="block text-red-400 text-3xl md:text-4xl mt-2 font-light">
                    Por que os métodos convencionais não funcionam
                </span>
            </h2>
        </div>

        <!-- Problems Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-6xl mx-auto margin-section">
            <!-- Problem 1 -->
            <div class="glass-card-lg border border-red-400/30 p-6 rounded-xl hover:border-red-400/50 hover:shadow-xl hover:shadow-red-400/20 transition-all duration-300">
                <div class="flex items-start gap-4">
                    <div class="flex-shrink-0 text-red-400 text-2xl">❌</div>
                    <div>
                        <h3 class="text-xl font-bold text-white mb-3">Processos lentos</h3>
                        <p class="text-gray-300 leading-relaxed">
                            90–120 dias para conclusão
                        </p>
                    </div>
                </div>
            </div>

            <!-- Problem 2 -->
            <div class="glass-card-lg border border-red-400/30 p-6 rounded-xl hover:border-red-400/50 hover:shadow-xl hover:shadow-red-400/20 transition-all duration-300">
                <div class="flex items-start gap-4">
                    <div class="flex-shrink-0 text-red-400 text-2xl">❌</div>
                    <div>
                        <h3 class="text-xl font-bold text-white mb-3">Retainer e fees altos</h3>
                        <p class="text-gray-300 leading-relaxed">
                            17–20% + custos antecipados
                        </p>
                    </div>
                </div>
            </div>

            <!-- Problem 3 -->
            <div class="glass-card-lg border border-red-400/30 p-6 rounded-xl hover:border-red-400/50 hover:shadow-xl hover:shadow-red-400/20 transition-all duration-300">
                <div class="flex items-start gap-4">
                    <div class="flex-shrink-0 text-red-400 text-2xl">❌</div>
                    <div>
                        <h3 class="text-xl font-bold text-white mb-3">Burocracia excessiva</h3>
                        <p class="text-gray-300 leading-relaxed">
                            Lentidão judicial e administrativa
                        </p>
                    </div>
                </div>
            </div>

            <!-- Problem 4 -->
            <div class="glass-card-lg border border-red-400/30 p-6 rounded-xl hover:border-red-400/50 hover:shadow-xl hover:shadow-red-400/20 transition-all duration-300">
                <div class="flex items-start gap-4">
                    <div class="flex-shrink-0 text-red-400 text-2xl">❌</div>
                    <div>
                        <h3 class="text-xl font-bold text-white mb-3">Incerteza</h3>
                        <p class="text-gray-300 leading-relaxed">
                            Ceticismo sobre viabilidade e retorno
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contrast Section -->
        <div class="glass-card-lg border border-green-400/30 max-w-4xl mx-auto margin-section element-spacing-lg p-8 rounded-xl">
            <div class="flex items-center gap-4 mb-6">
                <svg class="text-green-400" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"/>
                </svg>
                <h3 class="text-2xl md:text-3xl font-bold text-green-400">
                    A Recupera S+ resolve todos esses problemas
                </h3>
            </div>
            <p class="text-lg text-gray-300 leading-relaxed">
                Nossa abordagem tecnológica elimina burocracia, reduz prazos e oferece transparência total no processo, com custos significativamente menores e sem necessidade de investimento inicial.
            </p>
        </div>
    </div>
</section>

<style>
/* Custom styles for this section */
#alternativas .glass-card-lg:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px -5px rgba(239, 68, 68, 0.3);
}

#alternativas .glass-card-lg {
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}
</style>