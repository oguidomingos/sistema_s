
import { Calendar, FileText, CheckCircle } from "lucide-react";

const Process = () => {
  const steps = [
    {
      number: "1",
      icon: Calendar,
      title: "Agende",
      description: "Clique em 'Agendar' e inicie a conversa no WhatsApp.",
      color: "bg-gold"
    },
    {
      number: "2", 
      icon: FileText,
      title: "Envie",
      description: "Checklist de documentos enviado por nós; você submete de forma segura.",
      color: "bg-gold-accent"
    },
    {
      number: "3",
      icon: CheckCircle,
      title: "Conclua", 
      description: "Acompanhe o processo até homologação, com relatórios semanais.",
      color: "bg-gold"
    }
  ];

  return (
    <section className="py-20 bg-navy text-white relative overflow-hidden">
      {/* Background Pattern */}
      <div className="absolute inset-0 opacity-5">
        <div className="absolute top-1/4 left-1/4 w-64 h-64 border border-gold rounded-full"></div>
        <div className="absolute bottom-1/4 right-1/4 w-48 h-48 border border-gold-accent rounded-full"></div>
      </div>

      <div className="container mx-auto px-6 relative z-10">
        <div className="max-w-6xl mx-auto">
          {/* Header */}
          <div className="text-center mb-16 animate-fade-in">
            <h2 className="font-cinzel text-4xl md:text-5xl font-bold mb-6">
              Processo em 3 Passos Simples
            </h2>
            <div className="w-24 h-1 bg-gold-accent mx-auto mb-6"></div>
            <p className="font-playfair text-xl text-gray-300 max-w-3xl mx-auto leading-relaxed">
              Transformamos a complexidade jurídica em simplicidade divina
            </p>
          </div>

          {/* Steps */}
          <div className="grid md:grid-cols-3 gap-8 mb-16">
            {steps.map((step, index) => (
              <div 
                key={index}
                className="text-center animate-scale-in"
                style={{ animationDelay: `${index * 0.2}s` }}
              >
                {/* Step Number */}
                <div className="relative mb-8">
                  <div className={`w-20 h-20 ${step.color} rounded-full flex items-center justify-center mx-auto mb-4 shadow-2xl`}>
                    <span className="font-cinzel text-2xl font-bold text-white">
                      {step.number}
                    </span>
                  </div>
                  <div className={`w-12 h-12 ${step.color} rounded-full flex items-center justify-center mx-auto -mt-6 border-4 border-navy`}>
                    <step.icon className="w-6 h-6 text-white" />
                  </div>
                </div>

                {/* Content */}
                <h3 className="font-playfair text-2xl font-semibold mb-4 text-gold-accent">
                  {step.title}
                </h3>
                <p className="font-lato text-gray-300 leading-relaxed max-w-xs mx-auto">
                  {step.description}
                </p>

                {/* Connector Line */}
                {index < steps.length - 1 && (
                  <div className="hidden md:block absolute top-10 left-1/2 w-full h-0.5 bg-gold-accent/30 transform translate-x-1/2 -translate-y-1/2"></div>
                )}
              </div>
            ))}
          </div>

          {/* CTA Section */}
          <div className="text-center animate-fade-in">
            <div className="bg-white/10 backdrop-blur-sm rounded-3xl p-8 md:p-12 border border-gold/30">
              <h3 className="font-cinzel text-3xl font-bold mb-6 text-gold-accent">
                Pronto Para Começar?
              </h3>
              <p className="font-lato text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
                Transforme sua situação jurídica com a experiência de quem já ajudou mais de 200 famílias
              </p>
              <button className="bg-gold hover:bg-gold-accent text-white font-lato font-semibold text-lg px-8 py-4 rounded-lg border-2 border-gold hover:border-gold-accent transition-all duration-300 transform hover:scale-105 shadow-2xl">
                Iniciar Meu Processo Agora
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Process;
