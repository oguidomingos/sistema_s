
import { Award, BookOpen, Scale, Users, Sparkles, Crown } from "lucide-react";

const Authority = () => {
  return (
    <section className="py-20 bg-gradient-to-b from-neutral-light via-white to-neutral-light relative overflow-hidden">
      {/* Divine Background Elements */}
      <div className="absolute inset-0 opacity-10">
        <div className="absolute top-10 left-10 w-40 h-40 border-2 border-gold rounded-full animate-spin-slow"></div>
        <div className="absolute bottom-10 right-10 w-32 h-32 border border-gold-accent rounded-full animate-pulse"></div>
        <Sparkles className="absolute top-1/4 right-1/4 w-8 h-8 text-gold animate-pulse" />
        <Crown className="absolute bottom-1/3 left-1/4 w-12 h-12 text-gold-accent animate-pulse animation-delay-[1s]" />
      </div>

      <div className="container mx-auto px-6 relative z-10">
        <div className="max-w-6xl mx-auto">
          {/* Divine Header */}
          <div className="text-center mb-16 animate-fade-in">
            <div className="inline-block bg-gradient-to-r from-gold via-gold-accent to-gold p-1 rounded-3xl mb-8 shadow-[0_0_50px_rgba(255,215,0,0.4)]">
              <div className="bg-white rounded-3xl px-8 py-4">
                <Crown className="w-12 h-12 text-gold mx-auto mb-4 animate-pulse" />
                <h2 className="font-cinzel text-5xl md:text-6xl font-bold bg-gradient-to-r from-navy via-gold to-navy bg-clip-text text-transparent mb-6">
                  Sobre a Dra. Flávia Meira
                </h2>
              </div>
            </div>
            <div className="w-32 h-2 bg-gradient-to-r from-transparent via-gold to-transparent mx-auto mb-8 rounded-full shadow-[0_0_20px_rgba(255,215,0,0.6)]"></div>
            <div className="bg-white/80 backdrop-blur-sm border-2 border-gold/30 rounded-3xl p-8 shadow-[0_0_60px_rgba(255,215,0,0.2)]">
              <p className="font-playfair text-2xl text-navy max-w-3xl mx-auto leading-relaxed relative">
                <Sparkles className="absolute -top-4 -left-4 w-8 h-8 text-gold-accent animate-pulse" />
                "Levo técnica celestial e empatia divina para cada caso, garantindo que você entenda e controle cada etapa sagrada."
                <Sparkles className="absolute -bottom-4 -right-4 w-8 h-8 text-gold animate-pulse" />
              </p>
            </div>
          </div>

          {/* Divine Stats Grid */}
          <div className="grid grid-cols-2 md:grid-cols-4 gap-8 mb-16">
            {[
              { icon: Award, number: "15", text: "anos de experiência celestial", delay: "0s" },
              { icon: Scale, number: "200+", text: "casos abençoados", delay: "0.1s" },
              { icon: Users, number: "98%", text: "satisfação divina", delay: "0.2s" },
              { icon: BookOpen, number: "15", text: "dias celestiais", delay: "0.3s" }
            ].map((stat, index) => (
              <div key={index} className="text-center animate-scale-in group" style={{ animationDelay: stat.delay }}>
                <div className="relative mb-6">
                  <div className="w-20 h-20 bg-gradient-to-br from-gold via-gold-accent to-gold rounded-full flex items-center justify-center mx-auto shadow-[0_0_40px_rgba(255,215,0,0.5)] group-hover:shadow-[0_0_60px_rgba(255,215,0,0.7)] transform group-hover:scale-110 transition-all duration-500">
                    <stat.icon className="w-10 h-10 text-white drop-shadow-lg" />
                    <div className="absolute inset-0 bg-white/20 rounded-full animate-pulse"></div>
                  </div>
                  <Sparkles className="absolute -top-2 -right-2 w-6 h-6 text-gold-accent animate-pulse" />
                </div>
                <div className="font-cinzel text-4xl font-bold bg-gradient-to-b from-navy to-gold bg-clip-text text-transparent mb-2 drop-shadow-sm">
                  {stat.number}
                </div>
                <div className="font-lato text-gray-700 font-medium">{stat.text}</div>
              </div>
            ))}
          </div>

          {/* Divine Content Grid */}
          <div className="grid md:grid-cols-2 gap-12 items-center">
            <div className="animate-fade-in">
              <div className="bg-gradient-to-br from-white via-neutral-light to-white border-3 border-gold/30 rounded-3xl p-8 shadow-[0_0_50px_rgba(255,215,0,0.2)] relative overflow-hidden">
                {/* Divine Background Pattern */}
                <div className="absolute top-0 right-0 w-32 h-32 border border-gold/10 rounded-full transform translate-x-8 -translate-y-8"></div>
                
                <h3 className="font-playfair text-3xl font-semibold text-navy mb-8 relative">
                  <Crown className="inline-block w-8 h-8 mr-3 text-gold-accent animate-pulse" />
                  Formação & Expertise Celestial
                </h3>
                <div className="space-y-6 font-lato text-gray-700">
                  {[
                    { text: "Pós-graduação: Direito de Família (UniCEUB) e Sucessões (FGV)" },
                    { text: "OAB-DF: Inscrição nº 12.345" },
                    { text: "15 anos atendendo causas sagradas de Família & Sucessões" },
                    { text: "Combinação divina de suporte jurídico e acolhimento emocional" }
                  ].map((item, index) => (
                    <div key={index} className="flex items-start gap-4 group">
                      <div className="w-3 h-3 bg-gradient-to-r from-gold to-gold-accent rounded-full mt-2 flex-shrink-0 shadow-[0_0_10px_rgba(255,215,0,0.6)] group-hover:shadow-[0_0_15px_rgba(255,215,0,0.8)] transition-all duration-300"></div>
                      <p className="leading-relaxed"><strong className="text-navy">{item.text.split(':')[0]}:</strong> {item.text.split(':')[1]}</p>
                    </div>
                  ))}
                </div>
              </div>
            </div>
            
            <div className="animate-fade-in" style={{ animationDelay: '0.2s' }}>
              <div className="bg-gradient-to-br from-navy via-navy to-navy border-3 border-gold rounded-3xl p-10 shadow-[0_0_60px_rgba(255,215,0,0.3)] text-white relative overflow-hidden">
                {/* Divine Glow Effects */}
                <div className="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-gold/10 via-transparent to-gold-accent/10 rounded-3xl"></div>
                
                <h3 className="font-playfair text-3xl font-semibold mb-8 text-gold-accent relative flex items-center">
                  <Sparkles className="w-8 h-8 mr-3 animate-pulse" />
                  Nossa Proposta Divina
                </h3>
                <div className="space-y-8 relative">
                  {[
                    { icon: Scale, title: "Expertise Jurídica", desc: "15 anos em Família & Sucessões celestiais" },
                    { icon: Users, title: "Atendimento Angelical", desc: "Escuta ativa, empatia divina e suporte espiritual" },
                    { icon: Award, title: "Transparência Celestial", desc: "Honorários cristalinos: R$ 3.000–10.000" }
                  ].map((item, index) => (
                    <div key={index} className="flex items-start gap-6 group">
                      <div className="w-16 h-16 bg-gradient-to-br from-gold/20 via-gold-accent/20 to-gold/20 backdrop-blur-sm rounded-2xl flex items-center justify-center flex-shrink-0 border border-gold/30 shadow-[0_0_25px_rgba(255,215,0,0.3)] group-hover:shadow-[0_0_35px_rgba(255,215,0,0.5)] transition-all duration-500">
                        <item.icon className="w-8 h-8 text-gold-accent" />
                      </div>
                      <div>
                        <h4 className="font-lato font-bold text-gold-accent mb-2 text-lg">{item.title}</h4>
                        <p className="text-gray-300 leading-relaxed">{item.desc}</p>
                      </div>
                    </div>
                  ))}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Authority;
