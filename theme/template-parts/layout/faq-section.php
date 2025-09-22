<?php
/**
 * Template part for displaying the FAQ section
 *
 * @package scs_consultoria
 */
?>

<!-- Perguntas Frequentes -->
<section id="faq" class="section-spacing-lg relative overflow-hidden">
    <!-- Background Effects -->
    <div class="absolute inset-0 bg-gradient-to-br from-blue-500/5 via-transparent to-blue-600/10"></div>
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_20%,rgba(59,130,246,0.1),transparent_50%)]"></div>
    
    <div class="container container-spacing relative">
        <!-- Section Header -->
        <div class="text-center margin-section element-spacing-lg">
            <div class="inline-flex items-center gap-3 glass-card px-6 py-3 rounded-full mb-8 border border-blue-400/20">
                <svg class="text-blue-400" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <span class="text-sm font-mono text-blue-400 tracking-wider">DÚVIDAS</span>
            </div>
            
            <h2 class="text-5xl md:text-7xl font-bold mb-8 bg-gradient-to-r from-blue-400 via-white to-blue-300 bg-clip-text text-transparent leading-tight">
                Perguntas Frequentes
                <span class="block text-blue-400 text-3xl md:text-4xl mt-2 font-light">
                    Tudo O Que Você Precisa Saber
                </span>
            </h2>
        </div>

        <!-- FAQ Accordion -->
        <div class="max-w-4xl mx-auto margin-section">
            <div class="space-y-4">
                <!-- FAQ Item 1 -->
                <div class="faq-item glass-card-lg border border-blue-400/30 rounded-xl overflow-hidden transition-all duration-300">
                    <button class="faq-question w-full flex items-center justify-between p-6 text-left hover:bg-blue-400/5 transition-all duration-300">
                        <h3 class="text-xl font-bold text-white">Quanto tempo leva para receber os créditos?</h3>
                        <svg class="faq-icon text-blue-400 transform transition-transform duration-300" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="faq-answer overflow-hidden transition-all duration-300 max-h-0">
                        <div class="px-6 pb-6 pt-0 text-gray-300">
                            <p>O tempo médio é de 30 a 60 dias após o protocolo, mas já tivemos casos de compensação em apenas 15 dias. O prazo exato depende da agilidade do órgão público responsável pela análise.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="faq-item glass-card-lg border border-blue-400/30 rounded-xl overflow-hidden transition-all duration-300">
                    <button class="faq-question w-full flex items-center justify-between p-6 text-left hover:bg-blue-400/5 transition-all duration-300">
                        <h3 class="text-xl font-bold text-white">Preciso enviar documentos físicos?</h3>
                        <svg class="faq-icon text-blue-400 transform transition-transform duration-300" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="faq-answer overflow-hidden transition-all duration-300 max-h-0">
                        <div class="px-6 pb-6 pt-0 text-gray-300">
                            <p>Não! Todo o processo é 100% digital. Você só precisa enviar fotos ou scans dos documentos necessários por e-mail ou WhatsApp. Nós cuidamos de todo o resto.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="faq-item glass-card-lg border border-blue-400/30 rounded-xl overflow-hidden transition-all duration-300">
                    <button class="faq-question w-full flex items-center justify-between p-6 text-left hover:bg-blue-400/5 transition-all duration-300">
                        <h3 class="text-xl font-bold text-white">Quanto custa o serviço?</h3>
                        <svg class="faq-icon text-blue-400 transform transition-transform duration-300" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="faq-answer overflow-hidden transition-all duration-300 max-h-0">
                        <div class="px-6 pb-6 pt-0 text-gray-300">
                            <p>Nosso honorário é de 20% sobre o valor recuperado, e você só paga após receber o crédito em sua conta. Não cobramos taxas iniciais ou custos ocultos - nosso risco é total.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="faq-item glass-card-lg border border-blue-400/30 rounded-xl overflow-hidden transition-all duration-300">
                    <button class="faq-question w-full flex items-center justify-between p-6 text-left hover:bg-blue-400/5 transition-all duration-300">
                        <h3 class="text-xl font-bold text-white">Posso cancelar a qualquer momento?</h3>
                        <svg class="faq-icon text-blue-400 transform transition-transform duration-300" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="faq-answer overflow-hidden transition-all duration-300 max-h-0">
                        <div class="px-6 pb-6 pt-0 text-gray-300">
                            <p>Sim! Oferecemos período de carência de 7 dias para cancelamento sem custos. Após esse período, você pode cancelar a qualquer momento sem multa, apenas pagando pelos serviços já realizados.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 5 -->
                <div class="faq-item glass-card-lg border border-blue-400/30 rounded-xl overflow-hidden transition-all duration-300">
                    <button class="faq-question w-full flex items-center justify-between p-6 text-left hover:bg-blue-400/5 transition-all duration-300">
                        <h3 class="text-xl font-bold text-white">Quais documentos são necessários?</h3>
                        <svg class="faq-icon text-blue-400 transform transition-transform duration-300" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="faq-answer overflow-hidden transition-all duration-300 max-h-0">
                        <div class="px-6 pb-6 pt-0 text-gray-300">
                            <p>Basicamente precisamos de: CNPJ da empresa, documentos dos funcionários (RG, CPF e PIS) e comprovante de endereço. Enviamos uma lista completa e personalizada após a análise inicial.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Help -->
        <div class="glass-card-lg border border-blue-400/40 max-w-4xl mx-auto margin-section element-spacing-lg p-8 rounded-xl relative overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-400/10 to-transparent rounded-xl"></div>
            <div class="relative flex flex-col md:flex-row items-center gap-8">
                <!-- Icon -->
                <div class="flex-shrink-0">
                    <div class="w-20 h-20 bg-blue-400/10 rounded-full border-2 border-blue-400/30 flex items-center justify-center">
                        <svg class="text-blue-400" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6m4-3h6v6m-11 5l5-5-5-5"/>
                        </svg>
                    </div>
                </div>
                
                <!-- Text -->
                <div>
                    <h3 class="text-2xl font-bold text-blue-400 mb-4">
                        Ainda com dúvidas?
                    </h3>
                    <p class="text-lg text-gray-300 leading-relaxed">
                        Nossa equipe está disponível para esclarecer qualquer questão. Entre em contato agora mesmo pelo WhatsApp ou e-mail.
                    </p>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="glass-card-lg border border-blue-400/40 max-w-4xl mx-auto margin-section element-spacing-lg p-8 rounded-xl relative overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-400/10 to-transparent rounded-xl"></div>
            <div class="relative text-center">
                <h3 class="text-2xl md:text-3xl font-bold text-blue-400 mb-6">
                    Pronto Para Recuperar Seu Dinheiro?
                </h3>
                <p class="text-lg text-gray-300 leading-relaxed mb-8 max-w-2xl mx-auto">
                    Comece hoje mesmo com nossa garantia de satisfação.
                </p>
                <button class="btn-primary bg-gradient-to-r from-blue-400 to-blue-600 hover:from-blue-500 hover:to-blue-700">
                    Fazer Minha Análise Grátis
                </button>
            </div>
        </div>
    </div>
</section>

<style>
/* Custom styles for this section */
#faq .glass-card-lg:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px -5px rgba(59, 130, 246, 0.3);
}

#faq .faq-item.active .faq-question {
    background-color: rgba(59, 130, 246, 0.05);
}

#faq .faq-item.active .faq-icon {
    transform: rotate(180deg);
}

#faq .faq-item.active .faq-answer {
    max-height: 300px;
    padding-top: 0.5rem;
}

#faq .faq-answer {
    transition: max-height 0.3s ease-out, padding 0.3s ease;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const faqItems = document.querySelectorAll('.faq-item');
    
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        
        question.addEventListener('click', () => {
            // Close all other items
            faqItems.forEach(otherItem => {
                if (otherItem !== item && otherItem.classList.contains('active')) {
                    otherItem.classList.remove('active');
                }
            });
            
            // Toggle current item
            item.classList.toggle('active');
        });
    });
});
</script>