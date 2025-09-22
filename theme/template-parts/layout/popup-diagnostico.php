<?php
/**
 * Template part for displaying the diagnostic form popup
 *
 * @package scs_consultoria
 */
?>

<div id="diagnostico-modal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-75 hidden opacity-0 transition-opacity duration-300">
    <div class="bg-netword-secondary glass-card-lg tech-border p-8 rounded-xl shadow-lg max-w-3xl w-full mx-4 relative transform -translate-y-4 opacity-0 transition-all duration-300 ease-out">
        <button class="absolute top-4 right-4 text-netword-white hover:text-netword-primary transition-colors duration-200" onclick="closeDiagnosticoModal()">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
        </button>
        <h2 class="text-4xl md:text-5xl font-space font-bold text-center mb-16 gradient-text">
            Solicite Seu Diagnóstico Gratuito
        </h2>
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