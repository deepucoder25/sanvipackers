<!-- Hero Slider Section -->
<section style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #0369a1 100%); color: #ffffff; padding: 75px 0 90px; position: relative;">
    <div class="container">
        <div style="display: inline-flex; align-items: center; gap: 8px; background: rgba(255,255,255,0.12); padding: 6px 16px; border-radius: 50px; font-size: 0.85rem; font-weight: 700; color: #38bdf8; margin-bottom: 20px; border: 1px solid rgba(255,255,255,0.15);">
            <i class="fa-solid fa-shield-halved"></i> 100% Verified & Insured Relocations
        </div>
        
        <h1 style="font-size: 3.2rem; font-weight: 800; line-height: 1.15; margin-bottom: 20px; max-width: 820px;">
            Experience <span style="background: linear-gradient(135deg, #38bdf8, #fb923c); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Stress-Free</span> Relocations With Total Care.
        </h1>
        <p style="font-size: 1.15rem; color: #cbd5e1; max-width: 620px; margin-bottom: 32px;">
            Over 15+ years of trusted household shifting, corporate office movement, vehicle transport, and warehousing across 500+ Indian cities.
        </p>

        <div style="display: flex; gap: 15px; flex-wrap: wrap;">
            <a href="<?= site_url('contact') ?>" class="btn btn-secondary" style="padding: 14px 30px; font-size: 1rem;">
                <i class="fa-solid fa-calculator"></i> Get Free Quote
            </a>
            <a href="<?= site_url('services') ?>" class="btn" style="background: rgba(255,255,255,0.15); color: #fff; padding: 14px 28px; font-size: 1rem;">
                <i class="fa-solid fa-list"></i> Our Services
            </a>
            <a href="https://wa.me/<?= preg_replace('/[^0-9]/', '', $site->whatsapp) ?>" target="_blank" class="btn" style="background: #25d366; color: #fff; padding: 14px 24px; font-size: 1rem;">
                <i class="fa-brands fa-whatsapp"></i> Quick WhatsApp
            </a>
        </div>
    </div>
</section>
