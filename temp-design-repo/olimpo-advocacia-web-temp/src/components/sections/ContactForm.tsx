
import { Button } from "@/components/ui/button";
import { Input } from "@/components/ui/input";
import { Label } from "@/components/ui/label";
import { Select, SelectContent, SelectItem, SelectTrigger, SelectValue } from "@/components/ui/select";
import { Phone, Gift } from "lucide-react";
import { useState } from "react";
import { useToast } from "@/hooks/use-toast";

const ContactForm = () => {
  const [formData, setFormData] = useState({
    name: "",
    phone: "",
    service: ""
  });
  const { toast } = useToast();

  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault();
    toast({
      title: "Formulário enviado!",
      description: "Em breve entraremos em contato via WhatsApp.",
    });
    console.log("Form submitted:", formData);
  };

  const handleChange = (field: string, value: string) => {
    setFormData(prev => ({ ...prev, [field]: value }));
  };

  return (
    <section className="py-20 bg-white">
      <div className="container mx-auto px-6">
        <div className="max-w-4xl mx-auto">
          {/* Header */}
          <div className="text-center mb-16 animate-fade-in">
            <h2 className="font-cinzel text-4xl md:text-5xl font-bold text-navy mb-6">
              Pronto para recomeçar com segurança?
            </h2>
            <div className="w-24 h-1 bg-gold mx-auto mb-6"></div>
            <p className="font-playfair text-xl text-gray-700 leading-relaxed">
              Transforme sua situação jurídica hoje mesmo
            </p>
          </div>

          <div className="grid lg:grid-cols-2 gap-12 items-start">
            {/* Form */}
            <div className="animate-fade-in">
              <div className="bg-neutral-light rounded-3xl p-8 border border-gold/20">
                <div className="text-center mb-8">
                  <h3 className="font-playfair text-2xl font-semibold text-navy mb-3">
                    Formulário de Contato Rápido
                  </h3>
                  <p className="font-lato text-gray-600">
                    Preencha e receba seu guia gratuito
                  </p>
                </div>

                <form onSubmit={handleSubmit} className="space-y-6">
                  <div>
                    <Label htmlFor="name" className="font-lato font-medium text-navy">
                      Nome completo
                    </Label>
                    <Input
                      id="name"
                      type="text"
                      placeholder="Seu nome"
                      value={formData.name}
                      onChange={(e) => handleChange("name", e.target.value)}
                      className="mt-2 border-gold/30 focus:border-gold"
                      required
                    />
                  </div>

                  <div>
                    <Label htmlFor="phone" className="font-lato font-medium text-navy">
                      Telefone/WhatsApp
                    </Label>
                    <Input
                      id="phone"
                      type="tel"
                      placeholder="(61) 9____-____"
                      value={formData.phone}
                      onChange={(e) => handleChange("phone", e.target.value)}
                      className="mt-2 border-gold/30 focus:border-gold"
                      required
                    />
                  </div>

                  <div>
                    <Label htmlFor="service" className="font-lato font-medium text-navy">
                      Serviço de interesse
                    </Label>
                    <Select onValueChange={(value) => handleChange("service", value)}>
                      <SelectTrigger className="mt-2 border-gold/30 focus:border-gold">
                        <SelectValue placeholder="Selecione o serviço" />
                      </SelectTrigger>
                      <SelectContent>
                        <SelectItem value="divorcio-extrajudicial">Divórcio Extrajudicial</SelectItem>
                        <SelectItem value="dissolucao-uniao">Dissolução de União Estável</SelectItem>
                        <SelectItem value="outro">Outro</SelectItem>
                      </SelectContent>
                    </Select>
                  </div>

                  <Button 
                    type="submit" 
                    className="w-full bg-gold hover:bg-gold-accent text-white font-lato font-semibold text-lg py-4 rounded-lg border-2 border-gold hover:border-gold-accent transition-all duration-300"
                  >
                    <Gift className="w-5 h-5 mr-2" />
                    Enviar e Receber Guia Gratuito
                  </Button>
                </form>
              </div>
            </div>

            {/* CTA & Info */}
            <div className="animate-fade-in" style={{ animationDelay: '0.2s' }}>
              {/* Main CTA */}
              <div className="bg-gold rounded-3xl p-8 text-white text-center mb-8">
                <h3 className="font-cinzel text-2xl font-bold mb-4">
                  Consultoria Gratuita
                </h3>
                <p className="font-lato mb-6 leading-relaxed">
                  Vagas mensais limitadas a 10 atendimentos para garantir qualidade
                </p>
                <Button className="bg-white text-gold hover:bg-gray-100 font-lato font-semibold text-lg px-8 py-4 rounded-lg transition-all duration-300 transform hover:scale-105">
                  <Phone className="w-5 h-5 mr-2" />
                  WhatsApp Direto
                </Button>
              </div>

              {/* Pricing Info */}
              <div className="bg-navy rounded-3xl p-8 text-white">
                <h3 className="font-playfair text-xl font-semibold mb-6 text-gold-accent">
                  Modelos de Contratação
                </h3>
                
                <div className="space-y-6">
                  <div className="border-l-4 border-gold-accent pl-4">
                    <h4 className="font-lato font-semibold mb-2">Percentual sobre Espólio</h4>
                    <p className="text-gray-300 text-sm mb-2">3–5% do valor dos bens</p>
                    <p className="text-gray-300 text-sm">Ideal para quem negocia partilha</p>
                  </div>
                  
                  <div className="border-l-4 border-gold pl-4">
                    <h4 className="font-lato font-semibold mb-2">Pacote Fixo</h4>
                    <p className="text-gray-300 text-sm mb-2">R$ 3.000 – R$ 10.000</p>
                    <p className="text-gray-300 text-sm">Consultoria + documentação + homologação</p>
                  </div>
                </div>
                
                <p className="font-lato text-center mt-6 text-gold-accent">
                  Sem letra miúda. Parcelamos em até 3x no cartão.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default ContactForm;
