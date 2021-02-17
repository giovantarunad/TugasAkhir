<?php
defined('BASEPATH') or exit('No direct script access allowed');

// To use reCAPTCHA, you need to sign up for an API key pair for your site.
// link: http://www.google.com/recaptcha/admin
$config['recaptcha_site_key'] = '6Lex8TYaAAAAAOBWxb79-ZZi4zz_HLhOnnWgdqIo';
$config['recaptcha_secret_key'] = '6Lex8TYaAAAAAKoEpICsa954vE4ZWFReF5Dxz29J';

// reCAPTCHA supported 40+ languages listed here:
// https://developers.google.com/recaptcha/docs/language
$config['recaptcha_lang'] = 'en';

/* End of file recaptcha.php */
/* Location: ./application/config/recaptcha.php */