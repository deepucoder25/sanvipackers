<?= view('Modules\About\Views\dynamic_breadcrumb', [
    'title'       => 'Frequently Asked Questions',
    'subtitle'    => 'Common questions about shifting process, pricing, packaging, and transit insurance.',
    'breadcrumbs' => [
        ['title' => 'Home', 'url' => site_url('/')],
        ['title' => 'FAQs'],
    ],
]) ?>

<section class="section">
    <div class="container" style="max-width: 900px;">
        <div style="display: flex; flex-direction: column; gap: 20px;">
            <div style="background: #fff; padding: 25px; border-radius: var(--radius-md); border: 1px solid var(--border-color); box-shadow: 0 4px 10px rgba(0,0,0,0.02);">
                <h3 style="font-size: 1.15rem; color: var(--primary); margin-bottom: 10px;"><i class="fa-solid fa-circle-question"></i> How are moving charges calculated?</h3>
                <p style="color: var(--text-muted); font-size: 0.95rem;">Moving costs depend on volume of goods, distance between origin and destination, packaging quality, floor levels, and optional transit insurance.</p>
            </div>
            <div style="background: #fff; padding: 25px; border-radius: var(--radius-md); border: 1px solid var(--border-color); box-shadow: 0 4px 10px rgba(0,0,0,0.02);">
                <h3 style="font-size: 1.15rem; color: var(--primary); margin-bottom: 10px;"><i class="fa-solid fa-circle-question"></i> Is transit insurance provided?</h3>
                <p style="color: var(--text-muted); font-size: 0.95rem;">Yes, we offer comprehensive transit insurance covering unforeseen physical loss or transit damage during intercity and intracity relocation.</p>
            </div>
            <div style="background: #fff; padding: 25px; border-radius: var(--radius-md); border: 1px solid var(--border-color); box-shadow: 0 4px 10px rgba(0,0,0,0.02);">
                <h3 style="font-size: 1.15rem; color: var(--primary); margin-bottom: 10px;"><i class="fa-solid fa-circle-question"></i> How many days in advance should I book?</h3>
                <p style="color: var(--text-muted); font-size: 0.95rem;">We recommend booking 2 to 4 days in advance for local shifting, and 5 to 7 days for intercity relocations to ensure dedicated truck and slot reservation.</p>
            </div>
            <div style="background: #fff; padding: 25px; border-radius: var(--radius-md); border: 1px solid var(--border-color); box-shadow: 0 4px 10px rgba(0,0,0,0.02);">
                <h3 style="font-size: 1.15rem; color: var(--primary); margin-bottom: 10px;"><i class="fa-solid fa-circle-question"></i> Can you relocate cars and two-wheelers?</h3>
                <p style="color: var(--text-muted); font-size: 0.95rem;">Yes, we have covered multi-car trailers and customized bike crating systems to move vehicles safely with scratch-inspection reports.</p>
            </div>
        </div>
    </div>
</section>
