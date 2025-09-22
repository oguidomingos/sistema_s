import React, { useState, useEffect } from 'react';
import { Button } from '@/components/ui/button';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import { Card, CardContent } from '@/components/ui/card';
import { Accordion, AccordionContent, AccordionItem, AccordionTrigger } from '@/components/ui/accordion';
import { CheckCircle, TrendingUp, Shield, Clock, DollarSign, Users, Star, ArrowRight, Menu, X, Zap, Cpu, Network, AlertTriangle, Scale, FileText } from 'lucide-react';
import { useToast } from '@/hooks/use-toast';

const Index = () => {
  const [isMenuOpen, setIsMenuOpen] = useState(false);
  const [isVisible, setIsVisible] = useState<Record<string, boolean>>({});
  const { toast } = useToast();

  useEffect(() => {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            setIsVisible(prev => ({ ...prev, [entry.target.id]: true }));
          }
        });
      },
      { threshold: 0.1 }
    );

    document.querySelectorAll('[id]').forEach((el) => {
      observer.observe(el);
    });

    return () => observer.disconnect();
  }, []);

  const handleFormSubmit = (e: React.FormEvent) => {
    e.preventDefault();
    toast({
      title: "Diagnóstico Solicitado",
      description: "Entraremos em contato em até 2 horas úteis.",
    });
  };

  const scrollToSection = (sectionId: string) => {
    document.getElementById(sectionId)?.scrollIntoView({ behavior: 'smooth' });
    setIsMenuOpen(false);
  };

  return (
    <div className="min-h-screen bg-netword-secondary cyber-grid">
      {/* Header */}
      <header className="fixed top-0 w-full glass-card z-50 border-b border-netword-primary/20">
        <div className="container flex justify-between items-center py-6">
          <div className="font-space text-3xl font-bold gradient-text flex items-center gap-3">
            <div className="w-8 h-8 rounded-full bg-gradient-to-r from-netword-primary to-netword-accent animate-glow-pulse"></div>
            Recupera S+
          </div>
          
          {/* Desktop Menu */}
          <nav className="hidden md:flex space-x-8">
            <button onClick={() => scrollToSection('hero')} className="text-netword-white/80 hover:text-netword-primary transition-colors font-medium">
              Início
            </button>
            <button onClick={() => scrollToSection('solucao')} className="text-netword-white/80 hover:text-netword-primary transition-colors font-medium">
              Solução
            </button>
            <button onClick={() => scrollToSection('beneficios')} className="text-netword-white/80 hover:text-netword-primary transition-colors font-medium">
              Benefícios
            </button>
            <button onClick={() => scrollToSection('direito')} className="text-netword-white/80 hover:text-netword-primary transition-colors font-medium">
              Seu Direito
            </button>
            <button onClick={() => scrollToSection('depoimentos')} className="text-netword-white/80 hover:text-netword-primary transition-colors font-medium">
              Depoimentos
            </button>
            <button onClick={() => scrollToSection('contato')} className="text-netword-white/80 hover:text-netword-primary transition-colors font-medium">
              Contato
            </button>
          </nav>

          {/* Mobile Menu Button */}
          <button 
            className="md:hidden text-netword-white hover:text-netword-primary transition-colors"
            onClick={() => setIsMenuOpen(!isMenuOpen)}
          >
            {isMenuOpen ? <X size={24} /> : <Menu size={24} />}
          </button>
        </div>

        {/* Mobile Menu */}
        {isMenuOpen && (
          <div className="md:hidden glass-card border-t border-netword-primary/20">
            <nav className="container py-6 space-y-4">
              <button onClick={() => scrollToSection('hero')} className="block text-netword-white/80 hover:text-netword-primary transition-colors font-medium">
                Início
              </button>
              <button onClick={() => scrollToSection('solucao')} className="block text-netword-white/80 hover:text-netword-primary transition-colors font-medium">
                Solução
              </button>
              <button onClick={() => scrollToSection('beneficios')} className="block text-netword-white/80 hover:text-netword-primary transition-colors font-medium">
                Benefícios
              </button>
              <button onClick={() => scrollToSection('direito')} className="block text-netword-white/80 hover:text-netword-primary transition-colors font-medium">
                Seu Direito
              </button>
              <button onClick={() => scrollToSection('depoimentos')} className="block text-netword-white/80 hover:text-netword-primary transition-colors font-medium">
                Depoimentos
              </button>
              <button onClick={() => scrollToSection('contato')} className="block text-netword-white/80 hover:text-netword-primary transition-colors font-medium">
                Contato
              </button>
            </nav>
          </div>
        )}
      </header>

      {/* Hero Section */}
      <section id="hero" className="pt-32 section-spacing relative overflow-hidden">
        <div className="absolute inset-0 bg-gradient-to-br from-netword-primary/5 via-transparent to-netword-accent/5"></div>
        <div className="container relative">
          <div className={`text-center max-w-5xl mx-auto ${isVisible.hero ? 'animate-fade-in' : 'opacity-0'}`}>
            <div className="inline-flex items-center gap-2 glass-card px-4 py-2 rounded-full mb-8 neon-border">
              <Scale className="text-netword-primary animate-pulse" size={16} />
              <span className="text-sm font-mono text-netword-primary">AÇÕES JUDICIAIS EXCLUSIVAS</span>
            </div>
            
            <h1 className="text-4xl md:text-6xl font-space font-bold mb-8 gradient-text leading-tight">
              <span className="neon-text">RECUPERE COM SEGURANÇA</span><br />
              <span className="text-netword-accent">46 MESES</span> de Contribuições Feitas ao Sistema S
            </h1>
            
            <p className="text-2xl md:text-3xl mb-8 text-netword-primary font-bold neon-text">
              Seu dinheiro de volta em apenas 30 dias
            </p>

            {/* Prazo em vermelho */}
            <div className="mb-8">
              <p className="text-xl md:text-2xl font-bold text-red-500 animate-pulse">
                ⚠️ Prazo: sua empresa tem apenas mais 3 anos e seis meses para aproveitar dos resultados dessa decisão
              </p>
            </div>
            
            <p className="text-lg md:text-xl mb-12 text-netword-white/80 font-inter max-w-4xl mx-auto">
              Para empresas do Lucro Presumido e Real, com folha acima de 20 SM.<br />
              <span className="text-netword-accent font-semibold">Ações Judiciais Exclusivas – Temas 1.079 e 1.119 do STJ</span>
            </p>
            
            <div className="flex flex-col sm:flex-row gap-6 justify-center items-center mb-12">
              <div className="flex items-center space-x-3 glass-card px-4 py-3 rounded-lg">
                <CheckCircle className="text-netword-primary" size={20} />
                <span className="text-netword-white">Zero custo inicial</span>
              </div>
              <div className="flex items-center space-x-3 glass-card px-4 py-3 rounded-lg">
                <CheckCircle className="text-netword-primary" size={20} />
                <span className="text-netword-white">Success Fee de 15%</span>
              </div>
              <div className="flex items-center space-x-3 glass-card px-4 py-3 rounded-lg">
                <CheckCircle className="text-netword-primary" size={20} />
                <span className="text-netword-white">Garantia "No Win, No Fee"</span>
              </div>
            </div>
            
            <Button 
              onClick={() => scrollToSection('contato')} 
              className="glass-button text-lg px-12 py-6 font-semibold animate-glow-pulse"
            >
              <Cpu className="mr-3" size={20} />
              Quero Meu Diagnóstico Gratuito
              <ArrowRight className="ml-3" size={20} />
            </Button>
          </div>
        </div>
      </section>

      {/* Confiança Instantânea */}
      <section className="section-spacing">
        <div className="container text-center">
          <div className={`${isVisible.confianca ? 'animate-slide-up' : 'opacity-0'}`} id="confianca">
            <div className="glass-card p-12 rounded-2xl neon-border hologram-effect">
              <h2 className="text-3xl md:text-4xl font-space mb-6 gradient-text">
                Milhões parados no governo podem voltar ao seu caixa agora mesmo.
              </h2>
              <p className="text-2xl text-netword-primary font-bold neon-text">
                Mais de <span className="text-netword-accent">R$ 30 milhões</span> já recuperados para empresas de diversos setores no Brasil.
              </p>
            </div>
          </div>
        </div>
      </section>

      {/* Exposição */}
      <section className="section-spacing">
        <div className="container">
          <div className={`max-w-5xl mx-auto text-center ${isVisible.exposicao ? 'animate-fade-in' : 'opacity-0'}`} id="exposicao">
            <h2 className="text-4xl md:text-5xl font-space mb-12 gradient-text">
              Se a sua empresa está no regime Lucro Real ou Presumido...
            </h2>
            <div className="glass-card p-8 rounded-2xl">
              <p className="text-lg md:text-xl text-netword-white/90 leading-relaxed">
                ...e tem folha de pagamento acima de 20 salários-mínimos, você pode estar pagando até <span className="font-bold text-netword-primary neon-text">5,8% da folha ao Sistema S</span> (SENAI, SESI, SEBRAE, SESC) sobre valores que, pelas <span className="font-bold text-netword-primary neon-text">Leis 5.890/73 e 6.950/81</span>, não deveriam ser cobrados.
              </p>
            </div>
          </div>
        </div>
      </section>

      {/* Incidente Jurídico */}
      <section className="section-spacing">
        <div className="container">
          <div className={`max-w-5xl mx-auto ${isVisible.incidente ? 'animate-slide-up' : 'opacity-0'}`} id="incidente">
            <div className="glass-card rounded-2xl p-12 tech-border">
              <div className="text-center mb-8">
                <div className="inline-flex items-center justify-center w-20 h-20 rounded-full bg-gradient-to-r from-netword-primary to-netword-accent mb-6 animate-float">
                  <Scale className="text-netword-dark" size={40} />
                </div>
                <h2 className="text-3xl md:text-4xl font-space font-bold gradient-text mb-2">
                  Marcos Jurídicos Definidos
                </h2>
                <div className="w-20 h-1 bg-gradient-to-r from-netword-primary to-netword-accent mx-auto rounded-full"></div>
              </div>
              <div className="grid md:grid-cols-3 gap-8 text-center">
                <div className="glass-card p-6 rounded-xl">
                  <FileText className="text-netword-primary mx-auto mb-4" size={48} />
                  <h3 className="font-space font-semibold text-lg mb-2 text-netword-primary">Leis 5.890/73 e 6.950/81</h3>
                  <p className="text-netword-white/80">Limites de 10× e 20× salário-mínimo na base de cálculo do Sistema S</p>
                </div>
                <div className="glass-card p-6 rounded-xl">
                  <Shield className="text-netword-primary mx-auto mb-4" size={48} />
                  <h3 className="font-space font-semibold text-lg mb-2 text-netword-primary">STJ Tema 1.079</h3>
                  <p className="text-netword-white/80">Modulação de efeitos até 02/05/2024 para empresas habilitadas</p>
                </div>
                <div className="glass-card p-6 rounded-xl">
                  <Users className="text-netword-primary mx-auto mb-4" size={48} />
                  <h3 className="font-space font-semibold text-lg mb-2 text-netword-primary">STF Tema 1.119</h3>
                  <p className="text-netword-white/80">Legitimidade de associações sem comprovação prévia de filiação</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* Linha do Tempo Jurídica */}
      <section className="section-spacing relative overflow-hidden">
        <div className="absolute inset-0 bg-gradient-to-r from-netword-primary/5 to-netword-accent/5"></div>
        <div className="container relative">
          <div className={`max-w-6xl mx-auto ${isVisible.timeline ? 'animate-fade-in' : 'opacity-0'}`} id="timeline">
            <h2 className="text-4xl md:text-5xl font-space font-bold text-center mb-16 gradient-text">
              Linha do Tempo Jurídica – Direito à Recuperação
            </h2>
            
            {/* Timeline Horizontal */}
            <div className="relative">
              {/* Linha principal diagonal */}
              <div className="absolute top-1/2 left-0 right-0 h-1 bg-gradient-to-r from-netword-primary via-netword-accent to-netword-primary transform -translate-y-1/2 rotate-1"></div>
              
              {/* Timeline Items */}
              <div className="grid grid-cols-1 md:grid-cols-7 gap-8 relative">
                
                {/* 1973 */}
                <div className="relative">
                  <div className="glass-card p-6 rounded-xl tech-border transform rotate-2 hover:rotate-0 transition-transform duration-300">
                    <div className="absolute -top-3 left-1/2 transform -translate-x-1/2 w-6 h-6 bg-gradient-to-r from-netword-primary to-netword-accent rounded-full animate-glow-pulse"></div>
                    <div className="text-center">
                      <h3 className="font-space font-bold text-lg mb-2 text-netword-primary">1973</h3>
                      <h4 className="font-semibold text-sm mb-3 text-netword-accent">Lei nº 5.890/73</h4>
                      <p className="text-xs text-netword-white/80 leading-relaxed">
                        Estabelece limite de <span className="font-bold text-netword-primary">10 SM</span> como teto de base de cálculo das contribuições ao Sistema S.
                      </p>
                    </div>
                  </div>
                </div>

                {/* 1981 */}
                <div className="relative">
                  <div className="glass-card p-6 rounded-xl tech-border transform -rotate-1 hover:rotate-0 transition-transform duration-300">
                    <div className="absolute -top-3 left-1/2 transform -translate-x-1/2 w-6 h-6 bg-gradient-to-r from-netword-primary to-netword-accent rounded-full animate-glow-pulse"></div>
                    <div className="text-center">
                      <h3 className="font-space font-bold text-lg mb-2 text-netword-primary">1981</h3>
                      <h4 className="font-semibold text-sm mb-3 text-netword-accent">Lei nº 6.950/81</h4>
                      <p className="text-xs text-netword-white/80 leading-relaxed">
                        Atualiza o limite para <span className="font-bold text-netword-primary">20 SM</span>, reforçando o teto legal para o recolhimento.
                      </p>
                    </div>
                  </div>
                </div>

                {/* 1986 */}
                <div className="relative">
                  <div className="glass-card p-6 rounded-xl tech-border transform rotate-1 hover:rotate-0 transition-transform duration-300">
                    <div className="absolute -top-3 left-1/2 transform -translate-x-1/2 w-6 h-6 bg-gradient-to-r from-red-500 to-orange-500 rounded-full animate-pulse"></div>
                    <div className="text-center">
                      <h3 className="font-space font-bold text-lg mb-2 text-netword-primary">1986</h3>
                      <h4 className="font-semibold text-sm mb-3 text-red-400">Decreto nº 2.318/86</h4>
                      <p className="text-xs text-netword-white/80 leading-relaxed">
                        Revoga parcialmente o teto, gerando <span className="font-bold text-red-400">controvérsia jurídica</span> por décadas.
                      </p>
                    </div>
                  </div>
                </div>

                {/* 2020 */}
                <div className="relative">
                  <div className="glass-card p-6 rounded-xl tech-border transform -rotate-2 hover:rotate-0 transition-transform duration-300 neon-border">
                    <div className="absolute -top-3 left-1/2 transform -translate-x-1/2 w-6 h-6 bg-gradient-to-r from-netword-primary to-netword-accent rounded-full animate-glow-pulse"></div>
                    <div className="text-center">
                      <h3 className="font-space font-bold text-lg mb-2 text-netword-primary">2020</h3>
                      <h4 className="font-semibold text-sm mb-3 text-netword-accent">Tema 1.079 (STJ)</h4>
                      <p className="text-xs text-netword-white/80 leading-relaxed">
                        STJ decide que o teto de <span className="font-bold text-netword-primary">20 SM é válido</span>, mas só para quem se antecipou até 02/05/2024.
                      </p>
                    </div>
                  </div>
                </div>

                {/* 2021 */}
                <div className="relative">
                  <div className="glass-card p-6 rounded-xl tech-border transform rotate-1 hover:rotate-0 transition-transform duration-300 neon-border">
                    <div className="absolute -top-3 left-1/2 transform -translate-x-1/2 w-6 h-6 bg-gradient-to-r from-netword-primary to-netword-accent rounded-full animate-glow-pulse"></div>
                    <div className="text-center">
                      <h3 className="font-space font-bold text-lg mb-2 text-netword-primary">2021</h3>
                      <h4 className="font-semibold text-sm mb-3 text-netword-accent">Tema 1.119 (STF)</h4>
                      <p className="text-xs text-netword-white/80 leading-relaxed">
                        STF confirma que associações podem entrar com ações coletivas <span className="font-bold text-netword-primary">sem autorização prévia</span>.
                      </p>
                    </div>
                  </div>
                </div>

                {/* 2024 */}
                <div className="relative">
                  <div className="glass-card p-6 rounded-xl tech-border transform -rotate-1 hover:rotate-0 transition-transform duration-300 border-yellow-500/50">
                    <div className="absolute -top-3 left-1/2 transform -translate-x-1/2 w-6 h-6 bg-gradient-to-r from-yellow-500 to-orange-500 rounded-full animate-pulse"></div>
                    <div className="text-center">
                      <h3 className="font-space font-bold text-lg mb-2 text-netword-primary">2024</h3>
                      <h4 className="font-semibold text-sm mb-3 text-yellow-400">Fim do Prazo</h4>
                      <p className="text-xs text-netword-white/80 leading-relaxed">
                        Empresas precisavam estar habilitadas até <span className="font-bold text-yellow-400">2 de maio de 2024</span> para manter o direito retroativo.
                      </p>
                    </div>
                  </div>
                </div>

                {/* 2029 */}
                <div className="relative">
                  <div className="glass-card p-6 rounded-xl tech-border transform rotate-2 hover:rotate-0 transition-transform duration-300 border-red-500/50">
                    <div className="absolute -top-3 left-1/2 transform -translate-x-1/2 w-6 h-6 bg-gradient-to-r from-red-500 to-red-600 rounded-full animate-pulse"></div>
                    <div className="text-center">
                      <h3 className="font-space font-bold text-lg mb-2 text-netword-primary">2029</h3>
                      <h4 className="font-semibold text-sm mb-3 text-red-400">Prescrição Final</h4>
                      <p className="text-xs text-netword-white/80 leading-relaxed">
                        Empresas têm até <span className="font-bold text-red-400">maio de 2029</span> para usar esse direito. Após isso, valores irrecuperáveis.
                      </p>
                    </div>
                  </div>
                </div>

              </div>
            </div>

            {/* Call to Action */}
            <div className="text-center mt-16">
              <div className="glass-card p-8 rounded-2xl tech-border">
                <h3 className="text-2xl md:text-3xl font-space font-bold mb-4 gradient-text">
                  Sua Janela de Oportunidade Está se Fechando
                </h3>
                <p className="text-lg text-netword-white/90 mb-6">
                  Menos de <span className="font-bold text-red-400">4 anos</span> restantes para aproveitar essa decisão histórica do STJ e STF.
                </p>
                <Button 
                  onClick={() => scrollToSection('contato')} 
                  className="glass-button text-lg px-8 py-4 font-semibold animate-glow-pulse"
                >
                  <Clock className="mr-3" size={20} />
                  Não Deixe Para Depois - Solicite Análise Agora
                  <ArrowRight className="ml-3" size={20} />
                </Button>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* Urgência */}
      <section className="section-spacing">
        <div className="container">
          <div className={`max-w-5xl mx-auto ${isVisible.urgencia ? 'animate-fade-in' : 'opacity-0'}`} id="urgencia">
            <div className="glass-card p-8 rounded-2xl border border-red-500/30">
              <h2 className="text-3xl md:text-4xl font-space font-bold text-red-400 mb-8 text-center neon-text">
                ⚠️ ATENÇÃO: Prazo Limitado até Maio de 2029
              </h2>
              <div className="text-center mb-8">
                <p className="text-xl text-netword-white mb-4">
                  <span className="font-bold text-netword-accent neon-text">Você tem menos de 4 anos</span> para aproveitar essa decisão judicial histórica.
                </p>
              </div>
              <div className="grid md:grid-cols-3 gap-6">
                <div className="glass-card p-6 text-center rounded-xl">
                  <AlertTriangle className="text-red-400 mx-auto mb-4 animate-pulse" size={48} />
                  <h3 className="font-space font-semibold text-lg mb-2 text-netword-primary">Prazo Fatal</h3>
                  <p className="text-netword-white/80">Habilitação deve ser feita até maio de 2029 - cada mês parado é oportunidade perdida.</p>
                </div>
                <div className="glass-card p-6 text-center rounded-xl">
                  <TrendingUp className="text-red-400 mx-auto mb-4 animate-pulse" size={48} />
                  <h3 className="font-space font-semibold text-lg mb-2 text-netword-primary">Correção Monetária</h3>
                  <p className="text-netword-white/80">Valores crescem mensalmente - quanto antes se habilitar, maior o montante recuperado.</p>
                </div>
                <div className="glass-card p-6 text-center rounded-xl">
                  <Users className="text-red-400 mx-auto mb-4 animate-pulse" size={48} />
                  <h3 className="font-space font-semibold text-lg mb-2 text-netword-primary">Vantagem Competitiva</h3>
                  <p className="text-netword-white/80">Empresas que já recuperaram esses créditos ganham capital para investir e crescer.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* Como Posso Buscar Esse Direito */}
      <section id="direito" className="section-spacing relative overflow-hidden">
        <div className="absolute inset-0 bg-gradient-to-r from-netword-primary/10 to-netword-accent/10"></div>
        <div className="container relative">
          <div className={`max-w-5xl mx-auto text-center ${isVisible.direito ? 'animate-fade-in' : 'opacity-0'}`}>
            <h2 className="text-4xl md:text-5xl font-space font-bold mb-12 gradient-text">
              Como Posso Buscar Esse Direito?
            </h2>
            <div className="glass-card p-12 rounded-2xl tech-border">
              <div className="mb-8">
                <Scale className="text-netword-primary mx-auto mb-6 animate-float" size={64} />
                <h3 className="text-2xl md:text-3xl font-space font-bold text-netword-primary mb-6">
                  Apenas Via Ações Judiciais Exclusivas
                </h3>
              </div>
              <p className="text-lg md:text-xl text-netword-white/90 leading-relaxed mb-8">
                Apenas empresas habilitadas nas <span className="font-bold text-netword-accent neon-text">Ações Coletivas Exclusivas</span> (Temas 1.079 e 1.119 do STJ) têm legitimidade para recuperar esses valores – e nós cuidamos de todo o processo para você, de forma <span className="font-bold text-netword-primary">segura e 100% legal</span>.
              </p>
              <div className="grid md:grid-cols-2 gap-8">
                <div className="glass-card p-6 rounded-xl">
                  <CheckCircle className="text-netword-primary mb-4 mx-auto" size={48} />
                  <h4 className="font-space font-semibold text-lg mb-2 text-netword-primary">Processo Seguro</h4>
                  <p className="text-netword-white/80">Fundamentado em decisões do STJ e STF, com jurisprudência consolidada</p>
                </div>
                <div className="glass-card p-6 rounded-xl">
                  <Shield className="text-netword-primary mb-4 mx-auto" size={48} />
                  <h4 className="font-space font-semibold text-lg mb-2 text-netword-primary">100% Legal</h4>
                  <p className="text-netword-white/80">Processo judicial oficial com acompanhamento total da nossa equipe especializada</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* Obstáculos */}
      <section className="section-spacing">
        <div className="container">
          <div className={`max-w-5xl mx-auto text-center ${isVisible.obstaculos ? 'animate-slide-up' : 'opacity-0'}`} id="obstaculos">
            <h2 className="text-4xl md:text-5xl font-space font-bold gradient-text mb-12">
              Alternativas Tradicionais Frustram
            </h2>
            <div className="grid md:grid-cols-2 gap-6">
              <div className="glass-card p-6 rounded-xl border border-red-500/20">
                <h3 className="font-space font-semibold text-lg mb-2 text-red-400">❌ Processos lentos</h3>
                <p className="text-netword-white/80">90–120 dias para conclusão</p>
              </div>
              <div className="glass-card p-6 rounded-xl border border-red-500/20">
                <h3 className="font-space font-semibold text-lg mb-2 text-red-400">❌ Retainer e fees altos</h3>
                <p className="text-netword-white/80">17–20% + custos antecipados</p>
              </div>
              <div className="glass-card p-6 rounded-xl border border-red-500/20">
                <h3 className="font-space font-semibold text-lg mb-2 text-red-400">❌ Burocracia excessiva</h3>
                <p className="text-netword-white/80">Lentidão judicial e administrativa</p>
              </div>
              <div className="glass-card p-6 rounded-xl border border-red-500/20">
                <h3 className="font-space font-semibold text-lg mb-2 text-red-400">❌ Incerteza</h3>
                <p className="text-netword-white/80">Ceticismo sobre viabilidade e retorno</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* Solução */}
      <section id="solucao" className="section-spacing relative overflow-hidden">
        <div className="absolute inset-0 bg-gradient-to-r from-netword-primary/10 to-netword-accent/10"></div>
        <div className="container relative">
          <div className={`max-w-5xl mx-auto text-center ${isVisible.solucao ? 'animate-fade-in' : 'opacity-0'}`}>
            <div className="inline-flex items-center gap-2 glass-card px-4 py-2 rounded-full mb-8 neon-border">
              <Network className="text-netword-primary animate-pulse" size={16} />
              <span className="text-sm font-mono text-netword-primary">REVOLUÇÃO TECNOLÓGICA</span>
            </div>
            
            <h2 className="text-4xl md:text-6xl font-space font-bold mb-12 gradient-text">
              Recupera S+ Revolucionou o Processo
            </h2>
            
            <div className="grid md:grid-cols-2 gap-8 mt-16">
              <div className="glass-card p-8 rounded-xl tech-border hologram-effect">
                <div className="text-netword-accent text-5xl font-bold mb-4 neon-text">1</div>
                <h3 className="font-space font-semibold text-xl mb-4 text-netword-primary">Ações Coletivas Estratégicas</h3>
                <p className="text-netword-white/80">Habilitação em ações coletivas vencedoras com poder de barganha e prazos reduzidos.</p>
              </div>
              <div className="glass-card p-8 rounded-xl tech-border hologram-effect">
                <div className="text-netword-accent text-5xl font-bold mb-4 neon-text">2</div>
                <h3 className="font-space font-semibold text-xl mb-4 text-netword-primary">Análise Automática</h3>
                <p className="text-netword-white/80">Análise de até 48 meses de folha de pagamento em 5 dias úteis via e-CAC.</p>
              </div>
              <div className="glass-card p-8 rounded-xl tech-border hologram-effect">
                <div className="text-netword-accent text-5xl font-bold mb-4 neon-text">3</div>
                <h3 className="font-space font-semibold text-xl mb-4 text-netword-primary">Advogados Tributaristas</h3>
                <p className="text-netword-white/80">Expertise comprovada em STF, STJ e CARF com histórico de sucesso nos Temas 1.079 e 1.119.</p>
              </div>
              <div className="glass-card p-8 rounded-xl tech-border hologram-effect">
                <div className="text-netword-accent text-5xl font-bold mb-4 neon-text">4</div>
                <h3 className="font-space font-semibold text-xl mb-4 text-netword-primary">Compensação Rápida</h3>
                <p className="text-netword-white/80">Compensação dos créditos em até 40 dias após apresentação dos resultados.</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* Como Funciona */}
      <section className="section-spacing">
        <div className="container">
          <div className={`max-w-5xl mx-auto ${isVisible.funcionamento ? 'animate-slide-up' : 'opacity-0'}`} id="funcionamento">
            <h2 className="text-4xl md:text-5xl font-space font-bold text-center mb-16 gradient-text">
              Como Funciona - Passo a Passo
            </h2>
            <div className="space-y-8">
              <div className="flex items-start space-x-6 glass-card p-6 rounded-xl">
                <div className="flex-shrink-0 w-14 h-14 bg-gradient-to-r from-netword-primary to-netword-accent rounded-full flex items-center justify-center text-netword-dark font-bold text-xl animate-glow-pulse">1</div>
                <div>
                  <h3 className="font-space font-semibold text-xl mb-2 text-netword-primary">Diagnóstico Gratuito</h3>
                  <p className="text-netword-white/80">Projetamos seu valor recuperável com base na sua folha de pagamento.</p>
                </div>
              </div>
              <div className="flex items-start space-x-6 glass-card p-6 rounded-xl">
                <div className="flex-shrink-0 w-14 h-14 bg-gradient-to-r from-netword-primary to-netword-accent rounded-full flex items-center justify-center text-netword-dark font-bold text-xl animate-glow-pulse">2</div>
                <div>
                  <h3 className="font-space font-semibold text-xl mb-2 text-netword-primary">Análise Completa (5 dias úteis)</h3>
                  <p className="text-netword-white/80">Análise de até 48 meses de dados via e-CAC em apenas 5 dias úteis.</p>
                </div>
              </div>
              <div className="flex items-start space-x-6 glass-card p-6 rounded-xl">
                <div className="flex-shrink-0 w-14 h-14 bg-gradient-to-r from-netword-primary to-netword-accent rounded-full flex items-center justify-center text-netword-dark font-bold text-xl animate-glow-pulse">3</div>
                <div>
                  <h3 className="font-space font-semibold text-xl mb-2 text-netword-primary">Habilitação Judicial</h3>
                  <p className="text-netword-white/80">Habilitação nas ações coletivas vencedoras, sem nenhum custo inicial.</p>
                </div>
              </div>
              <div className="flex items-start space-x-6 glass-card p-6 rounded-xl neon-border">
                <div className="flex-shrink-0 w-14 h-14 bg-gradient-to-r from-netword-accent to-netword-primary rounded-full flex items-center justify-center text-netword-dark font-bold text-xl animate-glow-pulse">4</div>
                <div>
                  <h3 className="font-space font-semibold text-xl mb-2 text-netword-accent neon-text">Compensação (40 dias)</h3>
                  <p className="text-netword-white/80">Compensação dos créditos em até 40 dias após apresentação dos resultados.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* Nova Tabela de Estimativas */}
      <section className="section-spacing">
        <div className="container">
          <div className={`max-w-5xl mx-auto ${isVisible.estimativas ? 'animate-fade-in' : 'opacity-0'}`} id="estimativas">
            <h2 className="text-4xl md:text-5xl font-space font-bold text-center mb-16 gradient-text">
              Estimativas de Recuperação para Sua Empresa
            </h2>
            <div className="glass-card rounded-2xl overflow-hidden tech-border">
              <div className="overflow-x-auto">
                <table className="w-full">
                  <thead className="bg-gradient-to-r from-netword-primary to-netword-accent text-netword-dark">
                    <tr>
                      <th className="p-4 text-left font-space font-semibold">Folha Mensal</th>
                      <th className="p-4 text-center font-space font-semibold">% Teto de Pagamento</th>
                      <th className="p-4 text-center font-space font-semibold">% sobre Teto 20 SM</th>
                      <th className="p-4 text-center font-space font-semibold">Valor Mensal a Recuperar</th>
                      <th className="p-4 text-center font-space font-semibold">Total Estimado</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr className="border-b border-netword-primary/20">
                      <td className="p-4 font-semibold text-netword-white">R$ 100.000</td>
                      <td className="p-4 text-center text-netword-white">5,8%</td>
                      <td className="p-4 text-center text-netword-white">5,8%</td>
                      <td className="p-4 text-center text-netword-white">R$ 5.800</td>
                      <td className="p-4 text-center font-bold text-netword-accent neon-text">R$ 170.358,56</td>
                    </tr>
                    <tr className="border-b border-netword-primary/20">
                      <td className="p-4 font-semibold text-netword-white">R$ 300.000</td>
                      <td className="p-4 text-center text-netword-white">5,8%</td>
                      <td className="p-4 text-center text-netword-white">5,8%</td>
                      <td className="p-4 text-center text-netword-white">R$ 17.400</td>
                      <td className="p-4 text-center font-bold text-netword-accent neon-text">R$ 704.138,56</td>
                    </tr>
                    <tr className="border-b border-netword-primary/20">
                      <td className="p-4 font-semibold text-netword-white">R$ 500.000</td>
                      <td className="p-4 text-center text-netword-white">5,8%</td>
                      <td className="p-4 text-center text-netword-white">5,8%</td>
                      <td className="p-4 text-center text-netword-white">R$ 29.000</td>
                      <td className="p-4 text-center font-bold text-netword-accent neon-text">R$ 1.237.738,56</td>
                    </tr>
                    <tr>
                      <td className="p-4 font-semibold text-netword-white">R$ 1.000.000</td>
                      <td className="p-4 text-center text-netword-white">5,8%</td>
                      <td className="p-4 text-center text-netword-white">5,8%</td>
                      <td className="p-4 text-center text-netword-white">R$ 58.000</td>
                      <td className="p-4 text-center font-bold text-netword-accent neon-text">R$ 2.667.903,73</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div className="p-6 bg-netword-primary/5">
                <p className="text-sm text-netword-white/80 text-center">
                  <span className="text-netword-accent font-semibold">*</span> Valores serão corrigidos mensalmente e, portanto, crescerão ao longo do tempo.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* Benefícios */}
      <section id="beneficios" className="section-spacing">
        <div className="container">
          <div className={`max-w-5xl mx-auto ${isVisible.beneficios ? 'animate-fade-in' : 'opacity-0'}`}>
            <h2 className="text-4xl md:text-5xl font-space font-bold text-center mb-16 gradient-text">
              Benefícios Concretos
            </h2>
            <div className="grid md:grid-cols-2 gap-8">
              <div className="glass-card p-8 rounded-xl tech-border">
                <DollarSign className="text-netword-primary mb-4 animate-float" size={48} />
                <h3 className="font-space font-semibold text-xl mb-4 text-netword-primary">💰 Liquidez Imediata</h3>
                <p className="text-netword-white/80">Capital novo para investimento ou redução de dívida empresarial.</p>
              </div>
              <div className="glass-card p-8 rounded-xl tech-border">
                <Shield className="text-netword-primary mb-4 animate-float" size={48} />
                <h3 className="font-space font-semibold text-xl mb-4 text-netword-primary">🚫 Zero Investimento Inicial</h3>
                <p className="text-netword-white/80">Nosso risco, seu ganho. Você só paga se recuperarmos seus créditos.</p>
              </div>
              <div className="glass-card p-8 rounded-xl tech-border">
                <Clock className="text-netword-primary mb-4 animate-float" size={48} />
                <h3 className="font-space font-semibold text-xl mb-4 text-netword-primary">⏱️ Prazo Recorde</h3>
                <p className="text-netword-white/80">Apenas 40 dias para compensação vs. 90+ dias das alternativas tradicionais.</p>
              </div>
              <div className="glass-card p-8 rounded-xl tech-border">
                <TrendingUp className="text-netword-primary mb-4 animate-float" size={48} />
                <h3 className="font-space font-semibold text-xl mb-4 text-netword-primary">🔍 Transparência Total</h3>
                <p className="text-netword-white/80">Relatórios semanais e acompanhamento ao vivo para monitorar o progresso.</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* Caso de Sucesso */}
      <section className="section-spacing">
        <div className="container">
          <div className={`max-w-5xl mx-auto ${isVisible.caso ? 'animate-slide-up' : 'opacity-0'}`} id="caso">
            <h2 className="text-4xl md:text-5xl font-space font-bold text-center mb-16 gradient-text">
              Caso de Sucesso em Detalhes
            </h2>
            <div className="glass-card p-8 rounded-2xl tech-border hologram-effect">
              <h3 className="font-space text-3xl font-bold mb-8 text-netword-primary neon-text">Indústria Alpha (SP)</h3>
              <div className="grid md:grid-cols-2 gap-8">
                <div>
                  <div className="space-y-6">
                    <div className="flex justify-between glass-card p-4 rounded-lg">
                      <span className="text-netword-white/80">Folha Mensal:</span>
                      <span className="font-bold text-netword-white">R$ 600.000</span>
                    </div>
                    <div className="flex justify-between glass-card p-4 rounded-lg neon-border">
                      <span className="text-netword-white/80">Recuperação:</span>
                      <span className="font-bold text-netword-accent neon-text">R$ 720.000</span>
                    </div>
                    <div className="flex justify-between glass-card p-4 rounded-lg">
                      <span className="text-netword-white/80">Prazo:</span>
                      <span className="font-bold text-netword-primary">38 dias</span>
                    </div>
                    <div className="flex justify-between glass-card p-4 rounded-lg">
                      <span className="text-netword-white/80">Fee (15%):</span>
                      <span className="font-bold text-netword-white">R$ 108.000</span>
                    </div>
                    <div className="flex justify-between glass-card p-4 rounded-lg neon-border">
                      <span className="text-netword-white/80">Lucro Líquido:</span>
                      <span className="font-bold text-2xl text-netword-accent neon-text">R$ 612.000</span>
                    </div>
                  </div>
                </div>
                <div className="glass-card p-6 rounded-xl">
                  <blockquote className="font-inter italic text-lg text-netword-white/90 mb-4">
                    "Em menos de 40 dias, nosso caixa foi reforçado em mais de R$ 700 mil, sem custo antecipado. A equipe da Recupera S+ superou todas as expectativas."
                  </blockquote>
                  <cite className="block font-semibold text-netword-primary">— Diretor Financeiro, Indústria Alpha</cite>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* Garantia */}
      <section className="section-spacing">
        <div className="container">
          <div className={`max-w-5xl mx-auto text-center ${isVisible.garantia ? 'animate-slide-up' : 'opacity-0'}`} id="garantia">
            <div className="glass-card p-12 rounded-2xl tech-border">
              <div className="w-20 h-20 rounded-full bg-gradient-to-r from-netword-primary to-netword-accent mx-auto mb-8 flex items-center justify-center animate-glow-pulse">
                <Shield className="text-netword-dark" size={40} />
              </div>
              <h2 className="text-4xl md:text-5xl font-space font-bold mb-8 gradient-text">
                Garantia "No Win, No Fee"
              </h2>
              <p className="text-xl mb-12 text-netword-white/90">
                Se não houver recuperação, você não paga nada.
              </p>
              <div className="grid md:grid-cols-3 gap-6">
                <div className="glass-card p-6 rounded-xl">
                  <h3 className="font-space font-semibold text-lg mb-2 text-netword-primary">Sem Retainer</h3>
                  <p className="text-netword-white/80">Zero custo para iniciar</p>
                </div>
                <div className="glass-card p-6 rounded-xl">
                  <h3 className="font-space font-semibold text-lg mb-2 text-netword-primary">Sem Mensalidade</h3>
                  <p className="text-netword-white/80">Sem taxas recorrentes</p>
                </div>
                <div className="glass-card p-6 rounded-xl">
                  <h3 className="font-space font-semibold text-lg mb-2 text-netword-primary">Sem Surpresas</h3>
                  <p className="text-netword-white/80">Total transparência</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* Depoimentos */}
      <section id="depoimentos" className="section-spacing">
        <div className="container">
          <div className={`max-w-5xl mx-auto ${isVisible.depoimentos ? 'animate-fade-in' : 'opacity-0'}`}>
            <h2 className="text-4xl md:text-5xl font-space font-bold text-center mb-16 gradient-text">
              O Que Nossos Clientes Dizem
            </h2>
            <div className="grid md:grid-cols-2 gap-8">
              <div className="glass-card p-8 rounded-xl tech-border">
                <div className="flex items-center mb-6">
                  <div className="w-16 h-16 bg-gradient-to-r from-netword-primary to-netword-accent rounded-full flex items-center justify-center text-netword-dark font-bold text-xl mr-4 animate-glow-pulse">
                    MA
                  </div>
                  <div>
                    <h3 className="font-space font-semibold text-netword-primary">Mariana Alves</h3>
                    <p className="text-netword-white/70">CFO, TechCorp</p>
                  </div>
                </div>
                <div className="flex mb-4">
                  {[...Array(5)].map((_, i) => (
                    <Star key={i} className="text-netword-accent fill-current" size={20} />
                  ))}
                </div>
                <blockquote className="font-inter italic text-lg text-netword-white/90">
                  "Processo ágil e transparente. Em 40 dias, nosso caixa ganhou uma folga inédita. Recomendo fortemente."
                </blockquote>
              </div>
              <div className="glass-card p-8 rounded-xl tech-border">
                <div className="flex items-center mb-6">
                  <div className="w-16 h-16 bg-gradient-to-r from-netword-primary to-netword-accent rounded-full flex items-center justify-center text-netword-dark font-bold text-xl mr-4 animate-glow-pulse">
                    RT
                  </div>
                  <div>
                    <h3 className="font-space font-semibold text-netword-primary">Rafael Torres</h3>
                    <p className="text-netword-white/70">Diretor, IndústriaMax</p>
                  </div>
                </div>
                <div className="flex mb-4">
                  {[...Array(5)].map((_, i) => (
                    <Star key={i} className="text-netword-accent fill-current" size={20} />
                  ))}
                </div>
                <blockquote className="font-inter italic text-lg text-netword-white/90">
                  "Equipe técnica de altíssimo nível. Resultado além das expectativas. Processo 100% profissional nos Temas 1.079 e 1.119."
                </blockquote>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* FAQ */}
      <section className="section-spacing">
        <div className="container">
          <div className={`max-w-4xl mx-auto ${isVisible.faq ? 'animate-slide-up' : 'opacity-0'}`} id="faq">
            <h2 className="text-4xl md:text-5xl font-space font-bold text-center mb-16 gradient-text">
              Perguntas Frequentes
            </h2>
            <div className="glass-card p-8 rounded-2xl">
              <Accordion type="single" collapsible className="space-y-4">
                <AccordionItem value="item-1" className="border-netword-primary/20">
                  <AccordionTrigger className="text-left font-space font-semibold text-netword-white hover:text-netword-primary">
                    Quanto tempo para fazer a análise completa?
                  </AccordionTrigger>
                  <AccordionContent className="text-netword-white/80">
                    Até 5 dias úteis após acesso ao e-CAC para análise de até 48 meses de dados.
                  </AccordionContent>
                </AccordionItem>
                <AccordionItem value="item-2" className="border-netword-primary/20">
                  <AccordionTrigger className="text-left font-space font-semibold text-netword-white hover:text-netword-primary">
                    E se o pedido for negado?
                  </AccordionTrigger>
                  <AccordionContent className="text-netword-white/80">
                    Você não paga nada. Nossa garantia "No Win, No Fee" cobre todo o risco do processo.
                  </AccordionContent>
                </AccordionItem>
                <AccordionItem value="item-3" className="border-netword-primary/20">
                  <AccordionTrigger className="text-left font-space font-semibold text-netword-white hover:text-netword-primary">
                    Qual o valor mínimo recuperável?
                  </AccordionTrigger>
                  <AccordionContent className="text-netword-white/80">
                    Geralmente acima de R$ 150.000, mas fazemos diagnóstico gratuito para estimar seu caso específico.
                  </AccordionContent>
                </AccordionItem>
                <AccordionItem value="item-4" className="border-netword-primary/20">
                  <AccordionTrigger className="text-left font-space font-semibold text-netword-white hover:text-netword-primary">
                    Até quando posso me habilitar?
                  </AccordionTrigger>
                  <AccordionContent className="text-netword-white/80">
                    O prazo para habilitação nas ações coletivas vai até maio de 2029. Após essa data, o direito expira definitivamente.
                  </AccordionContent>
                </AccordionItem>
              </Accordion>
            </div>
          </div>
        </div>
      </section>

      {/* CTA Final */}
      <section className="section-spacing relative overflow-hidden">
        <div className="absolute inset-0 bg-gradient-to-r from-netword-primary/20 to-netword-accent/20"></div>
        <div className="container relative">
          <div className={`max-w-5xl mx-auto text-center ${isVisible.cta ? 'animate-fade-in' : 'opacity-0'}`} id="cta">
            <div className="glass-card p-12 rounded-2xl tech-border">
              <h2 className="text-4xl md:text-6xl font-space font-bold mb-8 gradient-text">
                Cada Dia de Atraso é Dinheiro Parado
              </h2>
              <p className="text-xl mb-8 text-netword-white/90">
                <span className="font-bold text-netword-accent neon-text">Menos de 4 anos</span> para aproveitar essa oportunidade histórica.
              </p>
              <p className="text-lg mb-12 text-netword-white/80">
                Agende agora seu diagnóstico gratuito e recupere o que é seu por direito.
              </p>
              <Button 
                onClick={() => scrollToSection('contato')} 
                className="glass-button text-lg px-12 py-6 font-semibold animate-glow-pulse"
              >
                <Zap className="mr-3" size={20} />
                AGENDAR DIAGNÓSTICO GRATUITO
                <ArrowRight className="ml-3" size={20} />
              </Button>
            </div>
          </div>
        </div>
      </section>

      {/* Formulário de Contato */}
      <section id="contato" className="section-spacing">
        <div className="container">
          <div className={`max-w-2xl mx-auto ${isVisible.contato ? 'animate-slide-up' : 'opacity-0'}`}>
            <h2 className="text-4xl md:text-5xl font-space font-bold text-center mb-16 gradient-text">
              Solicite Seu Diagnóstico Gratuito
            </h2>
            <div className="glass-card p-8 rounded-2xl tech-border">
              <form onSubmit={handleFormSubmit} className="space-y-6">
                <div>
                  <Label htmlFor="nome" className="font-space font-semibold text-netword-primary">Nome Completo</Label>
                  <Input 
                    id="nome" 
                    type="text" 
                    required 
                    className="mt-2 glass-card border-netword-primary/30 text-netword-white placeholder:text-netword-white/50 focus:border-netword-primary focus:ring-netword-primary/20"
                  />
                </div>
                <div>
                  <Label htmlFor="empresa" className="font-space font-semibold text-netword-primary">Empresa</Label>
                  <Input 
                    id="empresa" 
                    type="text" 
                    required 
                    className="mt-2 glass-card border-netword-primary/30 text-netword-white placeholder:text-netword-white/50 focus:border-netword-primary focus:ring-netword-primary/20"
                  />
                </div>
                <div>
                  <Label htmlFor="cargo" className="font-space font-semibold text-netword-primary">Cargo</Label>
                  <Input 
                    id="cargo" 
                    type="text" 
                    required 
                    className="mt-2 glass-card border-netword-primary/30 text-netword-white placeholder:text-netword-white/50 focus:border-netword-primary focus:ring-netword-primary/20"
                  />
                </div>
                <div>
                  <Label htmlFor="email" className="font-space font-semibold text-netword-primary">E-mail Corporativo</Label>
                  <Input 
                    id="email" 
                    type="email" 
                    required 
                    className="mt-2 glass-card border-netword-primary/30 text-netword-white placeholder:text-netword-white/50 focus:border-netword-primary focus:ring-netword-primary/20"
                  />
                </div>
                <div>
                  <Label htmlFor="telefone" className="font-space font-semibold text-netword-primary">Telefone/WhatsApp</Label>
                  <Input 
                    id="telefone" 
                    type="tel" 
                    required 
                    className="mt-2 glass-card border-netword-primary/30 text-netword-white placeholder:text-netword-white/50 focus:border-netword-primary focus:ring-netword-primary/20"
                  />
                </div>
                <Button type="submit" className="w-full glass-button py-4 text-lg font-semibold">
                  <Network className="mr-3" size={20} />
                  Enviar e Agendar Diagnóstico
                </Button>
              </form>
            </div>
          </div>
        </div>
      </section>

      {/* Footer */}
      <footer className="glass-card py-16">
        <div className="container">
          <div className="text-center">
            <div className="font-space text-4xl font-bold mb-8 gradient-text flex items-center justify-center gap-3">
              <div className="w-10 h-10 rounded-full bg-gradient-to-r from-netword-primary to-netword-accent animate-glow-pulse"></div>
              Recupera S+
            </div>
            <p className="mb-8 text-netword-white/70">© 2025 Recupera S+ • CNPJ 00.000.000/0001-00</p>
            <div className="space-x-8 mb-8">
              <a href="#" className="text-netword-white/80 hover:text-netword-primary transition-colors font-medium">Política de Privacidade</a>
              <a href="#" className="text-netword-white/80 hover:text-netword-primary transition-colors font-medium">Termos de Uso</a>
            </div>
            <p className="text-sm text-netword-white/60 mb-8">
              Rua Exemplo, 123 – São Paulo, SP • contato@recuperas.com.br • (11) 4000-0000
            </p>
            <p className="text-netword-accent font-semibold neon-text">
              Transforme hoje seu passivo tributário em capital de giro.
            </p>
          </div>
        </div>
      </footer>
    </div>
  );
};

export default Index;
