
import Hero from "@/components/sections/Hero";
import Authority from "@/components/sections/Authority";
import Benefits from "@/components/sections/Benefits";
import Process from "@/components/sections/Process";
import Testimonials from "@/components/sections/Testimonials";
import ContactForm from "@/components/sections/ContactForm";
import Footer from "@/components/sections/Footer";

const Index = () => {
  return (
    <div className="min-h-screen bg-white">
      <Hero />
      <Authority />
      <Benefits />
      <Process />
      <Testimonials />
      <ContactForm />
      <Footer />
    </div>
  );
};

export default Index;
