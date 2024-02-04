<?= password_hash('password', PASSWORD_BCRYPT, []) ?>
<br/>
<?= password_verify('password', '$2y$10$PVANtAy0W79cQXQzEfApqeqre8wlGHlFws2ZTK6mvFwN7jiQ7CQFW')?>