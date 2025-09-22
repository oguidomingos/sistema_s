
import { Button } from "@/components/ui/button";
import { Phone, Shield, Star, Users, Sparkles } from "lucide-react";

const Hero = () => {
  return (
    <section className="relative min-h-screen bg-hero-gradient flex items-center justify-center text-white overflow-hidden">
      {/* Divine Background Pattern */}
      <div className="absolute inset-0 opacity-20">
        <div className="absolute top-1/4 left-1/4 w-32 h-32 border-2 border-gold rounded-full animate-pulse shadow-[0_0_30px_rgba(255,215,0,0.5)]"></div>
        <div className="absolute bottom-1/4 right-1/4 w-24 h-24 border-2 border-gold-accent rounded-full animate-pulse shadow-[0_0_20px_rgba(255,215,0,0.7)] animation-delay-[1s]"></div>
        <div className="absolute top-1/2 right-1/3 w-16 h-16 border-2 border-gold rotate-45 animate-spin-slow shadow-[0_0_25px_rgba(184,134,11,0.6)]"></div>
        <div className="absolute top-1/3 left-1/2 w-20 h-20 border border-gold-accent rounded-full opacity-60 animate-pulse animation-delay-[2s]"></div>
      </div>

      {/* Magical Sparkles */}
      <div className="absolute inset-0 pointer-events-none">
        <Sparkles className="absolute top-1/4 left-1/5 w-6 h-6 text-gold-accent animate-pulse animation-delay-[0.5s]" />
        <Sparkles className="absolute top-2/3 right-1/4 w-4 h-4 text-gold animate-pulse animation-delay-[1.5s]" />
        <Sparkles className="absolute bottom-1/3 left-1/3 w-5 h-5 text-gold-accent animate-pulse animation-delay-[2.5s]" />
        <Sparkles className="absolute top-1/5 right-1/5 w-3 h-3 text-gold animate-pulse animation-delay-[3s]" />
      </div>
      
      <div className="container mx-auto px-6 text-center relative z-10 animate-fade-in">
        <div className="max-w-4xl mx-auto">
          {/* Divine Badge */}
          <div className="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm border-2 border-gold/50 rounded-full px-6 py-3 mb-8 shadow-[0_0_40px_rgba(255,215,0,0.3)] hover:shadow-[0_0_60px_rgba(255,215,0,0.5)] transition-all duration-500">
            <Shield className="w-5 h-5 text-gold-accent animate-pulse" />
            <span className="text-sm font-lato font-medium bg-gradient-to-r from-gold-accent to-gold bg-clip-text text-transparent">
              OAB-DF • 15 anos de experiência celestial
            </span>
            <Sparkles className="w-4 h-4 text-gold-accent animate-pulse" />
          </div>

          {/* Divine Main Heading */}
          <h1 className="font-cinzel font-bold text-6xl md:text-8xl leading-tight mb-8 tracking-wide relative">
            <span className="bg-gradient-to-b from-white via-gold-accent to-gold bg-clip-text text-transparent drop-shadow-2xl">
              Olimpo
            </span>
            <span className="block text-gold-accent drop-shadow-[0_0_30px_rgba(255,215,0,0.8)] animate-pulse">
              Jurídico
            </span>
            {/* Divine Glow Effect */}
            <div className="absolute inset-0 bg-gradient-to-b from-white via-gold-accent to-gold bg-clip-text text-transparent opacity-20 blur-sm scale-110 animate-pulse"></div>
          </h1>
          
          <h2 className="font-playfair text-2xl md:text-4xl font-semibold mb-8 leading-relaxed text-shadow-lg">
            <span className="bg-gradient-to-r from-white to-gray-200 bg-clip-text text-transparent">
              Encerramento do Seu Divórcio ou União Estável em Brasília
            </span>
            <span className="block text-gold-accent mt-4 drop-shadow-[0_0_20px_rgba(255,215,0,0.6)] animate-pulse">
              Com Total Transparência, Segurança e Empatia Divina
            </span>
          </h2>

          {/* Divine Subtitle */}
          <div className="bg-white/5 backdrop-blur-sm border border-gold/30 rounded-2xl p-6 mb-12 shadow-[0_0_50px_rgba(255,215,0,0.2)]">
            <p className="font-lato text-xl text-gray-200 max-w-2xl mx-auto leading-relaxed">
              <strong className="text-gold-accent">Dra. Flávia Meira</strong> – 
              <span className="mx-2">✨</span>
              OAB-DF 
              <span className="mx-2">•</span>
              15 anos de experiência 
              <span className="mx-2">•</span>
              +200 casos concluídos 
              <span className="mx-2">•</span>
              98% de satisfação celestial
              <span className="mx-2">✨</span>
            </p>
          </div>

          {/* Divine CTA Button */}
          <div className="mb-12">
            <Button className="relative bg-gradient-to-r from-gold via-gold-accent to-gold hover:from-gold-accent hover:via-gold hover:to-gold-accent text-white font-lato font-bold text-xl px-12 py-6 rounded-2xl border-3 border-gold-accent shadow-[0_0_60px_rgba(255,215,0,0.6)] hover:shadow-[0_0_80px_rgba(255,215,0,0.8)] transition-all duration-500 transform hover:scale-110 group overflow-hidden">
              {/* Button Glow Effect */}
              <div className="absolute inset-0 bg-gradient-to-r from-transparent via-white/20 to-transparent transform -skew-x-12 -translate-x-full group-hover:translate-x-full transition-transform duration-1000"></div>
              <Phone className="w-6 h-6 mr-3 relative z-10" />
              <span className="relative z-10">Agende Sua Consultoria Gratuita via WhatsApp</span>
              <Sparkles className="w-5 h-5 ml-3 animate-pulse relative z-10" />
            </Button>
            <p className="text-sm text-gray-300 mt-4 font-lato">
              ✨ Sem compromisso e sem "pegadinhas" de preço ✨
            </p>
          </div>

          {/* Divine Trust Indicators */}
          <div className="flex flex-wrap justify-center items-center gap-12 text-sm font-lato bg-white/5 backdrop-blur-sm border border-gold/20 rounded-2xl py-6 px-8 shadow-[0_0_40px_rgba(255,215,0,0.15)]">
            <div className="flex items-center gap-3 group">
              <div className="w-12 h-12 bg-gradient-to-br from-gold to-gold-accent rounded-full flex items-center justify-center shadow-[0_0_25px_rgba(255,215,0,0.5)] group-hover:shadow-[0_0_35px_rgba(255,215,0,0.7)] transition-all duration-300">
                <Shield className="w-6 h-6 text-white" />
              </div>
              <span className="text-gold-accent font-semibold">Selo OAB-DF Divino</span>
            </div>
            <div className="flex items-center gap-3 group">
              <div className="flex">
                {[...Array(5)].map((_, i) => (
                  <Star key={i} className="w-6 h-6 text-gold-accent fill-current animate-pulse" style={{animationDelay: `${i * 0.2}s`}} />
                ))}
              </div>
              <span className="text-white font-semibold">(4,9/5) Celestial</span>
            </div>
            <div className="flex items-center gap-3 group">
              <div className="w-12 h-12 bg-gradient-to-br from-gold to-gold-accent rounded-full flex items-center justify-center shadow-[0_0_25px_rgba(255,215,0,0.5)] group-hover:shadow-[0_0_35px_rgba(255,215,0,0.7)] transition-all duration-300">
                <Users className="w-6 h-6 text-white" />
              </div>
              <span className="text-gold-accent font-semibold">+200 almas satisfeitas</span>
            </div>
          </div>
        </div>
      </div>

      {/* Divine Scroll Indicator */}
      <div className="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <div className="w-8 h-14 border-3 border-gold-accent rounded-full flex justify-center shadow-[0_0_30px_rgba(255,215,0,0.6)]">
          <div className="w-2 h-6 bg-gradient-to-b from-gold-accent to-gold rounded-full mt-3 animate-pulse shadow-[0_0_15px_rgba(255,215,0,0.8)]"></div>
        </div>
      </div>
    </section>
  );
};

export default Hero;
