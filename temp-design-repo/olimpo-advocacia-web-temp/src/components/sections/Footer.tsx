
import { Phone, Mail, MapPin, Instagram, Facebook, Linkedin } from "lucide-react";

const Footer = () => {
  return (
    <footer className="bg-navy text-white py-16">
      <div className="container mx-auto px-6">
        <div className="max-w-6xl mx-auto">
          {/* Main Footer Content */}
          <div className="grid md:grid-cols-3 gap-12 mb-12">
            {/* Logo & Description */}
            <div className="animate-fade-in">
              <h3 className="font-cinzel text-3xl font-bold text-gold-accent mb-4">
                Olimpo Jurídico
              </h3>
              <p className="font-lato text-gray-300 leading-relaxed mb-6">
                Divórcio e Dissolução de União Estável em Brasília com total transparência, 
                segurança e empatia. Dra. Flávia Meira - OAB-DF.
              </p>
              <div className="flex gap-4">
                <a href="#" className="w-10 h-10 bg-gold/20 rounded-full flex items-center justify-center hover:bg-gold transition-colors">
                  <Instagram className="w-5 h-5 text-gold-accent hover:text-white" />
                </a>
                <a href="#" className="w-10 h-10 bg-gold/20 rounded-full flex items-center justify-center hover:bg-gold transition-colors">
                  <Facebook className="w-5 h-5 text-gold-accent hover:text-white" />
                </a>
                <a href="#" className="w-10 h-10 bg-gold/20 rounded-full flex items-center justify-center hover:bg-gold transition-colors">
                  <Linkedin className="w-5 h-5 text-gold-accent hover:text-white" />
                </a>
              </div>
            </div>

            {/* Contact Info */}
            <div className="animate-fade-in" style={{ animationDelay: '0.1s' }}>
              <h4 className="font-playfair text-xl font-semibold text-gold-accent mb-6">
                Contato
              </h4>
              <div className="space-y-4">
                <div className="flex items-center gap-3">
                  <MapPin className="w-5 h-5 text-gold-accent flex-shrink-0" />
                  <span className="font-lato text-gray-300">Brasília – DF</span>
                </div>
                <div className="flex items-center gap-3">
                  <Phone className="w-5 h-5 text-gold-accent flex-shrink-0" />
                  <span className="font-lato text-gray-300">(61) 9 XXXX-XXXX</span>
                </div>
                <div className="flex items-center gap-3">
                  <Mail className="w-5 h-5 text-gold-accent flex-shrink-0" />
                  <span className="font-lato text-gray-300">contato@flaviameira.adv.br</span>
                </div>
              </div>
            </div>

            {/* Services */}
            <div className="animate-fade-in" style={{ animationDelay: '0.2s' }}>
              <h4 className="font-playfair text-xl font-semibold text-gold-accent mb-6">
                Serviços
              </h4>
              <ul className="space-y-3 font-lato text-gray-300">
                <li>
                  <a href="#" className="hover:text-gold-accent transition-colors">
                    Divórcio Extrajudicial
                  </a>
                </li>
                <li>
                  <a href="#" className="hover:text-gold-accent transition-colors">
                    Dissolução de União Estável
                  </a>
                </li>
                <li>
                  <a href="#" className="hover:text-gold-accent transition-colors">
                    Direito de Família
                  </a>
                </li>
                <li>
                  <a href="#" className="hover:text-gold-accent transition-colors">
                    Partilha de Bens
                  </a>
                </li>
                <li>
                  <a href="#" className="hover:text-gold-accent transition-colors">
                    Guarda de Filhos
                  </a>
                </li>
              </ul>
            </div>
          </div>

          {/* Compliance & Legal */}
          <div className="border-t border-gold/20 pt-8">
            <div className="flex flex-col md:flex-row justify-between items-center gap-4">
              <div className="flex flex-wrap justify-center md:justify-start gap-6 font-lato text-sm text-gray-400">
                <span>OAB-DF</span>
                <span>•</span>
                <span>LGPD</span>
                <span>•</span>
                <a href="#" className="hover:text-gold-accent transition-colors">
                  Política de Privacidade
                </a>
                <span>•</span>
                <a href="#" className="hover:text-gold-accent transition-colors">
                  Termos de Uso
                </a>
              </div>
              
              <div className="font-lato text-sm text-gray-400 text-center">
                © 2024 Olimpo Jurídico. Todos os direitos reservados.
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  );
};

export default Footer;
