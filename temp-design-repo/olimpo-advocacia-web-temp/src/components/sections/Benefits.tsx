
import { Shield, Clock, Lock, MessageCircle, Calculator, Sparkles, Crown, Star } from "lucide-react";

const Benefits = () => {
  const benefits = [
    {
      icon: Shield,
      title: "Segurança Celestial",
      description: "Compliance OAB-DF, CPC e LGPD divinos",
      delay: "0s"
    },
    {
      icon: Clock,
      title: "Agilidade Angelical",
      description: "Extrajudicial em até 15 dias celestiais",
      delay: "0.1s"
    },
    {
      icon: Lock,
      title: "Sigilo Sagrado",
      description: "Confidencialidade absoluta em cada etapa",
      delay: "0.2s"
    },
    {
      icon: MessageCircle,
      title: "Apoio Divino",
      description: "WhatsApp / Zoom / e-mail celestiais",
      delay: "0.3s"
    },
    {
      icon: Calculator,
      title: "Controle Olímpico",
      description: "Orçamento cristalino antes de começar",
      delay: "0.4s"
    }
  ];

  return (
    <section className="py-20 bg-gradient-to-b from-white via-divine-gradient to-neutral-light relative overflow-hidden">
      {/* Divine Background Elements */}
      <div className="absolute inset-0 opacity-10">
        <div className="absolute top-20 left-20 w-64 h-64 border-2 border-gold rounded-full animate-spin-slow"></div>
        <div className="absolute bottom-20 right-20 w-48 h-48 border border-gold-accent rounded-full animate-divine-float"></div>
        <Star className="absolute top-1/3 left-1/4 w-12 h-12 text-gold animate-pulse" />
        <Crown className="absolute bottom-1/4 right-1/3 w-16 h-16 text-gold-accent animate-divine-float" />
        <Sparkles className="absolute top-1/2 right-1/5 w-10 h-10 text-gold animate-pulse animation-delay-1s" />
      </div>

      <div className="container mx-auto px-6 relative z-10">
        <div className="max-w-6xl mx-auto">
          {/* Divine Header */}
          <div className="text-center mb-16 animate-fade-in">
            <div className="inline-block bg-gradient-to-r from-gold via-gold-accent to-gold p-1 rounded-3xl mb-8 shadow-divine-lg">
              <div className="bg-white rounded-3xl px-8 py-4">
                <Crown className="w-12 h-12 text-gold mx-auto mb-4 animate-pulse" />
                <h2 className="font-cinzel text-5xl md:text-6xl font-bold bg-gradient-to-r from-navy via-gold to-navy bg-clip-text text-transparent">
                  Benefícios que Transformam Vidas
                </h2>
              </div>
            </div>
            <div className="w-32 h-2 bg-gradient-to-r from-transparent via-gold to-transparent mx-auto mb-8 rounded-full shadow-divine"></div>
            <div className="bg-white/90 backdrop-blur-sm border-3 border-gold/30 rounded-3xl p-8 shadow-divine-lg max-w-4xl mx-auto">
              <p className="font-playfair text-2xl text-gray-700 leading-relaxed relative">
                <Sparkles className="absolute -top-4 -left-4 w-8 h-8 text-gold-accent animate-pulse" />
                Você merecia que esse processo fosse simples e divino. Entre prazos celestiais, termos sagrados e transparência absoluta, 
                tudo se torna uma experiência transformadora.
                <Sparkles className="absolute -bottom-4 -right-4 w-8 h-8 text-gold animate-pulse" />
              </p>
            </div>
          </div>

          {/* Divine Benefits Grid */}
          <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
            {benefits.map((benefit, index) => (
              <div 
                key={index}
                className="group bg-gradient-to-br from-white via-neutral-light to-white border-3 border-gold/20 rounded-3xl p-8 text-center hover:border-gold transition-all duration-500 transform hover:-translate-y-4 hover:scale-105 animate-scale-in shadow-divine hover:shadow-divine-lg relative overflow-hidden"
                style={{ animationDelay: benefit.delay }}
              >
                {/* Divine Background Pattern */}
                <div className="absolute top-0 right-0 w-24 h-24 border border-gold/10 rounded-full transform translate-x-6 -translate-y-6 group-hover:border-gold/30 transition-all duration-500"></div>
                <div className="absolute bottom-0 left-0 w-16 h-16 border border-gold-accent/10 rounded-full transform -translate-x-4 translate-y-4 group-hover:border-gold-accent/30 transition-all duration-500"></div>
                
                <div className="relative mb-8">
                  <div className="w-20 h-20 bg-gradient-to-br from-gold via-gold-accent to-gold rounded-full flex items-center justify-center mx-auto shadow-divine group-hover:shadow-divine-lg transform group-hover:scale-110 group-hover:rotate-12 transition-all duration-500 relative">
                    <benefit.icon className="w-10 h-10 text-white drop-shadow-lg" />
                    <div className="absolute inset-0 bg-white/20 rounded-full animate-pulse"></div>
                  </div>
                  <Sparkles className="absolute -top-2 -right-2 w-6 h-6 text-gold-accent animate-pulse opacity-0 group-hover:opacity-100 transition-opacity duration-500" />
                  <Crown className="absolute -bottom-2 -left-2 w-5 h-5 text-gold animate-pulse opacity-0 group-hover:opacity-100 transition-opacity duration-500" />
                </div>
                
                <h3 className="font-playfair text-2xl font-semibold text-navy mb-4 group-hover:text-gold transition-colors duration-300">
                  {benefit.title}
                </h3>
                <p className="font-lato text-gray-600 leading-relaxed group-hover:text-gray-700 transition-colors duration-300">
                  {benefit.description}
                </p>
              </div>
            ))}
          </div>

          {/* Divine Featured Benefit */}
          <div className="bg-gradient-to-br from-navy via-navy to-navy border-3 border-gold rounded-3xl p-12 text-center animate-fade-in shadow-divine-xl relative overflow-hidden">
            {/* Divine Background Effects */}
            <div className="absolute inset-0 bg-gradient-to-br from-gold/10 via-transparent to-gold-accent/10 rounded-3xl"></div>
            <div className="absolute top-0 left-0 w-full h-full">
              <Crown className="absolute top-8 left-8 w-12 h-12 text-gold/20 animate-divine-float" />
              <Sparkles className="absolute top-8 right-8 w-10 h-10 text-gold-accent/20 animate-pulse" />
              <Star className="absolute bottom-8 left-8 w-8 h-8 text-gold-accent/20 animate-pulse animation-delay-1s" />
              <Sparkles className="absolute bottom-8 right-8 w-12 h-12 text-gold/20 animate-divine-float animation-delay-2s" />
            </div>
            
            <div className="relative">
              <Crown className="w-16 h-16 text-gold-accent mx-auto mb-6 animate-pulse" />
              <h3 className="font-cinzel text-4xl font-bold text-gold-accent mb-8">
                Você Não Está Sozinho Nesta Jornada Sagrada
              </h3>
              
              <div className="max-w-5xl mx-auto space-y-8">
                <div className="grid md:grid-cols-2 gap-8">
                  <div className="bg-white/10 backdrop-blur-sm border-2 border-gold/30 rounded-2xl p-6 shadow-divine">
                    <p className="font-lato text-lg text-gold-accent leading-relaxed mb-4">
                      <strong className="text-gold">Emocional:</strong> Transformamos o aperto no peito em alívio celestial
                    </p>
                    <Sparkles className="w-6 h-6 text-gold-accent mx-auto animate-pulse" />
                  </div>
                  <div className="bg-white/10 backdrop-blur-sm border-2 border-gold-accent/30 rounded-2xl p-6 shadow-divine">
                    <p className="font-lato text-lg text-white leading-relaxed mb-4">
                      <strong className="text-gold-accent">Racional:</strong> Prazos cristalinos e custos sagrados e transparentes
                    </p>
                    <Crown className="w-6 h-6 text-gold mx-auto animate-pulse" />
                  </div>
                </div>
                
                <div className="grid md:grid-cols-2 gap-8 mt-12">
                  <div className="bg-gradient-to-br from-white/20 to-white/10 backdrop-blur-sm rounded-2xl p-8 border-2 border-gold shadow-divine-lg hover:shadow-divine-xl transition-all duration-500 group">
                    <Crown className="w-12 h-12 text-gold mx-auto mb-4 animate-pulse" />
                    <h4 className="font-playfair text-2xl font-semibold text-gold-accent mb-4">
                      Extrajudicial Celestial
                    </h4>
                    <p className="font-lato text-white leading-relaxed">
                      Sem filhos menores/incapazes: cartório eletrônico divino em até 15 dias sagrados
                    </p>
                    <Sparkles className="w-8 h-8 text-gold-accent mx-auto mt-4 animate-pulse opacity-0 group-hover:opacity-100 transition-opacity duration-500" />
                  </div>
                  <div className="bg-gradient-to-br from-white/20 to-white/10 backdrop-blur-sm rounded-2xl p-8 border-2 border-gold-accent shadow-divine-lg hover:shadow-divine-xl transition-all duration-500 group">
                    <Star className="w-12 h-12 text-gold-accent mx-auto mb-4 animate-pulse" />
                    <h4 className="font-playfair text-2xl font-semibold text-gold mb-4">
                      Judicial Sagrado
                    </h4>
                    <p className="font-lato text-white leading-relaxed">
                      Com litígio ou filhos: acompanhamento angelical da petição à homologação divina
                    </p>
                    <Crown className="w-8 h-8 text-gold mx-auto mt-4 animate-pulse opacity-0 group-hover:opacity-100 transition-opacity duration-500" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Benefits;
