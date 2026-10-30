<?= view('Admin\Modules\Template\Views\header', $this->data ?? get_defined_vars()) ?>

<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; margin-bottom: 30px;">
    <div class="stat-card">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px;">
            <span style="font-size: 0.82rem; font-weight: 700; color: var(--text-muted); text-transform: uppercase;">Total Leads</span>
            <div style="width: 36px; height: 36px; border-radius: 8px; background: var(--primary-light); color: var(--primary); display: flex; align-items: center; justify-content: center;">
                <i class="fa-solid fa-users"></i>
            </div>
        </div>
        <div style="font-size: 2.2rem; font-weight: 800; color: var(--dark);"><?= count($inquiries) ?></div>
        <div style="font-size: 0.82rem; color: #059669; font-weight: 600; margin-top: 4px;"><i class="fa-solid fa-arrow-trend-up"></i> Active customer leads</div>
    </div>

    <div class="stat-card">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px;">
            <span style="font-size: 0.82rem; font-weight: 700; color: var(--text-muted); text-transform: uppercase;">Relocations</span>
            <div style="width: 36px; height: 36px; border-radius: 8px; background: #ffedd5; color: var(--secondary); display: flex; align-items: center; justify-content: center;">
                <i class="fa-solid fa-truck-fast"></i>
            </div>
        </div>
        <div style="font-size: 2.2rem; font-weight: 800; color: var(--dark);">500+</div>
        <div style="font-size: 0.82rem; color: var(--text-muted); font-weight: 600; margin-top: 4px;">Indian Cities Connected</div>
    </div>

    <div class="stat-card">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px;">
            <span style="font-size: 0.82rem; font-weight: 700; color: var(--text-muted); text-transform: uppercase;">System Status</span>
            <div style="width: 36px; height: 36px; border-radius: 8px; background: #ecfdf5; color: #059669; display: flex; align-items: center; justify-content: center;">
                <i class="fa-solid fa-circle-check"></i>
            </div>
        </div>
        <div style="font-size: 2.2rem; font-weight: 800; color: #059669;">100%</div>
        <div style="font-size: 0.82rem; color: var(--text-muted); font-weight: 600; margin-top: 4px;">Operational</div>
    </div>
</div>

<div class="data-table-wrapper">
    <div style="padding: 20px 24px; border-bottom: 1px solid var(--border-color); display: flex; justify-content: space-between; align-items: center;">
        <div>
            <h4 style="font-size: 1.1rem; font-weight: 800; color: var(--dark);">Recent Inquiries Received</h4>
            <p style="font-size: 0.85rem; color: var(--text-muted);">Incoming quotes and contact requests from website</p>
        </div>
        <a href="<?= site_url('admin/contact') ?>" class="btn btn-primary" style="font-size: 0.82rem;">
            View All Leads <i class="fa-solid fa-arrow-right"></i>
        </a>
    </div>

    <?php if (empty($inquiries)): ?>
        <div style="padding: 50px 20px; text-align: center; color: var(--text-muted);">
            <i class="fa-regular fa-folder-open fa-3x" style="opacity: 0.4; margin-bottom: 12px;"></i>
            <p>No customer inquiries recorded yet.</p>
        </div>
    <?php else: ?>
        <table class="data-table">
            <thead>
                <tr>
                    <th style="width: 60px;">ID</th>
                    <th>Customer Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Message / Requirement</th>
                    <th style="text-align: right; width: 100px;">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach (array_slice($inquiries, 0, 10) as $row): ?>
                    <tr>
                        <td style="font-weight: 700; color: var(--text-muted);">#<?= $row['id'] ?></td>
                        <td style="font-weight: 700; color: var(--dark);"><?= esc($row['name']) ?></td>
                        <td>
                            <a href="tel:<?= esc($row['phone']) ?>" style="color: var(--primary); font-weight: 700;">
                                <i class="fa-solid fa-phone" style="font-size: 0.8rem;"></i> <?= esc($row['phone']) ?>
                            </a>
                        </td>
                        <td style="color: var(--text-muted);"><?= esc($row['email'] ?: '—') ?></td>
                        <td style="max-width: 320px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;"><?= esc($row['message']) ?></td>
                        <td style="text-align: right;">
                            <form action="<?= site_url('admin/contact/delete') ?>" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this lead?');">
                                <?= csrf_field() ?>
                                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                <button type="submit" class="btn btn-danger" style="padding: 6px 10px;">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>

<?= view('Admin\Modules\Template\Views\footer', $this->data ?? get_defined_vars()) ?>
