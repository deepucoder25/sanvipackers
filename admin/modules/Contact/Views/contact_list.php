<?= view('Admin\Modules\Template\Views\header', $this->data ?? get_defined_vars()) ?>

<div class="data-table-wrapper">
    <div style="padding: 20px 24px; border-bottom: 1px solid var(--border-color); display: flex; justify-content: space-between; align-items: center;">
        <div>
            <h4 style="font-size: 1.1rem; font-weight: 800; color: var(--dark);">All Customer Leads & Inquiries (<?= count($inquiries) ?>)</h4>
            <p style="font-size: 0.85rem; color: var(--text-muted);">Stored directly in database through Contacts_mdl</p>
        </div>
    </div>

    <?php if (empty($inquiries)): ?>
        <div style="padding: 50px 20px; text-align: center; color: var(--text-muted);">
            <i class="fa-regular fa-envelope fa-3x" style="opacity: 0.4; margin-bottom: 12px;"></i>
            <p>No customer inquiries found.</p>
        </div>
    <?php else: ?>
        <table class="data-table">
            <thead>
                <tr>
                    <th style="width: 60px;">ID</th>
                    <th>Customer Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Full Message / Details</th>
                    <th>Date / Time</th>
                    <th style="text-align: right; width: 100px;">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($inquiries as $row): ?>
                    <tr>
                        <td style="font-weight: 700; color: var(--text-muted);">#<?= $row['id'] ?></td>
                        <td style="font-weight: 700; color: var(--dark);"><?= esc($row['name']) ?></td>
                        <td>
                            <a href="tel:<?= esc($row['phone']) ?>" style="color: var(--primary); font-weight: 700;">
                                <i class="fa-solid fa-phone" style="font-size: 0.8rem;"></i> <?= esc($row['phone']) ?>
                            </a>
                        </td>
                        <td style="color: var(--text-muted);"><?= esc($row['email'] ?: '—') ?></td>
                        <td style="font-size: 0.88rem;"><?= esc($row['message']) ?></td>
                        <td style="font-size: 0.82rem; color: var(--text-muted);"><i class="fa fa-clock-o"></i> <?= !empty($row['timestamp']) ? date('d M Y h:i A', strtotime($row['timestamp'])) : '—' ?></td>
                        <td style="text-align: right;">
                            <form action="<?= site_url('admin/contact/delete') ?>" method="POST" style="display:inline;" onsubmit="return confirm('Delete this inquiry?');">
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
