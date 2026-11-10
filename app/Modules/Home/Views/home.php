<!-- Home Page (widgets assembly - just like CI3) -->
<?= view('Modules\Home\Views\about_widget') ?>
<?= view('Modules\Home\Views\service_widget', ['services' => $services]) ?>
<?= view('Modules\Home\Views\why_choose_widget') ?>
<?= view('Modules\Home\Views\process_widget') ?>
<?= view('Modules\Home\Views\testimonial_widget') ?>
<?= view('Modules\Home\Views\faqs_widget') ?>
