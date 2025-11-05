import Navbar from "../../components/navbar";
import Footer from "../../components/footer";
import AppBanner from "../../components/appBanner";
import { ConfigContext } from "../../utils/configContext";
import type { TemplateConfig } from "../../utils/configType";
import Header from "./_components/header";
import Features from "./_components/features";
import Faq from "./_components/faq";
import WhyOdyssey from "./_components/whyOdyssey";

interface Props {
  config: TemplateConfig;
}

function Home({ config }: Props) {
  return (
    <ConfigContext.Provider value={config}>
      <main>
        <Navbar />
        <Header />
        {/* <Partners /> */}
        <Features />
        <WhyOdyssey />
        {/* <Pricing /> */}
        {/* <Testimonials /> */}
        <Faq />
        <AppBanner />
        <Footer />
      </main>
    </ConfigContext.Provider>
  );
}

export default Home;
