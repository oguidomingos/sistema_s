
import { Star, Quote } from "lucide-react";

const Testimonials = () => {
  const testimonials = [
    {
      name: "Mariana S.",
      age: "34 anos",
      text: "Resolvi tudo em 7 dias, sem surpresas de preço, e me senti amparada o tempo todo.",
      rating: 5,
      delay: "0s"
    },
    {
      name: "Ricardo F.",
      age: "52 anos", 
      text: "Tive paz de espírito: transparência total e suporte humano até a homologação.",
      rating: 5,
      delay: "0.2s"
    },
    {
      name: "Ana Paula M.",
      age: "41 anos",
      text: "A Dra. Flávia transformou um momento difícil em algo tranquilo e seguro. Recomendo de olhos fechados.",
      rating: 5,
      delay: "0.4s"
    }
  ];

  const caseStudy = {
    title: "Divórcio extrajudicial de casal de executivos",
    challenge: "Alta exposição pública e bens em comum",
    solution: "Todos os documentos digitais, reunião via Zoom, homologação em 12 dias",
    result: "Casal pôde seguir sem desgaste, com 100% de sigilo e satisfação"
  };

  return (
    <section className="py-20 bg-section-gradient">
      <div className="container mx-auto px-6">
        <div className="max-w-6xl mx-auto">
          {/* Header */}
          <div className="text-center mb-16 animate-fade-in">
            <h2 className="font-cinzel text-4xl md:text-5xl font-bold text-navy mb-6">
              Depoimentos Reais
            </h2>
            <div className="w-24 h-1 bg-gold mx-auto mb-6"></div>
            <p className="font-playfair text-xl text-gray-700 max-w-3xl mx-auto leading-relaxed">
              Histórias de transformação e recomeços seguros
            </p>
          </div>

          {/* Testimonials Grid */}
          <div className="grid md:grid-cols-3 gap-8 mb-20">
            {testimonials.map((testimonial, index) => (
              <div 
                key={index}
                className="bg-white rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 animate-scale-in border border-gold/10"
                style={{ animationDelay: testimonial.delay }}
              >
                {/* Quote Icon */}
                <div className="w-12 h-12 bg-gold/10 rounded-full flex items-center justify-center mb-6">
                  <Quote className="w-6 h-6 text-gold" />
                </div>

                {/* Stars */}
                <div className="flex justify-center mb-4">
                  {[...Array(testimonial.rating)].map((_, i) => (
                    <Star key={i} className="w-5 h-5 text-gold-accent fill-current" />
                  ))}
                </div>

                {/* Testimonial Text */}
                <blockquote className="font-lato text-gray-700 text-center mb-6 leading-relaxed italic">
                  "{testimonial.text}"
                </blockquote>

                {/* Author */}
                <div className="text-center">
                  <div className="w-16 h-16 bg-gold/20 rounded-full mx-auto mb-4 flex items-center justify-center border-2 border-gold">
                    <span className="font-cinzel font-bold text-gold text-lg">
                      {testimonial.name.charAt(0)}
                    </span>
                  </div>
                  <cite className="font-playfair font-semibold text-navy not-italic">
                    {testimonial.name}
                  </cite>
                  <p className="font-lato text-gray-500 text-sm">
                    {testimonial.age}
                  </p>
                </div>
              </div>
            ))}
          </div>

          {/* Case Study */}
          <div className="bg-navy rounded-3xl p-8 md:p-12 text-white animate-fade-in">
            <div className="text-center mb-12">
              <h3 className="font-cinzel text-3xl font-bold mb-6 text-gold-accent">
                Case Study Detalhado
              </h3>
              <div className="w-24 h-1 bg-gold mx-auto"></div>
            </div>

            <div className="grid md:grid-cols-2 gap-12 items-center">
              <div className="space-y-6">
                <div>
                  <h4 className="font-playfair text-xl font-semibold text-gold-accent mb-3">
                    Caso:
                  </h4>
                  <p className="font-lato text-gray-300 leading-relaxed">
                    {caseStudy.title}
                  </p>
                </div>
                
                <div>
                  <h4 className="font-playfair text-xl font-semibold text-gold-accent mb-3">
                    Desafio:
                  </h4>
                  <p className="font-lato text-gray-300 leading-relaxed">
                    {caseStudy.challenge}
                  </p>
                </div>
              </div>

              <div className="space-y-6">
                <div>
                  <h4 className="font-playfair text-xl font-semibold text-gold-accent mb-3">
                    Solução:
                  </h4>
                  <p className="font-lato text-gray-300 leading-relaxed">
                    {caseStudy.solution}
                  </p>
                </div>
                
                <div>
                  <h4 className="font-playfair text-xl font-semibold text-gold-accent mb-3">
                    Resultado:
                  </h4>
                  <p className="font-lato text-gray-300 leading-relaxed">
                    {caseStudy.result}
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Testimonials;
